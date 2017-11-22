<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


if(file_exists('04.html')) {
   header('location: 04.html');
   exit;
}



$conn = mysql_connect('localhost','root','111111');

$sql = 'use boolshop';
mysql_query($sql,$conn);

$sql = 'set names utf8';
mysql_query($sql,$conn);



$sql = 'select * from goods where goods_id=6';
$rs = mysql_query($sql,$conn);

$row = mysql_fetch_assoc($rs);

echo '我查询了数据库 ^_^';


/**
我们只需要把PHP输出的内容,给截获,并把内容写到文件上就可以了
**/

ob_start(); // 在php和apache之间,建立一道屏障,就像水坝一样,使PHP的输出不能输出到apache
            // 而是输出到一个缓冲区内


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>新建网页</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<script type="text/javascript">

</script>

<style type="text/css">
</style>
</head>
    <body>
        <h1><?php echo $row['goods_name']; ?></h1>
    </body>
</html>


<?php

// 等执行完毕了,此时缓冲区内已经憋了一砣子代码
// 当程序执行完毕后,缓冲区会自动输出!!!

// ob_clean();

$html = ob_get_contents();

file_put_contents('04.html',$html);

?>