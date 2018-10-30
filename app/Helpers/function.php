<?php
use App\Models\Article;

// 统计分类下的文章个数
function getArticlesCount($category_id)
{
    $articles = Article::where('category_id', $category_id)->count();
    return $articles;
}