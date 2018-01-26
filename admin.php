<?php
//定义编码方式
header("content-type:text/html;charset=utf-8");
//检查PHP版本
if(version_compare(PHP_VERSION,'5.3.0','<')) die('require PHP > 5.3.0 !');
//绑定模块
define('BIND_MODULE','Admin');
//定义应用文件目录
define("APP_PATH","App/");
//开启调试模式
define('APP_DEBUG',true);

//引入thinkPHP.php
include_once './lib/ThinkPHP/ThinkPHP.php';
