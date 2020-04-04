<!-- TOP -->
<?php require "./init.php" ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
<link rel="icon" href=".public/images/icon.png" type="image/jpg" size="25*25">
<title>胖羊后台管理系统</title>

<!-- Bootstrap -->
<link href="./public/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="./public/css/menu.css">
</head>
<body>
<div class="panel-group " id="accordion" role="tablist" aria-multiselectable="true">
	<div class="panel img-rounded transparent90">    
		<a class="btn btn-primary btn-lg menu1" href="#menu1" role="button" data-toggle="collapse" data-parent="#accordion">
			<h4 class="panel-title">
            	<b>用户管理</b>
          	</h4>
        </a>   
	<div id="menu1" class="panel-collapse collapse">
		<div class="list-group">
          <a class="btn btn-warning menu1 mrt" href="./user/add.php" target="main">添加前台用户</a>
          <a class="btn btn-danger menu1 mrt" href="./user/index.php" target="main">前台用户列表</a>
          <a class="btn btn-info menu1 mrt" href="./adminuser/add.php" target="main">添加后台用户</a>
          <a class="btn btn-success menu1 mrt" href="./adminuser/index.php" target="main">后台用户列表</a>
        </div>
	</div>
</div>
<div class="panel img-rounded transparent80 mrt20">    
	<a class="btn btn-primary btn-lg menu1" href="#menu2" role="button" data-toggle="collapse" data-parent="#accordion">
		<h4 class="panel-title">
			<b>分类管理</b>
		</h4>
	</a>    
	<div id="menu2" class="panel-collapse collapse">
		<div class="list-group">
			<a href="./category/index.php" target="main" class="btn btn-danger menu1 mrt">分类列表</a>
			<a href="./category/add.php" target="main" class="btn btn-success menu1 mrt">添加分类</a>
		</div>
	</div>
</div>
<div class="panel img-rounded transparent70 mrt20">    
	<a class="btn btn-primary btn-lg menu1" href="#menu3" role="button" data-toggle="collapse" data-parent="#accordion">
		<h4 class="panel-title">
			<b>新闻管理</b>
		</h4>
	</a>    
	<div id="menu3" class="panel-collapse collapse">
		<div class="list-group">
			<a href="./news/index.php" target="main" class="btn btn-warning menu1 mrt">新闻列表</a>
			<a href="./news/add.php" target="main" class="btn btn-danger menu1 mrt">添加新闻</a>
		</div>
	</div>
</div>
<div class="panel img-rounded transparent60 mrt20">    
	<a class="btn btn-primary btn-lg menu1" href="#menu4" role="button" data-toggle="collapse" data-parent="#accordion">
		<h4 class="panel-title">
			<b>个人中心</b>
		</h4>
	</a>    
	<div id="menu4" class="panel-collapse collapse">
		<div class="list-group">
			<a href="info/information.html" target="main" class="btn btn-warning menu1 mrt">修改个人资料</a>
			<a href="info/information2.html" target="main" class="btn btn-danger menu1 mrt">查看个人信息</a>
            <a href="info/information.html" target="main" class="btn btn-success menu1 mrt">修改密码</a>
		</div>
	</div>
</div>
<div class="panel img-rounded transparent50 mrt20">    
	<a class="btn btn-primary btn-lg menu1" href="#menu5" role="button" data-toggle="collapse" data-parent="#accordion">
		<h4 class="panel-title">
			<b>会员中心</b>
		</h4>
	</a>    
	<div id="menu5" class="panel-collapse collapse">
		<div class="list-group">
			<a href="info/information2.html" target="main" class="btn btn-warning menu1 mrt">会员管理</a>
			<a href="info/information.html" target="main" class="btn btn-danger menu1 mrt">绑定个人信息</a>
		</div>
	</div>
</div>
     

    

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="./public/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="./public/js/bootstrap.min.js"></script>
</body>
</html>
