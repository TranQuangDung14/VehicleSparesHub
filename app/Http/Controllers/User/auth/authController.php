<?php

namespace App\Http\Controllers\User\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class authController extends Controller
{
    //
    public function showLogin()
    {
        // if (auth()->check()) {
        //     return redirect()->back();
        // }
        return view('User.pages.auth.auth');
    }
}
