<?php 
	require '../init.php';
	//v($_POST);
	//v($_GET);
	$a=$_GET['a'];	
	switch ($a) {
		case 'del':
			$id=$_GET['id'];
			$sql="delete from news where id=$id";
			$result=mysqli_query($link,$sql);
			if($result && mysqli_affected_rows($link)>0){
				admin_redirect("删除成功！",ADMIN_URL."news/index.php",5);
				//echo '删除成功！3秒后跳转到首页，或者点击此处跳转<a href="./index.php">返回首页</a>';
				echo '<meta http-equiv="refresh" content="3,index.php" > ';
			}else{
				admin_redirect("删除失败！",ADMIN_URL."news/index.php",5);
				//echo "删除失败";
				echo '<meta http-equiv="refresh" content="3,index.php" > ';
			}
			break;
		case 'edit':
			$id=$_SESSION['id'];
			$author=$_POST['author'];
			$time=date("Y-m-d H:i:s");
			$sort=$_POST['sort'];
			$title=$_POST['title'];
			$text=$_POST['text'];
						
			$sql="update news set `author`='$author',`time`='$time',`sort`='$sort',`title`='$title',`text`='$text' where `id`=$id";
			$result=mysqli_query($link,$sql);
			if($result){
				admin_redirect("编辑成功！",ADMIN_URL."news/index.php",5);
				//echo '编辑成功！3秒后跳转到首页，或者点击此处跳转<a href="./index.php">返回首页</a>';
				echo '<meta http-equiv="refresh" content="3,index.php" > ';
			}else{
				admin_redirect("编辑失败！",ADMIN_URL."news/index.php",5);
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
			$id=$_SESSION['id'];
			$author=$_POST['author'];
			$time=date("Y-m-d H:i:s");
			$sort=$_POST['sort'];
			$title=$_POST['title'];
			$text=$_POST['text'];

			
			$sql = "insert into news (`author`,`time`,`sort`,`title`,`text`) values('$author','$time','$sort','$title','$text');";

			$id=execute($link,$sql);
			if($id){
				admin_redirect2('添加成功！',ADMIN_URL.'index.php',20);
				exit;
			}else{
				admin_redirect2('添加失败，请重试！',ADMIN_URL.'index.php',20);
				exit;
			}
			mysqli_close($link);
			break;
	}
 ?>
