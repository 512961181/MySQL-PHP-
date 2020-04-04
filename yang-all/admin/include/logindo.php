<?php
	require "../init.php";
	//v($_POST);
	//验证表单是否为空，是否漏写，如果有返回上一步
	foreach ($_POST as $key => $val) {
		if($val == ''){
			 admin_redirect('请完善表单内容');
			 exit;
		}
	}

	$name = $_POST['username'];
	$pwd = $_POST['password'];

	$sql = "select `id`,`name`,`password` from admin_user where name = '$name'; ";
	//echo $sql;

	$row = query($link,$sql);
	//p($row);
	if($row){
		//如果有数据，说明用户存在
		$row = $row[0];
		//v($row);
		// 如果有数据就进行密码比对
		if($row['password']==$pwd){
			//密码一致，登陆成功
			$_SESSION['admin'] = $row['name'];
			admin_redirect("登陆成功!",ADMIN_URL."index.php",5);
			exit;                                                                  
		}else{
			//密码不一致
			admin_redirect('密码错误!');
		}
	}else{
		//用户名不存在
		admin_redirect('用户名并不存在!');
		exit;
	}

	mysqli_close($link);
?>