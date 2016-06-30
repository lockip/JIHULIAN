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
    <link rel="stylesheet" href="../addons/bsl/css/style3.css">






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
<body>
<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="container-fluid hd">
                <img src="../addons/bsl/img/bg01.jpg" class="img-responsive bg">
                <img id="btnopen" src="../addons/bsl/img/baoxiang2.png" class="img-responsive baoxiang1">
                <img src="../addons/bsl/img/xiaoren.png" class="img-responsive xiaoren">
                <img src="../addons/bsl/img/buhaoyisi.png" class="img-responsive fenxiang">
                <img src="../addons/bsl/img/gongxini.png" class="img-responsive gongxi">
                <img id="lingqu" style="display:none;" src="../addons/bsl/img/lingqubtn.png" class="img-responsive lingqu">
                
                <div class="lipin">
                    <img id="ws" src="../addons/bsl/img/wangshi.png" class="lipiniterm img-responsive wangshi">
                    <img id="ss" src="../addons/bsl/img/shoushi.png" class="lipiniterm img-responsive shoushi">
                    <img id="dd" src="../addons/bsl/img/didi.png" class="lipiniterm img-responsive didi">
                    <img id="xy" src="../addons/bsl/img/edaixi.jpg" class="lipiniterm img-responsive edaixi">
                    <p id="duijiangma">xxxxxxxxxxxxxxxx</p>
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
    var goodstype=0;
    $(function(){
        /*(function(){
            setInterval(function(){
                $(".bg").attr("src","../addons/bsl/img/bg02.jpg");
                $(".baoxiang1").css("transform","rotate(3deg)");
                setTimeout(function(){ $(".bg").attr("src","../addons/bsl/img/bg01.jpg");$(".baoxiang1").css("transform","rotate(-1deg)");},200);
            },400);
        })();*/
        $('#btnopen').click(function(){
        	is_get();
        });
        $('#lingqu').click(function(){
        	console.log(goodstype);
        	var linknum='<?php  echo $Linknum?>';
        	switch(goodstype){
        		case 0:
        			window.location.href="<?php  echo $this->createMobileUrl('exchange')?>";//网时
        			break;
        		case 1:
        			window.location.href="<?php  echo $this->createMobileUrl('exchange')?>";//电视费
            		break;
        		case 2:
            		//window.location.href="";//洗衣券
            		alert('洗衣券');
            		break;
        		case 3:
        			alert('滴滴');
            		//window.location.href="";//滴滴
            		break;
        	}
        });
    });
    //判断是否领取奖品的状态，1、可领取 2、已领取 3、等待领取
    function is_get(){
        $.ajax({
            type: "POST",
            url:"<?php  echo $this->createMobileUrl('isget')?>",
            success: function(data){
            	var obj =jQuery.parseJSON(data);//将字符串转为json对象
            	console.log(obj);
            	if(obj.state==1){
            		$(".fenxiang").hide(200);
                    $(".gongxi").show(200);
                    $(".lingqubtn").show(200);
                    $('.lipin').show(200);
                    $('.lingqu').show(200);
                    $('#duijiangma').text(obj.code);
                    is_goods_type(obj.type);
                    goodstype=obj.type;
            	}else if(obj.state==2){
						alert('已领取');
            	}else{
                    $(".fenxiang").show(200);
            	}
            	
                }
        });
    }
    function is_goods_type($key){
    	
    	switch($key){
    	case 0:
    		console.info($key);
    		$('#ws').show(200);
    		break;
    	case 1:
    		console.info($key);
    		$('#ss').show(200);
    		break;
    	case 2:
    		console.info($key);
    		$('#xy').show(200);
    		break;
    	case 3:
    		console.info($key);
    		$('#dd').show(200);
    		break;
    	}
    }
</script>
</body>
</html>