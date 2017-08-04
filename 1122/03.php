<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
递归与迭代的区别与联系

递归自身调用自身,每一次调用把问题简化,直到问题解决.

sum(10) 不会算,难.
10 + sum(9)->不会算,难
         9 + sum(8)-->
         ....
              .....
                 2+ sum(1)
                      返回1,简单

即:把大的任务拆成相同性质的多个小任务.
以昨天的 猴子摘桃为例
|   |   |   |   |
变成5只猴子来,每只狮子只接1颗桃

即: 人多,每人完成一件.


思考: 如果是只普通猴子,变不出第2只猴子来,只能自己摘
应该: 走走走,走到最右边,从右到左,一个个摘回来
这次 1只猴子把要作的工作列出,每次做一步.
1只猴子做多步工作.

迭代:就是指在某个范围内,反复执行相同工作.



递归: 5只猴子,每只猴子,摘1颗桃,完成1步工作
迭代: 1只猴子,这只儿子,摘5颗桃,完成5步工作



***/

function recsum($n) {
    if($n > 1) {
        return $n + recsum($n-1);
    } else {
        return 1;
    }

}


/*
这是一个典型的递归调用,
在计算出结果前,最多的时候,共有10个函数同时运行.
*/
echo recsum(10),'<br />';


function itsum($n) {
    for($sum=0,$i=1;$i<n;$i++) {
        $sum += $i;
    }
    
    return $sum;
}




