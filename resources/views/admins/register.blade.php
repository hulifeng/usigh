@extends('admins.layouts.main')
@section('content')
    <section class="login p-fixed d-flex text-center bg-primary common-img-bg">
    <!-- Container-fluid starts -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <!-- Authentication card start -->
                <div class="signup-card card-block auth-body mr-auto ml-auto">
                    <form class="md-float-material">
                        <div class="text-center">
                            <img src="assets/images/logo_1.png" alt="logo.png" width="150">
                        </div>
                        <div class="auth-box">
                            <div class="row m-b-20">
                                <div class="col-md-12">
                                    <h3 class="text-center txt-primary">注册</h3>
                                </div>
                            </div>
                            <hr/>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="请输入用户名">
                                <span class="md-line"></span>
                            </div>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="请输入邮箱账号">
                                <span class="md-line"></span>
                            </div>
                            <div class="input-group">
                                <input type="password" class="form-control" placeholder="请输入密码">
                                <span class="md-line"></span>
                            </div>
                            <div class="input-group">
                                <input type="password" class="form-control" placeholder="确认密码">
                                <span class="md-line"></span>
                            </div>
                            <div class="row m-t-25 text-left">
                                <div class="col-md-12">
                                    <div class="checkbox-fade fade-in-primary">
                                        <label>
                                            <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                            <span class="text-inverse">每周定时发送简报</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-t-30">
                                <div class="col-md-12">
                                    <button type="button" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">现在加入！</button>
                                </div>
                            </div>
                            <hr/>
                            <div class="row">
                                <div class="col-md-10">
                                    <p class="text-inverse text-left m-b-0">欢迎你加入友叹！</p>
                                    <p class="text-inverse text-left"><b>Enjoy Oneself！</b></p>
                                </div>
                                <div class="col-md-2">
                                    <img src="assets/images/audio.svg" style="background-color: black;" alt="" width="20" height="20">
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- end of form -->
                </div>
                <!-- Authentication card end -->
            </div>
            <!-- end of col-sm-12 -->
        </div>
        <!-- end of row -->
    </div>
    <!-- end of container-fluid -->
</section>
@endsection

