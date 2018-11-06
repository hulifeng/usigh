<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Link;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();

        $articles = Article::paginate(16);

        $links = Link::all();

        return view('articles.index', compact('categories', 'articles', 'links'));
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

    public function test()
    {
        return view('tests.test');
    }
}
