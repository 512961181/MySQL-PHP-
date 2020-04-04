<?php
	//var_dump();
	//print_r();
	//var_dump($_SERVER);
	// echo "<pre>";
	// 	print_r($_SERVER);
	// echo "</pre>";
	
	//函数库文件
	
	/**
	 * [p 格式化输出变量]
	 * @param  [mixed] $var [传入要打印的变量]
	 * @return [直接打印出变量]
	 */
	function p($var)
	{
		echo "<pre>";
			print_r($var);
		echo "</pre>";
	}
	/**
	 * [v 输出变量类型和值]
	 * @param  [mixed] $var [传入要打印输出的变量]
	 * @return [直接打印出变量]
	 */
	function v($var)
	{
		echo "<pre>";
			echo "输出的变量类型为:".gettype($var)."<br>";
			var_dump($var);
		echo "</pre>";
	}

	//页面跳转
	/**
	 * [专业跳转30年]
	 * @param  string  $msg [提示信息]
	 * @param  string  $url [之前访问的url地址]
	 * @param  integer $t   [等候时间单位S秒]
	 * @return 跳转页面
	 */
	function redirect($msg="",$url='',$t=3)
	{
		if($url==''){
			//回到之前的页面
			$url = $_SERVER['HTTP_REFERER'];
		}
		require PATH."include/redirect.php";
	}


	//excute 处理数据 增 删 改 返回的都是影响行数 整数
	/**
	 * [execute 处理 增 删 改 ]
	 * @param  [object] $link [mysqli的链接标识]
	 * @param  [string] $sql  [要执行的SQL语句]
	 * @return [成功时：添加，返回自增id；删/改，true]
	 *         [失败时：统一返回false]
	 */
	function execute($link,$sql)
	{
		// 执行sql语句
		$result = mysqli_query($link,$sql);
		// 处理结果集
		if($result){
			// 添加时 返回自增ID
			if(mysqli_insert_id($link)>0){
				// 返回自增id
				return mysqli_insert_id($link);
			}else{
				// 删改时返回true
				return true;
			}
		}else{
			// 操作失败
			return false;
		}
	}
	// if(execute(x,x)){

	// }
	//query 查询数据 专业查询30年 返回查询结果 数组
	/**
	 * [query 专业查询30年]
	 * @param  [object] $link [mysqli的链接标识]
	 * @param  [string] $sql  [要执行的SQL语句]
	 * @return [成功时：返回数组]
	 *         [失败时：返回false]
	 */
	function query($link,$sql)
	{
		//执行SQL语句
		$result = mysqli_query($link,$sql);
		//判断执行结果
		if($result){
			$list = array();
			$list = mysqli_fetch_all($result,MYSQLI_ASSOC);
			mysqli_free_result($result);

			//返回查询结果数组
			return $list;
		}else{
			return false;
		}
	}
?>