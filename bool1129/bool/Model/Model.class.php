<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/
defined('ACC')||exit('ACC Denied');
class Model {
    protected $table = NULL; // 是model所控制的表
    protected $db = NULL; // 是引入的mysql对象

    protected $pk = '';
    protected $fields = array();
    protected $_auto = array();

    public function __construct() {
        $this->db = mysql::getIns();
    }

    public function table($table) {
        $this->table = $table;
    }


    /*
        自动过滤:
        负责把传来的数组
        清除掉不用的单元
        留下与表的字段对应的单元
        思路:
        循环数组,分别判断其key,是否是表的字段
        自然,要先有表的字段.

        表的字段可以desc表名来分析
        也可以手动写好 
        以tp为例,两者都行.

        先手动写
    */
    public function _facade($array=array()) {
        $data = array();
        foreach($array as $k=>$v) {
            if(in_array($k,$this->fields)) {  // 判断$k是否是表的字段
                $data[$k] = $v;
            }
        }

        return $data;
    }


    /*
    自动填充
    负责把表中需要值,而$_POST又没传的字段,赋上值
    比如 $_POST里没有add_time,即商品时间,
    则自动把time()的返回值赋过来
    */
    public function _autoFill($data) {
        foreach($this->_auto as $k=>$v) {
            if(!array_key_exists($v[0],$data)) {
                switch($v[1]) {
                    case 'value':
                    $data[$v[0]] = $v[2];
                    break;

                    case 'function':
                    $data[$v[0]] = call_user_func($v[2]);
                    break;
                }
            }
        }

        return $data;
    }
    

    /*
     在model父类里,写最基本的增删改查操作
    */

    /*
        parm array $data
        return bool
    */
    public function add($data) {
        return $this->db->autoExecute($this->table,$data);
    }

    /*
        parm int $id 主键
        return int 影响的行数
    */
    public function delete($id) {
        $sql = 'delete from ' .$this->table . ' where ' . $this->pk . '=' .$id;
        if($this->db->query($sql)) {
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }


    /*
        parm array $data
        parm int $id
        return int 影响行数
    */
    public function update($data,$id) {
        $rs = $this->db->autoExecute($this->table,$data,'update',' where '.$this->pk.'='.$id);
        if($rs) {
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }


    /*
        return Array
    */
    public function select() {
        $sql = 'select * from ' . $this->table;
        return $this->db->getAll($sql);
    }


    /*
        parm int $id
        return Array
    */

    public function find($id) {
        $sql = 'select * from ' .  $this->table . ' where ' . $this->pk . '=' . $id;
        return $this->db->getRow($sql);
    }

}

    