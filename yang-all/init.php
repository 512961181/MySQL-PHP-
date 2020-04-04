<?php
	//字符集+时间+屏蔽错误+开启session
	header("content-type:text/html;charset=utf-8");
	date_default_timezone_set("PRC");
	session_start();
	$path = dirname(__FILE__);
	
	//将绝对路径替换成可以用于URL的相对路径将\替换成/
	define('PATH',str_replace('\\',"/",$path).'/');
	//echo "PATH".PATH;

	$url = $_SERVER['REQUEST_SCHEME']."://";//http://
	$url.= $_SERVER['SERVER_NAME'];//http://localhost
	//取出当前脚本的文档根目录
	$dir = $_SERVER['DOCUMENT_ROOT'];
	$url = str_replace($dir,$url,PATH);
	//echo $url;
	define('URL',$url);//URL = http://localhost/yang

	//加载数据库配置
	require PATH."config.php";
	//加载功能函数
	require PATH."include/function.php";	
	//加载数据库
	$link = mysqli_connect(HOST,USER,PWD,DB) or die("数据库连接失败");
	mysqli_set_charset($link,CHAR);
?>