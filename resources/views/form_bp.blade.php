<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>华业天成 - BP投送</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1, user-scalable=no" />
    <meta name="keywords" content="{{ \App\Util\MainHelper::getWebSiteDescription() }}" />
    <meta name="description" content="{{ \App\Util\MainHelper::getWebSitekeywords() }}" />
    <meta name="format-detection" content="telephone=no" />
    <link rel="stylesheet" href="./css/default.css">
    <link rel="stylesheet" href="./css/common.css?t={{ time() }}">
    <link rel="stylesheet" href="./css/style.css?t={{ time() }}">
    <script src="./js/jquery.min.js"></script>
    <script src="./js/myJs.js?t={{ time() }}"></script>
</head>
<body>
<div class="header bg">
    <x-nav />
</div>

<div class="flex-frame">
    <div class="from_wrap">
        <div class="form_banner">
            <img src="img/form_banner.png" alt="">
            <div class="form_banner_content">
                <div class="title">华业天成</div>
                <div class="des">
                    <p class="des_cn">通过价值投资和赋能·成就行业领导企业</p>
                    <p class="des_en">Achieve industry leading enterprises through value investment and empowerment</p>
                </div>
            </div>
        </div>

        <form id="theform" action="{{ URL::to("form-bp.html") }}" enctype="multipart/form-data" class="form_content" method="post">

            @if ($errors->any())
                <div class="alert alert-danger" style="padding-bottom: 20px; font-size: 20px; color: red">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <div class="form_content_item">
                <div class="title">基本信息</div>
                <div class="row">
                    <label>姓名</label><input type="text" name="name" placeholder="请输入您的姓名">
                </div>
                <div class="row">
                    <label>性别</label>
                    <div class="inputRadio">
                        <input type="radio" name="gender" id="man" value="1"  checked><label class="radioLabel" for="man">男</label>
                        <input type="radio" name="gender" id="woman" value="0"><label class="radioLabel" for="woman">女</label>
                    </div>
                </div>
                <div class="row">
                    <label>手机号码</label><input type="text" name="mobile" placeholder="请输入您的手机号码">
                </div>
                <div class="row">
                    <label>邮箱</label><input type="text" name="email" placeholder="请输入您的邮箱">
                </div>
            </div>

            <div class="form_content_item">
                <div class="title">公司信息</div>
                <div class="row">
                    <label>公司全称</label><input type="text" name="company" placeholder="请输入公司全称">
                </div>
                <div class="row">
                    <label>公司所属行业</label>
                    <span class="inline_block">
                        <div class="form_select user_noSelect">
                            <span class="select_placeholder">请选择公司所属行业</span>
                            <span class="select_value"></span>
                            <img class="form_moreBtn" src="img/icon_formMoreBtn.svg" alt="">
                        </div>
                        <ul class="form_selectOption">
                            <li>金融</li>
                            <li>互联网</li>
                            <li>运输</li>
                            <li>电子商务</li>
                            <li>仪器仪表</li>
                            <li>其他</li>
                        </ul>
                    </span>
                </div>
                <div class="row">
                    <label>您的职务</label><input name="title" type="text" placeholder="请输入您的职务">
                </div>
            </div>

            <div class="form_content_item">
                <div class="title">上传BP
                    <span class="uploadTip">4M以内的 PDF文件</span>
                    <div class="inline_block">
                        <input class="fileBtn" name="bpfile" type="file">
                        <img class="ico_pdf" src="img/ico_pdf.svg" alt="">
                    </div>
                </div>
            </div>
                <div id="btnSubmit" class="submit">提交</div>
            <script>
                $('#btnSubmit').click(function () {
                    $('#theform').submit();
                });
            </script>
        </form>

        @if (session('status'))
            <script>alert("您的数据已经成功提交！");</script>
        @endif
    </div>
</div>
</body>
</html>
