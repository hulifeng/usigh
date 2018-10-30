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
                                <div class="card-header">
                                    <h5>
                                        @if($category->id)
                                            编辑栏目
                                        @else
                                            添加栏目
                                        @endif
                                    </h5>
                                </div>
                                <div class="card-block">
                                    @if($category->id)
                                        <form action="{{ route('admins.category.update', array('category' => $category)) }}" method="post">
                                            {{ method_field('PUT') }}
                                    @else
                                        <form action="{{ route('admins.category.store') }}" method="post">
                                    @endif
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h4 class="sub-title">名称</h4>
                                                <div class="form-group row">
                                                    <div class="col-sm-12">
                                                        <input type="text" name="name" class="form-control" placeholder="请输入分类名称" value="{{ $category->name }}">
                                                    </div>
                                                </div>
                                                <h4 class="sub-title">描述</h4>
                                                <div class="form-group row">
                                                    <div class="col-sm-12">
                                                        <textarea name="description"  class="form-control" style="resize:none;" id="description" cols="30" rows="10">{{ $category->description }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-12">
                                                        <button class="btn btn-primary"><i class="icofont icofont-paper-plane"></i> 添加</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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