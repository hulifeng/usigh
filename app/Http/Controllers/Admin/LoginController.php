<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/admin/index';

    protected $username;

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
        $this->username = config('admin.global.username');
    }

    // 重写登录页面
    public function showLoginForm()
    {
        return view('admins.login');
    }

    // 自定义认证驱动
    protected function guard()
    {
        return auth()->guard('admin');
    }

    // 重写退出登录
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->forget($this->guard()->getName());

        $request->session()->regenerate();

        return redirect('/admin/login');
    }
}
