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
    <link rel="stylesheet" href="../addons/bsl/css/style.css">






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
                <div class="container-fluid diyiye">
                    <img src="../addons/bsl/img/diyibu.jpg" alt="" class="img-responsive">
                    <img src="../addons/bsl/img/text.png" class="img-responsive ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="2s" swiper-animate-delay="0.4s">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="container-fluid dierye">
                    <img src="../addons/bsl/img/dierbu.jpg" alt="" class="img-responsive">
                    <img src="../addons/bsl/img/ai.png" class="ai ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="2s" swiper-animate-delay="0.1s">
                    <img src="../addons/bsl/img/hehu.png" class="hehu ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="2s" swiper-animate-delay="0.2s">
                    <img src="../addons/bsl/img/muqin.png" class="muqin ani" swiper-animate-effect="fadeIn" swiper-animate-duration="2s" swiper-animate-delay="0.1s">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="container-fluid disiye">
                    <img src="../addons/bsl/img/dierbu.jpg" alt="" class="img-responsive">
                    <img src="../addons/bsl/img/ai.png" class="ai ani" swiper-animate-effect="fadeInDown" swiper-animate-duration="2s" swiper-animate-delay="0.1s">
                    <img src="../addons/bsl/img/love.png" class="hehu ani" swiper-animate-effect="bounceInRight" swiper-animate-duration="2s" swiper-animate-delay="0.2s">
                    <img src="../addons/bsl/img/nannv.png" class="lanqiu ani" swiper-animate-effect="fadeIn" swiper-animate-duration="2s" swiper-animate-delay="0.1s">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="container-fluid diliuye">
                    <img src="../addons/bsl/img/dierbu.jpg" alt="" class="img-responsive">
                    <img src="../addons/bsl/img/qianwan.png" class="qianwan ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="2s" swiper-animate-delay="0.1s">
                    <img src="../addons/bsl/img/baaijieli.png" class="baaijieli ani" swiper-animate-effect="flipInY" swiper-animate-duration="2s" swiper-animate-delay="0.4s">
                    <img src="../addons/bsl/img/kuailai.png" class="kuailai ani" swiper-animate-effect="lightSpeedIn" swiper-animate-duration="2s" swiper-animate-delay="0.7s">
                    <img src="../addons/bsl/img/run1.png" class="run1 ani" swiper-animate-effect="fadeIn" swiper-animate-duration="2s" swiper-animate-delay="0.1s">
                    <img src="../addons/bsl/img/run2.png" class="run2 ani" swiper-animate-effect="fadeIn" swiper-animate-duration="2s" swiper-animate-delay="0.4s">
                    <img src="../addons/bsl/img/run4.png" class="run3 ani" swiper-animate-effect="fadeIn" swiper-animate-duration="2s" swiper-animate-delay="0.7s">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="container-fluid diqiye">
                    <img src="../addons/bsl/img/dierbu.jpg" alt="" class="img-responsive">

                    <div class="ani xinzhi" swiper-animate-effect="rotateIn" swiper-animate-duration="2s" swiper-animate-delay="0.1s">
                        <p class="xintxt text-danger text-capitalize">
                            <b style="margin-left: 23%;">致爱的接力者的一封信</b><br><br>

                            爱的接力者：<br>

                            &nbsp; &nbsp; &nbsp; 你好！<br>

                            &nbsp; &nbsp; &nbsp; 地球上，我们每一个人，都渺如砂砾，而因为爱的传递，又变得伟大无比。<br>

                            &nbsp; &nbsp; &nbsp; 还记得小时候，我们牙牙学语，蹒跚学步，守护在身边的温暖怀抱，那是父母之爱的传递；时光催促，我们长大了，一起在操场上挥洒汗水，嬉笑打闹，以诚相许，那是友谊之爱传递；心意相通，我们结婚了，相互照顾，彼此包容，那是夫妻之爱的传递；面对伤痛灾患，我们携手并进共度难关，那是无私大爱的传递。<br>

                            爱在血液与浓情的浇灌，爱在每一个坚定的信念，爱在小小的一声嘘寒问暖，爱，就传递在你我之间。<br>

                            &nbsp; &nbsp; &nbsp; 520，这个一年只有一次的特殊日子，如果你羞于表达，请在今天将你收到的“爱的接力棒”传递给你想要温暖的人，让爱分享到每一个你的身旁。<br>

                            &nbsp; &nbsp; &nbsp; 我们，要在一起，将爱，传递下去。<br><br>


                            <span style="margin-left: 50%;">爱的发启者：小艾<br></span>
                            <span style="margin-left: 53%;">2016年5月20日</span>
                        </p>
                        <btn class="woyao"></btn>
                    </div>
                    <img src="../addons/bsl/img/youchuo.png" class="you ani" swiper-animate-effect="fadeIn" swiper-animate-duration="1s" swiper-animate-delay="1s">
                    <div class="container-fluid erweimapage">
                        <img src="../addons/bsl/img/erweimabg.jpg" class="img-responsive erweimabg">
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-scrollbar"></div>
    </div>




    <script src="../addons/bsl/js/swiper.min.js"></script>
    <script src="../addons/bsl/js/swiper.animate1.0.2.min.js"></script>
    <script>
        var mySwiper = new Swiper ('.swiper-container', {
            direction: 'horizontal',
            loop: false,
            speed:1000,
            // 滚动条
            scrollbar: '.swiper-scrollbar',

            width:window.innerWidth,
            height : window.innerHeight,
            autoplay : 1000,
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
            $(".woyao").click(function(){
            	var keyid='<?php  if(empty($_GPC['keyid'])) { ?>null<?php  } else { ?><?php  echo $_GPC['keyid']?><?php  } ?>';
                $.ajax({
                    type: "POST",
                    url:"<?php  echo $this->createMobileUrl('Isforward')?>",
                    data:{'keyid':keyid},
                    success: function(data){
                    	var obj =jQuery.parseJSON(data);//将字符串转为json对象
                        if(obj.state==1){
                        	window.location.href="<?php  echo $this->createMobileUrl('Activityone')?>";
                        	console.log(obj);
                        }else if(obj.state==2){
                        	window.location.href="<?php  echo $this->createMobileUrl('Activitytwo')?>";
                        }
                        else{
                        	console.log(obj);
                        	alert('弹二维码');
                            //$("div.erweimapage").animate({bottom:"0"},200);
                            //$("div.erweimapage").click(function(){
                               //$(this) .animate({bottom:"-80%"},200);
                            //});
                        }
                    	
                    },
                });

            });
        });
    </script>
</body>
</html>