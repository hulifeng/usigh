<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->text('content')->comment('文章内容');
            $table->string('author')->comment('评论者');
            $table->string('email')->comment('邮箱');
            $table->string('url')->comment('站点');
            $table->unsignedInteger('article_id')->comment('文章id');
            $table->unsignedInteger('parent_id')->default(0)->comment('默认0一级评论 1二级评论');
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
        Schema::dropIfExists('comments');
    }
}
