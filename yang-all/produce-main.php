<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="public/images/ico.png" type="image/jpg" size="50*50">
<title>爱吃的胖羊</title>
    <!--载入bootstrap-->
    <link href="public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="public/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
    <!--载入首页css-->
    <link href="public/css/index.css" rel="stylesheet" type="text/css" />
     <!--载入加入我们css-->
    <link href="public/css/produce-main.css" rel="stylesheet" type="text/css" />
</head>

<body>
<!--导航栏-->
<?php require"include/nav.php"?>
<!--加入我们--->
<div class="container-fluid pruduce-bg">
	<!--载入产品-->	
   	 <?php require"include/produce.php"?> 
</div>
<!--尾部-->
<?php require"include/footer.php"?>



<!--载入bootstrap-->
<script src="public/js/jquery-2.0.3.js"></script>
<script src="public/js/bootstrap.min.js"></script>
</body>
</html>