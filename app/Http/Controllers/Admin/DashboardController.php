<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $today = now()->toDateString();
        $products = Products::count();
        $user = User::whereNotIn('role', [1])->count();
        // dd($user);
        // ->count();
        $orders = Orders::count();
        $orders_by_today = Orders::whereDate('created_at', $today)->count();
        // $products_by_today = Products::whereDate('created_at',$today)->count();
        // dd($orders_by_day);
        $price_by_today = Orders::whereDate('created_at', $today)
            ->whereNotIn('status', [2])
            ->sum('total_money');
        // ->select(DB::raw('sum(total_money)'))
        // ->groupBy(DB::raw('DATE_FORMAT(da5_export_orders.created_at, "%d-%m-%Y")'))
        // ->get();
        // $price_by_today= foreach($price as $pr)
        // dd($price_by_today);
        return view('Admin.pages.dashboard.index', compact('products', 'user', 'orders', 'orders_by_today', 'price_by_today'));
    }
}
