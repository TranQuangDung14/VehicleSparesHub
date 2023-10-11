<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order_detail;
use App\Models\Orders;
// use Exception;
use Illuminate\Http\Request;

class Order_UserController extends Controller
{
    //
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
            $maxId = Orders::max('id') + 1;
            $code_order = 'MDH_' . $maxId;

            // Tạo đơn hàng và các chi tiết đơn hàng
            $order = Orders::create([
                'customer_id' => $cart->customer_id,
                'code_order' => $code_order,
                'payment_method' => $request->payment_method,
                'total_money' => $cart->real_money,
                'shipping_fee' => $request->shipping_fee,
                'receiver_name' => $request->receiver_name,
                'number_phone' => $request->number_phone,
                'receiver_address' => $request->receiver_address,
                'ward_id' => $request->ward_id,
                'districts_id' => $request->districts_id,
                'provinces_id' => $request->provinces_id,
                // 'status' => 1,
                // 'delivery_date' => $cart->delivery_date,
            ]);

            foreach ($cart->cartDetails as $cartDetail) {
                Order_detail::create([
                    'order_id' => $order->id,
                    'product_id' => $cartDetail->product_id,
                    'price' => $cartDetail->price_by_quantity,
                    'quantity' => $cartDetail->quantity,
                    'discount' => $cartDetail->discount,
                ]);
            }

            // Xóa giỏ hàng sau khi tạo đơn hàng thành công
            $cart->cartDetails()->delete();
            $cart->delete();

            // Trả về response thành công
            return response()->json([
                'message' => 'Đặt hàng thành công.',
                'order_id' => $order->id,
            ]);
        } catch (\Exception $e) {
            dd($e);
            return response()->json([
                'message' => 'Đã xảy ra lỗi khi thực hiện đặt hàng.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

}
