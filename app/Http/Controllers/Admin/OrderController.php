<?php

namespace App\Http\Controllers\Admin;

use App\Exports\Order_DetailExport;
use App\Exports\OrderExport;
use App\Http\Controllers\Controller;
use App\Models\Customers;
use App\Models\Order_detail;
use App\Models\Orders;
use App\Models\Products;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
// use PDF;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try {
            $order = Orders::with('orderDetails.product.images', 'customer', 'customer_')->where('id', 'LIKE', '%' . $request->search . '%')->orderBy('id', 'desc')->paginate(5);
            // $product_quantity = Products::select('quantity')->find($id);
            // dd($order);
            $product = Products::where('quantity', '>', 0)->get();
            // dd($product);
            return view('Admin.pages.order.order', compact('order', 'product'));
        } catch (\Exception $e) {
            dd($e);
        }
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $input = $request->all();

        $rules = array(
            'name' => 'required',
            'adress' => 'required',
            'number_phone' => 'required|digits:10',
            // 'quantity' => 'required',
        );
        $messages = array(
            'name.required'             => '--Tên khách hàng không được để trống!--',
            'adress.required'           => '--Địa chỉ không được để trống!--',
            'number_phone.required'     => '--Số điện thoại không được để trống!--',
            'number_phone.digits'       => '--Số điện thoại phải có đúng 10 chữ số!--',
            // 'quantity.required'            => '--số lượng không được để trống!--',
        );
        $validator = Validator::make($input, $rules, $messages);

        if ($validator->fails()) {
            session()->flash('error', 'Kiểm tra lại.');
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        DB::beginTransaction();
        try {
            $user                           = new User();
            $user->name                     = $request->name;
            $user->email                    = $request->email ?? '-';
            $user->password                 = '12345';
            $user->role                     = '3';
            $user->save();

            $customer                         = new Customers();
            $customer->name                 = $request->name;
            $customer->user_id              = $user->id;
            $customer->email                = $request->email ?? '-';
            $customer->adress               = $request->adress;
            $customer->number_phone         = $request->number_phone;
            $customer->save();
            $order                          = new Orders();
            $order->customer_id             = $user->id;
            $order->receiver_name           = $request->name;
            $order->number_phone            = $request->number_phone;
            $order->receiver_address        = $request->adress;
            $order->total_money             = $request->total_money;

            $order->save();
          
            $products                       = $request->input('product_id');
            $quantities                     = $request->input('quantity');
            $price_by_quantity              = $request->input('price');
            // dd($quantities);
            // $total =0;
            foreach ($products as $key       => $productID) {

                $order_detail               = new Order_detail();
                $order_detail->order_id     = $order->id;
                $order_detail->product_id   = $productID;
                $order_detail->quantity     = $quantities[$key];
                $order_detail->price        = $price_by_quantity[$key];
                // $order_detail->quantity     = $qty;
                // $total += $quantities[$key] * $request->price;

                $order_detail->save();
                $product                    = Products::find($productID);
                $product->quantity          = $product->quantity - $quantities[$key];;
                $product->save();
            }


            session()->flash('success', 'Thêm mới thành công.');
            // return view('Admin.pages.products.product_add_edit');
            DB::commit();
            return redirect()->route('orderIndex');
        } catch (\Exception $e) {
            dd($e);
            DB::rollback();
            session()->flash('error', 'Thêm mới thất bại! kiếm tra lại xem đã nhập đủ thông tin chưa!.');
            return redirect()->back();
            //throw $th;
        }
    }

    public function update_status(Request $request)
    {
        // dd($request->all());
        try {
            $order = Orders::findOrFail($request->id);

            $order->status = $request->status;
            $order->save();
            if ($request->status == 2) {
                session()->flash('success', 'Hủy đơn hàng thành công.');
            }
            return redirect()->back();
        } catch (\Exception $e) {
            dd($e);
            session()->flash('error', 'Có lỗi bất ngờ xảy ra!');
            // Toastr::error('kích hoạt thất bại!', 'Failed');
            return redirect()->back();
        }
    }

    public function export()
    {
        try {
            //code...
            return Excel::download(new OrderExport, 'DANH SÁCH ĐƠN HÀNG.xlsx');
        } catch (\Exception $e) {
            //throw $th;
            session()->flash('error', 'Xuất file thất bại!');
            return redirect()->back();
        }
    }
    public function export_detail($id)
    {
        // dd($id);
        try {
            //code...
            return Excel::download(new Order_DetailExport($id), 'CHI TIẾT ĐƠN HÀNG.xlsx');
        } catch (\Exception $e) {
            //throw $th;
            session()->flash('error', 'Xuất file thất bại!');
            return redirect()->back();
        }
    }
    public function export_PDF($id)
    {
        // dd($id);
        try {
            $order = Orders::with('orderDetails.product.images', 'customer', 'customer_')->find($id);
            // dd($order);
            $pdf = Pdf::loadView('Admin.pages.order.exportPDF', ['order' => $order]);

            return $pdf->download('CHITIETDONHANG.pdf');
        } catch (\Exception $e) {
            //throw $th;
            dd($e);
            session()->flash('error', 'Xuất file thất bại!');
            return redirect()->back();
        }
    }
}
