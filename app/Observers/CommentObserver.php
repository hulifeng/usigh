<?php
namespace App\Observers;

use App\Comment;

class CommentObserver
{
    public function created(Comment $comment)
    {
        $comment->article->increment('review_count', 1);
        $comment->content = clean($comment->content, 'user_article_body');
    }
}