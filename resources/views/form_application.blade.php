<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>华业天成 - 简历投递</title>
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

        <form action="" class="form_content">
            <div class="form_content_item">
                <div class="title">基本信息</div>
                <div class="row">
                    <label>姓名</label><input type="text" placeholder="请输入您的姓名">
                </div>
                <div class="row">
                    <label>性别</label>
                    <div class="inputRadio">
                        <input type="radio" name="gender" id="man"  checked><label class="radioLabel" for="man">男</label>
                        <input type="radio" name="gender" id="woman"><label class="radioLabel" for="woman">女</label>
                    </div>
                </div>
                <div class="row">
                    <label>手机号码</label><input type="text" placeholder="请输入您的手机号码">
                </div>
                <div class="row">
                    <label>邮箱</label><input type="text" placeholder="请输入您的邮箱">
                </div>
            </div>


            <div class="form_content_item">
                <div class="title">上传简历
                    <span class="uploadTip">4M以内的文件</span>
                    <div class="inline_block">
                        <input class="fileBtn" type="file">
                        <img class="ico_upload" src="img/ico_upload.svg" alt="">
                    </div>
                </div>
            </div>

            <div class="submit">提交</div>
        </form>

    </div>
</div>
</body>
</html>
