<?php
//作者：Gavin Github:https://github.com/PowerDos
//这里填入的TOKEN
define("TOKEN", "weixin");
//这里填入的你域名
define("_URL_","www.baidu.com");
//这里填入你公众号的APPID
define("_APPID_","");
//这里填入你公众号的APPSECRET
define('_APPSECRET_','');
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