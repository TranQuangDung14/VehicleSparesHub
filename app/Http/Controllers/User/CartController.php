<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart_detail;
use App\Models\Carts;
use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $data['message']  = 'Giỏ hàng của bạn hiện đang trống!';

        if (auth()->check()) {
            $user = auth()->user();
            if ($user->cart) {
                $data['cart'] = $user->cart;
                $data['cart']->load('cartDetails.product.images');
            } else {
                // Nếu không có giỏ hàng, bạn có thể xử lý theo cách khác ở đây
                $data['cart'] = null;
            }
        } else {
            // Nếu người dùng chưa đăng nhập, bạn cũng cần xử lý theo cách khác ở đây
            session()->flash('error', 'Yêu cầu đăng nhập để sử dụng chức năng giỏ hàng.');
            return redirect()->back();

            // $data['cart'] = null;
        }
        // $data['cart'] = auth()->user()->cart;
        // if (!$data['cart']) {

        //     return view('User.pages.cart.cart', compact('data'));
        // }
        // $data['cart']->load('cartDetails.product.images');
        // dd( $data['cart']);
        return view('User.pages.cart.cart', compact('data'));
    }

    public function addProduct(Request $request)
    {

        try {
            // Kiểm tra đăng nhập
            if (auth()->check()) {
                if (auth()->user()->role === 2) {
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
                                'price_by_quantity' => $cartDetail->product->price * ($cartDetail->quantity + $request->quantity),
                            ]);
                        } else {
                            $product                = Products::findOrFail($request->product_id);
                            $priceByQuantity        = $product->price * $request->quantity;
                            $cartDetail             = new Cart_detail([
                                'product_id'        => $request->product_id,
                                'quantity'          => $request->quantity,
                                'price_by_quantity' => $priceByQuantity,
                            ]);
                            // dd()
                            $cart->cartDetails()->save($cartDetail);
                        }

                        $this->updateCartTotal($cart);
                        return redirect()->back();
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
                    // dd('chưa đăng nhập 2');
                    session()->flash('error', 'Yêu cầu đăng nhập để sử dụng chức năng giỏ hàng.');
                    return redirect()->back();
                }
            }
            // dd('chưa đăng nhập');
            session()->flash('error', 'Yêu cầu đăng nhập để sử dụng chức năng giỏ hàng.');
            return redirect()->back();
        } catch (\Exception $e) {
            dd($e);
        }
    }

    private function updateCartTotal(Carts $cart)
    {
        $totalMoney = $cart->cartDetails->sum(function ($cartDetail) {
            return $cartDetail->product->price * $cartDetail->quantity;
        });
        // $discountAmount = $cart->discounted_price;
        $realMoney = $totalMoney;

        $cart->update([
            'total_money' => $totalMoney,
            'real_money' => $realMoney
        ]);
    }

    public function updateQuantity(Request $request, Cart_detail $cartDetail)
    {
        try {
            // DB::beginTransaction();
            $Detail = $cartDetail->find($request->id);
            if (!$Detail) {
                return response()->json(['message' => 'Không tìm thấy sản phẩm trong giỏ hàng.'], 404);
            }
            // Kiểm tra số lượng sản phẩm trong kho
            $availableQuantity = $Detail->product->quantity;

            if ($request->quantity > $availableQuantity) {
                return response()->json(['message' => 'Số lượng sản phẩm trong giỏ hàng vượt quá số lượng trong kho.'],400);
            }

            $cart = $Detail->cart;
            $Detail->quantity = $request->quantity;
            $Detail->price_by_quantity =  ($request->quantity) * ($Detail->product->price);
            $Detail->update();
            $this->updateCartTotal($cart);
            // DB::commit();
            return response()->json(['message' => 'Đã cập nhật số lượng sản phẩm trong giỏ hàng.']);
        } catch (\Exception $e) {
            DB::rollback();
            // dd($e);
        }
    }


    public function removeProduct(Cart_detail $cartDetail)
    {
        // dd($cartDetail);
        $cart = $cartDetail->cart;
        $cartDetail->delete();

        $this->updateCartTotal($cart);

        // Hủy áp dụng voucher
        $cart->update([
            // 'discounted_price' => 0,
            'real_money' => $cart->total_money
        ]);
        // $cartData = $this->index();
        // dd($cartData);
        // return redirect()->back();
        // session()->flash('success_message', 'Đã xóa sản phẩm khỏi giỏ hàng!');
        return response()->json([
            'message' => 'Đã xóa sản phẩm khỏi giỏ hàng!',
            // 'cartData'=>$cartData
        ]);
    }
}
