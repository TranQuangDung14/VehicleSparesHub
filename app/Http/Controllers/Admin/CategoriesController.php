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
             // Số lượng mục trên mỗi trang
            $perPage = 10;

            // Truy vấn dữ liệu
            $category = Categories::where('name','LIKE', '%' . $request->search . '%')->paginate($perPage);
            
            // Kiểm tra nếu có dữ liệu
            if ($category->count() > 0) {
                 // Trang hiện tại
                 $currentPage = request()->get('page') ?? 1;
            
                   // Tính chỉ mục bắt đầu
                 $startIndex = ($currentPage - 1) * $perPage;
            // $data = ModelName::;

            return view('Admin.pages.categories.categories_list',compact('category'));
         } else {
            return view('Admin.pages.categories.categories_list',compact('category'));
        }
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
            $category = new Categories();
            $category->name = $request->name;
            $category->description = $request->description ?? null;
            $category->save();
            DB::commit();
            session()->flash('success', 'Thêm mới thành công.');
            // Toastr::success('Thêm thành công', 'Success');
            // Toastr::success('Thành công!', 'Tiêu đề thông báo');
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
            'name.required'  => '- Tên danh mục không được để trống!',
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
