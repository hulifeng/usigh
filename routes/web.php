<?php
// 首页
Route::get('/', 'IndexController@index')->name('index');

// 文章详情页
Route::get('/articles/{article}', 'ArticlesController@show')->name('articles.show');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function ($router) {
    // 后台首页
    $router->get('index', 'AdminController@index')->name('admins.index');

    // 后台登录页
    $router->get('login', 'LoginController@showLoginForm')->name('admins.login');

    // 后台登录行为
    $router->post('login', 'LoginController@login');

    // 退出登录
    $router->post('logout', 'LoginController@logout');

    // 栏目管理
    Route::group(['prefix' => 'categories'], function ($router) {
        $router->get('/', 'CategoriesController@index')->name('admins.category.index');

        // 添加栏目
        $router->get('/create', 'CategoriesController@create')->name('admins.category.create');

        // 编辑栏目
        $router->get('/{category}', 'CategoriesController@edit')->name('admins.category.edit');

        // 创建栏目
        $router->post('/', 'CategoriesController@store')->name('admins.category.store');

        // 提交栏目
        $router->put('/{category}', 'CategoriesController@update')->name('admins.category.update');

        // 删除栏目
        $router->delete('/delete', 'CategoriesController@destory')->name('admins.category.destory');
    });

    // 轮播管理
    Route::group(['prefix' => 'carousel'], function ($router) {
        $router->get('/', 'CarouselController@index')->name('admins.carousel.index');

        // 添加轮播
        $router->get('/create', 'CarouselController@create')->name('admins.carousel.create');

        // 提交
        $router->post('/', 'CarouselController@store')->name('admins.carousel.store');

        // 编辑
        $router->post('/{carousel}', 'CarouselController@edit')->name('admins.carousel.edit');

        // 更新
        $router->put('/{carousel}', 'CarouselController@update')->name('admins.carousel.update');

        // 删除
        $router->delete('/{carousel}', 'CarouselController@destory')->name('admins.carousel.destory');
    });

    // 文章管理
    Route::group(['prefix' => 'articles'], function ($articles) {
        // 创建文章
        $articles->get('/create', 'ArticlesController@create')->name('admins.articles.create');

        // 文章列表
        $articles->get('/', 'ArticlesController@index')->name('admins.articles.index');

        // 编辑文章
        $articles->get('/{article}', 'ArticlesController@edit')->where("article", "[0-9+]")->name('admins.articles.edit');

        // 修改文章
        $articles->put('/{article}/update', 'ArticlesController@update')->name('admins.articles.update');

        // 删除文章
        $articles->delete('/{article}/delete', 'ArticlesController@delete')->name('admins.articles.delete');

        // 文章回收站
        $articles->get('/recycle', 'ArticlesController@recycle')->name('admins.articles.recycle');

        // 发布文章
        $articles->post('/', 'ArticlesController@store')->name('admins.articles.store');
    });
});
//Auth::routes();
//
//Route::get('/', 'HomeController@index');

