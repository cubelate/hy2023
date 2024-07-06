<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>华业天成 - 投资管理团队</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1, user-scalable=no" />
    <meta name="keywords" content="{{ \App\Util\MainHelper::getWebSiteDescription() }}" />
    <meta name="description" content="{{ \App\Util\MainHelper::getWebSitekeywords() }}" />
    <meta name="format-detection" content="telephone=no" />
    <link rel="stylesheet" href="./css/default.css">
    <link rel="stylesheet" href="./css/common.css?v=1">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/jquery.min.js"></script>
    {{-- <script src="./js/myJs.js?t=13"></script> --}}
</head>
<body>
<div class="header bg">
    <x-nav />
</div>

<div class="flex-frame">
    <div class="team">
        <div class="team_banner">
            <div class="wd_con team_banner_contain">
                <div class="title">投资管理团队</div>
                <div class="subTitle">硬科技投资特种部队</div>
                <div class="des">
                    华业天成凝聚产业人才，投资团队平均15年以上科技领导企业管理和实战经验，被誉为“硬科技投资特种部队”。团队奉行“敏捷灵活、机动协同、群策群力“的作战原则，以趋势性产业洞察、联动型资源网络、实战性企业成长经验，助力投资命中率和投后成长性的提升。
                </div>
            </div>
        </div>

        <div class="team_introduction wd_con">

        </div>

        <div class="team_content">
            <ul class="teamers clearfix">
                @foreach($teams as $data)
                <li class="item">
                    <div class="item_case">
                        <img class="avatar" src="{{ Storage::url($data->image) }}" alt="" loading="lazy">
                        <div class="des">
                            <p class="name">{{ $data->name }}</p>
                            @if ($data->show_title)
                                <p class="position">{{ $data->title }}</p>
                            @endif
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div id="teamerInfo">
        <div class="wd_con teamerInfo_contain clearfix">
            <div class="lt">
                <i class="imgCase"><img id="bigTeamerAvatar"  src="" alt=""></i>
                <div class="info">
                    <p class="name" id="teamerName"></p>
                    <p class="position" id="teamerPosition"></p>
                </div>
            </div>
            <div class="des" >
                <div id="teamerIntro">
                    <p></p>
                </div>
                <!-- <a class="btn_bp" href="https://host.convertlab.com/p/b3827c" target="_blank">BP投送</a> -->
            </div>

            <div class="btn_close"></div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            // team bounceframe
            var teamData = [
                @foreach($teams as $data)
                {name:'{{ $data->name }}', bp: '{{ $data->accept_bp }}', position:'{{ $data->title }}',imgName:'{{ Storage::url($data->image_big) }}',des:`{!! $data->content !!}`},
                @endforeach
            ]

            // click teamer 
            $('.teamers .item').click(function(e){
                e.stopPropagation();
                var index = $(this).index()
                getBounceframeInfo(index)
                $('body').css('overflow-y','hidden')
                $('#teamerInfo').addClass('activeFrame ')
            })

            function getBounceframeInfo(index){
                console.log(index)
                var obj = teamData[index]
       
                
                $('#teamerName').text(obj.name)
                $('#teamerPosition').text(obj.position)
                $('#bigTeamerAvatar').css('visibility','visible')
                $('#bigTeamerAvatar').attr("src", obj.imgName)
                $("#teamerIntro p").remove();
                $('#teamerIntro').append(obj.des)
                if(obj.bp == '1'){
                    var btnHtml = '<a class="btn_bp" href="/form-bp.html" target="_blank">BP投送</a>'
                    $('#teamerIntro').append(btnHtml)
                }   

            }

            $('#teamerInfo').click(function(e){
                e.stopPropagation();
            })
            $('#teamerInfo .btn_close').click(closeBounceFrame)

            $('body').click(closeBounceFrame)

            function closeBounceFrame(){
                var isHas =  $('#teamerInfo').hasClass('activeFrame')
                if(isHas){
                    $('#teamerInfo').removeClass('activeFrame')
                    $('body').css('overflow-y','auto')
                    $('#teamerName').text('')
                    $('#teamerPosition').text('')
                    $('#bigTeamerAvatar').css('visibility','hidden')
                    $('#bigTeamerAvatar').attr("src","")
                    $("#teamerIntro p").remove();
                    $("#teamerIntro .btn_bp").remove();
                }

                // mobile nav
                var isMobileNav = $('body').hasClass('bodyMask')
                if(isMobileNav){
                    mobileNavTodo()
                }
            }



            // form 
            // select
            $('.form_select .inputBtn').click(function(){
                $('.form_selectOption').toggle();
            })
            $('.form_selectOption li').click(function(){
                var val = $(this).text()
                $('.form_select .inputBtn').val(val)
                $('.form_selectOption').toggle();
            })

            // menu
            $('.btn_menu').click(function(){
                mobileNavTodo()
            })
            function mobileNavTodo(){
                $('.header .nav').slideToggle('normal',function(){
                    $('body').toggleClass('bodyMask')
                })
            }
            $('.header').click(function(e){
                e.stopPropagation();
            })



            })


    </script>

    <x-foot-contact />
</div>
<x-convertlab />
</body>
</html>
