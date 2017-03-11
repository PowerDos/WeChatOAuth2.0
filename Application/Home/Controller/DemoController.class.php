<?php 
namespace Home\Controller;
//作者：Gavin Github:https://github.com/PowerDos
class IndexController extends OAuth2Controller {
    public function index(){
        $this->show("这个是测试案例");
    }
}