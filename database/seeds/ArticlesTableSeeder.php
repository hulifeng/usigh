<?php

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category_ids = \App\Models\Category::all()->pluck('id')->toArray();

        // 实例化 faker
        $faker = app(Faker\Generator::class);

        $articles = factory(Article::class)->times(60)->make()->each(function ($article, $index) use ($category_ids, $faker) {
            $article->category_id = $faker->randomElement($category_ids);
            $article->user_id = 1;
        });

        Article::insert($articles->toArray());
    }
}
