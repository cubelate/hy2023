<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>华业天成 - 最新动态</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1, user-scalable=no" />
    <meta name="keywords" content="{{ \App\Util\MainHelper::getWebSiteDescription() }}" />
    <meta name="description" content="{{ \App\Util\MainHelper::getWebSitekeywords() }}" />
    <meta name="format-detection" content="telephone=no" />
    <link rel="stylesheet" href="./css/default.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<div class="header bg">
    <x-nav />
</div>

<div class="flex-frame">
    <div class="content newsListContent">
        <div class="newsList_banner">
            <div class="title wd_con">最新动态</div>
        </div>
        <div class="wd_con">
            <ul class=" list">
                @foreach($news as $data)
                    <li class="item">
                        <a href="{{ URL::to('/news_detail_'.$data->id.'.html') }}" >
                            <div class="date">
                                <div class="date_year">{{ date_format(date_create($data->event_day),"Y") }}</div>
                                <div class="date_day">{{ date_format(date_create($data->event_day),"m.d") }}</div>
                            </div>
                            <div class="des">
                                <p class="des_title ht_nowrap">{!! $data->title !!}</p>
                                <p class="des_txt clampLine2">
                                    {!! $data->desc_in_list !!}
                                </p>
                            </div>
                        </a>
                    </li>
                @endforeach


            </ul>

            <div class="pagination_df clearfix">
                {{ $news->links('vendor.pagination.my') }}
            </div>
            <!-- 分页器 -->
            <!-- <div class="pagination_df clearfix">
                <div class="item btn_df active">1</div>
                <div class="item btn_df">2</div>
                <div class="item btn_df">3</div>
                <div class="item btn_df item_more">...</div>
                <div class="item btn_df">9</div>
                <div class="next btn_df"></div>
            </div> -->
        </div>

    </div>

    <x-foot-contact />
</div>
<x-convertlab />
</body>
</html>
