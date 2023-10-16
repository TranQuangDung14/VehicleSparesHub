<?php

namespace App\Http\Controllers\Admin;

use App\Exports\Order_DetailExport;
use App\Exports\OrderExport;
use App\Http\Controllers\Controller;
use App\Models\Order_detail;
use App\Models\Orders;
use Illuminate\Http\Request;
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
            $order = Orders::with('orderDetails.product.images','customer')->where('id','LIKE', '%' . $request->search . '%')->orderBy('id','desc')->paginate(10);
            // $customer_name = Orders::with('orderDetails.product','customer')->find(3);
            // $customer_name = Orders::find(2);
            // dd($customer_name);
            // $order_detail = Order_detail::leftJoin('vs_order', 'vs_order.id','vs_order_detail.order_id')
            // ->leftJoin('vs_product', 'vs_product.id', 'vs_order_detail.product_id')
            // // ->leftJoin('users', 'users.id', 'vs_order.customer_id')
            // ->select(
            //     'vs_order_detail.id as stt',
            //     'vs_product.name as name',
            //     'vs_order_detail.quantity as quantity',
            //     'vs_order_detail.price as price',

            // )
            // // ->where('sm_local_farm.deleted_at', null)
            // ->orderby('vs_order_detail.id', 'DESC')
            // ->distinct()
            // ->find(7);

            //     dd($order_detail);
            return view('Admin.pages.order.order',compact('order'));
            // return response()->json([
            //     'data' => $order,
            // ], 200);
        } catch (\Exception $e) {
            dd($e);
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
