<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try {
            $customer = Customers::where('name','LIKE', '%' . $request->search . '%')->orderBy('id','desc')->paginate(10);

            return view('Admin.pages.customer.customer',compact('customer'));
        } catch (\Exception $e) {
            //throw $th;
            dd($e);
            return redirect()->back();
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        try {
            $editData = Customers::find($id);
            return view('Admin.pages.customer.edit_customer',compact('editData'));
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();

        $rules = array(
            'name' => 'required',
        );
        $messages = array(
            'name.required'  => '- Tên khách hàng không được để trống!',
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
            $customer = Customers::find($id);
            $customer->name = $request->name;
            $customer->date_of_birth = $request->date_of_birth ?? null;
            $customer->sex = $request->sex ?? null;
            $customer->number_phone = $request->number_phone ?? null;
            $customer->email = $request->email ?? null;
            $customer->adress = $request->adress ?? null;
            $customer->update();
            DB::commit();
            session()->flash('success', 'Cập nhật thành công!');
            return redirect()->route('customerIndex');
        } catch (\Exception $e) {
            DB::rollback();
            dd($e);
            return redirect()->back();
        }
    }

}
