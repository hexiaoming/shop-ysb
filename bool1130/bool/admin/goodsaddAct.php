<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/

define('ACC',true);
require("../include/init.php");

$goods = new GoodsModel();
$_POST['goods_weight'] *= $_POST['weight_unit'];


$data = array();
$data = $goods->_facade($_POST); // 自动过滤
$data = $goods->_autoFill($data); // 自动填充


if(!$goods->_validate($data)) {
    echo '数据不合法<br />';
    echo implode(',',$goods->getErr());
}

if($goods->add($data)) {
    echo '商品发布成功';
} else {
    echo '商品发布失败';
}
