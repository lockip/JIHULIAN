<?php
/**
 * [WeEngine System] Copyright (c) 2014 WE7.CC
 * WeEngine is NOT a free software, it under the license terms, visited http://www.we7.cc/ for more details.
 */
defined('IN_IA') or exit('Access Denied');
load()->model('app');
$multiid = intval($_GPC['t']);
if(empty($multiid)) {
	load()->model('account');
	$setting = uni_setting($_W['uniacid'], array('default_site'));
	$multiid = $setting['default_site'];
}
$title = $_W['page']['title'];
$navs = app_navs('home', $multiid);
//获取参与人数
$zhh_look=pdo_fetchall('SELECT type,count(*) as typecount FROM'.tablename('zhh_ticket')." GROUP BY (type) ");
//获取套餐查看记录

//获取参与活动的总人数
$zhh_qg_property=pdo_fetch('SELECT property_con0,property_con1,property_con2 FROM'.tablename('zhh_rule')." WHERE `id`=1 ");
$zhh_qg_count=$zhh_qg_property['property_con0'];//总数 属性
$zhh_qg_base=$zhh_qg_property['property_con1'];//活动基数
$zhh_qg_partake=$zhh_qg_property['property_con1']-$zhh_qg_property['property_con2'];//当前还差多少人
$zhh_qg_nowcount=$zhh_qg_property['property_con2'];//本轮参与人数
// var_dump($zhh_qg_partake);


$zhh_look_list=pdo_fetchall('SELECT `look` FROM'.tablename('zhh_looks').' INNER JOIN ims_june_shopping_goods on ims_june_shopping_goods.id=ims_zhh_looks.activity_id WHERE ims_zhh_looks.type_list=1 ');
$share_tmp = pdo_fetch('SELECT title,description,thumb FROM ' . tablename('cover_reply') . ' WHERE uniacid = :aid AND multiid = :id AND module = :m', array(':aid' => $_W['uniacid'], ':id' => $multiid, ':m' => 'site'));
$_share['imgUrl'] = tomedia($share_tmp['thumb']);
$_share['desc'] = $share_tmp['description'];
$_share['title'] = $share_tmp['title'];
if (!empty($multiid)) {
	isetcookie('__multiid', $multiid);
}
template('home/home');