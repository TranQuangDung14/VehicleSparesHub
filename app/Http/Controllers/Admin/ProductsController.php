<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Images;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
        try {
            // toastr.success();
            // $product = Products::with(['category', 'images'])->get();
            $product = Products::with(['category', 'images'])->where('name', 'LIKE', '%' . $request->search . '%')->orderBy('id', 'desc')->paginate(5);

            // dd($product);
            return view('Admin.pages.products.product_list', compact('product'));
        } catch (\Exception $e) {
            //throw $th;
            dd($e);
        }
    }

    public function create()
    {
        try {
            $category = Categories::get();
            return view('Admin.pages.products.product_add_edit', compact('category'));
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back();
        }
    }

    public function store(Request $request)
    {
        // dd($request->image);
        $input = $request->all();

        $rules = array(
            'name' => 'required',
            'category_id' => 'required',
            'price' => 'required|gt:price_import',
            'price_import' => 'required|lt:price',
        );
        $messages = array(
            'name.required'             => '--Tên sản phẩm không được để trống!--',
            'category_id.required'      => '--Chưa chọn danh mục!--',
            'price.required'            => '--Giá tiền không được để trống!--',
            'price_import.required'     => '--Giá nhập không được để trống!--',
            'price.gt'                  => '--Giá bán phải lớn hơn giá nhập!--',
            'price_import.lt'           => '--Giá nhập phải nhỏ hơn giá bán!--',
        );
        $validator = Validator::make($input, $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        DB::beginTransaction();
        try {
            $product                    = new Products();
            $product->category_id       = $request->category_id;
            $product->name              = $request->name;
            $product->price             = $request->price;
            $product->price_import      = $request->price_import;
            $product->short_description = $request->short_description ?? null;
            $product->description       = $request->description ?? null;
            $product->tech_specs        = $request->tech_specs ?? null;
            // $product->quantity = $request->quantity ?? null;
            // $product->selling = $request->selling ?? null;
            $product->save();
            if ($request->hasFile('image')) {
                // dd('vào');
                $images = $request->file('image');
                foreach ($images as $image) {
                    // Kiểm tra file có phải là ảnh và dung lượng không quá giới hạn cho phép
                    if ($image->isValid() && in_array($image->getClientOriginalExtension(), ['jpg', 'jpeg', 'png', 'gif']) && $image->getSize() <= 5048000) {
                        // chuỗi đặt tên file ảnh
                        $filename = time() . '-' . Str::slug($image->getClientOriginalName(), '-') . '.' . $image->getClientOriginalExtension();
                        // Lưu ảnh vào thư mục image/product
                        $image->storeAs('public/image/product', $filename);

                        // Thêm bản ghi vào bảng images
                        Images::create([
                            'product_id' => $product->id,
                            'image' => $filename,
                        ]);
                    }
                }
            }
            DB::commit();
            session()->flash('success', 'Thêm mới thành công.');
            // return view('Admin.pages.products.product_add_edit');
            return redirect()->route('productIndex');
        } catch (\Exception $e) {
            DB::rollback();
            session()->flash('error', 'Có lỗi bất ngờ xảy ra!');
            // dd('lõi', $e);
            return redirect()->back();
        }
    }
    public function edit($id)
    {
        try {
            $editData = Products::with(['category', 'images'])->find($id);
            // dd($editData);
            $category = Categories::get();
            return view('Admin.pages.products.product_add_edit', compact('editData', 'category'));
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back();
        }
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $input = $request->all();

        $rules = array(
            'name' => 'required',
            'category_id' => 'required',
            'price' => 'required|gt:price_import',
            'price_import' => 'required|lt:price',
        );
        $messages = array(
            'name.required'             => '--Tên sản phẩm không được để trống!--',
            'category_id.required'      => '--Chưa chọn danh mục!--',
            'price.required'            => '--Giá tiền không được để trống!--',
            'price_import.required'     => '--Giá nhập không được để trống!--',
            'price.gt'                  => '--Giá bán phải lớn hơn giá nhập!--',
            'price_import.lt'           => '--Giá nhập phải nhỏ hơn giá bán!--',
        );
        $validator = Validator::make($input, $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        // dd($request->all());
        DB::beginTransaction();
        try {
            // dd($request->all());
            $product                    = Products::findOrFail($id);
            $product->category_id       = $request->category_id;
            $product->name              = $request->name;
            $product->price             = $request->price;
            $product->price_import      = $request->price_import;
            $product->short_description = $request->short_description ?? null;
            $product->description       = $request->description ?? null;
            $product->tech_specs        = $request->tech_specs ?? null;
            // $product->quantity          = $request->quantity ?? null;

            $product->update();
            if ($request->hasFile('image')) {
                // dd($images);
                $images = $request->file('image');
                // Nhận ID của hình ảnh được chọn để lưu giữ
                $imageIds = $request->input('image_ids', []);

                // Xóa hình ảnh không được chọn để lưu giữ
                $imagesToDelete = $product->images()->whereNotIn('id', $imageIds)->get();
                foreach ($imagesToDelete as $image) {
                    Storage::delete('public/image/product/' . $image->image);
                    $image->delete();
                }
                foreach ($images as $image) {
                    // Kiểm tra file có phải là ảnh và dung lượng không quá giới hạn cho phép
                    if ($image->isValid() && in_array($image->getClientOriginalExtension(), ['jpg', 'jpeg', 'png', 'gif']) && $image->getSize() <= 5048000) {

                        // chuỗi đặt tên file ảnh
                        $filename = time() . '-' . Str::slug($image->getClientOriginalName(), '-') . '.' . $image->getClientOriginalExtension();
                        // Lưu ảnh vào thư mục image/product
                        $image->storeAs('public/image/product', $filename);

                        // Thêm bản ghi vào bảng images
                        Images::create([
                            'product_id' => $id,
                            'image' => $filename,
                        ]);
                    }
                }
            }

            DB::commit();
            session()->flash('success', 'Cập nhật thành công.');            // return view('Admin.pages.products.product_add_edit');
            return redirect()->route('productIndex');
        } catch (\Exception $e) {
            DB::rollback();
            session()->flash('error', 'Có lỗi bất ngờ xảy ra!');
            // dd($e);
            return redirect()->back();
        }
    }

    public function delete($id)
    {
        try {

            $product = Products::find($id);
            // dd($product);
            // Xóa các ảnh sản phẩm
            foreach ($product->images as $image) {
                // dd($image->image);
                Storage::delete('public/image/product/' . $image->image);

                $image->delete();
            }

            // Xóa sản phẩm
            $product->delete();
            session()->flash('success', 'Xóa thành công.');
            // return view('Admin.pages.categories.cate_add_edit',compact('product'));
            return redirect()->back();
        } catch (\Exception $e) {
            // dd($e);
            session()->flash('error', 'Có lỗi bất ngờ xảy ra!');
            return redirect()->back();
        }
    }
 
    public function UpdateStatus(Request $request)
    {
        // dd($request->id);
        try {
            if ($request->status == 'on') {
                $status = 1;
            } else {
                $status = 0;
            }
            $product            = Products::find($request->id);
            $product->selling   = $status;
            $product->save();
            return response()->json($product);
        } catch (\Exception $e) {
            dd($e);
            // Toastr::error('kích hoạt thất bại!', 'Failed');
            return redirect()->back();
        }
    }
}
