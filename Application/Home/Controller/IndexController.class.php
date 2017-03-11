<?php
namespace Home\Controller;
//作者：Gavin Github:https://github.com/PowerDos
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->show("直接继承OAuth2Controller就行");
    }
}