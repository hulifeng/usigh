<?php
namespace App\Observers;

use App\Models\UserLike;

class UserLikeObserver
{
    public function created(UserLike $like)
    {
        $like->article->increment('commend_count');
    }

    public function deleting(UserLike $like)
    {
        $like->article->decrement('commend_count');
    }
}