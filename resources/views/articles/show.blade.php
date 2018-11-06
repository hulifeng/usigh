@extends('layouts.main')
@section('afterCss')
    <link rel="stylesheet" href="/assets/css/editor/editormd.preview.css">
    <style>
        .markdown-toc-list li {
            padding-top: 15px;
        }
    </style>
@endsection
@section('content')
    <style>
        .article-meta-tags a {background-color: #ff1677;}
        #testEditorMdview {min-height: 795px;}
    </style>
    <style type="text/css">
        .friend-link li a:hover, .custom-carousel, .custom-carousel .owl-prev, .custom-carousel .owl-next, .site-record:hover, .post .post-title a:hover, #footer .footer-friends li a span:hover, #footer .footer-feature .footer-menu li a:hover, .widget-hotpost a:hover, .article-body a, .comments .comments-list .comment .comment-body .comment-user a, .comments .comments-list .comment .children .comment-user a, #comment-nav-below .nav-inside .current, .widget-hotpost-brief i, .archive-header .archive-header-title{ color: #f44444;}
        .article-like .favorite, .carousel-info-meta .carousel-info-category, .calendar_wrap table td a, .article-meta .article-meta-tags a, .article-support .article-support-button a, .comments #respond .form-submit input{background-color: #f44444;}
        .article-body h2, .article-body h3 {border-left: 5px solid #ff1677;}
        .article-like .done{border: 1px solid #ff1677 ;}
        .page-category-img:after{background: #0051ee;opacity: 0.5;}
        .admin-login a:hover{background-color: #ff1677;}
        .article-like .favorite{box-shadow: 0 1px 10px #ff1677;}
    </style>
    {{--详情页面主体部分--}}
    <main class="container pt-xs-6" id="pjax-content">
        <div class="row">
            <div class="col-md-9 no-gutter-xs">
                <div class="article-btn-group">
                    <ul>
                        {{--购买主题--}}
                        <li>
                            <a target="_blank" href="#" class="article-btn-danger">
                                <i class="czs-buy"></i>
                            </a>
                        </li>
                        {{--购买主题结束--}}

                        {{--评论--}}
                        <li>
                            <a href="#comment">
                                <i class="czs-talk"></i>
                            </a>
                        </li>
                        {{--评论结束--}}
                    </ul>
                </div>
                <div id="main">
                    <article class="article " id="post-61">
                        {{--文章标题--}}
                        <div class="article-title">
                            <a href="#">
                               <i class="czs-read"></i> {{ $article->title }}
                            </a>
                            @if($article->is_original)
                                <span class="fr" id="usigh-original">
                                    <i class="czs-medal"></i>&nbsp;原创
                                </span>
                            @else
                                <span class="fr" id="usigh-reprint">
                                    <i class="czs-truck"></i>&nbsp;转载
                                </span>
                            @endif
                        </div>

                        <div class="article-meta">
                            <span style="padding: 4px 8px; border: 1px solid ; color: #78a5f1; margin-right: 20px;border-radius: 3px;">教程</span>
                            <span style="margin-right: 20px;">作者：{{ $article->user->name }}</span>
                            <span class="article-meta-time">
                                 {{ $article->created_at }}
                            </span>
                            <span class="meta-right">
                                <span class="entry-views"><span class="view-count">{{ $article->visit_count ?: 1 }}</span> 浏览</span>
                                <span class="entry-comment"><a href="#comment" class="comments-link">{{ $article->review_count }} 评论</a></span>
                            </span>
                        </div>


                        {{--文章Markdowm--}}
                        <textarea id="mD" style="display: none;">{{ $article->content }}</textarea>
                        {{--文章内容--}}
                        <div id="testEditorMdview"></div>

                        <!-- advertisement -->
                        <div class="article-advertisement">
                        </div>
                        <!-- support -->
                        <!-- share -->
                        <div class="fl">
                            <div class="tagcloud" style="margin-top: 40px;">
                                @if($article->tags)
                                    <span class="fl" style="padding: 5px 8px; color: #999;">文章标签：</span>
                                    @foreach($article->tags as $tag)
                                        <a href="#"><i class="czs-tag"></i>&nbsp;&nbsp;{{ $tag->name }}</a>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="article-share fr" style="margin-top: 40px;">
                                <span class="article-share-title" style="color: #999;">
                                    分享到：
                                </span>
                                    <span class="bdsharebuttonbox d-inline-block">
                                    <a href="#" class="bds_weixin czs-weixin" data-cmd="weixin" title="分享到微信"></a>
                                    <a href="#" class="bds_tsina czs-weibo" data-cmd="tsina" title="分享到新浪微博"></a>
                                    <a href="#" class="bds_sqq czs-qq" data-cmd="sqq" title="分享到QQ"></a>
                                    <a href="#" class="bds_more czs-add" data-cmd="more"></a>
                                </span>
                                <script>
                                    window._bd_share_config = {
                                        "common": {
                                            "bdSnsKey": {},
                                            "bdText": "",
                                            "bdMini": "1",
                                            "bdMiniList": false,
                                            "bdPic": "",
                                            "bdStyle": "0"
                                        },
                                        "share": {
                                            bdCustomStyle: themeUrl + '/assets/css/share.css'
                                        }
                                    };
                                    with (document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = themeUrl + '/assets/js/bdshare/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];
                                </script>
                            </div>

                        <!-- copyright -->
                        <div class="m-t-40">
                            <br>
                            <br>
                            <br>
                            <br>
                            <p class="article-copyright" >转载原创文章请注明，转载自: <a href="#">友叹</a> - <a href="#ff1677">{{ $article->title }} </a> ({{ url()->full() }})</p>
                        </div>
                        <!-- like -->
                        <div class="article-like">
                            <a href="javascript:;" data-action="ding" data-id="61" class="favorite ">
                                <span class="d-block">
                                        <i class="czs-thumbs-up-l"></i>
                                </span>
                                <span class="count d-block">{{ $article->commend_count }}</span>                                                                          </span>
                            </a>
                        </div>
                    </article>
                    <section id="post-link">
                        <div class="md-6 post-link-previous">
                            @if(count($prev_article))
                                <a href="/articles/{{ $prev_article->id }}" style="color: #999;" rel="prev"><i class="czs-angle-left-l"></i> {{ $prev_article->title }}</a>
                            @endif
                            @if(count($next_article))
                                <a href="/articles/{{ $next_article->id }}" style="color: #999;" rel="next">{{ $next_article->title }} <i class="czs-angle-right-l"></i></a>
                            @endif
                        </div>
                    </section>
                    <div class="related-post row-sm-up clear">
                        @foreach($linkArticles as $linkArticle)
                            <div class="col-md-4">
                                <div class="post post-style-card transition">
                                <a class="post-img img-response" href="#" style="background-image: url({{ $linkArticle->cover }})"></a>
                                <div class="post-top">
                                    <div class="post-title mb-1">
                                        <a href="#"> {{ $linkArticle->title }} </a>
                                    </div>
                                    <div class="post-top-meta mb-3">
                                        <a class="post-category" href="#">{{ $linkArticle->category->name }} </a>
                                        <span class="post-time">
                                            {{ $linkArticle->created_at->toDateString() }}
                                        </span>
                                    </div>
                                </div>
                                <div class="p-3">
                                    <ul class="post-meta-bottom">
                                        <li class="post-meta-author">
                                            <a class="d-block" href="#" target="_blank">
                                                <img alt='' src='{{ $linkArticle->cover }}' class='avatar avatar-96 photo' height='96' width='96'/>
                                                <span class="d-inline-block">{{ $linkArticle->user->name }}</span>
                                            </a>
                                        </li>
                                        <li class="post-meta-view pull-right">
                                            <i class="czs-eye"></i> {{ $linkArticle->comment_count ?: 1 }}
                                        </li>
                                        <li class="post-meta-comments pull-right">
                                            <i class="czs-talk"></i> {{ $linkArticle->review_count }}
                                        </li>
                                        <li class="post-meta-like pull-right">
                                            <i class="czs-heart"></i>
                                            <span class="count">{{ $linkArticle->visit_count ?: 1 }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="comments" name="comments">
                        <div id="respond" class="comment-respond">
                            <h3 id="reply-title" class="comment-reply-title">留言
                                <small>
                                    <a rel="nofollow" id="cancel-comment-reply-link" href="/archives/61#respond" style="display:none;">取消回复</a>
                                </small>
                            </h3>
                            <form action="" method="post" id="commentform" class="no-gutters comment-form">
                                <p class="comment-form-comment"><label for="comment">评论</label>
                                    <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" aria-required="true" required="required"></textarea>
                                </p>
                                <div class="comment-form-author col-md-4 comment-input">
                                    <input id="author" name="author" placeholder="昵称" type="text" value="" size="30"/>
                                </div>
                                <div class="comment-form-email col-md-4 comment-input">
                                    <input id="email" name="email" placeholder="邮箱" type="text" value="" size="30"/>
                                </div>
                                <div class="comment-form-url col-md-4 comment-input">
                                    <input id="url" name="url" placeholder="网址" type="text" value="" size="30"/>
                                </div>
                                <p class="form-submit">
                                    <input name="submit" style="background-color: #f44444;" type="submit" id="submit" class="submit" value="确定"/>
                                    <input type='hidden' name='comment_post_ID' value='61' id='comment_post_ID'/>
                                    <input type='hidden' name='comment_parent' id='comment_parent' value='0'/>
                                </p>
                                <p style="display: none;">
                                    <input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="f6d9fb7b2e"/>
                                </p>
                                <p style="display: none;">
                                    <input type="hidden" id="ak_js" name="ak_js" value="135"/>
                                </p>
                            </form>
                        </div>
                        <div class="comments-title">
                            评论(8)
                        </div>
                        <ul class="comments-list">
                            <li class="comment even thread-even depth-1" id="li-comment-57">
                                <div id="comment-57">
                                    <div class="comment-avatar">
                                        <img src="/static/picture/d52541f2c2a3406b8b1d4b7bfc287ebc.gif" class="avatar avatar-96" height="96" width="96">
                                    </div>
                                    <div class="comment-body">
                                        <span class="comment-user">2333</span>
                                        <p>这个主题怎么下呀</p>
                                        <div class="comment-meta">
                                            <a href="#" class="comment-date">
                                                03-20-2018
                                            </a>
                                            <span class="comment-action">
                                                <a rel='nofollow' class='comment-reply-link' href='#' aria-label='回复给2333'>
                                                    回复
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <ul class="children">
                                    <li class="comment byuser comment-author-designer bypostauthor odd alt depth-2"
                                        id="li-comment-115">
                                        <div id="comment-115">
                                            <div class="comment-avatar">
                                                <img alt='' src='/static/picture/avatar_user_1_1500356034-48x48.png' class='avatar avatar-48 photo' height='48' width='48'/>
                                            </div>
                                            <div class="comment-body">
                                            <span class="comment-user">
                                                <a href='#' rel='external nofollow' class='url'>designer</a>
                                            </span>
                                                <p>
                                                    我们的官方店铺购买下载：<a href="#" target="_blank" rel="noopener nofollow">黑镜主题-淘宝店铺</a>
                                                </p>
                                                <div class="comment-meta">
                                                    <a href="#" class="comment-date">
                                                        04-09-2018
                                                    </a>
                                                    <span class="comment-action">
                                                        <a rel='nofollow' class='comment-reply-link' href='#' aria-label='回复给designer'>
                                                            回复
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li><!-- #comment-## -->
                                </ul><!-- .children -->
                            </li><!-- #comment-## -->
                            <li class="comment even thread-odd thread-alt depth-1" id="li-comment-40">
                                <div id="comment-40">
                                    <div class="comment-avatar">
                                        <img src="/static/picture/d923e338d93c4244a1adcd0b5783978a.gif" class="avatar avatar-96" height="96" width="96">
                                    </div>
                                    <div class="comment-body">
                                        <span class="comment-user">
                                            <a href='#' rel='external nofollow' class='url'>吾关心</a>
                                        </span>
                                        <p>确实很大气，但右侧的作者下面，太空了，应该显点信息</p>
                                        <div class="comment-meta">
                                            <a href="#" class="comment-date">
                                                02-05-2018
                                            </a>
                                            <span class="comment-action">
                                            <a  class='comment-reply-link' href='#' aria-label='回复给吾关心'>回复</a>                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <ul class="children">
                                    <li class="comment byuser comment-author-designer bypostauthor odd alt depth-2" id="li-comment-42">
                                        <div id="comment-42">
                                            <div class="comment-avatar">
                                                <img alt='' src='/static/picture/avatar_user_1_1500356034-48x48.png' class='avatar avatar-48 photo' height='48' width='48'/>
                                            </div>
                                            <div class="comment-body">
                                            <span class="comment-user">
                                                <a href='#' rel='external nofollow' class='url'>designer</a>
                                            </span>
                                                <p>右侧作者下面可以自己添加小工具：标签云、热度文章列表、微信公众号等等。如果你不想要侧边可以让文章全屏</p>
                                                <div class="comment-meta">
                                                    <a href="#" class="comment-date">
                                                        02-06-2018
                                                    </a>
                                                    <span class="comment-action">
                                                        <a rel='nofollow' class='comment-reply-link' href='#' aria-label='回复给designer'>
                                                            回复
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 ">
                <aside id="sidebar">
                    <div class="sidebar-wrap">
                        <div class="affix">
                        </div>
                        <div class='sidebar-article'>

                            <div class="widget widget-profile-elegant">
                                <div class="widget-profile-avatar">
                                    <img alt='' src='/static/picture/avatar_user_1_1500356034-60x60.png' class='avatar avatar-60 photo' height='60' width='60'/>
                                </div>
                                <div class="widget-profile-user text-center f-bold">
                                    <a href="#" target="_blank">
                                        designer
                                    </a>
                                </div>
                                <div class="widget-profile-description text-center mb-4">
                                    超级无敌作图喵
                                </div>
                                <div class='widget-profile-role mb-6'>
                                    <span>管理员</span>
                                </div>
                                <div class="widget-profile-footer text-center">
                                    <a class="col-6 py-3 d-block" href="#" style="border-right: 1px solid #eee;">
                                        <i class="czs-doc-file-l"></i>作品
                                    </a>
                                    <a class="col-6 py-3 d-block" target="_blank" href="#">
                                        <i class="czs-network-l"></i>网站
                                    </a>
                                </div>
                            </div>
                            <div id="widget-resource" class="widget widget-active-user">
                                <div class="widget-title"><span>活跃用户</span></div>
                                <div class="active_user">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="http://heijing.chuangzaoshi.com/wp-content/uploads/2017/07/1.png" alt="">Mason - Laravel
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="http://heijing.chuangzaoshi.com/wp-content/uploads/2017/07/2.png" alt="">Able - Laravel
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="http://heijing.chuangzaoshi.com/wp-content/uploads/2017/07/3.png" alt="">Kaka - Laravel
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="http://heijing.chuangzaoshi.com/wp-content/uploads/2017/07/4.png" alt="">Peter - Laravel
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="http://heijing.chuangzaoshi.com/wp-content/uploads/2017/07/5.png" alt="">Vicky - Laravel
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div id="widget-resource" class="widget widget-resource">
                                <div class="widget-title"><span>推荐资源</span></div>
                                <div class="recommend_resource">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="http://heijing.chuangzaoshi.com/wp-content/uploads/2017/07/1.png" alt="">Laravel 中文文档
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="http://heijing.chuangzaoshi.com/wp-content/uploads/2017/07/2.png" alt="">Laravel 速查表
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="http://heijing.chuangzaoshi.com/wp-content/uploads/2017/07/3.png" alt="">Laravel 软件外包服务
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="http://heijing.chuangzaoshi.com/wp-content/uploads/2017/07/4.png" alt="">PHP之道 - PHPer必读
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="http://heijing.chuangzaoshi.com/wp-content/uploads/2017/07/5.png" alt="">Composer 中文全量对象
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="markdown-body editormd-preview-container" id="custom-toc-container">#custom-toc-container</div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </main>
    <!--详情页主体部分结束-->
@endsection

@section('scriptsAfterJs')
    <script type="text/javascript" src="/assets/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="/assets/lib/marked.min.js"></script>
    <script type="text/javascript" src="/assets/lib/prettify.min.js"></script>
    <script type="text/javascript" src="/assets/lib/raphael.min.js"></script>
    <script type="text/javascript" src="/assets/lib/underscore.min.js"></script>
    <script type="text/javascript" src="/assets/lib/sequence-diagram.min.js"></script>
    <script type="text/javascript" src="/assets/lib/flowchart.min.js"></script>
    <script type="text/javascript" src="/assets/lib/jquery.flowchart.min.js"></script>

    <script type="text/javascript" src="/assets/js/editor/editormd.min.js"></script>
    <script>
        $(function() {
            var content=$("#mD").val();//获取需要转换的内容
            $("#testEditorMdview").html('<textarea id="appendTest" style="display:none;"></textarea>');
            $("#appendTest").val(content);//将需要转换的内容加到转换后展示容器的textarea隐藏标签中
            //转换开始,第一个参数是上面的div的id
            editormd.markdownToHTML("testEditorMdview", {
                htmlDecode: "style,script,iframe", //可以过滤标签解码
                emoji: true,
                taskList:true,
                tex: true,               // 默认不解析
                flowChart:true,         // 默认不解析
                sequenceDiagram:true,  // 默认不解析

                tocm: true,
                tocContainer: "#custom-toc-container", // 自定义 ToC 容器层

            });
        });

        // toc 目录跟着滑动
        var target_box = $('#custom-toc-container').offset().top;

        $(window).scroll(function() {
            var s = $(window).scrollTop();
            if (s > target_box) {
                $('#custom-toc-container').addClass("fixed");
                $('#custom-toc-container').css("width", "265px");
            } else {
                $('#custom-toc-container').removeClass("fixed");
                $('#custom-toc-container').css("width", "");
            }
        });
    </script>
@endsection
