@extends('admins.layouts.main')

@section('content')
<!--右侧内容-->
    <div class="pcoded-content">
                <div class="main-body">
                    <div class="page-wrapper">
                        <div class="page-header card">
                            <div class="card-block">
                                <h5 class="m-b-10">文章回收站</h5>
                                <p class="text-muted m-b-10">生活放任我们去流浪，当你归来的时候是否能够衣锦还乡？</p>
                                <ul class="breadcrumb-title b-t-default p-t-10">
                                    <li class="breadcrumb-item">
                                        <a href="index.html">
                                            <i class="fa fa-home"></i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="#">
                                            内容管理
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="#">
                                            文章管理
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="#">
                                            文章回收站
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="page-body">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-sm-12 form-inline">
                                            <select name="batch-handle" class="form-control" id="batch-handle">
                                                <option value="0">批量操作</option>
                                                <option value="1">批量还原</option>
                                            </select>
                                            <button class="btn m-l-10 btn-primary form-control">应用</button>

                                            <select name="all-categories" class="m-l-20 form-control" id="all-categories">
                                                <option value="0">所有分类</option>
                                                <option value="1">问答</option>
                                                <option value="2">话题</option>
                                                <option value="3">Laravel</option>
                                            </select>

                                            <select name="all-tags" class="m-l-20 form-control" id="all-tags">
                                                <option value="0">所有标签</option>
                                                <option value="1">Laravel</option>
                                                <option value="2">thinkphp</option>
                                                <option value="3">Yii</option>
                                            </select>

                                            <input type="text" class="form-control m-l-20" style="height: 38px;" name="search-author" placeholder="请输入作者名字">

                                            <button class="btn m-l-20 btn-primary form-control">筛选</button>

                                            <button class="btn m-l-10 btn-danger" data-toggle="tooltip" data-placement="bottom" data-original-title="清空筛选"><i class="ti-reload"></i></button>
                                        </div>
                                    </div>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li><i class="fa fa-chevron-left"></i></li>
                                            <li><i class="fa fa-window-maximize full-card"></i></li>
                                            <li><i class="fa fa-minus minimize-card"></i></li>
                                            <li><i class="fa fa-refresh reload-card"></i></li>
                                            <li><i class="fa fa-times close-card"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-block table-border-style">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th scope="row">
                                                    <input type="checkbox" name="allArticles">
                                                </th>
                                                <th>ID</th>
                                                <th>标题</th>
                                                <th>作者</th>
                                                <th>分类目录</th>
                                                <th>标签</th>
                                                <th>日期</th>
                                                <th>操作</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($articles as $article)
                                                <tr>
                                                <td scope="row">
                                                    <input type="checkbox" name="article">
                                                </td>
                                                <th scope="row">{{ $article->id }}</th>
                                                <td>
                                                    <a href="#">
                                                        {{ $article->title }}
                                                    </a>
                                                </td>
                                                <td>{{ $article->user->name }}</td>
                                                <td>{{ $article->category_id }}</td>
                                                <td>Laravel PHP</td>
                                                <td>{{ $article->created_at->toDateString() }}</td>
                                                <td>
                                                    <a target="_blank" href="{{ route('articles.show', array("article" => $article->id)) }}" class="m-l-10 btn btn-mini btn-success btn-danger waves-effect waves-light" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="查看">
                                                        <i class="ti-eye" style="color: white;"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        {{ $articles->links() }}
                                        {{--<ul class="pagination-new">--}}
                                            {{--<li><a href="#">&laquo;</a></li>--}}
                                            {{--<li class="active"><a href="#">1</a></li>--}}
                                            {{--<li class="disabled"><a href="#">2</a></li>--}}
                                            {{--<li><a href="#">3</a></li>--}}
                                            {{--<li><a href="#">4</a></li>--}}
                                            {{--<li><a href="#">5</a></li>--}}
                                            {{--<li><a href="#">&raquo;</a></li>--}}
                                        {{--</ul>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="styleSelector"></div>
                </div>
            </div>
@endsection

@section('scriptsAfterJs')
    <!-- Custom js -->
    <script type="text/javascript" src="/assets/js/script.js"></script>
    <script src="/assets/js/pcoded.min.js"></script>
    <script src="/assets/js/vartical-demo.js"></script>
    <script src="/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript">
        $(function () {
            // 给全选设置点击事件
            $("[name='allArticles']").click(function () {
                if ($(this).is(':checked')) {
                    $("[name='article']").attr("checked", true);
                } else {
                    $("[name='article']").attr("checked", false);
                }
            });
        });
    </script>
@endsection