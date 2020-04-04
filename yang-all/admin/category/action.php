<?php 
	require '../init.php';
	//v($_POST);
	// echo "hr"	 v($_GET);
	$a=$_GET['a'];
	
	switch ($a) {
		case 'display':
			//是否显示分类
			$id=$_GET['id'];
			$display=$_GET['display'];
			$sql="update category set `display`='$display' where id=$id";
			execute($link,$sql);
			header("location:".$_SERVER['HTTP_REFERER']);
			break;
		case 'del':
			//删除时需要注意
			//1.当前分类下有没有子类，有子类要提示
			//2.当前分类下还有数据（新闻文章），不能删除
			//3.可选，顶级分类不允许删除
			//v($_GET);
			$pid=$_GET['id'];
			$sql="delete  from category where id = '$pid'";
			$result=mysqli_query($link,$sql);
			if($result && mysqli_affected_rows($link)>0){
				admin_redirect("删除成功！",ADMIN_URL."category/index.php",5);
				//echo '删除成功！3秒后跳转到首页，或者点击此处跳转<a href="./index.php">返回首页</a>';
				echo '<meta http-equiv="refresh" content="3,index.php" > ';
			}else{
				admin_redirect("删除失败！",ADMIN_URL."category/index.php",5);
				//echo "删除失败";
				echo '<meta http-equiv="refresh" content="3,index.php" > ';
			}
			//$list=query($link,$sql);
			//if(!empty($list)){
			//	admin_redirect('对不起，该类下还没有子类，不能删除！',ADMIN_URL.'category/index.php',5);
			//	exit;
			//}
			break;

		case 'edit':
			
			break;

		case 'add':
			foreach ($_POST as $key => $val) {
				if($val == ''){
			 		admin_redirect('请完善表单内容！');
			 	exit;
				}
			}
			//填充数据 
			$cname=$_POST['cname'];
			$pid=$_POST['pid'];
			$path=$_POST['path'];
			
			$sql = "insert into category (`cname`,`pid`,`path`) values('$cname','$pid','$path');";

			$id=execute($link,$sql);
			if($id){
				admin_redirect('添加成功ID'.$id,ADMIN_URL.'category/index.php',5);
				exit;
			}else{
				admin_redirect('添加失败，请重试！',ADMIN_URL.'category/index.php',5);
				exit;
			}
			mysqli_close($link);
			break;


	}
 ?>
