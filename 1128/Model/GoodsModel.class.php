<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


defined('ACC')||exit('ACC Denied');

class GoodsModel extends Model{
    protected $table = 'goods';

    /*
        parm array $data
        return bool
    */
    public function add($data) {
        return $this->db->autoExecute($this->table,$data);
    }
}

