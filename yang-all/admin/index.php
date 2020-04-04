<?php require "init.php" ;?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="icon" href="public/images/icon.png" type="image/jpg" size="50*50">
<title>胖羊公司后台系统</title>
    
<!--载入bootstrap-->
<link href="public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="public/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
<!--载入首页css-->
<link href="public/css/index.css" rel="stylesheet" type="text/css" />
</head>

<frameset rows="70,*" border="0">
	<frame name="top" src="top.php">
		<frameset cols="20%,*" border="0">
			<frame name="menu" src="menu.php"></frame>
			<frame name="main" src="main.php"></frame>
		</frameset>
	</frame>
</frameset><noframes></noframes>
<!--载入bootstrap-->
<script src="public/js/jquery-2.0.3.js"></script>
<script src="public/js/bootstrap.min.js"></script>

</html>