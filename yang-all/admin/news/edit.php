<?php 
require'../init.php';
$id = $_GET['id'];
//sql语句
$sql = "select * from news where id=$id";
//处理结果集
$user = query($link,$sql);
$u = $user[0];
$_SESSION['id']=$u['id'];
//$user = mysqli_fetch_assoc($link,$row);
//关闭链接
mysqli_close($link);
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
<title>用户编辑</title>
<!-- Bootstrap -->
<link href="../public/css/bootstrap.min.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
	<script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" href="../public/css/add.css">
</head>
<body>
<div class="container edit-bg2 img-rounded">     
    <div class="container news img-rounded">
        <form action="./action.php?a=edit" method="post">
            <div class="form-group">
                <h2>作者</h2>
                <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $u['author']?>" name="author">
            </div>
            <div class="form-group">
                <h2>类别</h2>
                <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $u['sort']?>" name="sort">
            </div>
            <div class="form-group">
                <h2>标题</h2>
                <input type="text" class="form-control" id="exampleInputName2" value="<?php echo $u['title']?>" name="title">
            </div>
            <div class="form-group">
                <h2>内容</h2>
                <textarea rows="15" cols="100"  class="form-control" id="text" name="text"><?php echo $u['text']?>
                </textarea>
            </div>
            <div  class="M">
                <button type="submit" class="btn btn-primary">修改</button>
                <button type="reset" class="btn btn-danger pull-right">清空重填</button>
            </div>
        </form>
    </div>
</div>
    
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="./public/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="./public/js/bootstrap.min.js"></script>
</body>
</html>