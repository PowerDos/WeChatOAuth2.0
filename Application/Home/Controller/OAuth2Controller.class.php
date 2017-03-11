<?php
namespace Home\Controller;
//作者：Gavin Github:https://github.com/PowerDos
use Think\Controller;
class OAuth2Controller extends Controller {
    public function _initialize(){
    	//判断是否验证过
		if((session("?userOpenid")&&session("?userSex"))||(session("?userOpenid")&&session("?userNickname"))){
			//已验证过
			if(!session("?userID")){
				$this->redirect('Bind/Bind','',2,"<h1>请先绑定账号再使用,将自动跳转到绑定页面</h1>");
			}
		}else{
		//进入验证
		//方法放在./Application/Home/Common/function.php下
			Check();
		}
	}
}