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

// log::write('记录');


class mysql {
    public function query($sql) {
        // xxxx查询
        // 记录
        log::write($sql);
    }
}

$mysql = new mysql();

/*
for($i=0;$i<5000;$i++) {
    $sql = 'select goods_id,goods_name,shop_price from goods,select goods_id,goods_name,shop_price from goods,select goods_id,goods_name,shop_price from goods,select goods_id,goods_name,shop_price from goods,select goods_id,goods_name,shop_price from goods,select goods_id,goods_name,shop_price from goods,select goods_id,goods_name,shop_price from goodsselect goods_id,goods_name,shop_price from goodsselect goods_id,goods_name,shop_price from goods where goods_id,' . mt_rand(1,1000);
    $mysql->query($sql);
}

echo '执行完毕';
*/
log::write('记录');
