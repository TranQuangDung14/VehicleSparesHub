<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use Illuminate\Http\Request;

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


}
