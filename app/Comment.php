<?php

namespace App;

use App\Models\Article;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['content', 'article_id', 'parent_id', 'author', 'email', 'url'];

    // 关联文章
    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
