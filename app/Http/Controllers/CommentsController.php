<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required|min:6',
            'author' => 'required',
            'email' => 'required|unique:comments|email',
            'url' => 'required'
        ]);

        Comment::create($request->only([
            'content', 'author', 'author', 'email', 'url', 'article_id', 'parent_id'
        ]));

        return redirect()->back();
    }

    public function destory()
    {

    }
}
