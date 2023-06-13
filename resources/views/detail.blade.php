<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>华业天成 - 文章详情 - {{ $data->title }}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1, user-scalable=no" />
    <meta name="keywords" content="{{ \App\Util\MainHelper::getWebSiteDescription() }}" />
    <meta name="description" content="{{ \App\Util\MainHelper::getWebSitekeywords() }}" />
    <meta name="format-detection" content="telephone=no" />
    <link rel="stylesheet" href="./css/flex_default.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/flex_style.css?t=5">
    <script src="./js/jquery.min.js"></script>
    <script src="./js/flex.js"></script>
    <style>
        .richTxtBx img{
            object-fit:contain;
            max-width: 100%;
            align-content: center;
        }
    </style>
</head>
<body>
<div class="header">
    <x-nav />
</div>
<div class="flex-frame ">
    <div class="content">
        <div class="news_details">
            <div class="news_details_banner">
                <div class="wd_con">
                    <p class="title">最新动态</p>
                    <p class='date'>{{ date_format(date_create($data->event_day),"Y年m月d日") }}</p>
                </div>
            </div>

            <div class="news_details_content wd_con clearfix">
                <div class="crumbs">你的位置：
                    <span><a href="{{ URL::to('/') }}">首页</a>></span>
                    @if ($data->type == 0)
                    <span><a href="{{ URL::to('/news.html') }}">最新动态</a>></span>
                    @else
                    <span><a href="{{ URL::to('/news2.html') }}">最新动态</a>></span>
                    @endif
                    
                    <span>正文</span>
                </div>
                <div class="news_details_title">
                    {{ $data->title }}
                </div>
                <div class="richTxtBx">
                    {!! $data->content2 !!}
                </div>

                <div class="btnBx">
                    <span class="btn_df" onclick="history.back()">返回</span>
                    @if(isset($next))
                        <a href='{{ URL::to("/news_detail_$next->id.html") }}'><span class="btn_df">下一篇</span></a>
                    @else
                        <span class="btn_df" style="background-color: #c1c4c5;">下一篇</span>
                    @endif

                </div>
            </div>

            <div class="news_others">
                <!-- 推荐新闻 -->
                <div class="wd_con wow slideInRight">
                    <ul class="news_list_3column clearfix moreListContain">
                        @foreach($random3 as $r)
                        <li class="news_list_item">
                            <a href='{{ URL::to("/news_detail_$r->id.html") }}' target="_blank">
                                <div class="date ht_nowrap">{{ date_format(date_create($r->event_day),"Y年m月d日") }}</div>
                                <p class="des clampLine2">{{ strip_tags($r->title) }}</p>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <x-foot-contact />
</div>
<x-convertlab />
</body>
</html>
