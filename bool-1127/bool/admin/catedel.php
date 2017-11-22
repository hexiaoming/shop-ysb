<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


// 栏目的删除页面

/**
思路:
接收cat_id

调用model

删除cat_id
**/


define('ACC',true);
require('../include/init.php');


$cat_id = $_GET['cat_id'] + 0;

$cat = new CatModel();

if($cat->delete($cat_id)) {
    echo '删除成功';
} else {
    echo '删除失败';
}

