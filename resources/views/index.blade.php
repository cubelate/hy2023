<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>华业天成 - 首页</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1, user-scalable=no" />
    <meta name="keywords" content="{{ \App\Util\MainHelper::getWebSiteDescription() }}" />
    <meta name="description" content="{{ \App\Util\MainHelper::getWebSitekeywords() }}" />
    <meta name="format-detection" content="telephone=no" />
    <link rel="stylesheet" href="./css/default.css">
    <link rel="stylesheet" href="./css/animate.css">
    <link rel="stylesheet" href="./css/idangerous.swiper.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/jquery.min.js"></script>
    <script src="./js/wow.min.js"></script>
    <script src="./js/idangerous.swiper.min.js"></script>
    <script src="./js/myJs.js"></script>
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
<body>
<div class="header transparent">
    <x-nav />
</div>

<div class="flex-frame">
    <!-- <div id="screenInfo"></div> -->
    <div class="pageContainer">
        <!-- sideBar nav -->
        <ul class="pageBar">
            <li class="pageBar_item active"><span class="txt">HOME</span></li>
            <li class="pageBar_item"><span class="txt">华业天成</span></li>
            <li class="pageBar_item"><span class="txt">投资案例</span></li>
            <li class="pageBar_item"><span class="txt">最新动态</span></li>
            <li class="pageBar_item"><span class="txt">联系我们</span></li>
        </ul>

        <!-- page slider content -->
        <div class="content page-wrapper" >
            <div class="swiper swiper_home page-slide wow slideInRight">
                <div class="swiper-wrapper">
                    <div class="swiper-slide ">
                        <img src="img/banner-1.jpg" alt="">
                        <div class="wd_con swiper-txtBx lt wow fadeIn" data-wow-delay="1.2s" >
                            <!-- lt -->
                            <p class="swiper-title ">为新一代中国科技企业
                                群体崛起而努力</p>
                            <p class="swiper-subTitle ">Commit to the rise of a new generation
                                of Chinese technological companies</p>
                        </div>

                    </div>
                    <div class="swiper-slide ">
                        <img src="img/banner-2.jpg" alt="">
                        <div class="wd_con swiper-txtBx rt  wow fadeIn"  data-wow-delay="1.2s">
                            <!-- rt -->
                            <p class="swiper-title ">通过价值投资和赋能
                                成就科技行业领导企业</p>
                            <p class="swiper-subTitle ">Create leaders of technology industry
                                through value investing and empowerment</p>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <img src="img/banner-3.jpg" alt="">
                        <div class="wd_con swiper-txtBx rt  wow fadeIn" data-wow-delay="1.2s">
                            <!-- rt -->
                            <p class="swiper-title ">聚焦投资信息科技及
                                信息科技驱动的行业变革</p>
                            <p class="swiper-subTitle ">Focus on investing in IT industry
                                and IT-driven revolution</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-btnBx">
                    <div id="swiper-btn-prev" class="swiper-btn" ></div>
                    <span class="line"></span>
                    <div id="swiper-btn-next" class="swiper-btn" ></div>
                </div>
                <div></div>
                <div class="swiper-pagination"></div>
            </div>

            <div class="capital page-slide deep">
                <div class="wd_con capital_contain">
                    <div class="capital_title">华业天成资本</div>
                    <div class="capital_bg">
                        <div class="capital_bg_des">华业天成资本由前全球头部科技企业高管、资深投资人创立于2015年，聚焦投资信息科技及信息科技驱动的行业变革，致力于通过价值投资和赋能，成就科技行业领导企业。
                        </div>
                        <img class="icon_opinion" src="./img/capital_opinion.svg" alt="">
                        <img class="icon_resource" src="./img/capital_resource.svg" alt="">
                        <img class="icon_method" src="./img/capital_method.svg" alt="">

                        <div class="capital_center" >
                            <p class="capital_center_label">华业天成定位</p>
                            <p class="capital_center_title">产业型投资机构</p>
                        </div>

                        <div class="capital_bg_item capital_opinion">
                            <div class="capital_bg_item_title">洞察产业</div>
                            <p class="capital_bg_item_row">深耕产业，洞察科技领域的技术变革趋势</p>
                        </div>
                        <div class="capital_bg_item capital_method">
                            <div class="capital_bg_item_title">共创生态</div>
                            <p class="capital_bg_item_row">汇聚和投资协同发展的产业生态，促进共生共荣</p>

                        </div>
                        <div class="capital_bg_item  capital_resource">
                            <div class="capital_bg_item_title">赋能成长</div>
                            <p class="capital_bg_item_row">平均15年以上科技领导企业管理和实战经验，<br>陪伴创始人成长</p>
                        </div>
                        <a class="btn_about" href="{{ URL::to("about.html") }}">关于我们</a>
                    </div>
                </div>
            </div>

            <div class="ho_example page-slide">
                <div class="wd_con ho_example_contain">
                    <div class="ho_example_bg">
                        <a class="logo1 logo" href="https://www.hanshow.com/zh-cn/" target="_blank">
                            <img src="./img/logo_01.png" alt="">
                            <p>全球领先的数字化门店解决方案提供商</p>
                        </a>

                        <a class="logo2 logo" href="https://www.smartx.com/" target="_blank">
                            <img src="./img/logo_02.png" alt="">
                            <p>中国领先的超融合架构产品与企业云解决方案供应商</p>
                        </a>

                        <a class="logo3 logo" href="http://flagchip.com.cn/" target="_blank">
                            <img src="./img/logo_03.png" alt="">
                            <p>中国智能汽车高端控制器芯片开发新锐企业</p>
                        </a>

                        <a class="logo4 logo" href="http://joywellsemi.com/" target="_blank">
                            <img src="./img/logo_04.png" alt="">
                            <p>中国领先的SerDes/ADC/PLL芯片提供商</p>
                        </a>

                        <a class="logo5 logo" href="https://www.kematek.com/" target="_blank">
                            <img src="./img/logo_05.png" alt="">
                            <p>国际先进的
                                陶瓷材料和零部件及相关技术和产品开发、生产及服务企业</p>
                        </a>

                        <a class="logo6 logo" href="https://www.hirain.com/" target="_blank">
                            <img src="./img/logo_06.png" alt="">
                            <p>中国领先的汽车智能化产品供应商</p>
                        </a>

                        <a class="logo7 logo" href="https://keendata.com/" target="_blank">
                            <img src="./img/logo_07.png" alt="">
                            <p>中国领先的
                                数据管理、开发挖掘、运维一体化的整套方案提供商</p>
                        </a>

                        <a class="logo8 logo" href="http://www.len-technology.com/" target="_blank">
                            <img src="./img/logo_08.png" alt="">
                            <p>高性能车规电源芯片产品自主研发领航者</p>
                        </a>

                        <a class="logo9 logo" href="https://www.jaguarmicro.com/" target="_blank">
                            <img src="./img/logo_09.png" alt="">
                            <p>中国数据处理器芯片和解决方案的领导者</p>
                        </a>

                        <a class="logo10 logo" href="https://www.jssisemi.cn/" target="_blank">
                            <img src="./img/logo_10.png" alt="">
                            <p>提供一站式高端中后道封测服务领先厂商</p>
                        </a>

                        <a class="logo11 logo" href="https://www.ldrobot.com/" target="_blank">
                            <img src="./img/logo_11.png" alt="">
                            <p>中国领先的机器人和3D视觉整体解决方案提供商</p>
                        </a>

                        <a class="logo12 logo" href="https://www.innoscience.com/cn" target="_blank">
                            <img src="./img/logo_12.png" alt="">
                            <p>全球领先的第三代半导体集成设计与制造商</p>
                        </a>

                        <a class="logo13 logo" href="http://www.nuvoltatech.com.cn/" target="_blank">
                            <img src="./img/logo_13.png" alt="">
                            <p>中国领先的无线充电解决方案提供商</p>
                        </a>
                        <a class="logo14 logo" href="https://www.si-in.com/" target="_blank">
                            <img src="./img/logo_14.png" alt="">
                            <p>中国领先的ToF传感器芯片及智能音频解决方案提供商</p>
                        </a>
                        <a class="logo15 logo" href="https://www.jscj-elec.com/" target="_blank">
                            <img src="./img/logo_15.png" alt="">
                            <p>中国领先的半导体分立器件企业</p>
                        </a>
                    </div>

                    <a class="btn_link btn_more" href="{{ URL::to("case.html") }}">查看更多</a>
                    <div class="md_title">
                        <span class="txt"  >投资<br>案例</span>
                    </div>
                </div>

            </div>

            <div class='ho_news page-slide deep'>
                <div class="wd_con ho_news_contain clearfix">
                    <div class="md_title">
                        <span class="txt" >最新<br>动态</span>
                    </div>

                    <div class="newBx">
                        <ul class="news" >
                            @foreach($indexNews as $data)
                            <li class="news_item">
                                <a href="{{ URL::to('/news_detail_'.$data->id.'.html') }}" target="_blank">
                                    <dl class="news_item_dl">
                                        <dt class="imgCase"><img src="{{ Storage::url($data->thumb) }}" alt=""></dt>
                                        <dd class="des">
                                            <p class="date">{{ $data->day }}</p>
                                            <p class="txt clampLine2">{{ $data->title }}</p>
                                        </dd>
                                    </dl>
                                </a>
                            </li>
                            @endforeach


                        </ul>
                        <a class="btn_link btn_more" href="{{ URL::to('news.html') }}">查看更多</a>
                    </div>
                </div>
            </div>

            <!-- mobile -->
            <div class="home_module_nav">
                <a class="item" href="{{ URL::to('about.html') }}"><span class="title">关于我们</span></a>
                <a class="item" href="{{ URL::to('case.html') }}"><span class="title">投资案例</span></a>
                <a class="item" href="{{ URL::to('team.html') }}"><span class="title">管理团队</span></a>
                <a class="item" href="{{ URL::to('empower.html') }}"><span class="title">投后赋能</span></a>
                <a class="item" href="{{ URL::to('contact.html') }}"><span class="title">联系我们</span></a>
            </div>
            <ul class="home_mobile_content">
                <li class="item" >
                    <a href="{{ URL::to('about.html') }}">
                        <i class="imgCase"><img src="img/home_mobile_banner1.jpg" alt=""></i>
                        <div class="des">
                            <p class="des_title">关于我们</p>
                            <p class="des_txt">发掘、投资并成就科技行业领导者，为科技企业群体崛起而努力</p>
                        </div>
                    </a>
                </li>
                <li class="item">
                <a href="{{ URL::to('case.html') }}">
                    <i class="imgCase"><img src="img/home_mobile_banner2.jpg" alt=""></i>
                    <div class="des">
                        <p class="des_title">投资案例</p>
                        <p class="des_txt">All in第三代信息技术，聚焦信息科技以及信息科技驱动的行业变革</p>
                    </div>
                </a>
            </li>
            <li class="item">
                <a href="{{ URL::to('team.html') }}">
                    <i class="imgCase"><img src="img/home_mobile_banner3.jpg" alt=""></i>
                    <div class="des">
                        <p class="des_title">管理团队</p>
                        <p class="des_txt">科技领导企业实战成长经验，洞察产业趋势，汇聚产业生态</p>
                    </div>
                </a>
            </li>
            <li class="item" >
                <a href="{{ URL::to('empower.html') }}">
                    <i class="imgCase"><img src="img/home_mobile_banner4.jpg" alt=""></i>
                    <div class="des">
                        <p class="des_title">投后赋能</p>
                        <p class="des_txt">以成长促增长，帮助科技企业实现可持续发展和长期成功</p>
                    </div>
                </a>
            </li>
            <li class="item" >
                <a href="{{ URL::to('news.html') }}">
                    <i class="imgCase"><img src="img/home_mobile_banner5.jpg" alt=""></i>
                    <div class="des">
                        <p class="des_title">新闻动态</p>
                        <p class="des_txt">关于华业和生态伙伴的重要新闻及观点分享，在这里更了解我们</p>
                    </div>
                </a>
            </li>
            </ul>
            <x-foot-contact />
        </div>
    </div>

    <!-- back top slider index=0 -->
    <div class="backTopBx">
        <div class="btn_backTop"></div>
        <img class="wechat_qr" src="img/qr.jpg" alt="">
        <p class="title">扫码关注<br>华业天成</p>
    </div>
