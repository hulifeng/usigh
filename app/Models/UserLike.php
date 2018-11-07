<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserLike extends Model
{
    protected $table = 'user_likes';

    protected $fillable = ['ip', 'article_id'];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
