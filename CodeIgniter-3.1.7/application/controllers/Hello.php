<?php
defined('BASEPATH') OR exit('错误文件');
class Hello extends CI_Controller{
    public function index(){
        $this->load->model('school');
        $data['query'] = $this->school->index();
        print_r($data);
        $this->load->view('hello', $data);
    }
}