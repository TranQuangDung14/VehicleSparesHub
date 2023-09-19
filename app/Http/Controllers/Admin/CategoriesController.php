<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
// use Toastr;
class CategoriesController extends Controller
{
    //
    public function index()
    {
        try {
            $category = Categories::get();
            Toastr::success('Thành công!');
            return view('Admin.pages.categories.categories_list',compact('category'));
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back();
        }

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
        // dd($request->all());
        $input = $request->all();

        $rules = array(
            'name' => 'required',
        );
        $messages = array(
            'name.required'                     => '--Tên danh mục không được để trống!--',
        );
        $validator = Validator::make($input, $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        DB::beginTransaction();
        try {
            $category = new Categories();
            $category->name = $request->name;
            $category->description = $request->description ?? null;
            $category->save();
            DB::commit();
            // Toastr::success('Thêm thành công', 'Success');
            Toastr::success('Thành công!', 'Tiêu đề thông báo');
            return redirect()->route('categoryIndex');
        } catch (\Exception $e) {
            DB::rollback();
            Toastr::error('Thêm lỗi', 'Failed');
            // dd($e);
            return redirect()->back();
        }
    }
    public function edit($id)
    {
        try {
            $editData = Categories::find($id);
            return view('Admin.pages.categories.cate_add_edit',compact('editData'));
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
            $category = Categories::find($id);
            $category->name = $request->name;
            $category->description = $request->description ?? null;
            $category->update();
            DB::commit();
            return redirect()->route('categoryIndex');
        } catch (\Exception $e) {
            DB::rollback();
            dd($e);
            return redirect()->back();
        }
    }

    public function delete($id)
    {
        try {
            $category = Categories::find($id)->delete();
            // return view('Admin.pages.categories.cate_add_edit',compact('category'));
            return redirect()->back();
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back();
        }
    }

}
