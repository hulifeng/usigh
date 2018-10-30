<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarouselTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carousels', function (Blueprint $table) {
            $table->increments('id');
//            $table->tinyInteger('carousel_image_switch')->default(0)->comment('图片轮播开关');
//            $table->tinyInteger('carousel_switch')->default(0)->comment('鼠标控制轮播开关');
//            $table->string('carousel_opacity', '10')->default(0)->comment('透明度');
//            $table->tinyInteger('carousel_info')->default(0)->comment('轮播信息');
//            $table->string('carousel_num', '10')->default(0)->comment('轮播数量');
            $table->json('carousel_meta')->comment('轮播图片数据');
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
        Schema::dropIfExists('carousels');
    }
}
