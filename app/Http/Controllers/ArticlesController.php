<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function show(Article $article)
    {
        $categories = Category::all();

        $linkArticles = Article::where('category_id', $article->category_id)->orderBy('visit_count', 'desc')->limit(3)->get();

        $prev_article = Article::where('id', '<' , $article->id)->orderBy('id', 'desc')->first();

        $next_article = Article::where('id', '>', $article->id)->orderBy('id', 'asc')->first();

        return view('articles.show', compact('article', 'categories', 'linkArticles', 'prev_article', 'next_article'));
    }
}
