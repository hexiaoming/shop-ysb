<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


$ori_img = 'D:/www/bool/data/images/201212/04/dtc9w8.jpg';

echo basename($ori_img),'<br />'; //获取文件名
echo dirname($ori_img),'<br />'; // 获取所在目录

echo dirname($ori_img) . '/goods_' . basename($ori_img);