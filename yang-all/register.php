<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="public/images/ico.png" type="image/jpg" size="50*50">
    <title>爱吃的胖羊</title>
    <!--载入bootstrap-->
    <link href="public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="public/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
    <!--载入首页css-->
    <link href="public/css/index.css" rel="stylesheet" type="text/css" />
     <!--载入注册css-->
    <link href="public/css/login.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="public/css/normalize.css" />

    

    
<body>
<!-- 导航条 -->	
<?php require "include/nav.php" ?>
<!--注册-->
<!--
<div class="container-fluid demo-1">
    <div class="container">
		<form action="./include/regdo.php" method="post">
            <div class="form-group">
                <h2>用户名</h2>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="请输入用户名" name="username">

                <h2>密码</h2>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="请输入密码" name="password">
    
            	<h2>性别</h2>
				<input type="text" class="form-control" id="sex" placeholder="请输入性别" name="sex">
   
            	<h2>年龄</h2>
				<input type="text" class="form-control" id="age" placeholder="请输入年龄" name="age">
         
				<h2>邮箱</h2>
				<input type="email" class="form-control" id="email" placeholder="请输入合适的邮箱" name="email">
			</div>
            <div  class="M"> 
                <button type="submit" class="btn btn-primary">注册</button>
                <button type="reset" class="btn btn-danger pull-right">清空重填</button>
        	</div>
		</form>
	</div>
</div>
-->
<div class="container-fluid demo-2">
	<div class="content">
		<div id="large-header" class="large-header">
			<canvas id="demo-canvas"></canvas>
			<div class="register_box login img-rounded">
				<h3>欢迎注册</h3>
				<form action="./include/regdo.php" method="post">
                	<div class="form-group">
                		<h4>用户名</h4>
                		<input type="text" class="form-control" id="exampleInputEmail1" placeholder="请输入用户名" name="username">

                		<h4>密码</h4>
                		<input type="password" class="form-control" id="exampleInputPassword1" placeholder="请输入密码" name="password">
    
            			<h4>性别</h4>
						<input type="text" class="form-control" id="sex" placeholder="请输入性别" name="sex">
   
            			<h4>年龄</h4>
						<input type="text" class="form-control" id="age" placeholder="请输入年龄" name="age">
         
						<h4>邮箱</h4>
						<input type="email" class="form-control" id="email" placeholder="请输入合适的邮箱" name="email">
					</div>
					
                    <div class="mb2" >
                    	<button type="submit" class="btn btn-primary">注册</button></div> 	
                    <div class="mb2"><button type="reset" class="btn btn-danger">清空</button></div>
   
				</form>
			</div>
		</div>
	</div>
</div>

<!--尾部-->
<?php require "include/footer.php" ?>  




<!--载入bootstrap-->
<script src="public/js/jquery-2.0.3.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<!--载入星空特效背景-->
<script src="public/js/TweenLite.min.js"></script>
<script src="public/js/EasePack.min.js"></script>
<script src="public/js/rAF.js"></script>
<script src="public/js/demo-1.js"></script>
</body>
</html>
