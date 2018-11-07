<?php

namespace App\Models;

use App\Comment;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Article extends Model
{
    protected $table = 'articles';

    public $fillable = [
        'title', 'content', 'html', 'cover', 'user_id', 'category_id', 'review_count', 'visit_count', 'commend_count'
    ];

    public $casts = [
        'is_original' => 'boolean'
    ];

    // 文章的发布者
    public function user()
    {
        return $this->belongsTo(Admin::class);
    }

    // 标签
    public function tags()
    {
        return $this->belongsToMany(Tags::class)->withPivot('article_id', 'tags_id');
    }

    // 分类
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // 回复
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // 点赞数据
    public function user_like()
    {
        return $this->hasMany(UserLike::class);
    }
}
