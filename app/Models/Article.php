<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
