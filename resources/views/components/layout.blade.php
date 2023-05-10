<!-- resources/views/components/layout.blade.php -->

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>华业天成</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1, user-scalable=no" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="format-detection" content="telephone=no" />

    {{ $cssjs }}
    <style>
        #screenInfo{
            padding:10px 15px;
            background:rgba(255,255,255,.6);
            color:black;
            font-size:24px;
            font-weight:bold;
            position: fixed;
            left:0;
            top:0;
            z-index: 100;
        }
    </style>
</head>
<body class="{{ $bodyextra }}">
<div class="header transparent">
    <a class="logoCase" href="index.html"><img src="img/logo.svg" alt=""></a>
    <ul class="nav">
        <li class="{{ \App\Util\NavUtil::getItemClass('/') }}"><a href="/">首页</a></li>
        <li class="{{ \App\Util\NavUtil::getItemClass('/case.html') }}"><a href="case.html">投资案例</a></li>
        <li class="{{ \App\Util\NavUtil::getItemClass('/team.html') }}"><a href="team.html">管理团队</a></li>
        <li class="{{ \App\Util\NavUtil::getItemClass('/empower.html') }}"><a href="empower.html">投后赋能</a></li>
        <li class="{{ \App\Util\NavUtil::getItemClass('/about.html') }}"><a href="about.html">关于我们</a></li>
        <li class="{{ \App\Util\NavUtil::getItemClass('/contact.html') }}"><a href="contact.html">联系我们</a></li>
        <li class="{{ \App\Util\NavUtil::getItemClass('/cases') }}"><img src="img/en.svg" alt=""></li>
    </ul>
</div>
{{ $slot }}
</body>
</html>
