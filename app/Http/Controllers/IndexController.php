<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        return view('articles.index');
    }

    // 后台管理员登录
    public function login()
    {
        return view('admins.login');
    }

    // 后台管理员注册
    public function register()
    {
        return view('admins.register');
    }
}
