<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart_detail;
use App\Models\Carts;
use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    protected $indexController;

    public function __construct(IndexController $indexController)
    {
        $this->indexController = $indexController;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['category'] = $this->indexController->this_cate();
        $data['userName'] = $this->indexController->userName();
        return view('User.pages.cart.cart', compact('data'));
    }

    public function addProduct(Request $request)
    {
        // dd($request->all());
        try {
            //code...

            // Kiểm tra đăng nhập
            if (auth()->check()) {
                if (auth()->user()->role === 2) {
                    // return response()->json(['message' => 'Vui lòng đăng nhập để thêm sản phẩm vào giỏ hàng'], 401);
                    // dd('đăng nhập thành công');
                    try {
                        $cart = auth()->user()->cart;
                        // dd($cart);
                        if (!$cart) {
                            $cart = new Carts(['customer_id' => auth()->user()->id]);
                            $cart->save();
                            // dd($cart );
                        }

                        $cartDetail = $cart->cartDetails()->where('product_id', $request->product_id)->first();

                        if ($cartDetail) {
                            $cartDetail->update([
                                'quantity' => $cartDetail->quantity + $request->quantity,
                                'price_by_quantity' => $cartDetail->product->default_price * ($cartDetail->quantity + $request->quantity),
                            ]);
                        } else {
                            $product = Products::findOrFail($request->product_id);
                            $priceByQuantity = $product->price * $request->quantity;
                            $cartDetail = new Cart_detail([
                                'product_id' => $request->product_id,
                                'quantity' => $request->quantity,
                                'price_by_quantity' => $priceByQuantity,
                            ]);
                            // dd()
                            $cart->cartDetails()->save($cartDetail);
                        }

                        $this->updateCartTotal($cart);
                        return redirect()->route('HomeIndex');
                        // return response()->json([
                        //     'message' => 'Đã thêm sản phẩm vào giỏ hàng'
                        // ]);
                    } catch (\Exception $e) {
                        dd($e);
                        return response()->json([
                            'message' => 'Thêm lỗi'
                        ]);
                    }
                } else {
                    dd('chưa đăng nhập 2');
                }
            }
            dd('chưa đăng nhập');
        } catch (\Exception $e) {
            dd($e);
        }
    }
    private function updateCartTotal(Carts $cart)
    {
        $totalMoney = $cart->cartDetails->sum(function ($cartDetail) {
            return $cartDetail->product->price * $cartDetail->quantity;
        });
        $discountAmount = $cart->discounted_price;
        $realMoney = $totalMoney - $discountAmount;

        $cart->update([
            'total_money' => $totalMoney,
            'real_money' => $realMoney
        ]);
    }
}
