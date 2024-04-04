<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TestDB;
use Illuminate\Http\Request;

class Testcontroller extends Controller
{
    //
    public function index(){
        $data = TestDB::get();
        // dd($data);
        return view('Admin.pages.test.index',compact('data'));
    }

    public function create(){
        return view('Admin.pages.test.create');
    }
    public function store(Request $request){
        try {
            // $var
            // dd($request->all());
            $db = new TestDB();
            $db->number = $request->number;
            $db->data2  = $request->data2;
            $db->data3  = $request->data3;
            $db->save();
            return redirect()->route('TestIndex');
        } catch (\Exception $e) {

        }
        
    }
    
    public function edit($id){
        $data = TestDB::find($id);
        // dd($data->id);
        return view('Admin.pages.test.edit',compact('data'));
    }

    public function update(Request $request,$id){
        try {
            // $var
            // dd($request->all());
            $db = TestDB::find($id);
            $db->number = $request->number;
            $db->data2  = $request->data2;
            $db->data3  = $request->data3;
            $db->update();
            return redirect()->route('TestIndex');
        } catch (\Exception $e) {
            dd($e);
        }
        
    }
 
    public function delete($id){
        $db = TestDB::find($id);
        $db->delete();
        return redirect()->back();
    }
}
