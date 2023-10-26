<?php

namespace App\Http\Controllers\Admin\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //
    public function showLogin()
    {
        if (auth()->check()) {
            if (auth()->user()->role === 1) {
            return redirect()->back();
            }
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
            session()->flash('error', 'Thông tin tài khoản mật khẩu không chính xác!');
            return redirect()->route('showlogin');
        } elseif ($user->role !== 1) {
            session()->flash('error', 'Tài khoản này không có quyền đăng nhập vào admin!');
            return redirect()->route('showlogin');
        }
        elseif ($user->lock == 1) {
            session()->flash('error', 'Tài khoản này đã bị khóa!');
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
        try {
            $input = $request->all();
            $rules = array(
                // 'name' => 'required',
                'name' => 'required|string',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required',
            );
            $messages = array(
                'name.required'     => '--Tên người dùng không được để trống!--',
                'email.required'    => '--Email không được để trống!--',
                'email.string'      => '--Email phải là chuỗi!--',
                'email.email'       => '--Email không hợp lệ!--',
                'email.max'         => '--Email không được vượt quá 255 ký tự!--',
                'email.unique'      => '--Email đã tồn tại trong hệ thống!--',
                'password.required' => '--Mật khẩu không được để trống!--',
            );
            $validator = Validator::make($input, $rules, $messages);

            if ($validator->fails()) {
                // $errorMessage = implode(' ', $validator->errors()->all());
                session()->flash('error', 'Kiểm tra lại!');
                // session()->flash('error', $errorMessage);
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => '1',
            ]);

            // Auth::login($user);
        } catch (\Exception $e) {
            dd($e);
        }
        return redirect()->route('showlogin');
    }

    public function index(Request $request)
    {
        try {
            $user = User::where('name','LIKE', '%' . $request->search . '%')->where('role',2)->orderBy('id','desc')->paginate(10);

            return view('Admin.pages.auth.account',compact('user'));
        } catch (\Exception $e) {
            //throw $th;
            dd($e);
            return redirect()->back();
        }
    }

    public function lock_account(Request $request)
    {
        // dd($request->all());
        try {
            $user = User::find($request->id);

            if ($request->lock == 'on') {
                $lock = 1;
                session()->flash('success', 'Đã khóa tài khoản '.$user->name.' thành công.');

            } else {
                $lock = 0;
                session()->flash('success', 'Đã mở khóa '.$user->name.' thành công.');
            }
            $user->lock      = $lock;
            $user->save();

            return redirect()->back();
        } catch (\Exception $e) {
            dd($e);
            session()->flash('error', 'Có lỗi bất ngờ xảy ra!');
            // Toastr::error('kích hoạt thất bại!', 'Failed');
            return redirect()->back();
        }
    }

}
