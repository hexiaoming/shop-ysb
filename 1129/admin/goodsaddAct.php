<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/

define('ACC',true);
require("../include/init.php");


// print_r($_POST);



/*

$data['goods_name'] = trim($_POST['goods_name']);

// 数据的检验,做一个示例
if($data['goods_name'] == '') {
    echo '商品名不能为空';
    exit;
}
$data['goods_sn'] = trim($_POST['goods_sn']);
$data['cat_id'] = $_POST['cat_id'] + 0;
$data['shop_price'] = $_POST['shop_price'] + 0;
$data['market_price'] = $_POST['market_price'];
$data['goods_desc'] = $_POST['goods_desc'];
$data['goods_weight'] = $_POST['goods_weight'] * $_POST['weight_unit'];;
$data['is_best'] = isset($_POST['is_best'])?1:0;
$data['is_new'] = isset($_POST['is_new'])?1:0;
$data['is_hot'] = isset($_POST['is_hot'])?1:0;
$data['is_on_sale'] = isset($_POST['is_on_sale'])?1:0;
$data['goods_brief'] = trim($_POST['goods_brief']);

$data['add_time'] = time();
*/

$goods = new GoodsModel();

$_POST['goods_weight'] *= $_POST['weight_unit'];


$data = array();
$data = $goods->_facade($_POST); // 自动过滤
$data = $goods->_autoFill($data); // 自动填充



if($goods->add($data)) {
    echo '商品发布成功';
} else {
    echo '商品发布失败';
}


