<?php

namespace App\Http\Controllers\User\auth;

use App\Http\Controllers\Controller;
use App\Models\Customers;
use App\Models\Cutomers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class authController extends Controller
{

    public function showLogin()
    {
        if (auth()->check()) {
            if (auth()->user()->role === 2) {
                return redirect()->back();
            }
            // elseif (auth()->user()->role === 2) {
            //     // return redirect()->route('user.dashboard');
            //     return view('User.pages.auth.auth');
            // }
        }
        return view('User.pages.auth.auth');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $user = User::where('email', $request->email)->first();

        if (!$user || $user->role !== 2 || !Hash::check($request->password, $user->password)) {
            // dd('2');
            // dd($credentials);
            session()->flash('error', 'Thông tin tài khoản mật khẩu không chính xác!');
            return redirect()->route('showlogin_User');
        }
        elseif ($user->lock == 1) {
            session()->flash('error', 'Tài khoản này đã bị khóa!');
            return redirect()->route('showlogin_User');
        }
        Auth::login($user);

        // Xử lý khi người dùng đăng nhập thành công
        // return response()->json(['message' => 'Đăng nhập thành công!']);
        return redirect()->route('HomeIndex');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('HomeIndex');
    }

    public function showRegistration()
    {
        if (auth()->check()) {
            return redirect()->back();
        }
        return view('User.pages.auth.auth');
    }

    public function register(Request $request)
    {
        try {
            $input = $request->all();
            $rules = array(
                // 'name' => 'required',
                'name'              => 'required|string',
                'email'             => 'required|string|email|max:255|unique:users',
                'password'          => 'required',
                'number_phone'      => 'required|digits:10',
                'adress'            => 'required',

            );
            $messages = array(
                'name.required'             => '--Tên người dùng không được để trống!--',
                'number_phone.required'     => '--Số điện thoại không được để trống!--',
                'adress.required'           => '--Địa chỉ không được để trống!--',
                'email.required'            => '--Email không được để trống!--' ,
                'email.string'              => '--Email phải là chuỗi!--',
                'email.email'               => '--Email không hợp lệ!--',
                'email.max'                 => '--Email không được vượt quá 255 ký tự!--',
                'email.unique'              => '--Email đã tồn tại trong hệ thống!--',
                'password.required'         => '--Mật khẩu không được để trống!--',
                'number_phone.digits'       => '--Số điện thoại phải có đúng 10 chữ số!--',
            );
            $validator = Validator::make($input, $rules, $messages);
            if ($validator->fails()) {
                session()->flash('error', 'Kiểm tra lại!');
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
            $user = User::create([
                'name'      => $request->name,
                'email'     => $request->email,
                'password'  => Hash::make($request->password),
                'role'      => '2',
            ]);
            $customer = Customers::create([
                'user_id'           => $user->id,
                'name'              => $request->name,
                'number_phone'      => $request->number_phone,
                'adress'            => $request->adress,
            ]);
            session()->flash('success', 'Tạo tài khoản thành công!');
            // Auth::login($user);
        } catch (\Exception $e) {
            dd($e);
        }
        return redirect()->route('showlogin_User');
    }
}
