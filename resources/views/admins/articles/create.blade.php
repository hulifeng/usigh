@extends('admins.layouts.main')
@section('afterCss')
    <link rel="stylesheet" type="text/css" href="/assets/css/editor/editormd.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/cropper/cropper.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/cropper/ImgCropping.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/tags-input/tagsinput.css">
@endsection
@section('content')
<!--右侧内容-->
    <div class="pcoded-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-header card">
                <div class="card-block">
                    <h5 class="m-b-10">创建文章</h5>
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
                                创建文章
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
                                @if($article->id)
                                    <form action="{{ route('admins.articles.update', array('article' => $article->id)) }}" method="post" enctype="multipart/form-data">
                                        {{ method_field('PUT') }}
                                @else
                                    <form action="{{ route('admins.articles.store') }}" method="post" enctype="multipart/form-data">
                                @endif
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h4 class="sub-title">标题</h4>
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <input type="text" name="title" class="form-control" placeholder="请输入标题" value="@if($article) {{ $article->title }}@endif">
                                                </div>
                                            </div>
                                            <h4 class="sub-title">封面</h4>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    {{--<input type="file" name="file" class="form-control" placeholder="请上传封面">--}}
                                                    <div class="row form-inline" style="position: relative;">
                                                        <!-- 保存用户自定义的背景图片 -->
                                                        <div style="width: 300px;height: 300px;border: 1px solid #F0F0F0;">
                                                            <img id="finalImg" src="@if($article->id){{ $article->cover }}@endif" width="100%">
                                                            <input type="hidden" name="finalImg">
                                                            <input type="hidden" name="file_type" value="">
                                                        </div>
                                                        <button type="button" style="position: absolute; left: 320px; bottom: 0;" class="btn btn-primary form-control uploadImage">上传封面</button>
                                                    </div>
                                                    <!--图片裁剪框 start-->
                                                    <div style="display: none" class="tailoring-container">
                                                        <div class="black-cloth" onclick="closeTailor(this)"></div>
                                                        <div class="tailoring-content">
                                                            <div class="tailoring-content-one">
                                                                <label title="上传图片" for="chooseImg" class="l-btn choose-btn">
                                                                    <input type="file" name="cover" id="chooseImg" class="hidden" onchange="selectImg(this)">
                                                                    选择图片
                                                                </label>
                                                                <div class="close-tailoring"  onclick="closeTailor(this)">×</div>
                                                            </div>
                                                            <div class="tailoring-content-two">
                                                                <div class="tailoring-box-parcel">
                                                                    <img id="tailoringImg">
                                                                </div>
                                                                <div class="preview-box-parcel">
                                                                    <p>图片预览：</p>
                                                                    <div class="square previewImg"></div>
                                                                    <div class="circular previewImg"></div>
                                                                </div>
                                                            </div>
                                                            <div class="tailoring-content-three">
                                                                <button type="button" class="l-btn cropper-reset-btn">复位</button>
                                                                <button type="button" class="l-btn cropper-rotate-btn">旋转</button>
                                                                <button type="button" class="l-btn cropper-scaleX-btn">换向</button>
                                                                <button type="button" class="l-btn sureCut" id="sureCut">确定</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--图片裁剪框 end-->
                                                </div>
                                            </div>
                                            <h4 class="sub-title">栏目</h4>
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <select name="category_id" id="category_id" class="form-control">
                                                        @foreach($category as $val)
                                                            <option value="{{ $val->id }}">{{ $val->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <h4 class="sub-title">标签 <span class="text-danger">（按Tab键添加标签）</span></h4>
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <input id="article-tag" name="tags" value="@if($tag_name){{ $tag_name }}@endif" style="display: none;" type="text">
                                                </div>
                                            </div>
                                            <h4 class="sub-title">来自</h4>
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <select name="is_original" id="is_original" class="form-control">
                                                        <option value="0">转载</option>
                                                        <option value="1">原创</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-primary"><i class="icofont icofont-paper-plane"></i> 发布文章</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mobile-inputs">
                                            <h4 class="sub-title">内容</h4>
                                            <div class="form-group">
                                                <div id="test-editormd" class="m-b-10">
                                                    <input type="hidden" name="user_id" value="{{ $adminId }}">
                                                    <input type="hidden" name="content">
                                                    <input type="hidden" name="html">
                                                    <textarea style="display:none;">@if($article){{ $article->content }}@endif</textarea>
                                                </div>
                                                <div>
                                                    <i class="ti-hand-point-up text-info"></i>
                                                    文章支持 <code>markdown</code> 语法哦！
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
    <script src="/assets/js/editor/editormd.min.js"></script>
    <script src="/assets/js/cropper.min.js"></script>
    <script src="/assets/js/tags-input/tagsinput.js"></script>
    <script type="text/javascript">
        var testEditor;

        $(function() {
            testEditor = editormd("test-editormd", {
                width   : "100%",
                height  : 740 ,
                syncScrolling : "single",
                path    : "/assets/lib/",
                editorTheme : "neo",
                imageUpload: true,
                imageFormats: ["jpg", "jpeg", "gif", "png", "bmp", "webp"],
                imageUploadURL: "",
                saveHTMLToTextarea : true, // 开启html
            });
        });

        $('#category_id').val({{ $article->category_id }});

        // 上传封面
        // 弹出框水平垂直居中
        (window.onresize = function () {
            var win_height = $(window).height();
            var win_width = $(window).width();
            if (win_width <= 768){
                $(".tailoring-content").css({
                    "top": (win_height - $(".tailoring-content").outerHeight())/2,
                    "left": 0
                });
            }else{
                $(".tailoring-content").css({
                    "top": (win_height - $(".tailoring-content").outerHeight())/2,
                    "left": (win_width - $(".tailoring-content").outerWidth())/2
                });
            }
        })();

        // 弹出图片裁剪框
        $(".uploadImage").on("click",function () {
            $(".tailoring-container").toggle();
        });

        // 图像上传
        function selectImg(file) {
            if (!file.files || !file.files[0]){
                return;
            }
            $("input[name='file_type']").val(file.files[0]['type']);
            var reader = new FileReader();
            reader.onload = function (evt) {
                var replaceSrc = evt.target.result;
                //更换cropper的图片
                $('#tailoringImg').cropper('replace', replaceSrc, false);//默认false，适应高度，不失真
            }
            reader.readAsDataURL(file.files[0]);
        }

        // cropper图片裁剪
        $('#tailoringImg').cropper({
            aspectRatio: 1/1,//默认比例
            preview: '.previewImg',//预览视图
            guides: false,  //裁剪框的虚线(九宫格)
            autoCropArea: 0.5,  //0-1之间的数值，定义自动剪裁区域的大小，默认0.8
            movable: false, //是否允许移动图片
            dragCrop: true,  //是否允许移除当前的剪裁框，并通过拖动来新建一个剪裁框区域
            movable: true,  //是否允许移动剪裁框
            resizable: true,  //是否允许改变裁剪框的大小
            zoomable: false,  //是否允许缩放图片大小
            mouseWheelZoom: false,  //是否允许通过鼠标滚轮来缩放图片
            touchDragZoom: true,  //是否允许通过触摸移动来缩放图片
            rotatable: true,  //是否允许旋转图片
            crop: function(e) {
                // 输出结果数据裁剪图像。
            }
        });

        // 旋转
        $(".cropper-rotate-btn").on("click",function () {
            $('#tailoringImg').cropper("rotate", 45);
        });

        // 复位
        $(".cropper-reset-btn").on("click",function () {
            $('#tailoringImg').cropper("reset");
        });

        // 换向
        var flagX = true;
        $(".cropper-scaleX-btn").on("click",function () {
            if(flagX){
                $('#tailoringImg').cropper("scaleX", -1);
                flagX = false;
            }else{
                $('#tailoringImg').cropper("scaleX", 1);
                flagX = true;
            }
            flagX != flagX;
        });

        // 裁剪后的处理
        $("#sureCut").on("click", function () {
            if ($("#tailoringImg").attr("src") == null) {
                return false;
            } else {
                var cas = $('#tailoringImg').cropper('getCroppedCanvas');//获取被裁剪后的canvas
                var file_type = $("input[name='file_type']").val();
                var base64url = cas.toDataURL(file_type); //转换为base64地址形式
                console.log(base64url);
                $("#finalImg").prop("src", base64url);//显示为图片的形式
                $("input[name='finalImg']").prop("value", base64url);//显示为图片的形式

                // 关闭裁剪框
                closeTailor();
            }
        });

        // 关闭裁剪框
        function closeTailor() {
            $(".tailoring-container").toggle();
        }

        $('#article-tag').tagsInput({
            interactive: true,
            placeholder: '添加一个标签',
            minChars: 2,
            maxChars: 20, // if not provided there is no limit
            limit: 5, // if not provided there is no limit
            hide: true,
            delimiter: [',',';'], // or a string with a single delimiter
            unique: true,
            removeWithBackspace: true
        });
    </script>
@endsection
