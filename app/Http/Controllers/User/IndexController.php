<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    // private $category_limit3;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data['userName']=$this->userName();
        $data['product_selling'] = Products::with('images')->where('selling', 1)->where('quantity','>',0)->get();
        $data['category'] = $this->this_cate();
        // dd($data['product_selling']);
        return view('User.pages.index.index', compact('data'));
        // return view('Admin.pages.products.product_list', compact('product'));
    }
    public function this_cate()
    {
        $data['category'] = Categories::with([
            'products' => function ($query) {
                $query->with('images')->where('quantity','>',0)->distinct();
            }
        ])->get();

        // if (Auth::check()) {
        //     if (auth()->user()->role === 2) {
        //     $userName = Auth::user()->name;
        //     // dd($userName);
        //     }
        // }
        return $data['category'];
    }

    public function userName()
    {
        if (Auth::check()) {
            if (auth()->user()->role === 2) {
                $data['userName'] = Auth::user()->name;
                return $data['userName'];
            }
        }
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
            $data['userName']        = $this->userName();
            $data['product_selling'] = Products::with('images')->where('selling', 1)->where('quantity','>',0)->get();
            $data['detail']          = Products::with('images', 'category')->where('quantity','>',0)->find($id);
            $data['product_related'] = Products::with('images')->where('category_id', $data['detail']->category_id)->where('quantity','>',0)->get();

            $data['category']        = $this->this_cate();

            // dd($data['detail']);
            return view('User.pages.detail.detail', compact('data'));
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
            $data['category_product']   = Categories::find($id);
            $data['userName']           = $this->userName();
            $data['category']           = $this->this_cate();
            // $data['products'] = $category->products()->paginate($perPage);
            //    $data['product']=  $data['category_product']->products()->paginate(1);

            $data['product']            = Products::with(['category', 'images'])->where('category_id', $id)->orderBy('id', 'desc')->where('quantity','>',0)->paginate(8);
            //  dd($data['product']);
            // $category = Categories::where('name','LIKE', '%' . $request->search . '%')->orderBy('id','desc')->paginate(10);
            return view('User.pages.category_product.category_product', compact('data'));
        } catch (\Exception $e) {
            dd($e);
        }
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Introduce()
    {
        //
        $data['category']   = $this->this_cate();
        $data['userName']   = $this->userName();
        // dd($this->this_cate());
        return view('User.pages.introduce.introduce', compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Cooperation_policy()
    {
        //
        $data['category']   = $this->this_cate();
        $data['userName']   = $this->userName();
        return view('User.pages.cooperation_policy.cooperation_policy', compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Contact()
    {
        //
        $data['category']   = $this->this_cate();
        $data['userName']   = $this->userName();
        return view('User.pages.contact.contact', compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function News()
    {
        //
        $data['category']   = $this->this_cate();
        $data['userName']   = $this->userName();
        return view('User.pages.news.news', compact('data'));
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
