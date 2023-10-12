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
    public function index()
    {
        try {
            $order = Orders::with('orderDetails.product.images')->orderBy('id','desc')->get();
            //
            return response()->json([
                'data' => $order,
            ], 200);
        } catch (\Exception $e) {
            dd($e);
        }
    }


}
