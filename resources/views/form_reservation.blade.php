<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>华业天成 - 预约交流</title>
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
    <script src="./js/myJs.js"></script>
    <script src="https://cbe.convertlab.com/cbe/collect?tid=1991677197867450&at=0&h=web"></script>
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

        <form id="theform" action="{{ URL::to("form-reservation.html") }}" class="form_content" method="post" data-cl-attached="false" data-cl-id="fe3dffa67c474f668eac28e62435c867">
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
                    <label>姓名</label><input name="name" type="text" placeholder="请输入您的姓名">
                </div>
                <div class="row">
                    <label>性别</label>
                    <div class="inputRadio">
                        <input type="radio" name="gender" value="1" id="man"  checked><label class="radioLabel" for="man">男</label>
                        <input type="radio" name="gender" value="0" id="woman"><label class="radioLabel" for="woman">女</label>
                    </div>
                </div>
                <div class="row">
                    <label>手机号码</label><input name="mobile" type="text" placeholder="请输入您的手机号码">
                </div>
                <div class="row">
                    <label>邮箱</label><input name="email" type="text" placeholder="请输入您的邮箱">
                </div>
            </div>

            <div class="form_content_item">
                <div class="title">公司信息</div>
                <div class="row">
                    <label>公司全称</label><input name="company" type="text" placeholder="请输入公司全称">
                </div>
                <div class="row">
                    <label>您的职务</label><input name="title" type="text" placeholder="请输入您的职务">
                </div>
            </div>

            <div class="form_content_item">
                <div class="title">交流目的</div>
                <div class="row">
                    <input name="custom_13114826" class="longInput" type="text" placeholder="请输入交流目的">
                </div>
            </div>

            <div class="form_content_item">
                <div class="title">交流话题</div>
                <div class="bx">
                    <textarea name="custom_655378" form="theform" class="textarea" placeholder="温馨提示：华业愿意与行业交换真知，我们会针对您的交流内容进行最大程度的资源适配，并进行相关交流安排，请静候通知。"></textarea>
                </div>
            </div>

            <div id="btnSubmit" class="submit">提交</div>
        </form>
        @if (session('status'))
            <script>alert("您的数据已经成功提交！");</script>
        @endif
    </div>
</div>

<script type="application/javascript">
    $(document).ready(function () {
        $.ajax({
            type: "get",  // 请求方式
            url: "https://host.convertlab.com/formdata/get/fe3dffa67c474f668eac28e62435c867", // 请求路径
            dataType: "json",   // 预期返回一个 json 类型数据
            success: function (data) {   // data是形参名，代表返回的数据
                $("#cltoken").val(data.token);
            }
        });
    });

    $('#btnSubmit').click(function () {

        var f =$("input[name='cl_context']").val();
        var a = f.split("&");
        var utma = a[0].split("=")[1];
        var utmb = a[1].split("=")[1];
        $("#utma").val(utma);
        $("#utmb").val(utmb);

        let data = $('#theform').serialize();

        $.ajax({
            type: "post",  // 请求方式
            data: data,
            url: "https://host.convertlab.com/form/fe3dffa67c474f668eac28e62435c867", // 请求路径
            dataType: "json",   // 预期返回一个 json 类型数据
            success: function (data) {   // data是形参名，代表返回的数据

            },
            complete: function (data) {
                $('#theform').submit(); // 先提交到convertlab，然后提交到自己的后台。
            }
        });

    });
</script>
<x-convertlab />
</body>
</html>
