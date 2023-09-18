<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ProductsController extends Controller
{
    public function index()
    {
        return view('Admin.pages.products.product_list');
    }

    public function create()
    {
        try {
            return view('Admin.pages.categories.cate_add_edit');
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back();
        }
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $rules = array(
            'name' => 'required',
        );
        $messages = array(
            'name.required'      => '- Tên danh mục không được để trống!',
        );
        $validator = Validator::make($input, $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        DB::beginTransaction();
        try {
            $product = new Products();
            $product->name = $request->name;
            $product->description = $request->description ?? null;
            $product->save();
            DB::commit();
            return view('Admin.pages.categories.cate_add_edit');
        } catch (\Exception $e) {
            DB::rollback();
            dd($e);
            return redirect()->back();
        }
    }
    public function edit($id)
    {
        try {
            $product = Products::find($id);
            return view('Admin.pages.categories.cate_add_edit',compact('product'));
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back();
        }
    }

    public function update(Request $request,$id)
    {
        $input = $request->all();

        $rules = array(
            'name' => 'required',
        );
        $messages = array(
            'name.required'                     => '- Tên danh mục không được để trống!',
        );
        $validator = Validator::make($input, $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        DB::beginTransaction();
        try {
            $product = Products::find($id);
            $product->name = $request->name;
            $product->description = $request->description ?? null;
            $product->update();
            DB::commit();
            return view('Admin.pages.categories.cate_add_edit');
        } catch (\Exception $e) {
            DB::rollback();
            dd($e);
            return redirect()->back();
        }
    }

    public function delete($id)
    {
        try {
            $product = Products::find($id)->delete();
            // return view('Admin.pages.categories.cate_add_edit',compact('product'));
            return redirect()->back();
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back();
        }
    }
}
