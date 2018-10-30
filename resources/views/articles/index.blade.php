@extends('layouts.main')
@section('content')
    <!--轮播-->
    <div class="carousel-wrap">
        <div class="container no-gutter-xs">
            <div id="carousel" class="owl-carousel">
                <!-- customize carousel-->
                <a class="carousel-item" target="blank" href="#" title="" rel="carousel">
                    <img src="/static/picture/mbe_1.png" alt="">
                    <div class="carousel-info vertical-middle ">
                        <div class="carousel-info-title"></div>
                    </div>
                    <div class="carousel-overlay"></div>
                </a>
                <a class="carousel-item" target="blank" href="#" title="" rel="carousel">
                    <img src="/static/picture/meteor_1.png" alt="">
                    <div class="carousel-info vertical-middle ">
                        <div class="carousel-info-title"></div>
                    </div>
                    <div class="carousel-overlay"></div>
                </a>
                <a class="carousel-item" target="blank" href="#" title="" rel="carousel">
                    <img src="/static/picture/mbe_1.png" alt="">
                    <div class="carousel-info vertical-middle ">
                        <div class="carousel-info-title"></div>
                    </div>
                    <div class="carousel-overlay"></div>
                </a>
                <a class="carousel-item" target="blank" href="#" title="" rel="carousel">
                    <img src="/static/picture/meteor_1.png" alt="">
                    <div class="carousel-info vertical-middle ">
                        <div class="carousel-info-title"></div>
                    </div>
                    <div class="carousel-overlay"></div>
                </a>
                <a class="carousel-item" target="blank" href="#" title="" rel="carousel">
                    <img src="/static/picture/mbe_1.png" alt="">
                    <div class="carousel-info vertical-middle ">
                        <div class="carousel-info-title"></div>
                    </div>
                    <div class="carousel-overlay"></div>
                </a>
                <a class="carousel-item" target="blank" href="#" title="" rel="carousel">
                    <img src="/static/picture/meteor_1.png" alt="">
                    <div class="carousel-info vertical-middle ">
                        <div class="carousel-info-title"></div>
                    </div>
                    <div class="carousel-overlay"></div>
                </a>
            </div>
        </div>
    </div>
    <!--轮播结束-->

    <!--热门-->
    <div class="shot mb-6">
        <div class="container">
            <div class="row shot-wrap">
                <ul class="shot-type">
                    <li class="" data-type="hot">热门</li>
                    <li class="active" data-type="latest">最新</li>
                    <li class="" data-type="hot-comment">热评</li>
                </ul>
            </div>
        </div>
    </div>
    <!--热门结束-->
    <div class="recommend">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="post post-style-feature">
                        <a class="post-img img-response" href=" http://heijing.chuangzaoshi.com/archives/140"
                           style="background-image: url(/static/images/1-13_1.png)">
                            <ul class="post-meta p-2 post-meta-bottom transition">
                                <li class="post-time">
                                    <i class="czs-time-l"></i>2017.07.19
                                </li>
                                <li class="post-meta-view pull-right">
                                    <i class="czs-eye-l"></i>8038
                                </li>
                                <li class="post-meta-comments pull-right">
                                    <i class="czs-comment-l"></i>3
                                </li>
                                <li class="post-meta-like pull-right">
                                    <i class="czs-heart-l"></i>
                                    <span class="count">80</span>
                                </li>
                            </ul>
                        </a>
                        <div class="post-title mt-2">
                            <a href="http://heijing.chuangzaoshi.com/archives/140"> 教程丨打造像素艺术图的3D立体世界 </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="post post-style-feature">
                        <a class="post-img img-response" href=" http://heijing.chuangzaoshi.com/archives/22"
                           style="background-image: url(/static/images/1-14_1.png)">
                            <ul class="post-meta p-2 post-meta-bottom transition">
                                <li class="post-time">
                                    <i class="czs-time-l"></i>
                                    2017.07.18
                                </li>
                                <li class="post-meta-view pull-right">
                                    <i class="czs-eye-l"></i> 3814
                                </li>
                                <li class="post-meta-comments pull-right">
                                    <i class="czs-comment-l"></i> 0
                                </li>
                                <li class="post-meta-like pull-right">
                                    <i class="czs-heart-l"></i>
                                    <span class="count">23</span>
                                </li>
                            </ul>
                        </a>
                        <div class="post-title mt-2">
                            <a href="http://heijing.chuangzaoshi.com/archives/22"> 设计丨Favro App UI和品牌设计解析 </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--分类导航-->
    <div class="category-wrap mb-6">
        <div class="container ps-r">
            <ul class="category-nav pr-6">
                <li>
                    <a class="active" href="#" data-type="all">全部</a>
                </li>
                <li>
                    <a class="" href="#" data-type="uikit">UIkit</a>
                </li>
                <li>
                    <a class="" href="#" data-type="poster">海报设计</a>
                </li>
                <li>
                    <a class="" href="#" data-type="creativity">灵感创意</a>
                </li>
                <li>
                    <a class="" href="#" data-type="interface">界面交互</a>
                </li>
            </ul>
            <div class="layout-type-wrap ps-a hidden-xs">
                <a class="btn-layout-type p-4">
                    <i class="czs-layout-grid"></i>
                </a>
                <div class="layout-type ps-a px-1">
                    <ul>
                        <li data-type="three" class="p-2 ">3</li>
                        <li data-type="four" class="p-2 active">4</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--分类导航结束-->

    <!--主体部分-->
    <main class="container" id="main">
        <div class="row">
            <div class="post-wrap">
                <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3">
                    <div class="post post-style-card transition">
                        <a class="post-img img-response" href=" /articles/1" style="background-image: url(/static/images/1_1.png)"></a>
                        <div class="post-top">
                            <div class="post-title mb-1">
                                <a href="/articles/61">Officeworks-Gifts-for-Imagineers </a>
                            </div>
                            <div class="post-top-meta mb-3">
                                <a class="post-category" href="/articles/category/design/ux">UX设计 </a>
                                <span class="post-time">2017.07.18</span>
                            </div>
                        </div>
                        <div class="p-3">
                            <ul class="post-meta-bottom">
                                <li class="post-meta-author">
                                    <a class="d-block" href="/articles/author/designer" target="_blank">
                                        <img alt='' src='/static/picture/avatar_user_1_1500356034-96x96_1.png' class='avatar avatar-96 photo' height='96' width='96'/> <span class="d-inline-block">designer</span>
                                    </a>
                                </li>
                                <li class="post-meta-view pull-right">
                                    <i class="czs-eye"></i> 10141
                                </li>
                                <li class="post-meta-comments pull-right">
                                    <i class="czs-comment"></i> 8
                                </li>
                                <li class="post-meta-like pull-right">
                                    <i class="czs-heart"></i>
                                    <span class="count">78</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3">
                    <div class="post post-style-card transition">
                        <a class="post-img img-response" href=" /articles/59" style="background-image: url(/static/images/2_1.png)">
                        </a>
                        <div class="post-top">
                            <div class="post-title mb-1">
                                <a href="/articles/59"> Nokia-OZO-website </a>
                            </div>
                            <div class="post-top-meta mb-3">
                                <a class="post-category" href="/articles/category/design/ui">UI设计 </a>
                                <span class="post-time">2017.07.18</span>
                            </div>
                        </div>
                        <div class="p-3">
                            <ul class="post-meta-bottom">
                                <li class="post-meta-author">
                                    <a class="d-block" href="/articles/author/designer"
                                       target="_blank">
                                        <img alt='' src='/static/picture/avatar_user_1_1500356034-96x96_1.png' class='avatar avatar-96 photo' height='96' width='96'/> <span class="d-inline-block">designer</span>
                                    </a>
                                </li>
                                <li class="post-meta-view pull-right">
                                    <i class="czs-eye"></i> 5572
                                </li>
                                <li class="post-meta-comments pull-right">
                                    <i class="czs-comment"></i> 0
                                </li>
                                <li class="post-meta-like pull-right">
                                    <i class="czs-heart"></i>
                                    <span class="count">108</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3">
                    <div class="post post-style-card transition">
                        <a class="post-img img-response" href="/articles/57" style="background-image: url(/static/images/3_1.png)">
                        </a>
                        <div class="post-top">
                            <div class="post-title mb-1">
                                <a href="/articles/57"> Character-Design-early-2017 </a>
                            </div>
                            <div class="post-top-meta mb-3">
                                <a class="post-category" href="/articles/category/design/ui">UI设计 </a>
                                <span class="post-time">2017.07.18</span>
                            </div>
                        </div>
                        <div class="p-3">
                            <ul class="post-meta-bottom">
                                <li class="post-meta-author">
                                    <a class="d-block" href="/articles/author/designer"
                                       target="_blank">
                                        <img alt='' src='/static/picture/avatar_user_1_1500356034-96x96_1.png' class='avatar avatar-96 photo' height='96' width='96'/> <span class="d-inline-block">designer</span>
                                    </a>
                                </li>
                                <li class="post-meta-view pull-right">
                                    <i class="czs-eye"></i> 3892
                                </li>
                                <li class="post-meta-comments pull-right">
                                    <i class="czs-comment"></i> 0
                                </li>
                                <li class="post-meta-like pull-right">
                                    <i class="czs-heart"></i>
                                    <span class="count">64</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3">
                    <div class="post post-style-card transition">
                        <a class="post-img img-response" href="/articles/55" style="background-image: url(/static/images/4_1.png)"></a>
                        <div class="post-top">
                            <div class="post-title mb-1">
                                <a href="/articles/55"> Sportify App Landing Page </a>
                            </div>
                            <div class="post-top-meta mb-3">
                                <a class="post-category" href="/articles/category/design/ui">UI设计 </a>
                                <span class="post-time">2017.07.18</span>
                            </div>
                        </div>
                        <div class="p-3">
                            <ul class="post-meta-bottom">
                                <li class="post-meta-author">
                                    <a class="d-block" href="/articles/author/designer"
                                       target="_blank">
                                        <img alt='' src='/static/picture/avatar_user_1_1500356034-96x96_1.png' class='avatar avatar-96 photo' height='96' width='96'/> <span class="d-inline-block">designer</span>
                                    </a>
                                </li>
                                <li class="post-meta-view pull-right">
                                    <i class="czs-eye"></i> 3139
                                </li>
                                <li class="post-meta-comments pull-right">
                                    <i class="czs-comment"></i> 0
                                </li>
                                <li class="post-meta-like pull-right">
                                    <i class="czs-heart"></i>
                                    <span class="count">37</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3">
                    <div class="post post-style-card transition">
                        <a class="post-img img-response" href=" /articles/61" style="background-image: url(/static/images/1_1.png)"></a>
                        <div class="post-top">
                            <div class="post-title mb-1">
                                <a href="/articles/61">Officeworks-Gifts-for-Imagineers </a>
                            </div>
                            <div class="post-top-meta mb-3">
                                <a class="post-category" href="/articles/category/design/ux">UX设计 </a>
                                <span class="post-time">2017.07.18</span>
                            </div>
                        </div>
                        <div class="p-3">
                            <ul class="post-meta-bottom">
                                <li class="post-meta-author">
                                    <a class="d-block" href="/articles/author/designer" target="_blank">
                                        <img alt='' src='/static/picture/avatar_user_1_1500356034-96x96_1.png' class='avatar avatar-96 photo' height='96' width='96'/> <span class="d-inline-block">designer</span>
                                    </a>
                                </li>
                                <li class="post-meta-view pull-right">
                                    <i class="czs-eye"></i> 10141
                                </li>
                                <li class="post-meta-comments pull-right">
                                    <i class="czs-comment"></i> 8
                                </li>
                                <li class="post-meta-like pull-right">
                                    <i class="czs-heart"></i>
                                    <span class="count">78</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3">
                    <div class="post post-style-card transition">
                        <a class="post-img img-response" href=" /articles/59" style="background-image: url(/static/images/2_1.png)">
                        </a>
                        <div class="post-top">
                            <div class="post-title mb-1">
                                <a href="/articles/59"> Nokia-OZO-website </a>
                            </div>
                            <div class="post-top-meta mb-3">
                                <a class="post-category" href="/articles/category/design/ui">UI设计 </a>
                                <span class="post-time">2017.07.18</span>
                            </div>
                        </div>
                        <div class="p-3">
                            <ul class="post-meta-bottom">
                                <li class="post-meta-author">
                                    <a class="d-block" href="/articles/author/designer"
                                       target="_blank">
                                        <img alt='' src='/static/picture/avatar_user_1_1500356034-96x96_1.png' class='avatar avatar-96 photo' height='96' width='96'/> <span class="d-inline-block">designer</span>
                                    </a>
                                </li>
                                <li class="post-meta-view pull-right">
                                    <i class="czs-eye"></i> 5572
                                </li>
                                <li class="post-meta-comments pull-right">
                                    <i class="czs-comment"></i> 0
                                </li>
                                <li class="post-meta-like pull-right">
                                    <i class="czs-heart"></i>
                                    <span class="count">108</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3">
                    <div class="post post-style-card transition">
                        <a class="post-img img-response" href="/articles/57" style="background-image: url(/static/images/3_1.png)">
                        </a>
                        <div class="post-top">
                            <div class="post-title mb-1">
                                <a href="/articles/57"> Character-Design-early-2017 </a>
                            </div>
                            <div class="post-top-meta mb-3">
                                <a class="post-category" href="/articles/category/design/ui">UI设计 </a>
                                <span class="post-time">2017.07.18</span>
                            </div>
                        </div>
                        <div class="p-3">
                            <ul class="post-meta-bottom">
                                <li class="post-meta-author">
                                    <a class="d-block" href="/articles/author/designer"
                                       target="_blank">
                                        <img alt='' src='/static/picture/avatar_user_1_1500356034-96x96_1.png' class='avatar avatar-96 photo' height='96' width='96'/> <span class="d-inline-block">designer</span>
                                    </a>
                                </li>
                                <li class="post-meta-view pull-right">
                                    <i class="czs-eye"></i> 3892
                                </li>
                                <li class="post-meta-comments pull-right">
                                    <i class="czs-comment"></i> 0
                                </li>
                                <li class="post-meta-like pull-right">
                                    <i class="czs-heart"></i>
                                    <span class="count">64</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3">
                    <div class="post post-style-card transition">
                        <a class="post-img img-response" href="/articles/55" style="background-image: url(/static/images/4_1.png)"></a>
                        <div class="post-top">
                            <div class="post-title mb-1">
                                <a href="/articles/55"> Sportify App Landing Page </a>
                            </div>
                            <div class="post-top-meta mb-3">
                                <a class="post-category" href="/articles/category/design/ui">UI设计 </a>
                                <span class="post-time">2017.07.18</span>
                            </div>
                        </div>
                        <div class="p-3">
                            <ul class="post-meta-bottom">
                                <li class="post-meta-author">
                                    <a class="d-block" href="/articles/author/designer"
                                       target="_blank">
                                        <img alt='' src='/static/picture/avatar_user_1_1500356034-96x96_1.png' class='avatar avatar-96 photo' height='96' width='96'/> <span class="d-inline-block">designer</span>
                                    </a>
                                </li>
                                <li class="post-meta-view pull-right">
                                    <i class="czs-eye"></i> 3139
                                </li>
                                <li class="post-meta-comments pull-right">
                                    <i class="czs-comment"></i> 0
                                </li>
                                <li class="post-meta-like pull-right">
                                    <i class="czs-heart"></i>
                                    <span class="count">37</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3">
                    <div class="post post-style-card transition">
                        <a class="post-img img-response" href=" /articles/61" style="background-image: url(/static/images/1_1.png)"></a>
                        <div class="post-top">
                            <div class="post-title mb-1">
                                <a href="/articles/61">Officeworks-Gifts-for-Imagineers </a>
                            </div>
                            <div class="post-top-meta mb-3">
                                <a class="post-category" href="/articles/category/design/ux">UX设计 </a>
                                <span class="post-time">2017.07.18</span>
                            </div>
                        </div>
                        <div class="p-3">
                            <ul class="post-meta-bottom">
                                <li class="post-meta-author">
                                    <a class="d-block" href="/articles/author/designer" target="_blank">
                                        <img alt='' src='/static/picture/avatar_user_1_1500356034-96x96_1.png' class='avatar avatar-96 photo' height='96' width='96'/> <span class="d-inline-block">designer</span>
                                    </a>
                                </li>
                                <li class="post-meta-view pull-right">
                                    <i class="czs-eye"></i> 10141
                                </li>
                                <li class="post-meta-comments pull-right">
                                    <i class="czs-comment"></i> 8
                                </li>
                                <li class="post-meta-like pull-right">
                                    <i class="czs-heart"></i>
                                    <span class="count">78</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3">
                    <div class="post post-style-card transition">
                        <a class="post-img img-response" href=" /articles/59" style="background-image: url(/static/images/2_1.png)">
                        </a>
                        <div class="post-top">
                            <div class="post-title mb-1">
                                <a href="/articles/59"> Nokia-OZO-website </a>
                            </div>
                            <div class="post-top-meta mb-3">
                                <a class="post-category" href="/articles/category/design/ui">UI设计 </a>
                                <span class="post-time">2017.07.18</span>
                            </div>
                        </div>
                        <div class="p-3">
                            <ul class="post-meta-bottom">
                                <li class="post-meta-author">
                                    <a class="d-block" href="/articles/author/designer"
                                       target="_blank">
                                        <img alt='' src='/static/picture/avatar_user_1_1500356034-96x96_1.png' class='avatar avatar-96 photo' height='96' width='96'/> <span class="d-inline-block">designer</span>
                                    </a>
                                </li>
                                <li class="post-meta-view pull-right">
                                    <i class="czs-eye"></i> 5572
                                </li>
                                <li class="post-meta-comments pull-right">
                                    <i class="czs-comment"></i> 0
                                </li>
                                <li class="post-meta-like pull-right">
                                    <i class="czs-heart"></i>
                                    <span class="count">108</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3">
                    <div class="post post-style-card transition">
                        <a class="post-img img-response" href="/articles/57" style="background-image: url(/static/images/3_1.png)">
                        </a>
                        <div class="post-top">
                            <div class="post-title mb-1">
                                <a href="/articles/57"> Character-Design-early-2017 </a>
                            </div>
                            <div class="post-top-meta mb-3">
                                <a class="post-category" href="/articles/category/design/ui">UI设计 </a>
                                <span class="post-time">2017.07.18</span>
                            </div>
                        </div>
                        <div class="p-3">
                            <ul class="post-meta-bottom">
                                <li class="post-meta-author">
                                    <a class="d-block" href="/articles/author/designer"
                                       target="_blank">
                                        <img alt='' src='/static/picture/avatar_user_1_1500356034-96x96_1.png' class='avatar avatar-96 photo' height='96' width='96'/> <span class="d-inline-block">designer</span>
                                    </a>
                                </li>
                                <li class="post-meta-view pull-right">
                                    <i class="czs-eye"></i> 3892
                                </li>
                                <li class="post-meta-comments pull-right">
                                    <i class="czs-comment"></i> 0
                                </li>
                                <li class="post-meta-like pull-right">
                                    <i class="czs-heart"></i>
                                    <span class="count">64</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3">
                    <div class="post post-style-card transition">
                        <a class="post-img img-response" href="/articles/55" style="background-image: url(/static/images/4_1.png)"></a>
                        <div class="post-top">
                            <div class="post-title mb-1">
                                <a href="/articles/55"> Sportify App Landing Page </a>
                            </div>
                            <div class="post-top-meta mb-3">
                                <a class="post-category" href="/articles/category/design/ui">UI设计 </a>
                                <span class="post-time">2017.07.18</span>
                            </div>
                        </div>
                        <div class="p-3">
                            <ul class="post-meta-bottom">
                                <li class="post-meta-author">
                                    <a class="d-block" href="/articles/author/designer"
                                       target="_blank">
                                        <img alt='' src='/static/picture/avatar_user_1_1500356034-96x96_1.png' class='avatar avatar-96 photo' height='96' width='96'/> <span class="d-inline-block">designer</span>
                                    </a>
                                </li>
                                <li class="post-meta-view pull-right">
                                    <i class="czs-eye"></i> 3139
                                </li>
                                <li class="post-meta-comments pull-right">
                                    <i class="czs-comment"></i> 0
                                </li>
                                <li class="post-meta-like pull-right">
                                    <i class="czs-heart"></i>
                                    <span class="count">37</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3">
                    <div class="post post-style-card transition">
                        <a class="post-img img-response" href=" /articles/61" style="background-image: url(/static/images/1_1.png)"></a>
                        <div class="post-top">
                            <div class="post-title mb-1">
                                <a href="/articles/61">Officeworks-Gifts-for-Imagineers </a>
                            </div>
                            <div class="post-top-meta mb-3">
                                <a class="post-category" href="/articles/category/design/ux">UX设计 </a>
                                <span class="post-time">2017.07.18</span>
                            </div>
                        </div>
                        <div class="p-3">
                            <ul class="post-meta-bottom">
                                <li class="post-meta-author">
                                    <a class="d-block" href="/articles/author/designer" target="_blank">
                                        <img alt='' src='/static/picture/avatar_user_1_1500356034-96x96_1.png' class='avatar avatar-96 photo' height='96' width='96'/> <span class="d-inline-block">designer</span>
                                    </a>
                                </li>
                                <li class="post-meta-view pull-right">
                                    <i class="czs-eye"></i> 10141
                                </li>
                                <li class="post-meta-comments pull-right">
                                    <i class="czs-comment"></i> 8
                                </li>
                                <li class="post-meta-like pull-right">
                                    <i class="czs-heart"></i>
                                    <span class="count">78</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3">
                    <div class="post post-style-card transition">
                        <a class="post-img img-response" href=" /articles/59" style="background-image: url(/static/images/2_1.png)">
                        </a>
                        <div class="post-top">
                            <div class="post-title mb-1">
                                <a href="/articles/59"> Nokia-OZO-website </a>
                            </div>
                            <div class="post-top-meta mb-3">
                                <a class="post-category" href="/articles/category/design/ui">UI设计 </a>
                                <span class="post-time">2017.07.18</span>
                            </div>
                        </div>
                        <div class="p-3">
                            <ul class="post-meta-bottom">
                                <li class="post-meta-author">
                                    <a class="d-block" href="/articles/author/designer"
                                       target="_blank">
                                        <img alt='' src='/static/picture/avatar_user_1_1500356034-96x96_1.png' class='avatar avatar-96 photo' height='96' width='96'/> <span class="d-inline-block">designer</span>
                                    </a>
                                </li>
                                <li class="post-meta-view pull-right">
                                    <i class="czs-eye"></i> 5572
                                </li>
                                <li class="post-meta-comments pull-right">
                                    <i class="czs-comment"></i> 0
                                </li>
                                <li class="post-meta-like pull-right">
                                    <i class="czs-heart"></i>
                                    <span class="count">108</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3">
                    <div class="post post-style-card transition">
                        <a class="post-img img-response" href="/articles/57" style="background-image: url(/static/images/3_1.png)">
                        </a>
                        <div class="post-top">
                            <div class="post-title mb-1">
                                <a href="/articles/57"> Character-Design-early-2017 </a>
                            </div>
                            <div class="post-top-meta mb-3">
                                <a class="post-category" href="/articles/category/design/ui">UI设计 </a>
                                <span class="post-time">2017.07.18</span>
                            </div>
                        </div>
                        <div class="p-3">
                            <ul class="post-meta-bottom">
                                <li class="post-meta-author">
                                    <a class="d-block" href="/articles/author/designer"
                                       target="_blank">
                                        <img alt='' src='/static/picture/avatar_user_1_1500356034-96x96_1.png' class='avatar avatar-96 photo' height='96' width='96'/> <span class="d-inline-block">designer</span>
                                    </a>
                                </li>
                                <li class="post-meta-view pull-right">
                                    <i class="czs-eye"></i> 3892
                                </li>
                                <li class="post-meta-comments pull-right">
                                    <i class="czs-comment"></i> 0
                                </li>
                                <li class="post-meta-like pull-right">
                                    <i class="czs-heart"></i>
                                    <span class="count">64</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3">
                    <div class="post post-style-card transition">
                        <a class="post-img img-response" href="/articles/55" style="background-image: url(/static/images/4_1.png)"></a>
                        <div class="post-top">
                            <div class="post-title mb-1">
                                <a href="/articles/55"> Sportify App Landing Page </a>
                            </div>
                            <div class="post-top-meta mb-3">
                                <a class="post-category" href="/articles/category/design/ui">UI设计 </a>
                                <span class="post-time">2017.07.18</span>
                            </div>
                        </div>
                        <div class="p-3">
                            <ul class="post-meta-bottom">
                                <li class="post-meta-author">
                                    <a class="d-block" href="/articles/author/designer"
                                       target="_blank">
                                        <img alt='' src='/static/picture/avatar_user_1_1500356034-96x96_1.png' class='avatar avatar-96 photo' height='96' width='96'/> <span class="d-inline-block">designer</span>
                                    </a>
                                </li>
                                <li class="post-meta-view pull-right">
                                    <i class="czs-eye"></i> 3139
                                </li>
                                <li class="post-meta-comments pull-right">
                                    <i class="czs-comment"></i> 0
                                </li>
                                <li class="post-meta-like pull-right">
                                    <i class="czs-heart"></i>
                                    <span class="count">37</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--分页-->
            <div class="pagination px-3 pagination-number">
                <a href='javacript:void(0);' class='current pagination-num'>1</a><a href='javacript:void(0);' class='pagination-num'>2</a><a href="javacript:void(0);" class="pagination-num"><i class="czs-angle-right-l"></i></a></div>
        </div>
        <!--分页结束-->
        <div class="friend-link p-3 mt-6">
            <strong class='pull-left mr-3'>友情链接<span class="hidden-xs">：</span></strong>
            <li><a href="javacript:void(0);" ><span>Behance</span></a></li>
            <li><a href="javacript:void(0);" ><span>Dribbble</span></a></li>
            <li><a href="javacript:void(0);" ><span>创造狮导航</span></a></li>
            <li><a href="javacript:void(0);" ><span>草莓图标库</span></a></li>
            <li><a href="javacript:void(0);" ><span>黑糖主题</span></a></li>
        </div>
    </main>
    <!--主体部分结束-->
@endsection