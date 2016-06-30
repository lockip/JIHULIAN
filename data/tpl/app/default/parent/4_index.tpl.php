<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
	<html lang="zh-CN">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   		<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
   		<meta name="Keywords" Content="六一，61，艾上童年，艾普，宽带"> 
   		<meta name="Description" Content="极互联6·1活动，艾上童年，快来参与，分享积攒获大礼！"> 
	    <title>6.1 艾上童年 活动个人中心</title>
		<link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.css" rel="stylesheet">
	    <style type="text/css">
	    		*{
	    			margin: 0;
	    			padding: 0;
	    			font-family: "微软雅黑";
	    		}
	    		img{
	    			width: 100%;
	    		}
	    		.cont{
	    			position: absolute;
	    			left: 0;
	    			top: 30%;
	    			width: 90%;
	    			background-color:rgba(255,255,255,0.5) ;
	    			text-align: center;
	    			margin-left: 5%;
	    			height: 40px;
	    			line-height: 40px;
	    			border-radius: 3px;
	    		}
	    		.cont>p{
	    			color: white;
	    		}
	    		.cont2,.cont3{
	    			position: absolute;
	    			left: 0;
	    			top: 30%;
	    			width: 90%;
	    			background-color:rgba(255,255,255,0.5) ;
	    			text-align: center;
	    			margin-top: 15%;
	    			margin-left: 5%;
	    			height: 170px;
	    			line-height: 40px;
	    			border-radius: 3px;
	    		}
	    		.cont3{
	    			height: 180px;
	    			top: 60%;
	    			color: white;
	    		}
	    		.cont2>p{
	    			color: white;
	    		}
	    		.cont2>h4{
	    			color: red;
	    		}
	    		@media screen and (max-width:373px ) {
	    			.cont,.cont2,.cont3{
	    				font-size: 14px;
	    			}
	    			.cont3{
	    				height: 160px;
	    				margin-top: 60px;
	    			}
	    		}
	    </style>
	</head>
	<body>
		<img src="../addons/parent/img/bg.jpg"  />
		<div class="cont">
			<p>
				我的兑奖码	
			</p>
		</div>
		<div class="cont2">
			<p>
				免费宽带兑奖码
			</p>
			<h4 id="TicketOne">
				0000000000000000000000000
			</h4>
			<p>
				奖品兑换券兑奖码
			</p>
			<h4 id="TicketTwo">
				0000000000000000000000000
			</h4>
		</div>
		<div class="cont3">
			<p>
				请妥善保存您的兑奖码，极互联将在活动参与人数累计到61的整数倍时随机抽奖。<br />届时工作人员将主动与中奖人员联系。<br />
				若有疑问，请联系QQ：3437477448.
			</p>
		</div>
		<!-- 模态窗口 -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">提示:</h4>
      </div>
      <div class="modal-body">
        <lable>兑奖手机号</lable>
         <input type="number" id="phone" name="phone" class="form-control" placeholder="PhoneNum" />
         <span>提示:</span><span id="info">请输入手机号</span>
      </div>
         <div class="modal-footer">
        <button type="submit" id="save" class="btn btn-success" disabled="disabled">保存</button>
      </div>
    </div>
  </div>
</div>
		<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
	    <script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.js"></script>
		<script type="text/javascript">
		$(function(){
			$('#myModal').modal('show');
	    	$('#phone').keyup(function(){
	    		//console.log($(this).val());
	    		$key=$(this).val();
	    		$('#save').button('loading');
	    		$info='您输入的'+$key+'手机号不正确';
	    		if(validate($key)){
	    			$('#info').text('成功');
	    			$('#save').button('reset');
	    		}else{
	    			$('#info').text($info);
	    		}
	    		});
	    	
			$('#save').click(function(){
				var phone=$('#phone').val();
				create(phone);
				});
	        });
    	function create($phone){
    		$.ajax({
                type: "POST",
                url:"<?php  echo $this->createMobileUrl('chack')?>",
                data:{'phone':$phone},
                success: function(json){
                if(json!=''&&json!=null){
                	var obj =jQuery.parseJSON(json);//将字符串转为json对象
                 if(obj[10]=='1'){
                    	$('#myModal').modal('toggle');
                    	$('#TicketOne').text(obj[3]);
                    	$('#TicketTwo').text(obj[2]);
                    }
                    else{
                    	$('#info').css({color:'red'}).text('你还未达到领取奖品的资格');
                    }
                }else{
                	$('#info').css({color:'red'}).text('你还未达到领取奖品的资格');
                }
                
                console.log(obj);
             }
          });
        }
    	function validate($key){
        	var myreg = /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/; 
        	if(!myreg.test($key)) 
        	{ 
        	    return false; 
        	}else{
        		return true; 
        	} 
        	}
		</script>
	</body>
</html>
