<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedLinksData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $links = [
            [
                'title' => '百度',
                'link' => 'https://www.baidu.com/'
            ],
            [
                'title' => '新浪微博',
                'link' => 'https://weibo.com/'
            ],
            [
                'title' => '站酷',
                'link' => 'https://www.zcool.com.cn/'
            ],
            [
                'title' => '优设',
                'link' => 'https://www.uisdc.com/'
            ],
            [
                'title' => '花瓣',
                'link' => 'http://huaban.com/'
            ],

        ];
        \DB::table('links')->insert($links);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \DB::table('links')->truncate();
    }
}
