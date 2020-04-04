<?php
	//字符集+时间+屏蔽错误+开启session
	header("content-type:text/html;charset=utf-8");
	date_default_timezone_set("PRC");
	session_start();
	$path = dirname(__FILE__);
	
	//将绝对路径替换成可以用于URL的相对路径将\替换成
	define('ADMIN_PATH',str_replace('\\',"/",$path).'/');
	//echo "PATH".ADMIN_PATH;
	$url = $_SERVER['REQUEST_SCHEME']."://";//http://
	$url.= $_SERVER['SERVER_NAME'];//http://localhost
	$A=$url;
	//取出当前脚本的文档根目录
	$dir = $_SERVER['DOCUMENT_ROOT'];
	$url = str_replace($dir,$url,ADMIN_PATH);
	//echo $url;
	define('ADMIN_URL',$url);
	//echo $url;
	//加载数据库配置
	require ADMIN_PATH."config.php";
	//加载功能函数
	require ADMIN_PATH."include/function.php";
	
	//加载数据库
	$link = mysqli_connect(HOST,USER,PWD,DB) or die("数据库连接失败");
	mysqli_set_charset($link,CHAR);

	//v($_SERVER);
	
	//取得当前用户访问脚本的文件名字，如果不是通过login进入后台，那就出去
	$login = basename($_SERVER['SCRIPT_NAME']);
	//判断当前访问文件是否是logindo.php

	//if($login != "logindo.php"){
      //判断登录
     // if(empty($_SESSION['admin'])){
     //   admin_redirect('对不起您还没登录',ADMIN_URL."login.php");
		//header("location:".ADMIN_URL."login.php");
		//exit;      
     // } 
    //}


?>