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

	//用户名验证
	//密码验证
	//两次密码一致性验证
	//手机号
	//邮箱
	//PRE zj_
	//填充数据
	$name = $_POST['username'];
	$pwd = $_POST['password'];
	$tel = $_POST['tel'];
	$email = $_POST['email'];
	

	$sql = "insert into ".PRE."user (`name`,`password`,`tel`,`email`) values('$name','$pwd','$tel','$email');";

	if(execute($link,$sql)){
		admin_redirect('注册成功');
		exit;
	}else{
		admin_redirect('注册失败，请重试');
		exit;
	}
	mysqli_close($link);
?>