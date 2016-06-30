<?php 

//$add="五桂桥";
//$lanid="102";
//$atype='1';

$add=$_POST['add'];
$lanid=$_POST['lanid'];
$atype=$_POST['atype'];

if(empty($add) or empty($lanid)){exit;}
require_once(dirname(__FILE__).'/lib/nusoap.php');
$client = new nusoap_client('http://pay.ip66.com/jihulian_wsdl.php?wsdl', false);
	$time=time();
	$param = array('<?xml version="1.0" encoding="UTF-8"?><Root><Domain>lfbjhl</Domain><Passwd>lfbjhl123</Passwd><SrvCode>QueryAddress</SrvCode><Atype>'.$atype.'</Atype><Lanid>'.$lanid.'</Lanid><Address>'.$add.'</Address><Utime>'.$time.'</Utime><YZcode>'.md5('adfasdfdf12134'.'11'.'QueryAddress'.'7'.$time).'</YZcode></Root>');
	
	
	$client->soap_defencoding = 'UTF-8';
	$client->decode_utf8 = false;
	$result = $client->call('WtoServer',$param);
	$re_data = json_decode(json_encode((array) simplexml_load_string($result)), true);
	$list=$re_data['Content']['item'];
	//print_r($re_data);
	if($list){
		
	if($list['item']['STREETID']!=''){
			$c=$list['item'];
			$kli.='<option value="'.$c['STREETID'].'|'.$c['COMMUNITYID'].'|'.$c['BRANCHID'].'|'.$c['DZ'].'">'.$c['SQ'].'-'.$c['DZ'].'</option>';	

	}else{	
		
		foreach($list as $k=>$c){
			
			$kli.='<option value="'.$c['STREETID'].'|'.$c['COMMUNITYID'].'|'.$c['BRANCHID'].'|'.$c['DZ'].'">'.$c['DZ'].'</option>';	
		}
	
	}
	
	
	
	echo '<select class="form-control" name="adds1" id="adds1" onChange="tcinfo()">
	  <option value="">请选择地址</option>'.$kli.'
	</select>';
	exit;
	}else{
		
		echo '<select class="form-control" name="adds1" id="adds1">
	  <option value="">您搜索得区域不能开通本宽带</option>'.$kli.'
	</select>';
		}

?>