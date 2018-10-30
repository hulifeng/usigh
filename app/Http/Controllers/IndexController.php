<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();

        $articles = Article::paginate(16);

        return view('articles.index', compact('categories', 'articles'));
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
