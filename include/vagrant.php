<?php

// +-----------------------------------------------------------------------
// | E-Commerce Services Content Management System
// +-----------------------------------------------------------------------
// | Copyright (c) 2014 http://ecscms.com All rights reserved.
// +-----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +-----------------------------------------------------------------------
// | Author: Ted <vagrant@wxpay.org> (QQ: 2797712)
// +-----------------------------------------------------------------------

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<')) die('require PHP > 5.3.0 !');
// 开启调试模式
define('APP_DEBUG', true);
// 网站根目录
define('ROOT_PATH', realpath(dirname(__FILE__) . '/../') . '/');
// 网站核心目录
define('BASE_PATH', dirname(__FILE__) . '/');
// 应用目录
define('APP_PATH', BASE_PATH. 'application/');
// 应用公共目录
define('COMMON_PATH', BASE_PATH . 'common/');
// 运行时目录
define('RUNTIME_PATH', ROOT_PATH.'data/caching/');
// 根目录请求
$root_directory = (BIND_MODULE == 'Home' || BIND_MODULE == 'Api') ? true:false;
// 网站URL路径
if($root_directory){
    define('__ROOT__', rtrim(dirname($_SERVER['SCRIPT_NAME']), '/'));
}else{
    define('__ROOT__', rtrim(dirname($_SERVER['SCRIPT_NAME']), strtolower(BIND_MODULE).'/'));
}
// 安装检测
if (!file_exists(ROOT_PATH . 'data/install.lock') && BIND_MODULE !== 'Install') {
    $redirectUrl = $root_directory ? './install':'../install';
    header("Location: ".$redirectUrl);
    exit();
}
// 引入框架入口文件
require BASE_PATH.'framework/core.php';
