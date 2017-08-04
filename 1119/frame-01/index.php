<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
所有由用户直接访问到的这些页面

都得先加载init.php
***/

require('./include/init.php');



$conf = conf::getIns();

// 读取选项
echo $conf->host,'<br />';
echo $conf->user,'<br />';
var_dump($conf->template_dir);

// 动态的追加选项
$conf->template_dir = 'D:/www/smarty';

echo $conf->template_dir;
