<?php
	require "../init.php";
	//v($_POST);
	//验证表单是否为空，是否漏写，如果有返回上一步
	foreach ($_POST as $key => $val) {
		if($val == ''){
			 redirect('请完善表单内容');
			 exit;
		}
	}	
	
	$name = $_POST['username'];
	$pwd = $_POST['password'];

	$sql = "select `id`,`name`,`password` from user where name = '$name'; ";
	$row = query($link,$sql);
	if($row){
		//如果有数据，说明用户存在
		$row = $row[0];
		//p($row);
		// 如果有数据就进行密码比对
		if($row['password']==$pwd){
			//密码一致，登陆成功
			$_SESSION['home'] = $row['name'];
			//echo $_SESSION['home'];
			//$sql2="update user set `iso`='1' where `name` = '$name';" ;
			//echo $sql2;
			//$result=query($link,$sql2);
			redirect("登陆成功!",URL."index.php",30);
			exit;
		}else{
			//密码不一致
			redirect('密码错误!');
		}
	}else{
		//用户名不存在
		redirect('用户名并不存在!');
		exit;
	}

?>