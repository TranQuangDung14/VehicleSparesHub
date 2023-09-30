<?php

namespace App\Http\Controllers\Admin\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function showLogin()
    {
        if (auth()->check()) {
            return redirect()->back();
        }
        return view('Admin.pages.auth.login');
    }

    // public function login(Request $request)
    // {
    //     try {
    //         // dd($request->all());
    //         // if(){
    //         $credentials = $request->only('email', 'password','role');

    //         if ($request->user()->role == 1) {
    //             // xác thực thông tin
    //             if (Auth::attempt($credentials)) {

    //                 // return redirect()->intended('/');

    //                 return redirect()->route('dashboardIndex');
    //             }
    //         }
    //         // dd('lỗi');

    //         // }

    //         return redirect()->back();
    //     } catch (\Exception $e) {
    //         dd($e);
    //         return redirect()->route('showlogin')->withErrors(['error' => 'Đăng nhập không thành công']);
    //     }
    // }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            // return response()->json(['message' => 'Thông tin tài khoản mật khẩu không chính xác!'], 401);
            // dd('2');
            // dd($credentials);
            session()->flash('error', 'Thông tin tài khoản không chính xác!');
            return redirect()->route('showlogin');
        }
        elseif( $user->role !== 1){
            session()->flash('error', 'Tài khoản này không có quyền đăng nhập vào admin!');
            return redirect()->route('showlogin');
        }

        Auth::login($user);

        // Xử lý khi người dùng đăng nhập thành công
        // return response()->json(['message' => 'Đăng nhập thành công!']);
        return redirect()->route('dashboardIndex');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect()->route('showlogin');
    }

    public function showRegistration()
    {
        if (auth()->check()) {
            return redirect()->back();
        }
        return view('Admin.pages.auth.register');
    }

    public function register(Request $request)
    {
        // dd('đã vào');
        // dd($request->all());
        try {
            // $this->validate($request, [
            //     'name' => 'required|string',
            //     'email' => 'required|string|email|max:255|unique:users',
            //     'password' => 'required|string|min:5|confirmed',
            // ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            Auth::login($user);
        } catch (\Exception $e) {
            dd($e);
        }


        return redirect()->route('showlogin');
    }
}
