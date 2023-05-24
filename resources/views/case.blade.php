<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>华业天成 - 投资案例</title>
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
<body>
<div class="header">
    <x-nav />
</div>
<div class="flex-frame">
    <div class="content">
        <div class="example_wrap">
            <div class="example_wrap_contain">
                <div class="effect_contain-content">
                    <p class="title  ">投资案例</p>
                    <p class="des  ">我们聚焦信息科技以及信息科技驱动的行业变革，包括半导体、云与数字化、智能终端、数字能源等领域，致力于通过价值投资和赋能，成就行业领导企业，为新一代中国科技企业群体崛起作出贡献。</p>
                </div>
            </div>
        </div>


        <div class="example_content">
            <div class="example_tab  ">
                <div class="item active"><span class="title">全部行业</span></div>
                <div class="item"><span class="title">半导体</span></div>
                <div class="item"><span class="title">云与数字化</span></div>
                <div class="item"><span class="title">智能终端</span></div>
                <div class="item"><span class="title">数字能源</span></div>
            </div>
            <div class="example_bx  ">
                <!-- 1 -->
                <div class="example_tabContent clearfix active">
                    @foreach($all as $data)
                        <div class="item">
                            <a  class="item-bx" href="{{ $data['web_url'] }}" target="_blank">
                                @if(isset($data['stock_code']))
                                <div class="code">股票代码  {{ $data['stock_code'] }}</div>
                                @endif
                                <i class="imgCase">
                                    <img src="{{ Storage::url($data['logo']) }}" alt="">
                                </i>
                                <div class="des">
                                    <p class="title clampLine1">{{ $data['name'] }}</p>
                                    <p class="txt clampLine2">{!! $data['brief'] !!}</p>
                                </div>
                            </a>

                            @if(isset($data['latest_title']))
                            <div class="exampleNews">
                                <div class="exampleNews_content">
                                    <p class="exampleNews_content_title">最新动态</p>
                                    <ul class="list">
                                        <!-- 只展示1条 -->
                                        <li class="li">
                                            <a href="{{ $data['latest_url'] }}" target="_blank">
                                                <p class="date">{{ date_format(date_create($data['latest_day']),"Y年m月d日") }}</p>
                                                <p class="desTxt clampLine2">{{ $data['latest_title'] }}</p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            @endif
                        </div>
                    @endforeach
                </div>

                <!-- 2 -->
                <!-- 半导体 -->
                <div class="example_tabContent clearfix ">
                    @foreach($bdt as $data)
                        <div class="item">
                            <a  class="item-bx" href="{{ $data['web_url'] }}" target="_blank">
                                @if(isset($data['stock_code']))
                                <div class="code">股票代码  {{ $data['stock_code'] }}</div>
                                @endif
                                <i class="imgCase">
                                    <img src="{{ Storage::url($data['logo']) }}" alt="">
                                </i>
                                <div class="des">
                                    <p class="title clampLine1">{{ $data['name'] }}</p>
                                    <p class="txt clampLine2">{!! $data['brief'] !!}</p>
                                </div>
                            </a>

                            @if(isset($data['latest_title']))
                                <div class="exampleNews">
                                    <div class="exampleNews_content">
                                        <p class="exampleNews_content_title">最新动态</p>
                                        <ul class="list">
                                            <!-- 只展示1条 -->
                                            <li class="li">
                                                <a href="{{ $data['latest_url'] }}" target="_blank">
                                                    <p class="date">{{ date_format(date_create($data['latest_day']),"Y年m月d日") }}</p>
                                                    <p class="desTxt clampLine2">{{ $data['latest_title'] }}</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endforeach

                </div>

                <!-- 3 -->
                <!-- 云于数字化 -->
                <div class="example_tabContent clearfix ">
                    @foreach($yyszh as $data)
                        <div class="item">
                            <a  class="item-bx" href="{{ $data['web_url'] }}" target="_blank">
                                @if(isset($data['stock_code']))
                                <div class="code">股票代码  {{ $data['stock_code'] }}</div>
                                @endif
                                <i class="imgCase">
                                    <img src="{{ Storage::url($data['logo']) }}" alt="">
                                </i>
                                <div class="des">
                                    <p class="title clampLine1">{{ $data['name'] }}</p>
                                    <p class="txt clampLine2">{!! $data['brief'] !!}</p>
                                </div>
                            </a>

                            @if(isset($data['latest_title']))
                                <div class="exampleNews">
                                    <div class="exampleNews_content">
                                        <p class="exampleNews_content_title">最新动态</p>
                                        <ul class="list">
                                            <!-- 只展示1条 -->
                                            <li class="li">
                                                <a href="{{ $data['latest_url'] }}" target="_blank">
                                                    <p class="date">{{ date_format(date_create($data['latest_day']),"Y年m月d日") }}</p>
                                                    <p class="desTxt clampLine2">{{ $data['latest_title'] }}</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endforeach

                </div>

                <!-- 4 -->
                <!-- 智能终端 -->
                <div class="example_tabContent clearfix ">
                        @foreach($znzd as $data)
                            <div class="item">
                                <a  class="item-bx" href="{{ $data['web_url'] }}" target="_blank">
                                    @if(isset($data['stock_code']))
                                    <div class="code">股票代码  {{ $data['stock_code'] }}</div>
                                    @endif
                                    <i class="imgCase">
                                        <img src="{{ Storage::url($data['logo']) }}" alt="">
                                    </i>
                                    <div class="des">
                                        <p class="title clampLine1">{{ $data['name'] }}</p>
                                        <p class="txt clampLine2">{!! $data['brief'] !!}</p>
                                    </div>
                                </a>

                                @if(isset($data['latest_title']))
                                    <div class="exampleNews">
                                        <div class="exampleNews_content">
                                            <p class="exampleNews_content_title">最新动态</p>
                                            <ul class="list">
                                                <!-- 只展示1条 -->
                                                <li class="li">
                                                    <a href="{{ $data['latest_url'] }}" target="_blank">
                                                        <p class="date">{{ date_format(date_create($data['latest_day']),"Y年m月d日") }}</p>
                                                        <p class="desTxt clampLine2">{{ $data['latest_title'] }}</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                </div>

                <!-- 5 -->
                <!-- 数字能源 -->
                <div class="example_tabContent clearfix">
                    @foreach($szny as $data)
                        <div class="item">
                            <a  class="item-bx" href="{{ $data['web_url'] }}" target="_blank">
                                @if(isset($data['stock_code']))
                                <div class="code">股票代码  {{ $data['stock_code'] }}</div>
                                @endif
                                <i class="imgCase">
                                    <img src="{{ Storage::url($data['logo']) }}" alt="">
                                </i>
                                <div class="des">
                                    <p class="title clampLine1">{{ $data['name'] }}</p>
                                    <p class="txt clampLine2">{!! $data['brief'] !!}</p>
                                </div>
                            </a>

                            @if(isset($data['latest_title']))
                                <div class="exampleNews">
                                    <div class="exampleNews_content">
                                        <p class="exampleNews_content_title">最新动态</p>
                                        <ul class="list">
                                            <!-- 只展示1条 -->
                                            <li class="li">
                                                <a href="{{ $data['latest_url'] }}" target="_blank">
                                                    <p class="date">{{ date_format(date_create($data['latest_day']),"Y年m月d日") }}</p>
                                                    <p class="desTxt clampLine2">{{ $data['latest_title'] }}</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


    <x-foot-contact />
</div>
<x-convertlab />
</body>
</html>
