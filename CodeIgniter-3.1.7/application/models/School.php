<?php
class School extends CI_Model{
    function __construct()//重载构造函数
    {
        parent::__construct();
        $this->load->database();//1.连接数据库（构造函数中连接数据库）
    }
    public function index(){
        $query = $this->db->get('school', 2);
        return $query->result();
    }
}