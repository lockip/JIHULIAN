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
    <link rel="stylesheet" href="../addons/bsl/css/style2.css">






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

        
    </script>
</head>
<body>
<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="container-fluid hd">
                <img src="../addons/bsl/img/bg01.jpg" class="img-responsive bg">
                <img src="../addons/bsl/img/baoxiang1.png" class="img-responsive baoxiang1">
                <img src="../addons/bsl/img/xiaoren.png" class="img-responsive xiaoren">
                <p>恭喜您成为第 <span id="jishu"> <?php  if(empty($count)) { ?>0<?php  } else { ?><?php  echo $count?> <?php  } ?> </span> 名接力者</p>
                <img src="../addons/bsl/img/fenxiangpage.png" class="img-responsive fenxiang">
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
        /*(function(){
            setInterval(function(){
                $(".bg").attr("src","../addons/bsl/img/bg02.jpg");
                $(".baoxiang1").css("transform","rotate(3deg)");
                setTimeout(function(){ $(".bg").attr("src","../addons/bsl/img/bg01.jpg");$(".baoxiang1").css("transform","rotate(-1deg)");},200);
            },400);
        })();*/
        $(".baoxiang1").click(function(){
            $(".fenxiang").show(500);
        });


    });
    wx.config({
        debug: true,
        appId: '<?php  echo $signPackage["appId"];?>',
        timestamp: <?php  echo $signPackage["timestamp"];?>,
        nonceStr: '<?php  echo $signPackage["nonceStr"];?>',
        signature: '<?php  echo $signPackage["signature"];?>',
        jsApiList: ['checkJsApi',
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
    		'openCard']
      });
    wx.ready(function () {
    	  
        var shareData = {
        title: '520表白日，将爱接力，人人有礼！',
        desc: '在520这个特殊的日子，玩小游戏把说不出口的爱传递给你的亲朋好友，即可获得大宝箱，礼物限量，先到先得哦！',
        link: "<?php  echo $this->createMobileUrl('index',array('keyid'=>$_W['openid']))?>",
        imgUrl: '../addons/bsl/img/520.png',
      };
      var adurl="<?php  echo $this->createMobileUrl('Activitytwo')?>";//回调
      //分享朋友
      
      wx.onMenuShareAppMessage({
           title: shareData.title,
          desc: shareData.desc,
          link: shareData.link,
          imgUrl:shareData.imgUrl,
          trigger: function (res) {
          },
          success: function (res) {
            forward()
          },
          cancel: function (res) {
          },
          fail: function (res) {
            alert(JSON.stringify(res));
          }
        });
     //朋友圈
      wx.onMenuShareTimeline({
          title: shareData.title+"---"+shareData.desc,
          link: shareData.link,
          imgUrl:shareData.imgUrl,
          trigger: function (res) {
          },
          success: function (res) {
              //window.location.href =adurl;
        	  forward();
          },
          cancel: function (res) {
          },
          fail: function (res) {
            alert(JSON.stringify(res));
          }
        });   
        
      });
  //forward();
  //转发数据
  function forward(){
		$.ajax({
			type:'post',
			url:"<?php  echo $this->createMobileUrl('forw')?>",
			success:function(data){
				var obj =jQuery.parseJSON(data);//将字符串转为json对象
				alert(obj.con);
				if(obj.state==1){
				alert('共有'+obj['info'].sendcount+'人转发,即将进入领取页面');
				 window.location.href='<?php echo $_W['siteroot'].'app/index.php?i=4&c=entry&do=Activitytwo&m=bsl&sopenid='.$_W['openid']?>';
				}
			},
		});
	}
</script>
</body>
</html>