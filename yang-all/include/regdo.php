<?php
	require "../init.php";
	//v($_POST);
	//验证表单是否为空，是否漏写，如果有返回上一步
	foreach ($_POST as $key => $val) {
		if($val == ''){
			 redirect('请完善表单内容');
			 exit;
		}	}

	$name = $_POST['username'];
	$pwd = $_POST['password'];
	$sex = $_POST['sex'];
	$age = $_POST['age'];	
	$email = $_POST['email'];	
	$sql = "insert into user (name,password,sex,age,email) values('$name','$pwd','$sex','$age','$email');";
	//echo $sql;
	if(execute($link,$sql)){
		redirect('注册成功',URL."index.php",3);
		exit;
	}else{
		redirect("注册失败，请重试!",URL."index.php",3);
		exit;
	}
	mysqli_close($link);
?>