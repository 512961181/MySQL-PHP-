<!-- TOP -->
<?php 
require "../init.php" ;
//总记录数
$sql="select count(*) total from user";
$row=query($link,$sql);
$total=$row['0']['total'];
//每页显示多少条
$num=10;
//总页数 ceil()取整
$allpage=ceil($total/$num);
//echo $allpage;exit;
//获取页码
$page=isset($_GET['page'])?$_GET['page']:1;
//获取偏移量 limit,a,b中的a
$offset=($page-1)*$num;
//获取上一页/下一页
$prev=max($page-1,1);
$next=min($page+1,$allpage);
//控制数组页码的显示
$start=max($page-2,1);//$start>=1
$end=min($page+2,$allpage);//$end<=总页码
$pageurl='index.php';
//产生数字连接
$num_link='';
for($i=$start;$i <= $end;$i++){		
	if($page==$i){
	$num_link.='<li class="active"><a href="./'.$pageurl.'?page='.$i.'" class="btn btn-default">'.$i.'</a><li>';
	 continue;    //跳出后并继续后面的循环
	}
    $num_link.='<li><a href="./'.$pageurl.'?page='.$i.'" class="btn btn-default">'.$i.'</a><li>';
}

$sql = "select * from user order by id asc limit $offset,$num;";
$user_list=query($link,$sql);

//显示当前页查询到的记录数量
$rows=mysqli_affected_rows($link);

//关闭链接
mysqli_close($link);
//v($user_list);
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
<title>main</title>
<!-- Bootstrap -->
<link href="../public/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="../public/css/add.css">
</head>
<body>
<div class="container index-bg img-rounded">
	 <table class="table table-hover">
		<tr>
			<th>ID</th>
			<th>姓名</th>
			<th>手机号</th>
			<th>邮箱</th>
			<th>操作</th>
		</tr>
	<?php foreach($user_list as $key => $val) : ?>
		<tr>
			<td><?php echo $val['id'] ?></td>
			<td><?php echo $val['name'] ?></td>
			<td><?php echo $val['sex'] ?></td>
			<td><?php echo $val['age'] ?></td>
            <td><?php echo $val['email'] ?></td>
            <td>
   				<a href="./edit.php?id=<?php echo $val['id'] ?>" class="btn btn-info">编辑</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="./action.php?a=del&id=<?php echo $val['id'] ?>" class="btn btn-danger">删除</a>
			</td>
		</tr>
		<?php endforeach ?>
	</table>
    <div class="mrt2">
		<?php require "../include/page.php" ?>
    </div>
</div>
 

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="./public/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="./public/js/bootstrap.min.js"></script>
</body>
</html>
