@extends('admins.layouts.main')

@section('content')
    <!--右侧内容-->
    <div class="pcoded-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header card">
                    <div class="card-block">
                        <h5 class="m-b-10">栏目管理</h5>
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
                                    栏目管理
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- Basic Form Inputs card start -->
                            <div class="card">
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-sm-12 mobile-inputs">
                                            <div class="card-header">
                                                <div class="row">
                                                    <div class="col-sm-12 form-inline">
                                                        <select name="batch-handle" class="form-control" id="batch-handle">
                                                            <option value="0">批量操作</option>
                                                            <option value="1">删除栏目</option>
                                                        </select>
                                                        <button class="btn m-l-10 btn-primary form-control">应用</button>

                                                        <input type="text" class="form-control m-l-20" style="width:130px; height: 38px;" name="search-author" placeholder="请输入分类名称">

                                                        <button class="btn m-l-20 btn-primary form-control">筛选</button>

                                                        <form action="{{ route('admins.category.create') }}">
                                                            <button class="btn m-l-20 btn-primary form-control">添加栏目</button>
                                                        </form>
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
                                                                <input type="checkbox" name="allCategories">
                                                            </th>
                                                            <th>#</th>
                                                            <th>栏目名称</th>
                                                            <th>栏目描述</th>
                                                            <th>栏目下文章总数</th>
                                                            <th>操作</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($categories as $category)
                                                            <tr>
                                                            <td scope="row">
                                                                <input type="checkbox" name="category">
                                                            </td>
                                                            <th scope="row">{{ $category->id }}</th>
                                                            <td>{{ $category->name }}</td>
                                                            <td>{{ $category->description }}</td>
                                                            <td>{{ getArticlesCount($category->id) }}</td>
                                                            <td>
                                                                <div class="row">
                                                                    <form action="{{ route('admins.category.edit', array('id' => $category->id)) }}" method="get">
                                                                        {{ csrf_field() }}
                                                                        <button class="btn btn-mini btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="编辑">
                                                                            <i class="ti-pencil-alt"></i>
                                                                        </button>
                                                                    </form>

                                                                    <form action="{{ route('admins.category.destory', array('id' => $category->id)) }}" method="post">
                                                                        {{ method_field('DELETE') }}
                                                                        {{ csrf_field() }}
                                                                        <button class="m-l-10 btn btn-mini btn-warning btn-danger waves-effect waves-light" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="删除栏目">
                                                                            <i class="ti-trash"></i>
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                    {{ $categories->links() }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="styleSelector"></div>
        </div>
    </div>
    <!--右侧内容结束-->
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
            $("[name='allCategories']").click(function () {
                if ($(this).is(':checked')) {
                    $("[name='category']").attr("checked", true);
                } else {
                    $("[name='category']").attr("checked", false);
                }
            });
        });
    </script>
@endsection