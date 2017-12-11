<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/



define('ACC',true);
require('../include/init.php');


// 接POST
// 判断合法性,同学们自己做.


$data = array();
if(empty($_POST['cat_name'])) {
    exit('栏目名不能为空');
}
$data['cat_name'] = $_POST['cat_name'];
$data['parent_id'] = $_POST['parent_id'];
$data['intro'] = $_POST['intro'];

$cat_id = $_POST['cat_id'] + 0;



// 调用model 来更改
$cat = new CatModel();

if($cat->update($data,$cat_id)) {
    echo '修改成功';
} else {
    echo '修改失败';
}