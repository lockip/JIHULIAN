<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>综合业务平台</title>
    <meta name="format-detection" content="telephone=no, address=no">
    <meta name="apple-mobile-web-app-capable" content="yes" /> <!-- apple devices fullscreen -->
    <meta name="apple-touch-fullscreen" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <link rel="shortcut icon" href="http://pdayewu.aipu.com/attachment/images/global/wechat.jpg" />
    <link href="http://pdayewu.aipu.com/app/resource/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://pdayewu.aipu.com/app/resource/js/app/common.js"></script>
    <link href="http://pdayewu.aipu.com/app/resource/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://pdayewu.aipu.com/app/resource/css/animate.css" rel="stylesheet">
    <link href="http://pdayewu.aipu.com/app/resource/css/common.css" rel="stylesheet">
    <link href="http://pdayewu.aipu.com/app/resource/css/app.css" rel="stylesheet">
    <link href="http://pdayewu.aipu.com/app/index.php?i=11&c=utility&a=style&" rel="stylesheet">
    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
    <script src="http://pdayewu.aipu.com/app/resource/js/require.js"></script>
    <script src="http://pdayewu.aipu.com/app/resource/js/app/config.js"></script>
    <script type="text/javascript" src="http://pdayewu.aipu.com/app/resource/js/lib/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="http://pdayewu.aipu.com/app/resource/js/lib/bootstrap.min.js"></script>

    <!--我新引入的-->
    <link rel="stylesheet" href="../addons/bsl/css/swiper.min.css">
    <link rel="stylesheet" href="../addons/bsl/css/animate.min.css">
    <link rel="stylesheet" href="../addons/bsl/css/style4.css">






    <script type="text/javascript">
        if(navigator.appName == 'Microsoft Internet Explorer'){
            if(navigator.userAgent.indexOf("MSIE 5.0")>0 || navigator.userAgent.indexOf("MSIE 6.0")>0 || navigator.userAgent.indexOf("MSIE 7.0")>0) {
                alert('您使用的 IE 浏览器版本过低, 推荐使用 Chrome 浏览器或 IE8 及以上版本浏览器.');
            }
        }
        window.sysinfo = {
            'uniacid': '11',
            'acid': '11',
            'siteroot': 'http://pdayewu.aipu.com/',
            'siteurl': 'http://pdayewu.aipu.com/app/index.php?i=11&c=entry&op=gongdan&do=Pdain&m=pdabusiness',
            'attachurl': 'http://pdayewu.aipu.com/attachment/',
            'attachurl_local': 'http://pdayewu.aipu.com/attachment/',
            'attachurl_remote': '',
            'MODULE_URL': 'http://pdayewu.aipu.com/addons/pdabusiness/',
            'cookie' : {'pre': '386a_'}
        };

        // jssdk config 对象
        jssdkconfig = null || {};

        // 是否启用调试
        jssdkconfig.debug = false;

        jssdkconfig.jsApiList = [
            'checkJsApi',
            'onMenuShareTimeline',
            'onMenuShareAppMessage',
            'onMenuShareQQ',
            'onMenuShareWeibo',
            'hideMenuItems',
            'showMenuItems',
            'hideAllNonBaseMenuItem',
            'showAllNonBaseMenuItem',
            'translateVoice',
            'startRecord',
            'stopRecord',
            'onRecordEnd',
            'playVoice',
            'pauseVoice',
            'stopVoice',
            'uploadVoice',
            'downloadVoice',
            'chooseImage',
            'previewImage',
            'uploadImage',
            'downloadImage',
            'getNetworkType',
            'openLocation',
            'getLocation',
            'hideOptionMenu',
            'showOptionMenu',
            'closeWindow',
            'scanQRCode',
            'chooseWXPay',
            'openProductSpecificView',
            'addCard',
            'chooseCard',
            'openCard'
        ];
        function _removeHTMLTag(str) {
            if(typeof str == 'string'){
                str = str.replace(/<script[^>]*?>[\s\S]*?<\/script>/g,'');
                str = str.replace(/<style[^>]*?>[\s\S]*?<\/style>/g,'');
                str = str.replace(/<\/?[^>]*>/g,'');
                str = str.replace(/\s+/g,'');
                str = str.replace(/&nbsp;/ig,'');
            }
            return str;
        }
    </script>
</head>
<body style="background: url('../addons/bsl/img/background.jpg')no-repeat;width:100%;">
<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="container-fluid">
                <img src="../addons/bsl/img/header.png" class="img-responsive headerimg">
                <div class="white-bg">
                    <select class="sele" id="city">
                        <option value="0">请选择您所在城市</option>
                        <option value="102">成都</option>
                        <option value="103">重庆</option>
                        <option value="105">昆明</option>
                        <option value="111">广州</option>
                        <option value="107">长沙</option>
                        <option value="104">武汉</option>
                        <option value="114">贵阳</option>
                        <option value="113">南宁</option>
                        <option value="115">东莞</option>
                        <option value="117">上海</option>
                        <option value="116">北京</option>
                        <option value="119">天津</option>
                    </select>
                    <?php  if($type==0) { ?>
                    <div class="free1">
                        <p>一年免费网时：</p>
                        <input type="text" value="<?php  echo $ticket?>"/>
                        <img id="btn_ws" src="../addons/bsl/img/duihuanbtn.png" class="img-responsive"/>
                    </div>
                    <?php  } else { ?>
                    <div class="free2">
                        <p>一年免费收视时长：</p>
                        <input type="text" value="<?php  echo $ticket?>"/>
                        <img id="btn_sc" src="../addons/bsl/img/duihuanbtn.png" class="img-responsive""/>
                    </div>
                    <?php  } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../addons/bsl/js/swiper.min.js"></script>
<script src="../addons/bsl/js/swiper.animate1.0.2.min.js"></script>
<script>
    var mySwiper = new Swiper ('.swiper-container', {
        direction: 'horizontal',
        loop: false,
        speed:1000,
        allowSwipeToNext : false,
        allowSwipeToPrev : false,
        // 滚动条

        width:window.innerWidth,
        height : window.innerHeight,

        autoplayDisableOnInteraction : false,
        autoplayStopOnLast : true,
        onInit: function(swiper){ //Swiper2.x的初始化是onFirstInit
            swiperAnimateCache(swiper); //隐藏动画元素
            swiperAnimate(swiper); //初始化完成开始动画
        },
        onSlideChangeEnd: function(swiper){
            swiperAnimate(swiper); //每个slide切换结束时也运行当前slide动画
        }
    })
    $(function(){
        (function(){
            setInterval(function(){
                $(".bg").attr("src","../addons/bsl/img/bg02.jpg");
                $(".baoxiang1").css("transform","rotate(3deg)");
                setTimeout(function(){ $(".bg").attr("src","../addons/bsl/img/bg01.jpg");$(".baoxiang1").css("transform","rotate(-1deg)");},200);
            },400);
        })();
        $(".baoxiang1").click(function(){
            $(".fenxiang").show(500);
        });
        $('#btn_ws').click(function(){
        	$citynum=$('#city').val();
        	if($citynum==0){
        		alert('请选择您所在城市');
        	}else{
        		window.location.href="<?php  echo $this->createMobileUrl('gift',array('type'=>0))?>"+'&city='+$citynum;
        	}
        });
        $('#btn_sc').click(function(){
        	$citynum=$('#city').val();
        	if($citynum==0){
        		alert('请选择您所在城市');
        	}else{
        		window.location.href="<?php  echo $this->createMobileUrl('gift',array('type'=>1))?>"+'&city='+$citynum;
        	}
        });
    });
</script>
</body>
</html>
