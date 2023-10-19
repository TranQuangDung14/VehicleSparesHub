<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        $products = Products::count();
        $user =User::count();
        $orders =Orders::count();
        return view('Admin.pages.dashboard.index',compact('products','user','orders'));
    }
}
