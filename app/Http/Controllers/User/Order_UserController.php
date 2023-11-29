<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order_detail;
use App\Models\Orders;
use App\Models\Products;
// use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Order_UserController extends Controller
{
    //
    protected $indexController;

    public function __construct(IndexController $indexController)
    {
        $this->indexController = $indexController;
    }
    public function index()
    {
        $data['category'] = $this->indexController->this_cate();
        $data['userName'] = $this->indexController->userName();
        $data['customer']     =   auth()->user()->customer;
        $data['cart'] = auth()->user()->cart;
        $data['cart']->load('cartDetails.product.images');
        // dd($data['cart']);
        return view('User.pages.checkout.checkout', compact('data'));
    }

    public function store(Request $request)
    {

        try {
            // Lấy thông tin giỏ hàng từ request
            $cart = auth()->user()->cart;
            if (!$cart) {
                return response()->json([
                    'message' => 'Giỏ hàng của bạn hiện đang trống!'
                ]);
            }
            // $maxId = Orders::max('id') + 1;
            // $code_order = 'MDH_' . $maxId;
            // dd($cart->all());
            // dd($cart->cartDetails);
            // Tạo đơn hàng và các chi tiết đơn hàng
            // dd($request->receiver_name);
            $input = $request->all();

            $rules = array(
                'number_phone' => 'required|digits:10',
                // 'quantity' => 'required',
            );
            $messages = array(
                'number_phone.required'     => '--Số điện thoại không được để trống!--',
                'number_phone.digits'       => '--Nhập đúng định dạng số điện thoại!--',
                // 'quantity.required'            => '--số lượng không được để trống!--',
            );
            $validator = Validator::make($input, $rules, $messages);
            if ($validator->fails()) {
                session()->flash('error', 'Kiểm tra lại.');
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
            try {
            $order = Orders::create([
                'customer_id'       => $cart  ->customer_id, // id khách hàng
                // 'code_order'        => $code_order, // mã đơn hàng
                // 'payment_method'    => $request->payment_method,
                'total_money'       => $cart   ->real_money, // tổng tiền
                'shipping_fee'      => $request->shipping_fee, // phí vận chuyển
                'receiver_name'     => $request->receiver_name, // Tên người nhân
                'number_phone'      => $request->number_phone, // Số điện thoại
                'receiver_address'  => $request->receiver_address, // địa chỉ giao
                'note'              => $request->note,
                // 'status' => 1,
                // 'delivery_date' => $cart->delivery_date,
            ]);

            foreach ($cart->cartDetails as $cartDetail) {
                Order_detail::create([
                    'order_id'      => $order->id,
                    'product_id'    => $cartDetail->product_id,
                    'price'         => $cartDetail->price_by_quantity,
                    'quantity'      => $cartDetail->quantity,
                    // 'discount'      => $cartDetail->discount,
                ]);
            }

            $product = Products::find($cartDetail->product_id);
            $product->quantity = $product->quantity -$cartDetail->quantity;
            $product->save();
            // Xóa giỏ hàng sau khi tạo đơn hàng thành công
            $cart->cartDetails()->delete();
            $cart->delete();



            session()->flash('success', 'Đặt hàng thành công!');
            return redirect()->route('HomeIndex');
            // Trả về response thành công
            // return response()->json([
            //     'message'   => 'Đặt hàng thành công.',
            //     'order_id'  => $order->id,
            // ]);
        } catch (\Exception $e) {
            dd($e);
            return response()->json([
                'message'   => 'Đã xảy ra lỗi khi thực hiện đặt hàng.',
                'error'     => $e->getMessage(),
            ], 500);
            //throw $th;
        }
        } catch (\Exception $e) {
            dd($e);
            return response()->json([
                'message'   => 'Đã xảy ra lỗi khi thực hiện đặt hàng.',
                'error'     => $e->getMessage(),
            ], 500);
        }
    }

}
