<?php 
	require '../init.php';
	//v($_POST);
	//v($_GET);
	$a=$_GET['a'];	
	switch ($a) {
		case 'del':
			$id=$_GET['id'];
			$sql="delete from user where id=$id";
			$result=mysqli_query($link,$sql);
			if($result && mysqli_affected_rows($link)>0){
				admin_redirect("删除成功！",ADMIN_URL."user/index.php",5);
				//echo '删除成功！3秒后跳转到首页，或者点击此处跳转<a href="./index.php">返回首页</a>';
				echo '<meta http-equiv="refresh" content="3,index.php" > ';
			}else{
				admin_redirect("删除失败！",ADMIN_URL."user/index.php",5);
				//echo "删除失败";
				echo '<meta http-equiv="refresh" content="3,index.php" > ';
			}
			break;
		case 'edit':
			$id=$_SESSION['id'];
			$username=$_POST['username'];
			$password=$_POST['password'];
			$sex=$_POST['sex'];
			$age=$_POST['age'];
			$email=$_POST['email'];
			
			
			$sql="update user set `name`='$username',`password`='$password',`sex`='$sex',`age`='$age',`email`='$email' where `id`=$id";
			$result=mysqli_query($link,$sql);
			if($result){
				admin_redirect("编辑成功！",ADMIN_URL."user/index.php",5);
				//echo '编辑成功！3秒后跳转到首页，或者点击此处跳转<a href="./index.php">返回首页</a>';
				echo '<meta http-equiv="refresh" content="3,index.php" > ';
			}else{
				admin_redirect("编辑失败！",ADMIN_URL."user/index.php",5);
				//echo "编辑失败";
				echo '<meta http-equiv="refresh" content="3,index.php" > ';
			}
			break;

		case 'add':
			foreach ($_POST as $key => $val) {
				if($val == ''){
			 		admin_redirect('请完善表单内容');
			 	exit;
				}
			}
			//填充数据 
			$username=$_POST['username'];
			$password=$_POST['password'];
			$sex=$_POST['sex'];
			$age=$_POST['age'];
			$email=$_POST['email'];
			$sql = "insert into user (`name`,`password`,`sex`,`age`,`email`) values('$username','$password','$sex','$age','$email');";

			$id=execute($link,$sql);
			if($id){
				admin_redirect2('添加成功ID'.$id,ADMIN_URL.'user/index.php',5);
				exit;
			}else{
				admin_redirect2('添加失败，请重试！',ADMIN_URL.'user/index.php',5);
				exit;
			}
			mysqli_close($link);
			break;
	}
 ?>
