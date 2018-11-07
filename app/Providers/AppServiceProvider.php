<?php

namespace App\Providers;

use App\Comment;
use App\Models\Article;
use App\Models\UserLike;
use App\Observers\ArticleObserver;
use App\Observers\CommentObserver;
use App\Observers\UserLikeObserver;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        Comment::observe(CommentObserver::class);
        Article::observe(ArticleObserver::class);
        UserLike::observe(UserLikeObserver::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
