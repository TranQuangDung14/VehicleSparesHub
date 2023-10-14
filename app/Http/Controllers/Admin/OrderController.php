<?php

namespace App\Http\Controllers\Admin;

use App\Exports\OrderExport;
use App\Http\Controllers\Controller;
use App\Models\Orders;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\SampleExport; // Tạo một Export class
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
            // $order = Orders::leftJoin('vs_order_detail', 'vs_order_detail.order_id', 'vs_order.id')
            // ->leftJoin('vs_product', 'vs_product.id', 'vs_order_detail.product_id')
            // ->leftJoin('users', 'users.id', 'vs_order.customer_id')
            // ->select(
            //     // 'vs_order.id as stt',
            //     'vs_order.id as id',
            //     // 'users.name as name',
            //     'vs_order.number_phone as number_phone',
            //     'vs_order.created_at as created_at',
            //     'vs_order.receiver_address as receiver_address',
            //     'vs_order.note as note',
            // )
            // // ->where('sm_local_farm.deleted_at', null)
            // ->orderby('vs_order.id', 'DESC')
            // ->distinct()->get();
            // dd($order);
            // $customer = Customers::where('name','LIKE', '%' . $request->search . '%')->orderBy('id','desc')->paginate(10);
            // dd($order);
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

}
