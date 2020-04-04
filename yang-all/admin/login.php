<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="public/images/icon.png" type="image/jpg" size="50*50">
    <title>爱吃的胖羊后台登陆</title>
    <!--载入bootstrap-->
    <link href="public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="public/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
    <!--载入首页css-->
    <link href="public/css/index.css" rel="stylesheet" type="text/css" />
    <!--载入登陆css-->
    <link href="public/css/login.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="public/css/normalize.css" />

    

    
<body>
<!-- 导航条 -->	
<?php require "include/nav.php" ?>
<!--后台登陆-->

<div class="container-fluid demo-1">
	<div class="content">
		<div id="large-header" class="large-header">
            <form action="./include/logindo.php" method="post">
                <canvas id="demo-canvas"></canvas>
                <div class="logo_box login img-rounded">
                    <h3>欢迎登陆后台</h3>
                    <div class="input_outer">
                        <span class="u_user"></span>
                        <input name="username" id="username" class="text"  type="text" placeholder="请输入账户">                       
                    </div>
                    <div class="input_outer">
                        <span class="us_uer"></span>
                        <input name="password" id="password" class="text"  type="password" placeholder="请输入密码">
                    </div>
                    <div class="mb2" >
                        <button type="submit" class="btn btn-primary">登录</button>
                    </div> 	
                    <div class="mb2">
                        <button type="reset" class="btn btn-danger">清空</button>
                    </div>  
                </div>
            </form>
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
