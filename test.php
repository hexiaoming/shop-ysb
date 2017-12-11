<?php
	if(isset($_GET['PHPSESSID'])){
		session_id($_GET['PHPSESSID']);
	}

	session_start();  //会判断是否已经设置了上面的sessionid，如果已经设置过了，就不会重新创建，如果没有就会创建个新的seesion文件。
	//echo "sid====".SID;
	//购物大厅
	echo "<h1>欢迎购买</h1>";
	echo "<a href='ShopProcess.php?bookid=sn001&bookname=天龙八部&".SID."'>天龙八部</a><br/>";       //不能直接写进去，不然以为也是个字符串
	echo "<a href='ShopProcess.php?bookid=sn002&bookname=红楼梦&".SID."'>红楼梦</a><br/>";
	echo "<a href='ShopProcess.php?bookid=sn003&bookname=西游记&".SID."'>西游记</a><br/>";
	echo "<a href='ShopProcess.php?bookid=sn004&bookname=聊斋&".SID."'>聊斋</a><br/>";
	echo "<hr/>";
	echo "<a href='ShowCart.php?".SID."'>查看购买到的商品列表</a>";
?>
