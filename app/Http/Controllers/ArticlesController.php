<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\UserLike;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function show(Request $request, Article $article)
    {
        if (!empty($article->slug) && $article->slug != $request->slug) {
            return redirect($article->link(), 301);
        }

        $categories = Category::all();

        $linkArticles = Article::where('category_id', $article->category_id)->orderBy('visit_count', 'desc')->limit(3)->get();

        $prev_article = Article::where('id', '<' , $article->id)->orderBy('id', 'desc')->first();

        $next_article = Article::where('id', '>', $article->id)->orderBy('id', 'asc')->first();

        $comments = $article->comments;

        return view('articles.show', compact('article', 'categories', 'linkArticles', 'prev_article', 'next_article', 'comments'));
    }

    // 点赞
    public function like(Request $request)
    {
        $ip = get_real_ip();

        $action = $request->input('action');

        $data = [
            'ip' => $ip,
            'article_id' => $request->input('article_id')
        ];

        switch ($action) {
            case 'addLike':
                UserLike::firstOrCreate($data);
                break;
            case 'subLike':
                $user_like = UserLike::where($data)->first();
                $user_like->delete();
                break;
        }

        $new_num = article_of_num($request->input('article_id'));

        return [
            "<span class='count d-block'>{$new_num}</span>"
        ];
    }
}
