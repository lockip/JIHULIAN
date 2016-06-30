<?php defined('IN_IA') or exit('Access Denied');?>    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
<script>
$(document).ready(function(){
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
	
//console.log('<?php  echo $_W['account']['username']?>');
//console.log('<?php  echo $this->createMobileUrl('index',array('openid'=>$_W['openid']))?>');


wx.onMenuShareAppMessage({
title: '【哈哈】-520艾普表白活动', // 分享标题
desc: '快来参加，100%中奖，期待您的参与', // 分享描述
link: "<?php echo $_W['siteroot'].'app/index.php?i=4&c=entry&do=index&m=bsl&keyid='.$_W['openid']?>", // 分享链接
type: 'link', // 分享类型,music、video或link，不填默认为link
success: function () { 
    // 用户确认分享后执行的回调函数
   alert('分享成功');
},
cancel: function () { 
    // 用户取消分享后执行的回调函数
	 alert('分享失败');
}
});
});
//console.log(<?php  echo $_GPC['keyid']?>);
//转发成功后执行
var keyid=<?php  if(empty($_GPC['keyid'])) { ?>null <?php  } else { ?> <?php  echo $_GPC['keyid']?> <?php  } ?>;

forward(keyid);
function forward($keyid){
	$.ajax({
		type:'post',
		data:{'keyid':$keyid},
		url:"<?php  echo $this->createMobileUrl('forw')?>",
		success:function(data){
			var obj =jQuery.parseJSON(data);//将字符串转为json对象
			alert(obj.con);
			if(obj.state==1)
			alert('共有'+obj['info'].sendcount+'人转发');
		},
	});
}
</script>
</body>
</html>