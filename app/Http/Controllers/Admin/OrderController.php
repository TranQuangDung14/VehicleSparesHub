<?php

namespace App\Http\Controllers\Admin;

use App\Exports\Order_DetailExport;
use App\Exports\OrderExport;
use App\Http\Controllers\Controller;
use App\Models\Customers;
use App\Models\Order_detail;
use App\Models\Orders;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
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
            $order = Orders::with('orderDetails.product.images','customer')->where('id','LIKE', '%' . $request->search . '%')->orderBy('id','desc')->paginate(5);
            // $product_quantity = Products::select('quantity')->find($id);
            // dd($product_quantity);
            $product = Products::where('quantity','>',0)->get();
            // dd($product);
            return view('Admin.pages.order.order',compact('order','product'));
        } catch (\Exception $e) {
            dd($e);
        }
    }


    public function store(Request $request)
    {
        dd($request->all());
        DB::beginTransaction();
        try {
            $customer                       = new Customers();
            $customer->name                 = $request->name;
            $customer->email                = $request->email??'-';
            $customer->adress               = $request->adress;
            $customer->number_phone         = $request->number_phone;
            $customer->save();
            $order                          = new Orders();
            $order->customer_id             = $customer->id;
            $order->receiver_name           = $request->name;
            $order->number_phone            = $request->number_phone;
            $order->receiver_address        = $request->adress;
            $order->save();
            foreach($request->product_id as $product)
            {
                $order_detail               = new Order_detail();
                $order_detail->product_id   = $product;
                $order_detail->order_id     = $order->id;
                $order_detail->save();
            }
            session()->flash('success', 'Thêm mới thành công.');
            // return view('Admin.pages.products.product_add_edit');
            return redirect()->route('orderIndex');
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
            //throw $th;
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

}