</div>
<script>
    new WOW().init();

    var mySwiper = new Swiper('.swiper',{
        loop: true,
        autoplay: 5000,
        speed:1000,
        pagination : '.swiper-pagination',
        onSlideClick:function(swiper){
            if(swiper.activeLoopIndex===0){
                fullPageSwiper.swipeTo(1,1000,true) //跳首页第二屏
            }
            else if(swiper.activeLoopIndex===1){
                location.href='./empower.html'  // 跳投后赋能
            }
            else if(swiper.activeLoopIndex===2){
                location.href='./case.html'  // 跳投资案例
            }
        }
        // resizeReInit:true,
    });

    $('#swiper-btn-prev').click(function(){
        mySwiper.swipePrev();
    })
    $('#swiper-btn-next').click(function(){
        mySwiper.swipeNext();
    })


    // swiper-btn hover none event
    $('.swiper-btn').hover(function(e){
        e.stopPropagation();
    },function(e){
        e.stopPropagation();
    })

    // swiper hover btn show
    // $('.swiper_home').hover(function(){
    //     $('.swiper-btn').show()
    // },function(){
    //     $('.swiper-btn').hide()
    // })

    var fullPageSwiper = new Swiper('.pageContainer',{
        loop: false,
        speed:500,
        mode:'vertical',
        slidesPerView:'auto',
        mousewheelControl : true,
        keyboardControl : true,
        wrapperClass : 'page-wrapper',
        slideClass : 'page-slide',
        // pagination: '.pagination',
        grabCursor: true,
        paginationClickable: true,
        longSwipesRatio:0.1,
        // resizeReInit:true,
        onSlideChangeEnd:fullPageChange,
        onSlideChangeStart:fullPageChangeStart,

    });
    var bodyWidth = document.documentElement.clientWidth;
        if(bodyWidth<1000){
            fullPageSwiper.destroy()
        }

    $('.pageBar_item').click(function(){
        var index = $(this).index()
        fullPageSwiper.swipeTo(index,1000,true)
    })
    $('.pageBar_item').hover(function(){
        $(this).addClass('hover')
    },function(){
        $(this).removeClass('hover')
    })
    function fullPageChangeStart(){
        let index = fullPageSwiper.activeIndex
        $(".pageBar_item").removeClass('active')
        $(".pageBar_item").eq(index).addClass('active')
    }
    function fullPageChange(){
        let index = fullPageSwiper.activeIndex
        switch (index){
            case 0:
                $(".header").hasClass('transparent') ? null :$(".header").addClass('transparent');
                $(".header").removeClass('deep')
                $(".header").removeClass('bg')
                $('.logoCase img').attr("src",'img/logo.svg')
                $('.nav_item.en img').attr("src",'img/en.svg')
                $(".backTopBx").hide()
                $(".backTopBx").removeClass('white')

                break
            case 1:
                $(".header").hasClass('transparent') ? null : $(".header").addClass('transparent');
                $(".header").removeClass('deep')
                $(".header").removeClass('bg')
                $('.logoCase img').attr("src",'img/logo.svg')
                $('.nav_item.en img').attr("src",'img/en.svg')
                $(".backTopBx").show()
                $(".backTopBx").removeClass('white')

                break
            case 2:
                $(".header").hasClass('deep') ? null : $(".header").addClass('deep');
                $(".header").removeClass('bg')
                $(".header").removeClass('transparent')
                $('.logoCase img').attr("src",'img/logo_white.png')
                $('.nav_item.en img').attr("src",'img/en_white.svg')
                $(".backTopBx").show()
                $(".backTopBx").addClass('white')
                break
            case 3:
                $(".header").hasClass('transparent') ? null : $(".header").addClass('transparent');
                $(".header").removeClass('deep')
                $(".header").removeClass('bg')
                $('.logoCase img').attr("src",'img/logo.svg')
                $('.nav_item.en img').attr("src",'img/en.svg')
                $(".backTopBx").show()
                $(".backTopBx").removeClass('white')
                break
            case 4:
                $(".header").hasClass('bg') ? null : $(".header").addClass('bg');
                $(".header").removeClass('deep')
                $(".header").removeClass('transparent')
                $('.logoCase img').attr("src",'img/logo.svg')
                $('.nav_item.en img').attr("src",'img/en.svg')
                $(".backTopBx").show()
                $(".backTopBx").addClass('white')
                break
            default:
                $(".header").addClass('bg')
                break;

        }
    }

    $(".btn_backTop").click(function(){
        fullPageSwiper.swipeTo(0,1000,true)
    })

    window.addEventListener('resize',  throttle(initSwiper,200))
    function throttle(fn, delay){
        var timer = null;
        return function(){
            var context = this, args = arguments;
            clearTimeout(timer);
            timer = setTimeout(function(){
                fn.apply(context, args);
            }, delay);
        };
    };
    function initSwiper(){
        mySwiper.reInit()
        mySwiper.swipeTo(0,1000,true)
    }

    // 显示屏宽高 test
    // function getScreenInfo(){
    //     var screenHeight =  window.screen.height
    //     var screenWidth=  window.screen.width
    //     var bodyHeight =  document.body.clientHeight
    //     var bodyWidth=  document.body.clientWidth
    //     console.log(window)
    //     $('#screenInfo').text(`body:${bodyWidth} * ${bodyHeight}`)
    // }

    // getScreenInfo()
    // window.addEventListener("resize", function(){
    //     getScreenInfo()
    // })
</script>

<x-convertlab />
</body>
</html>
