<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id')->comment('文章ID');
            $table->string('title')->comment('文章标题');
            $table->text('content')->comment('文章内容');
            $table->text('html')->comment('markdown转化html');
            $table->unsignedInteger('user_id')->comment('文章作者');
            $table->unsignedInteger('category_id')->comment('文章分类');
            $table->tinyInteger('is_original')->default(1)->comment('是否原创 0 否 1 是');
            $table->tinyInteger('is_del')->default(0)->comment('是否删除 0 否 1 是');
            $table->unsignedInteger('review_count')->default(0)->comment('评论数量');
            $table->unsignedInteger('visit_count')->default(0)->comment('浏览数量');
            $table->unsignedInteger('commend_count')->default(0)->comment('点赞数量');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
