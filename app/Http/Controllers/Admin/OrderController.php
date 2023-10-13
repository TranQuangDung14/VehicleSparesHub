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
            //
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
