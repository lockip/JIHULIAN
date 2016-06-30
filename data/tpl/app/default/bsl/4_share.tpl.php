<?php defined('IN_IA') or exit('Access Denied');?><script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<meta charset="utf-8">

<div>我是分享界面</div>
<div>我是openid:<?php  echo $_W['openid']?></div>
<script type="text/javascript">
wx.config({
	
	  //debug: true, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
	    appId: "<?php  echo $rs['appId']?>", // 必填，公众号的唯一标识
	    timestamp: <?php  echo $rs['timestamp']?>, // 必填，生成签名的时间戳
	    nonceStr: "<?php  echo $rs['nonceStr']?>", // 必填，生成签名的随机串
	    signature: "<?php  echo $rs['signature']?>",// 必填，签名，见附录1
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
	                'openCard'] // 必填，需要使用的JS接口列表，所有JS接口列表见附录2
});
wx.ready(function () {
    var shareData = {
    title: '标题长长长长长长长长',
    desc: '描述多多多哦哦哦哦',
    link: 'http://www.pengbobo.com',
    imgUrl: 'http://www.baidu.com/img/bdlogo.png',
    dataUrl:'',
  };
    var adurl="http://www.baidu.com/";//回调
wx.onMenuShareAppMessage({
    title: shareData.title,
    desc: shareData.desc,
    link: shareData.link,
    imgUrl:shareData.imgUrl,
    trigger: function (res) {
    },
    success: function (res) {
      window.location.href =adurl;
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
        window.location.href =adurl;
    },
    cancel: function (res) {
    },
    fail: function (res) {
      alert(JSON.stringify(res));
    }
  });   
});
</script>