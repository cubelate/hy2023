<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>华业天成 - 联系我们</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1, user-scalable=no" />
    <meta name="keywords" content="{{ \App\Util\MainHelper::getWebSiteDescription() }}" />
    <meta name="description" content="{{ \App\Util\MainHelper::getWebSitekeywords() }}" />
    <meta name="format-detection" content="telephone=no" />
    <link rel="stylesheet" href="./css/flex_default.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/flex_style.css">
    <script src="./js/jquery.min.js"></script>
    <script src="./js/flex.js"></script>
</head>
<body class="contactUsBody">
<div class="header">
    <x-nav />
</div>
<div class="flex-frame contactUs">
    <div class="contactUs_content ">
        <div class="wd_con contactUs_contain clearfix">
            <div class="ltBar">
                <a class="btn" href="{{ URL::to("form-bp.html") }}" target="_blank">BP投送</a>
                <a class="btn" href="{{ URL::to("form-reservation.html") }}" target="_blank">预约交流</a>
                <a class="btn" href="{{ URL::to("job.html") }}" target="_blank">求贤若渴</a>

                <div class="contact_ways">
                    <div class="item">
                        <img class="icon" src="./img/ico_contact_1.svg" alt="">
                        <p class="txt">联系电话：<span class="txt_val">0755-86968295</span></p>
                    </div>

                    <div class="item">
                        <img class="icon" src="./img/ico_contact_2.svg" alt="">
                        <p class="txt">媒体合作：<span class="txt_val">pr@hua­cap­i­tal.com</span></p>
                    </div>

                    <div class="item">
                        <img class="icon" src="./img/ico_contact_3.svg" alt="">
                        <p class="txt">加入我们：<span class="txt_val">hr@hua­cap­i­tal.com</span></p>
                    </div>
                </div>
            </div>

            <ul class="positionBx">
                <li class="positionBx_item">
                    <div class="positionBx_item_content">
                        <div class="title">深圳</div>
                        <div class="des">深圳市南山区懿德轩海棠道3号别墅</div>
                        <a class="btn_position" href="javascript:open(`http://api.map.baidu.com/marker?location=22.555091,113.990494&title=深圳市南山区侨香路4066号懿德轩海棠道3号&content=懿德轩&output=html&src=${location.href}`)"><img src="img/ico_nav.svg" alt=""></a>
                    </div>
                    <div class="imgCase">
                        <img src="img/about_sz.png" alt="">
                    </div>
                </li>

                <li class="positionBx_item">
                    <div class="positionBx_item_content">
                        <div class="title">上海</div>
                        <div class="des">上海市静安区南京西路静安嘉里中心办公楼T2 3004室
                        </div>
                        <a class="btn_position" href="javascript:open(`http://api.map.baidu.com/marker?location=31.230297,121.455552&title=上海市静安区南京西路静安嘉里中心办公楼二座&content=静安嘉里中心办公楼-2座&output=html&src=${location.href}`)"><img src="img/ico_nav.svg" alt=""></a>
                    </div>
                    <div class="imgCase">
                        <img src="img/about_sh.gif" alt="">
                    </div>
                </li>

                <li class="positionBx_item">
                    <div class="positionBx_item_content">
                        <div class="title">香港</div>
                        <div class="des">香港皇后大道中12号上海商业银行大厦18楼</div>
                        <a class="btn_position" href="javascript:open(`http://api.map.baidu.com/marker?location=22.283459,114.169061&title=香港皇后大道中12号上海商业银行大厦18楼&content=上海商业银行大厦18楼&output=html&src=${location.href}`)"><img src="img/ico_nav.svg" alt=""></a>
                    </div>
                    <div class="imgCase">
                        <img src="img/about_hk.gif" alt="">
                    </div>
                </li>


            </ul>
        </div>
    </div>

</div>
<x-convertlab />
</body>
</html>
