<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    //
    public function index(Request $request)
    {
        try {
            // toastr.success();
            // $product = Products::with(['category', 'images'])->get();
            $product = Products::with(['category', 'images'])->where('name', 'LIKE', '%' . $request->search . '%')->orderBy('id', 'desc')->paginate(5);

            // dd($product);
            return view('Admin.pages.warehouse.warehouse', compact('product'));
        } catch (\Exception $e) {
            //throw $th;
            dd($e);
        }
    }
    public function update_quantity(Request $request,$id){
        try {
            // dd($request->all());
            $product = Products::find($id);
            $product->quantity = $request->quantity + $product->quantity;
            $product->update();
            session()->flash('success', 'Cập nhật thành công!');
            return redirect()->route('warehouseIndex');
        } catch (\Exception $e) {
            //throw $th;
            session()->flash('error', 'Cập nhật thất bại!');
            dd($e);
        }
    }

}
