<?php

namespace App\Http\Controllers\Admin;

use App\Exports\Order_DetailExport;
use App\Exports\OrderExport;
use App\Http\Controllers\Controller;
use App\Models\Order_detail;
use App\Models\Orders;
use App\Models\Products;
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
            $order = Orders::with('orderDetails.product.images','customer')->where('id','LIKE', '%' . $request->search . '%')->orderBy('id','desc')->paginate(5);
            // $product_quantity = Products::select('quantity')->find($id);
            // dd($product_quantity);
            return view('Admin.pages.order.order',compact('order'));
        } catch (\Exception $e) {
            dd($e);
        }
    }

    // public function show_quantity($id){
    //     try {
          
    //         // dd($product_quantity);
    //         // $category = Categories::get();
    //         return view('Admin.pages.order.order',compact('product_quantity'));
    //     } catch (\Exception $e) {
    //         //throw $th;
    //     }
    // }

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
