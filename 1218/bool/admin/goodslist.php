<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/

define('ACC',true);
require("../include/init.php");


/*
实例化GoodsModel
调用select方法
循环显示在view上
*/


$goods = new GoodsModel();
$goodslist = $goods->getGoods();


include(ROOT . 'view/admin/templates/goodslist.html');
