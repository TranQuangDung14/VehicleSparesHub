<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    // private $category_limit3;

       /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function Pagesmaster($id)
    // {
    //     //
    //     try {
    //         // $data['product_selling'] = Products::with('images')->where('selling',1)->get();
    //         // $data['detail']=Products::with('images','category')->find($id);
    //         // $data['product_related']= Products::with('images')->where('category_id', $data['detail']->category_id)->get();

    //        $data['category'] = Categories::with([
    //             'products'=> function ($query) {
    //             $query->with('images')->distinct();
    //         }])->take(3)->get();
    //         // dd($data['category']);
    //         return view('User.layouts.master',compact('data','category_limit3'));

    //     } catch (\Exception $e) {
    //         dd($e);
    //     }
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['product_selling'] = Products::with('images')->where('selling',1)->get();
        $data['category'] = Categories::with([
            'products'=> function ($query) {
            $query->with('images')->distinct();
        }])->take(3)->get();

        // $data['category']=$this->category_limit3;
        // dd($this->category_limit3);
        // dd($data['category'] );
        return view('User.pages.index.index',compact('data'));
        // return view('Admin.pages.products.product_list', compact('product'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        //
        try {
            $data['product_selling'] = Products::with('images')->where('selling',1)->get();
            $data['detail']=Products::with('images','category')->find($id);
            $data['product_related']= Products::with('images')->where('category_id', $data['detail']->category_id)->get();

            $data['category'] = Categories::with([
                'products'=> function ($query) {
                $query->with('images')->distinct();
            }])->take(3)->get();

            // dd($data['detail']);
            return view('User.pages.detail.detail',compact('data'));
        } catch (\Exception $e) {
            dd($e);
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function category_product($id)
    {
        //
        try {
            // $data['product_selling'] = Products::with('images')->where('selling',1)->get();
            // $data['detail']=Products::with('images','category')->find($id);
            // $data['product_related']= Products::with('images')->where('category_id', $data['detail']->category_id)->get();
            // dd($data['detail']);
            $data['category_product'] = Categories::with([
                'products'=> function ($query) {
                $query->with('images')->distinct();
            }])->find($id);

            $data['category'] = Categories::with([
                'products'=> function ($query) {
                $query->with('images')->distinct();
            }])->take(3)->get();

            return view('User.pages.category_product.category_product',compact('data'));
        } catch (\Exception $e) {
            dd($e);
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
