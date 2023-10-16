<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
// use Toastr;
class CategoriesController extends Controller
{
    //
    public function index(Request $request)
    {
        try {
            // dd('test');
            $category = Categories::where('name','LIKE', '%' . $request->search . '%')->orderBy('id','desc')->paginate(10);

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
            'name.required' => '--Tên danh mục không được để trống!--',
        );
        $validator = Validator::make($input, $rules, $messages);

        if ($validator->fails()) {
            session()->flash('error', 'Kiểm tra lại!');
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        DB::beginTransaction();
        try {
            $category               = new Categories();
            $category->name         = $request->name;
            $category->description  = $request->description ?? null;
            $category->save();
            DB::commit();

            session()->flash('success', 'Thêm mới thành công.');

            return redirect()->route('categoryIndex');
        } catch (\Exception $e) {
            DB::rollback();
            session()->flash('error', 'Có lỗi bất ngờ xảy ra!');
            // dd($e);
            return redirect()->back();
        }
    }
    public function edit($id)
    {
        // dd($id);
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
        // dd($request->all());
        $input = $request->all();

        $rules = array(
            'name' => 'required',
        );
        $messages = array(
            'name.required'  => '- Tên danh mục không được để trống!',
        );
        $validator = Validator::make($input, $rules, $messages);

        if ($validator->fails()) {
            session()->flash('error', 'Kiểm tra lại!');
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        DB::beginTransaction();
        try {
            $category               = Categories::find($id);
            $category->name         = $request->name;
            $category->description  = $request->description ?? null;
            $category->update();
            DB::commit();
            session()->flash('success', 'Cập nhật thành công!');
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
            // dd($id);
            $category = Categories::find($id)->delete();
            session()->flash('success', 'Xóa thành công.');
            // return view('Admin.pages.categories.cate_add_edit',compact('category'));
            return redirect()->back();
        } catch (\Exception $e) {
            session()->flash('error', 'Xóa không thành công kiểm tra lại!');
            // dd($e);
            return redirect()->back();
        }
    }

}
