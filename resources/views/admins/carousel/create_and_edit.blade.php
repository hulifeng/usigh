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
                                <div class="card-header">
                                    <div class="ui message yellow message-container col-sm-12">
                                        <i class="fr ti-close ti-close-outline"></i>
                                        自定义(广告、标签、分类) ，请上传高质量 『轮播图』，最多只能添加 6 张。 点击 "x" 可以关闭提示。<i class="ti-hand-point-right m-l-10 text-success"></i>
                                    </div>
                                </div>
                                <div class="card-block">
                                    @if($carousel->id)
                                        <form action="{{ route('admins.carousel.update', ['carousel' => '1']) }}" enctype="multipart/form-data" method="post">
                                            {{ method_field('PUT') }}
                                        @else
                                            <form action="{{ route('admins.carousel.store') }}" enctype="multipart/form-data" method="post">
                                    @endif
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group sub-title col-sm-12">
                                                    <div class="row">
                                                        <label class="col-sm-3 col-form-label">图片轮播</label>
                                                        <div class="col-sm-3">
                                                            <input type="checkbox" id="toggle-button-1" name="carousel_image_switch">
                                                            <label for="toggle-button-1" class="button-label">
                                                                <span class="circle"></span>
                                                                <span class="text on">ON</span>
                                                                <span class="text off">OFF</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group sub-title col-sm-12">
                                                    <div class="row">
                                                        <label class="col-sm-3 col-form-label">鼠标控制轮播开关</label>
                                                        <div class="col-sm-3">
                                                            <input type="checkbox" id="toggle-button-2" name="carousel_switch">
                                                            <label for="toggle-button-2" class="button-label">
                                                                <span class="circle"></span>
                                                                <span class="text on">ON</span>
                                                                <span class="text off">OFF</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group sub-title col-sm-12">
                                                    <div class="row">
                                                        <label class="col-sm-3 col-form-label">轮播图遮挡透明度</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" placeholder="0" id="carousel_opacity" name="carousel_opacity" value="0" style="width: 80px;">
                                                            <p class="text-muted m-t-10">轮播图遮挡层透明度，范围是0到100</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group sub-title col-sm-12">
                                                    <div class="row">
                                                        <label class="col-sm-3 col-form-label">关闭轮播图信息</label>
                                                        <div class="col-sm-3">
                                                            <input type="checkbox" id="toggle-button-3" name="carousel_info">
                                                            <label for="toggle-button-3" class="button-label">
                                                                <span class="circle"></span>
                                                                <span class="text on">ON</span>
                                                                <span class="text off">OFF</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group sub-title col-sm-12">
                                                    <div class="row">
                                                        <label class="col-sm-3 col-form-label">默认轮播图数量</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="carousel_num" name="carousel_num" value="0" style="width: 80px;">
                                                            <p class="text-muted m-t-10">没有置顶文章和自定义轮播内容时默认显示轮播数量（按照时间顺序显示）</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group sub-title col-sm-12" style="border: none;">
                                                    <div class="row">
                                                        <label class="col-sm-3 col-form-label">添加轮播图</label>
                                                        <div class="col-sm-9">
                                                            <div id="dropdowns">
                                                                @if($carousel->id)
                                                                    <?php $carousel_meta = json_decode($carousel->carousel_meta, true)['0'];?>
                                                                    <input type="hidden" id="dropdown-num" value="{{ count($carousel_meta['carousel_titles']) }}">
                                                                    @for($i = 0; $i < count($carousel_meta['carousel_titles']); $i++)
                                                                        <div class="dropdown-list m-b-10" >
                                                                            <div class="dropdown-type" id="type-{{  $i + 4 }}" onclick="clickDrop({{ $i + 4 }})">
                                                                                <i class="ti-arrow-circle-right m-r-10 right-icon-{{  $i + 4 }}"></i>
                                                                                <i class="ti-arrow-circle-down m-r-10 down-icon-{{  $i + 4 }}" style="display: none;"></i>新添加自定义类型
                                                                            </div>
                                                                            <div class="dropdown-content" id="content-{{  $i + 4 }}" style="display: none;">
                                                                                <div class="row dropdown-title">
                                                                                    <div class="form-group">
                                                                                        <div class="row">
                                                                                            <label class="col-sm-2 col-form-label">标题</label>
                                                                                            <div class="col-sm-10">
                                                                                                <input type="text" class="form-control" name="carousel_titles[]" value="{{ $carousel_meta['carousel_titles'][$i] }}" required>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row dropdown-title">
                                                                                    <div class="form-group">
                                                                                        <div class="row">
                                                                                            <label class="col-sm-2 col-form-label">显示开关</label>
                                                                                            <div class="col-sm-2">
                                                                                                <input type="hidden"  name="hi_carousel_shows[]" value="@if($carousel_meta){{ $carousel_meta['carousel_shows'][$i] }}@else off @endif">
                                                                                                <input type="checkbox" id="toggle-button-{{  $i + 4 }}" name="carousel_shows[]" onclick="click_switch($this)" @if($carousel_meta['carousel_shows'][$i] == 'on') checked @endif>
                                                                                                <label for="toggle-button-{{  $i + 4 }}" class="button-label">
                                                                                                    <span class="circle"></span>
                                                                                                    <span class="text on">ON</span>
                                                                                                    <span class="text off">OFF</span>
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="dropdown-title">
                                                                                    <div class="form-group">
                                                                                        <div class="row">
                                                                                            <label class="col-sm-2 col-form-label">图片</label>
                                                                                            <div class="col-sm-9">
                                                                                                <input type="text" class="form-control" name="old_uploads[]" value="{{ $carousel_meta['uploads'][$i] }}">
                                                                                            </div>
                                                                                            <div class="m-l-5">
                                                                                                <input type="file" id="input-file{{  $i + 4 }}" name="uploads[]" multiple style="display: none;">
                                                                                                <label for="input-file{{  $i + 4 }}" class="btn btn-primary" style="height: 35px;">上传</label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="dropdown-title">
                                                                                    <div class="row">
                                                                                        <div class="col-sm-10"></div>
                                                                                        <a class="btn btn-red" style="color: white;" onclick="removeDropdown(this, {{  $i + 4 }})">Romove</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endfor
                                                                @else
                                                                    <input type="hidden" id="dropdown-num" value="0"/>
                                                                @endif
                                                            </div>
                                                            <button class="m-t-10 btn btn-primary btn-mini" id="addDropdown" onclick="return false;">新增</button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <button class="btn btn-primary"><i class="icofont icofont-paper-plane"></i> 确认添加</button>
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
            var on = 'on';
            var off = 'off';
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
                    '                                                                                                <input type="text" class="form-control" required name="carousel_titles[]">\n' +
                    '                                                                                            </div>\n' +
                    '                                                                                        </div>\n' +
                    '                                                                                    </div>\n' +
                    '                                                                                </div>\n' +
                    '                                                                                <div class="row dropdown-title">\n' +
                    '                                                                                    <div class="form-group">\n' +
                    '                                                                                        <div class="row">\n' +
                    '                                                                                            <label class="col-sm-2 col-form-label">显示开关</label>\n' +
                    '                                                                                            <div class="col-sm-2">\n' +
                    '                                                                                                <input type="hidden" name="hi_carousel_shows[]" value="off" >\n' +
                    '                                                                                                <input type="checkbox" id="toggle-button-'+ add_num +'" name="carousel_shows[]" value="off" onclick="click_switch(this)">\n' +
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
                    '                                                                                            <label class="col-sm-2 col-form-label">图片</label>\n' +
                    '                                                                                            <div class="col-sm-9">\n' +
                    '                                                                                                <input type="text" class="form-control">\n' +
                    '                                                                                            </div>\n' +
                    '                                                                                            <div class="m-l-5">\n' +
                    '                                                                                                <input type="file" id="input-file'+num+'" name="uploads[]" multiple style="display: none;">\n' +
                    '                                                                                                <label for="input-file'+num+'" class="btn btn-primary" style="height: 35px;">上传</label>\n' +
                    '                                                                                            </div>\n' +
                    '                                                                                        </div>\n' +
                    '                                                                                    </div>\n' +
                    '                                                                                </div>\n' +
                    '                                                                                <div class="dropdown-title">\n' +
                    '                                                                                    <div class="row">\n' +
                    '                                                                                        <div class="col-sm-10"></div>\n' +
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
                    '<div class="dropdown-type" id="type-'+ add_num +'" onclick="clickDrop('+ add_num +')">\n' +
                    '<i class="ti-arrow-circle-right m-r-10 right-icon-'+ add_num +'"></i>\n' +
                    '                                                                                <i class="ti-arrow-circle-down m-r-10 down-icon-'+ add_num +'" style="display: none;"></i>\n' +
                    '                                                                                新添加自定义类型\n' +
                    '                                                                            </div>\n' +
                    '                                                                            <div class="dropdown-content" id="content-'+ add_num +'" style="display: none;">\n' +
                    '                                                                                <div class="row dropdown-title">\n' +
                    '                                                                                    <div class="form-group">\n' +
                    '                                                                                        <div class="row">\n' +
                    '                                                                                            <label class="col-sm-2 col-form-label">标题</label>\n' +
                    '                                                                                            <div class="col-sm-10">\n' +
                    '                                                                                                <input type="text" class="form-control" name="carousel_titles[]" required>\n' +
                    '                                                                                            </div>\n' +
                    '                                                                                        </div>\n' +
                    '                                                                                    </div>\n' +
                    '                                                                                </div>\n' +
                    '                                                                                <div class="row dropdown-title">\n' +
                    '                                                                                    <div class="form-group">\n' +
                    '                                                                                        <div class="row">\n' +
                    '                                                                                            <label class="col-sm-2 col-form-label">显示开关</label>\n' +
                    '                                                                                            <div class="col-sm-2">\n' +
                    '                                                                                                <input type="hidden" name="hi_carousel_shows[]" value="off">\n' +
                    '                                                                                                <input type="checkbox" id="toggle-button-'+ add_num +'" name="carousel_shows[]" value="off" onclick="click_switch(this)">\n' +
                    '                                                                                                <label for="toggle-button-'+ add_num +'" class="button-label">\n' +
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
                    '                                                                                            <label class="col-sm-2 col-form-label">图片</label>\n' +
                    '                                                                                            <div class="col-sm-9">\n' +
                    '                                                                                                <input type="text" class="form-control">\n' +
                    '                                                                                            </div>\n' +
                    '                                                                                            <div class="m-l-5">\n' +
                    '                                                                                                <input type="file" id="input-file'+ add_num +'" name="uploads[]" multiple style="display: none;">\n' +
                    '                                                                                                <label for="input-file'+ add_num +'" class="btn btn-primary" style="height: 35px;">上传</label>\n' +
                    '                                                                                            </div>\n' +
                    '                                                                                        </div>\n' +
                    '                                                                                    </div>\n' +
                    '                                                                                </div>\n' +
                    '                                                                                <div class="dropdown-title">\n' +
                    '                                                                                    <div class="row">\n' +
                    '                                                                                        <div class="col-sm-10"></div>\n' +
                    '                                                                                        <a class="btn btn-red" style="color: white;" onclick="removeDropdown(this, '+ add_num +')">Romove</a>\n' +
                    '                                                                                    </div>\n' +
                    '                                                                                </div>\n' +
                    '                                                                            </div></div>';
                $('#dropdowns').append(str);
                $('#type-'+add_num).trigger('click');
                $('#dropdown-num').val(add_num);
            }
        });

        function removeDropdown(obj, num)
        {
            $(obj).parent().parent().parent().parent().remove();
            num--;
            $('#dropdown-num').val(num);
        }

        // 设置轮播默认值
        @if($carousel->id)
            @if($carousel_meta['carousel_image_switch'] == 'on')
                $('#toggle-button-1').trigger('click');
            @endif

            @if(isset($carousel_meta['carousel_switch']) && $carousel_meta['carousel_switch'] == 'on')
                $('#toggle-button-2').trigger('click');
            @endif

            @if(isset($carousel_meta['carousel_info']))
                $('#toggle-button-3').trigger('click');
            @endif

            @if($carousel_meta['carousel_opacity'])
                $("#carousel_opacity").val({{ $carousel_meta['carousel_opacity'] }});
            @endif

            @if($carousel_meta['carousel_num'])
                $("#carousel_num").val({{ $carousel_meta['carousel_num'] }});
            @endif
        @endif

        // 切换滑块设置 val
        function click_switch(obj)
        {
           if ($(obj).prev().val() == 'on') {
               $(obj).prev().val('off');
           } else {
               $(obj).prev().val('on');
           }
        }
    </script>
@endsection
