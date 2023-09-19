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
        return view('Admin.pages.auth.login');
    }

    public function login(Request $request)
    {
        try {
            $credentials = $request->only('email', 'password');

            // xác thực thông tin
            if (Auth::attempt($credentials)) {

                // return redirect()->intended('/');

                return redirect()->route('dashboardIndex');
            }
        } catch (\Throwable $th) {
            return redirect()->route('showlogin')->withErrors(['error' => 'Đăng nhập không thành công']);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect()->route('showlogin');
    }

    public function showRegistrationForm()
    {
        return view('Admin.pages.auth.register');
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('showlogin');
    }
}
