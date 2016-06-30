<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html lang="zh-cn" ng-app="zhhModule">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>众合会</title>
    <meta name="format-detection" content="telephone=no, address=no">
    <meta name="apple-mobile-web-app-capable" content="yes" /> <!-- apple devices fullscreen -->
    <meta name="apple-touch-fullscreen" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <link rel="shortcut icon" href="http://pdayewu.aipu.com/attachment/images/global/wechat.jpg" />
   	<link href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
   	<link rel="stylesheet" href="./resource/bsl/css/swiper.min.css">
   	<link rel="stylesheet" href="./resource/bsl/css/zhh.css" />
    <link rel="stylesheet" href="./resource/bsl/css/1.css">

</head>
<body>


<div class="container-fluid addrs">
    <div class="container">
        <h3>选择活动地区</h3>
    </div>
    <div class="container">
        <ul>
        <?php  if(is_array($list)) { foreach($list as $item) { ?>
            <li class="city"><a href="<?php  echo $this->createMobileUrl('index',array('city'=>$item['id']))?>"><img src="./resource/bsl/<?php  echo $item['imgurl'];?>" alt="">&nbsp;&nbsp;<span><?php  echo $item['firstcity'];?></span></a></li>
        <?php  } } ?>
        </ul>
    </div>
    </div>
    </body>
    </html>
<script>
    $('#cd').click(function(){
        window.location.href="diqu/cd.html";
    });
    $('#cq').click(function(){
        window.location.href="diqu/cq.html";
    });
    $('#cs').click(function(){
        window.location.href="diqu/cs.html";
    });
    $('#gy').click(function(){
        window.location.href="diqu/gy.html";
    });
    $('#gz').click(function(){
        window.location.href="diqu/gz.html";
    });
    $('#km').click(function(){
        window.location.href="diqu/km.html";
    });
    $('#nn').click(function(){
        window.location.href="diqu/nn.html";
    });
    $('#qt').click(function(){
        window.location.href="diqu/qt.html";
    });
    $('#sh').click(function(){
        window.location.href="diqu/sh.html";
    });
    $('#wh').click(function(){
        window.location.href="diqu/wh.html";
    });
</script>



