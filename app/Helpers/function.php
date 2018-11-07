<?php
use App\Models\UserLike;
use App\Models\Article;

// 统计分类下的文章个数
function getArticlesCount($category_id)
{
    $articles = Article::where('category_id', $category_id)->count();
    return $articles;
}

// 获取当前用户IP
function get_real_ip()
{
    $ip = false;
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ips = explode(', ', $_SERVER['HTTP_X_FORWARDED_FOR']);
        if ($ip) {
            array_unshift($ips, $ip);
            $ip = false;
        }
        for ($i = 0; $i < count($ips); $i++) {
            if (!eregi('^(10│172.16│192.168).', $ips[$i])) {
                $ip = $ips[$i];
                break;
            }
        }
    }
    return ($ip ? $ip : $_SERVER['REMOTE_ADDR']);
}

// 判断当前文章是否已经点赞
function is_like($article)
{
    $user_likes = UserLike::where('article_id', $article)->pluck('ip');

    return $user_likes->contains(get_real_ip());
}

// 查询当前文章的点赞数量
function article_of_num($article)
{
    $article = Article::where('id', $article)->first();
    return $article->commend_count;
}