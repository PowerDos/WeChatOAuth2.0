# WeChatOAuth2.0
基于ThinkPHP3.2.3的微信OAuth2.0网页授权认证模块<br>
## Step 1
将全部文件放在网站目录下<br>
## Step 2
配置你的公众号信息<br>
* 进入文件./Application/Common/Conf/config.php<br>
* 将你的公众号相关信息写入<br>
```PHP
<?php
//这里填入的你域名
define("_URL_","www.baidu.com");
//这里填入你公众号的APPID
define("_APPID_","你公众号的APPID");
//这里填入你公众号的APPSECRET
define('_APPSECRET_','你公众号的APPSECRET');
return array(
	//'配置项'=>'配置值'
	'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    'DB_NAME'               =>  '',          // 数据库名
    'DB_USER'               =>  '',      // 用户名
    'DB_PWD'                =>  '',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
	'DB_PARAMS' => array(\PDO::ATTR_CASE => \PDO::CASE_NATURAL) ,
	'MODULE_ALLOW_LIST'    =>    array('Home','Admin'),//模块
	'DEFAULT_MODULE'       =>    'Home',
	'URL_ROUTER_ON'   => true, 
	'URL_ROUTE_RULES'=>array(
	    'index$' => 'Home/Index/index', //定义路由
	)
);
```
## Step 3
新建的控制器继承OAuth2Controller类即可实现微信网页授权认证功能<br>
OAuth2Controller类的相关代码<br>
```PHP
<?php
namespace Home\Controller;
use Think\Controller;
class OAuth2Controller extends Controller {
    public function _initialize(){
    	//判断是否验证过
		if((session("?userOpenid")&&session("?userSex"))||(session("?userOpenid")&&session("?userNickname"))){
			//已验证过
			//如果你不需要用户绑定的话，可以跳过下面这步
			if(!session("?userID")){
				$this->redirect('这里填入绑定页面','',2,"<h1>请先绑定账号再使用,将自动跳转到绑定页面</h1>");
			}
		}else{
		//进入验证
		//方法放在./Application/Home/Common/function.php下
			Check();
		}
	}
}
```
## Demo
```PHP
<?php 
namespace Home\Controller;
class DemoController extends OAuth2Controller {
    public function index(){
        $this->show("这个是测试案例");
    }
}
```
## P.S.
相关认证代码放在目录`./Application/Home/Common/function.php`下(不是用TP写的小伙伴可以在这里参考下认证代码)<br>
注意要创建相应的数据库和表。具体更改在function目录下更改`getUserInfo()`方法就好
