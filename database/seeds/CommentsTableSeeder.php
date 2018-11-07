<?php

use Illuminate\Database\Seeder;
use App\Models\Article;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $article_ids = Article::all()->pluck('id')->toArray();

        $faker = app(Faker\Generator::class);

        $comments = factory(\App\Comment::class)->times(100)->make()->each(
            function ($comment, $index) use  ($article_ids, $faker) {
                $comment->article_id = $faker->randomElement($article_ids);
            }
        );

        \App\Comment::insert($comments->toArray());
    }
}
