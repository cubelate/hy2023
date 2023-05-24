$(document).ready(function () {
    // 
    // var wx = (function () {
    //     return navigator.userAgent.toLowerCase().indexOf('micromessenger') !== -1
    // })();
    // if (wx) {
    //     $('.flex-frame').css('display', 'none')
    //     alert("请用其他浏览器打开");
    //     document.write('<p style="font-size:14px;text-align:center;margin-top:20px;">右上角用浏览器打开</p>')
    // } else {
    //     $('.flex-frame').css('display', 'block')
    // }

    //flex

    // wow
    // var wow = new WOW(
    //     {
    //       animateClass: 'animated',
    //       offset:150,
    //       resetAnimation:false,
    //       callback:function(box) {
    //       },
    //       scrollContainer:'body'
    //     }
    //   );
    // wow.init()
    var scaleValue = 1
    var bodyHeight = document.documentElement.clientHeight
    function flex(){
        var domFlex = document.getElementsByClassName("flex-frame")[0];
        var domHtml = document.getElementsByTagName("body")[0];
        var bodyWidth = document.documentElement.clientWidth;
        if(bodyWidth<1000){
            return
        }
        bodyHeight = document.documentElement.clientHeight   //同步更新有所需
         scaleValue = bodyWidth/1920;
        //  console.log(bodyHeight * (1 / scaleValue) - 66)
        if(scaleValue < 1){
            $('.flex-frame').css({'transform':"scale("+scaleValue+")"})
            $('.flex-frame').css({"margin-bottom": "-" + domFlex.clientHeight * (1-scaleValue) + "px" })
            $('.flex-frame .example_wrap').css({"height":(bodyHeight - 66) * (1 / scaleValue)  + "px"})
                    
        } else {
            $('.flex-frame').css({'transform':"scale(1)"})
            $('.flex-frame').css({"margin-bottom": "0px" })
            $('.flex-frame .example_wrap').css({"height":"100vh - 66px"})
             // teamer 
        }
            // wow.sync()
    }

    $(window).load(function(){
        flex()
    })

 
  

    // nav
    $('#menu').click(function(){
        if($(this).hasClass('menu_active')){
            $(this).removeClass('menu_active')
            $('#nav').hide('slow')
        } else {
            $(this).addClass('menu_active')
            $('#nav').show('slow')
        }
    
    })
    $('#nav .nav_item').hover(function(){
        $('#nav .active').removeClass('nav_icon')
        $(this).addClass('nav_icon')
    },function(){
        $(this).removeClass('nav_icon')
        $('#nav .active').addClass('nav_icon')
    })

    // 资源加载完毕，再展示
    $(window).load(function(){
        console.log("load")
        $('.effect_target').addClass('effect_show')
    })
    
   


    // team bounceframe
    var teamData = [
        {name:'孙业林',position:'创始合伙人',imgName:'teamerph01.png',des:[
            '孙业林先生拥有丰富的IT产业从业和投资经验。曾长期担任华为技术有限公司高级副总裁，在华为服务期间，历任北京研究所所长、全球服务总裁、光网络产品线总裁、独联体片区总裁、运作与区域管理部总裁，积累了创新与产品组合管理、投资决策、服务管理、国际业务拓展及全球区域管理、领导力提升及变革管理等综合能力和丰富的行业资源。',
            '孙业林先生投资的项目包括：英诺赛科、伏达半导体、集益威半导体、云豹智能、开元通信、旗芯微半导体、瓴芯电子、希微科技、得瑞领新、格科微电子、行芯科技、汉朔科技、经纬恒润、云下科技、SmartX、开思汽配、票易通等。',
            '孙业林先生获得华中科技大学物理电子学与光电子学硕士学位、学士学位。'
        ]},
        {name:'杨华君',position:'创始合伙人',imgName:'teamerph02.jpg', des:[
            '杨华君先生拥有丰富的TMT领域的创业经验和早期投资经验。曾任五岳天下投资合伙人，负责TMT领域投资和管理。更早前曾是一名连续创业者，两个创业项目/技术被知名互联网上市公司收购。杨华君先生是华中科技大学企业家协会副会长兼执行秘书长，长期深耕积累了广泛的人脉和深厚的行业资源。',
            '杨华君先生投资的项目包括：<br>聚芯微电子、伏达半导体、集益威半导体、长晶科技、为旌科技、纵慧芯光、得瑞领新、芯德科技、珂玛材料、胜达克半导体、乐动机器人、云下科技、星融元数据、PPIO、云账户、开思汽配、猎芯网、金硅信息等。',
            '杨华君先生获得香港中文大学金融MBA学位、华中科技大学信息管理学士学位。'
        ]},
        {name:'童国栋',position:'企业成长合伙人',imgName:'teamerph03.png', des:[
            '童国栋先生负责统筹被投企业的赋能训战、咨询服务的能力建设与项目实施。致力于企业成长的组织能力打造、变革与模型方法的实践与研究。加入公司之前，在药明康德担任高级副总裁、COO/CHO、党委书记及八家公司的法人代表。作为核心人员，用五年多时间参与公司上市与市值摸高4500亿港币的组织能力打造与变革历程。另外，拥有在全球顶级科技公司研发、区域、总部职能运营、人力资源等领域有近二十年的管理与实践经验。曾任该公司的企业大学校长助理、消费业务南太平洋地区及中国区总裁、消费业务EMT成员兼HRVP、集团人力资源部副总裁等。童国栋先生相信“有效的管理，能带来十倍数的增长”，重视管理、科学管理，是硬科技创业、发展到走向卓越的必由之路。',
            '童国栋先生获得武汉大学法学硕士学位。'
        ]},
        {name:'贺人龙',position:'董事总经理',imgName:'teamerph04.jpg', des:[
            '贺人龙先生主要关注半导体、人工智能和物联网等领域投资。在加入公司之前，曾任ARM基金投资总监、联创资本副总裁，更早之前就职展讯通信、高通无线通信、士兰微电子、虹软科技担任研发管理等工作，并有过一段创业经历。贺人龙先生拥有超过10年科技行业研发管理及创业经历。',
            '贺人龙先生参与投资的项目包括：希微科技、旗芯微半导体、云豹智能、瓴芯电子、芯德科技、胜达克半导体、经纬恒润、埃泰克汽车电子等。',
            '贺人龙先生获得宁波大学通信与信息系统硕士、浙江师范大学通信工程学士。',
            '联系方式：garyhe@huacapital.com'
        ]},
        {name:'任建军',position:'董事总经理',imgName:'teamerph05.jpg', des:[
            '任建军先生主要关注云计算领域投资。在加入公司之前，曾参与创立创新创业加速器，并与腾讯合作深圳、广州等多个众创空间，为数十家创业企业提供战略、组织和市场运作方面的帮助。他曾在全球领先科技公司工作16年，拥有中国及北美丰富工作经验，负责过多项业务的MARKETING、产品管理部和硅谷创新中心等工作。任建军先生拥有丰富的云计算及通信网络行业的技术经验，也是战略设计、市场规划、产品策略等方面的管理专家，曾主持设计的某大型通讯系统全球市场占有率第一。',
            '任建军先生投资的项目包括：SmartX、星融元数据、得瑞领新、PPIO、驻云信息、摩尔元数等。',
            '任建军先生获得天津大学工业自动化学士。',
            '联系方式：leo.ren@huacapital.com'
        ]},
        {name:'黄薇',position:'基金管理部总经理',imgName:'teamerph06.jpg', des:[
            '黄薇女士主要负责基金运营、风险控制和投资者关系。在加入公司之前，曾担任安永（中国）企业咨询有限公司企业风险部门的资深咨询顾问，作为主要成员参与多家上市企业咨询工作，其中包括某大型汽车销售集团的资产重组估值项目、某大型国有风险投资集团的顶层设计项目（主要包括治理架构、授权体系设计、管控模式及组织职责设计及风险防控体系设计）、某香港上市通讯公司财务体系变革项目等。曾获得安永2012、2014年度安永卓越奖，服务过互联网、通讯、出版、医药、汽车、房地产、酒店、航空等多个行业客户。黄薇女士拥有丰富的企业管理咨询经验，并熟悉TMT领域投资管理。',
            '黄微女士获得香港城市大学传播与新媒体硕士学位、南京大学管理学学士学位，并曾在台湾东海大学辅修信息管理专业课程。'
        ]},
        {name:'汪崇儒',position:'执行董事',imgName:'teamerph07.png', des:[
            '汪崇儒先生主要关注半导体、智能终端、人工智能和企业服务等领域投资。在加入公司之前，曾参与创立由阿里巴巴战略投资的领先手机数码回收平台回收宝，并担任产品总监，负责公司整体的产品规划实施，更早之前曾就职于腾讯公司，任职产品经理。在过往的工作和创业经历中，汪崇儒先生积累了丰富的产品及系统设计经验，曾于腾讯就职期间完成近20项相关产品专利。',
            '汪崇儒先生参与投资的项目包括：聚芯微电子、伏达半导体、开元通信、云下科技、长晶科技、为旌科技、汉朔科技、金硅信息等。',
            '汪崇儒先生获得华中科技大学医学硕士学位、华中科技大学理学学士学位、武汉大学经济学学士学位。',
            '联系方式：genewang@huacapital.com'
        ]},
        {name:'张仲荣',position:'执行董事',imgName:'teamerph08.png', des:[
            '张仲荣先生主要关注云计算、人工智能和企业服务等领域投资。在加入公司之前，任用友畅捷通（港股：01588）副总裁兼云业务运营中心总经理，更早之前就职新浪网、优视科技（UC浏览器）、三星中国等企业工作，并有过两段创业经历。张仲荣先生拥有超过14年互联网、移动互联网产品运营及创业经历，著有畅销书《互联网运营之道》、《运营本源》。',
            '张仲荣先生参与投资的项目包括：票易通、蓝税、云账户、凯茵化工、零眸智能、盈嘉互联、乐动机器人等。',
            '张仲荣先生获得华中科技大学计算机科学与技术专业学士学位。',
            '联系方式：zhongrong@huacapital.com'
        ]},
        {name:'陆昆仑',position:'执行董事',imgName:'teamerph09.jpg', des:[
            '陆昆仑先生主要负责机器人和智能终端赛道的投资，包括工业机器人、商用服务机器人、家用服务机器人、智能制造设备等等。陆昆仑在加入华业天成之前在华为工作15年，先后负责过企业网络产品线和数据通信产品线的战略规划、产品规划、产品研发、交付与服务等工作，在ICT行业全流程业务均有成功经验。陆昆仑参与投资的项目包括：劢微机器人、玑域智能等等。',
            '联系方式： lukunlun@huacapital.com'
        ]},
        {name:'张刚',position:'执行董事',imgName:'teamerph10.jpg', des:[
            '张刚(Peter)先生拥有丰富的企业管理咨询、软件与云服务产业工作经验。主要关注数字化、软件和云赛道的投资。曾十八年在埃森哲（咨询）和甲骨文（软件）工作，服务于中国大中型企业和全球化运营企业的管理咨询、数字化转型、应用软件/SaaS、数据技术和云平台等。',
            '张刚先生曾长期全程参与华为CRM战略、LTC线索到回款变革、Contract to Cash合同到现金，以及与产品研发IPD/供应链ISC/财经服务IFS等业务集成。',
            '张刚先生获得北京科技大学硕士和学士学位，PMP（项目管理）、TOGAF（企业架构）、信息系统高级项目管理师。',
            '联系方式：gang.zhang@huacapital.com'
        ]},
        {name:'黄喜',position:'投资董事',imgName:'teamerph11.jpg', des:[
            '黄喜先生主要关注半导体、云计算等领域投资。在加入公司之前，曾在贝尔实验室（中国）等知名科技企业担任研究科学家、高级系统工程师，熟悉数据中心、光纤通信及相关行业标准。工作期间申请并获得了15篇中国专利和2篇美国专利。',
            '黄喜先生参与投资的项目包括：英诺赛科、集益威半导体、超芯星半导体、格科微电子、行芯科技、珂玛材料等。',
            '黄喜先生获得武汉光电国家实验室、华中科技大学光电子科学与工程学院博士学位、华中科技大学物理学院学士学位。',
            '联系方式：kylehuang@huacapital.com'
        ]},
        {name:'撖涛',position:'投资副总裁',imgName:'teamerph12.png', des:[
            '撖涛先生主要关注半导体、人工智能和物联网等领域的投资。撖涛先生拥有十多年半导体传感器行业经验，在加入公司之前，曾服务于Sciosense、ams、Melexis等国际一线传感器芯片公司，也曾在多维科技参与创业，先后从事过研发、应用、产品管理、市场销售等多种重要职位，具有丰富的半导体产业经验。',
            '撖涛先生获得上海交通大学EMBA学位、中国科学技术大学传感技术与自动化专业硕士学位、中南大学机械电子工程学士学位、工商管理第二学位。 ',
            '联系方式：hantao@huacapital.com'
        ]},
        {name:'王佳',position:'投资副总裁',imgName:'teamerph13.png', des:[
            '王佳女士主要关注半导体装备、材料、封测、及先进功能材料等领域的投资。加入公司前，曾在台积电供应链任职十余年，所带团队负责半导体设备及零配件、原材料的采购工作，并负责产能扩充专案；也曾在三代半独角兽企业担任设备及材料采购部门负责人；熟悉国际及国内半导体供应链。',
            '王佳女士获得哈尔滨工业大学应用化学系本科及工学硕士学位，研究方向为光电晶体材料，在校期间发表国内外SCI、EI数篇，申报并获得国家发明专利。',
            '联系方式：joycewang@huacapital.com'
        ]},
        {name:'朱羚嘉 ',position:'投资副总裁',imgName:'teamerph14.png', des:[
            '朱羚嘉女士主要关注半导体和汽车领域投资。加入公司之前，在ARM任汽车IP市场和生态经理，更早之前在恩智浦任汽车处理器事业部亚太区商务经理，拥有7年相关行业市场产品策略制定和运营相关经历。',
            '朱羚嘉女士参与投资的项目包括：云豹智能、瓴芯电子、埃泰克汽车电子等。',
            '朱羚嘉女士获得香港科技大学电子工程硕士、复旦大学电子信息与技术学士。',
            '联系方式：lingjia@huacapital.com'
        ]},
        {name:'林桂平',position:'执行董事',imgName:'teamerph15.jpg', des:[
            '林桂平先生主要负责基金投后管理。在加入公司之前，曾任元智商业模式研究院院长、北京大学商业模式研究中心高级研究员，为多家大中型企业提供商业模式和战略规划设计相关方面的咨询和顾问服务，合作过的企业有：创维集团、证通电子、万科集团、天虹商场、倍轻松、和融集团、中航国际等。更早之前曾任职于中国电信。林桂平先生著有《商业模式的经济解释》、《透析盈利模式》等著作，并于2014年获得“第四届管理科学奖”。',
            '林桂平先生获得北京大学经济学博士、香港大学金融学硕士、北京邮电大学信息工程学士。'
        ]},

    ]
    
    // click teamer 
    $('.teamerBx .item').click(function(e){
        e.stopPropagation();
        var index = $(this).index()
        getBounceframeInfo(index)
        // 
        var top = $('body').scrollTop()
        $('.bounceframe').css({'min-height':bodyHeight + 5 +"px",'top': top * (scaleValue < 1 ? 1 / scaleValue : 1)})  
        // 
        $('body').css('overflow-y','hidden')
        $('.bounceframe').addClass('activeFrame ')
        $('.bounceframe .imgCase').addClass('slideInDown')
        $('.bounceframe .des').addClass('slideInRight')
        $('.bounceframe .info').addClass('fadeInRight')
        $('.bounceframe .btn_delete').addClass('fadeIn')
    })

    function getBounceframeInfo(index){
        var obj = teamData[index]
        var txt = ''
        obj.des.forEach(item=>{
            txt +='<p>'+item +'</p>'
        })
        $('#teamerName').text(obj.name)
        $('#teamerPosition').text(obj.position)
        $('#bigTeamerAvatar').attr("src","./img/"+obj.imgName)
        $("#teamerIntro p").remove();
        $('#teamerIntro').append(txt)
    }

    $('.bounceframe').click(function(e){
        e.stopPropagation();
    })
    $('.bounceframe .btn_delete').click(closeBounceFrame)
    
    $('body').click(closeBounceFrame)

    function closeBounceFrame(){
        var isHas =  $('.bounceframe').hasClass('activeFrame')
        if(isHas){
            $('.bounceframe').removeClass('activeFrame')
            $('body').css('overflow-y','auto')
            $('.bounceframe .imgCase').removeClass('slideInDown')
            $('.bounceframe .des').removeClass('slideInRight')
            $('.bounceframe .info').removeClass('fadeInRight')
            $('.bounceframe .btn_delete').removeClass('fadeIn')
        }

        // mobile nav
        var isMobileNav = $('body').hasClass('bodyMask')
        if(isMobileNav){
            mobileNavTodo()
        }
    }



    flex();
    window.addEventListener('resize', flex)

    // 案例tab 类型
    $('.example_tab .item').click(function(){
        $('.example_tab .item').removeClass('active') 
        $(this).addClass('active')
        var index = $(this).index()
        $('.example_tabContent').removeClass('active')
        $('.example_tabContent').eq(index).addClass('active')
    })

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
    
});