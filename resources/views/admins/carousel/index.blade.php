@extends('admins.layouts.main')
@section('content')
    <!--右侧内容-->
    <div class="pcoded-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header card">
                    <div class="card-block">
                        <h5 class="m-b-10">轮播管理</h5>
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
                                    轮播管理
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
                                                            <option value="1">删除轮播图</option>
                                                        </select>
                                                        <button class="btn m-l-10 btn-primary form-control">应用</button>

                                                        <input type="text" class="form-control m-l-20" style="width:130px; height: 38px;" name="search-author" placeholder="请输入轮播标题">

                                                        <button class="btn m-l-20 btn-primary form-control">筛选</button>

                                                        <form action="{{ route('admins.carousel.create') }}" method="get">
                                                            <button class="btn m-l-20 btn-primary form-control">添加轮播</button>
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
                                                            <th>图片</th>
                                                            <th>是否显示</th>
                                                            <th>操作</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($carousel as $val)
                                                        <tr>
                                                            <td scope="row">
                                                                <input type="checkbox" name="category">
                                                            </td>
                                                            <th scope="row">1</th>
                                                            <td>
                                                                <img src="/assets/images-old/carousel-1.png" alt="" style="height: 32px;">
                                                            </td>
                                                            <td>是</td>
                                                            <td>
                                                                <div class="row">
                                                                    <form action="{{ route('admins.carousel.edit', array('carousel' => $val->id)) }}" method="post">
                                                                        {{ csrf_field() }}
                                                                        <button class="btn btn-mini btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="编辑">
                                                                            <i class="ti-pencil-alt"></i>
                                                                        </button>
                                                                    </form>
                                                                    <button type="button" class="m-l-10 btn btn-mini btn-warning btn-danger waves-effect waves-light" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="删除栏目">
                                                                        <i class="ti-trash"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
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
        $(function() {
            var id = $('#dropdown-num').val();
            // 折叠效果
            $("#type-"+id).click(function () {
                $("#content"+id).slideToggle("fast");
                $(".down-icon-"+id).toggle();
                $(".right-icon-"+id).toggle();
            });
        });

        function clickDrop(num) {
            $('#content-'+num).slideToggle("fast");
            $('.down-icon-'+num).toggle();
            $('.right-icon-'+num).toggle();
        }

        $('#addDropdown').click(function () {
            var id = $('#dropdown-num').val();
            var num = parseInt(id);
            num++;
            var add_num = num + 3;
            if (num > 6) return false;
            if (num >= 2) {
                var str = '<div class="dropdown-list m-b-10" >\n' +
                    '<div class="dropdown-type" id="type-'+ num +'" onclick="clickDrop('+num+')">\n' +
                    '<i class="ti-arrow-circle-right m-r-10 right-icon-'+ num +'" style="display: none;"></i>\n' +
                    '                                                                                <i class="ti-arrow-circle-down m-r-10 down-icon-'+ num +'"></i>\n' +
                    '                                                                                新添加自定义类型\n' +
                    '                                                                            </div>\n' +
                    '                                                                            <div class="dropdown-content" id="content-'+ num +'">\n' +
                    '                                                                                <div class="row dropdown-title">\n' +
                    '                                                                                    <div class="form-group">\n' +
                    '                                                                                        <div class="row">\n' +
                    '                                                                                            <label class="col-sm-2 col-form-label">标题</label>\n' +
                    '                                                                                            <div class="col-sm-10">\n' +
                    '                                                                                                <input type="text" class="form-control" name="carouse-num">\n' +
                    '                                                                                            </div>\n' +
                    '                                                                                        </div>\n' +
                    '                                                                                    </div>\n' +
                    '                                                                                </div>\n' +
                    '                                                                                <div class="row dropdown-title">\n' +
                    '                                                                                    <div class="form-group">\n' +
                    '                                                                                        <div class="row">\n' +
                    '                                                                                            <label class="col-sm-3 col-form-label">显示开关</label>\n' +
                    '                                                                                            <div class="col-sm-3">\n' +
                    '                                                                                                <input type="checkbox" id="toggle-button-'+add_num+'" name="switch">\n' +
                    '                                                                                                <label for="toggle-button-'+add_num+'" class="button-label">\n' +
                    '                                                                                                    <span class="circle"></span>\n' +
                    '                                                                                                    <span class="text on">ON</span>\n' +
                    '                                                                                                    <span class="text off">OFF</span>\n' +
                    '                                                                                                </label>\n' +
                    '                                                                                            </div>\n' +
                    '                                                                                        </div>\n' +
                    '                                                                                    </div>\n' +
                    '                                                                                </div>\n' +
                    '                                                                                <div class="dropdown-title">\n' +
                    '                                                                                    <div class="form-group">\n' +
                    '                                                                                        <div class="row">\n' +
                    '                                                                                            <label class="col-sm-2 col-form-label">链接地址</label>\n' +
                    '                                                                                            <div class="col-sm-10">\n' +
                    '                                                                                                <input type="text" class="form-control" name="carouse-num">\n' +
                    '                                                                                                <p class="text-muted m-t-10">轮播图遮挡层透明度，范围是0到100</p>\n' +
                    '                                                                                            </div>\n' +
                    '                                                                                        </div>\n' +
                    '                                                                                    </div>\n' +
                    '                                                                                </div>\n' +
                    '                                                                                <div class="dropdown-title">\n' +
                    '                                                                                    <div class="form-group">\n' +
                    '                                                                                        <div class="row">\n' +
                    '                                                                                            <label class="col-sm-2 col-form-label">图片</label>\n' +
                    '                                                                                            <div class="col-sm-8">\n' +
                    '                                                                                                <input type="text" class="form-control" name="carouse-num">\n' +
                    '                                                                                            </div>\n' +
                    '                                                                                            <div class="m-l-5">\n' +
                    '                                                                                                <input type="file" id="input-file" style="display: none;">\n' +
                    '                                                                                                <label for="input-file" class="btn btn-primary" style="height: 35px;">上传</label>\n' +
                    '                                                                                            </div>\n' +
                    '                                                                                        </div>\n' +
                    '                                                                                    </div>\n' +
                    '                                                                                </div>\n' +
                    '                                                                                <div class="dropdown-title">\n' +
                    '                                                                                    <div class="row">\n' +
                    '                                                                                        <div class="col-sm-9"></div>\n' +
                    '                                                                                        <a class="btn btn-red" style="color: white;" onclick="removeDropdown(this, '+ num +')">Romove</a>\n' +
                    '                                                                                    </div>\n' +
                    '                                                                                </div>\n' +
                    '                                                                            </div></div>';
                $('#dropdowns').append(str);
                var new_num = parseInt(num);
                new_num--;
                for (var i = 1; i <= new_num; i++) {
                    if (!$('#content-'+i).is(':hidden')) {
                        $('#type-'+i).trigger('click');
                    }
                }
                $('#dropdown-num').val(num);
            } else {
                var str = '<div class="dropdown-list m-b-10" >\n' +
                    '<div class="dropdown-type" id="type-'+ num +'" onclick="clickDrop('+num+')">\n' +
                    '<i class="ti-arrow-circle-right m-r-10 right-icon-'+ num +'"></i>\n' +
                    '                                                                                <i class="ti-arrow-circle-down m-r-10 down-icon-'+ num +'" style="display: none;"></i>\n' +
                    '                                                                                新添加自定义类型\n' +
                    '                                                                            </div>\n' +
                    '                                                                            <div class="dropdown-content" id="content-'+ num +'" style="display: none;">\n' +
                    '                                                                                <div class="row dropdown-title">\n' +
                    '                                                                                    <div class="form-group">\n' +
                    '                                                                                        <div class="row">\n' +
                    '                                                                                            <label class="col-sm-2 col-form-label">标题</label>\n' +
                    '                                                                                            <div class="col-sm-10">\n' +
                    '                                                                                                <input type="text" class="form-control" name="carouse-num">\n' +
                    '                                                                                            </div>\n' +
                    '                                                                                        </div>\n' +
                    '                                                                                    </div>\n' +
                    '                                                                                </div>\n' +
                    '                                                                                <div class="row dropdown-title">\n' +
                    '                                                                                    <div class="form-group">\n' +
                    '                                                                                        <div class="row">\n' +
                    '                                                                                            <label class="col-sm-3 col-form-label">显示开关</label>\n' +
                    '                                                                                            <div class="col-sm-3">\n' +
                    '                                                                                                <input type="checkbox" id="toggle-button-4" name="switch">\n' +
                    '                                                                                                <label for="toggle-button-4" class="button-label">\n' +
                    '                                                                                                    <span class="circle"></span>\n' +
                    '                                                                                                    <span class="text on">ON</span>\n' +
                    '                                                                                                    <span class="text off">OFF</span>\n' +
                    '                                                                                                </label>\n' +
                    '                                                                                            </div>\n' +
                    '                                                                                        </div>\n' +
                    '                                                                                    </div>\n' +
                    '                                                                                </div>\n' +
                    '                                                                                <div class="dropdown-title">\n' +
                    '                                                                                    <div class="form-group">\n' +
                    '                                                                                        <div class="row">\n' +
                    '                                                                                            <label class="col-sm-2 col-form-label">链接地址</label>\n' +
                    '                                                                                            <div class="col-sm-10">\n' +
                    '                                                                                                <input type="text" class="form-control" name="carouse-num">\n' +
                    '                                                                                                <p class="text-muted m-t-10">轮播图遮挡层透明度，范围是0到100</p>\n' +
                    '                                                                                            </div>\n' +
                    '                                                                                        </div>\n' +
                    '                                                                                    </div>\n' +
                    '                                                                                </div>\n' +
                    '                                                                                <div class="dropdown-title">\n' +
                    '                                                                                    <div class="form-group">\n' +
                    '                                                                                        <div class="row">\n' +
                    '                                                                                            <label class="col-sm-2 col-form-label">图片</label>\n' +
                    '                                                                                            <div class="col-sm-8">\n' +
                    '                                                                                                <input type="text" class="form-control" name="carouse-num">\n' +
                    '                                                                                            </div>\n' +
                    '                                                                                            <div class="m-l-5">\n' +
                    '                                                                                                <input type="file" id="input-file" style="display: none;">\n' +
                    '                                                                                                <label for="input-file" class="btn btn-primary" style="height: 35px;">上传</label>\n' +
                    '                                                                                            </div>\n' +
                    '                                                                                        </div>\n' +
                    '                                                                                    </div>\n' +
                    '                                                                                </div>\n' +
                    '                                                                                <div class="dropdown-title">\n' +
                    '                                                                                    <div class="row">\n' +
                    '                                                                                        <div class="col-sm-9"></div>\n' +
                    '                                                                                        <a class="btn btn-red" style="color: white;" onclick="removeDropdown(this, '+ num +')">Romove</a>\n' +
                    '                                                                                    </div>\n' +
                    '                                                                                </div>\n' +
                    '                                                                            </div></div>';
                $('#dropdowns').append(str);
                $('#type-'+num).trigger('click');
                $('#dropdown-num').val(num);
            }
        });

        function removeDropdown(obj, num)
        {
            $(obj).parent().parent().parent().parent().remove();
            num--;
            $('#dropdown-num').val(num);
        }
</script>
@endsection
