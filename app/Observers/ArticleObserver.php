<?php
namespace App\Observers;

use App\Handlers\SlugTranslateHandler;
use App\Models\Article;

class ArticleObserver
{
    public function saving(Article $article)
    {
        // xss 过滤
        $article->content = clean($article->content, 'user_article_body');

        // 生成话题摘录
        $article->excerpt = make_excerpt($article->title);

        // 如 slug 字段无内容，即使用翻译器对 title 进行翻译
        if (!$article->slug) {
            $article->slug = app(SlugTranslateHandler::class)->translate($article->title);
        }
    }
}