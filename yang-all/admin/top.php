<!--TOP-->
<?php require "./init.php" ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
<link rel="icon" href="./public/images/ico.png" type="image/jpg" size="50*50">
<title>top</title>
<!-- Bootstrap -->
<link href="./public/css/bootstrap.min.css" rel="stylesheet">
<link href="./public/css/top.css" rel="stylesheet">
 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
 <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<nav class="navbar navbar-default navbar-inverse img-rounded nav-top transparent">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      
      <a class="navbar-brand" href="<?php echo ADMIN_URL ?>index.php">
      <img src="<?php echo ADMIN_URL ?>public/images/icon2.png" alt="" id="logo"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
		<li><a href="./index.php" target="_top"><b>胖羊后台系统</b></a></li>
        <li><a href="#"><strong>用户管理</strong></a></li>      
		<li><a href="#"><strong>分类管理</strong></a></li>
		<li><a href="#"><strong>新闻管理</strong></a></li>
    <li><a href="#"><strong>个人中心</strong></a></li>
    <li><a href="#"><strong>会员中心</strong></a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
	
        <li><a href="#"><span class=" glyphicon glyphicon-comment mtr5"></span><strong>消息</strong></a></li>
		<li><a href="#"><span class="glyphicon glyphicon-user mtr5"></span><strong>管理员&nbsp;<?php echo $_SESSION['admin']?></strong></a></li>
        <li><a href="./include/logout.php" target="_top"><span class="glyphicon glyphicon-remove-sign mtr10"></span>退出</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

    
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="./public/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="./public/js/bootstrap.min.js"></script>
</body>
</html>