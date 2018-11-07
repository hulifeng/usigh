<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Link;
use Illuminate\Http\Request;
use App\Models\Article;

class CategoriesController extends Controller
{
    public function show(Category $category)
    {
        $articles = Article::where('category_id', $category->id)->paginate(16);

        $links = Link::all();

        $categories = Category::all();

        // 渲染
        return view('articles.index' , compact('articles', 'links', 'categories'));
    }
}
