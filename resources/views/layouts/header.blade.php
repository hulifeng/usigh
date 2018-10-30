<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="黑镜主题">
    <meta name="description" content="黑镜(BlackCandy)主题，一款漂亮而优雅的主题，为自媒体、极客而设计！">
    <title>黑镜主题-为设计创意工作者而设计</title>
    <link rel="shortcut icon" href="http://heijing.chuangzaoshi.com/wp-content/themes/blackmirror/assets/images/favicon.ico" type="image/x-icon">
    <link rel='dns-prefetch' href='//apps.bdimg.com' />
    <link rel='dns-prefetch' href='//s.w.org' />
    <link href="/static/css/animate.css" rel="stylesheet">
    <link rel='stylesheet' id='style-css'  href='/static/css/style_1.css' type='text/css' media='all' />
    <link rel='stylesheet' id='owlcss-css'  href='/static/css/owl.carousel.min_1.css' type='text/css' media='all' />
    <link rel="stylesheet" href="/static/css/style.css">
    @yield('afterCss')
    <script src="/static/js/init.js"></script>
    <script src="/static/js/jquery-1.9.1.min.js"></script>
</head>

<body class="home blog">
{{--头部导航--}}
<header class="header">
    <nav class="container">
        <div class="logo hidden-sm">
            <a href="javacript:void(0);" class="d-block">
                <img src="/static/picture/logo_1.png" alt="">
            </a>
        </div>
        <div class="mobile-logo show-sm">
            <a href="http://heijing.chuangzaoshi.com" class="d-inline-block">
                <img src="/static/picture/logo_mobile_1.png" alt="">
            </a>
        </div>
        <ul id="menu-%e9%a1%b6%e9%83%a8%e8%8f%9c%e5%8d%95" class="header-menu">
            @foreach($categories as $category)
                <li id="menu-item-{{ $category->id }}">
                    <a href="#">{{ $category->name }}</a>
                </li>
            @endforeach
            <li id="menu-item-14"
                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-14">
                <a href="#">安装</a>
                <ul class="sub-menu child-menu depth_0 ">
                    <li id="menu-item-105" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-105">
                        <a href="http://heijing.chuangzaoshi.com/archives/46"><i class="czs-read-l"></i>黑镜手册</a>
                    </li>
                    <li id="menu-item-100" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-100">
                        <a target="_blank" class="czs-caomei"></i>草莓图标</a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="admin-login hidden-sm">
            <a href="http://heijing.chuangzaoshi.com/wp-admin" target="_blank" class="btn-line btn-line-white">登录</a>
        </div>
        <div class="search-button cursor-pointer">
            <i class="czs-search-l"></i>
            <span class="d-inline-block transition opacity-0">
                <i class="czs-close-l"></i>
            </span>
        </div>
        <div class="menu-button">
            <div class="nav-bar">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>
</header>
{{--头部导航结束--}}

<!--搜索-->
<div class="search-wrap transition">
    <div class="container">
        <div class="row">
            <form role="search" method="get" action="#" class="header-search">
                <input data-url="Q0JCQg==" type="search" name="s" title="Search" placeholder="搜索..." value="">
            </form>
        </div>
    </div>
</div>
<!--搜索结束-->
</body>