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
    <!--载入手风琴css-->
    <link href="public/css/fsbanner.css" rel="stylesheet" type="text/css">
    <!--载入大象走路css-->
    <link href="public/css/elephants.css" rel="stylesheet" type="text/css">     
<body>

<!--  <div class="container"> 居中-->
	<!-- 导航条 -->	
    <?php require "include/nav.php" ?>   
	<!--轮播-->
	 <?php require "include/lunbo.php" ?> 
    <!--巨幕 -->
     <?php require "include/jumu.php" ?>  
    <!--产品中心-->
     <?php require "include/produce.php" ?>   
    <!--服务中心-->
     <?php require "include/serve.php" ?>   
    <!--企业介绍-->
     <?php require "include/introduce.php" ?>    
    <!--尾部-->
	 <?php require "include/footer.php" ?>    
<!-- </div> -->

<!--载入bootstrap-->
<script src="public/js/jquery-2.0.3.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<!--手风琴特效-->
<script src="public/js/fsbanner.js"></script> 
<script>
	$('#demo-3').fsBanner({'trigger':'mouse'});
</script>
<!--字体特效-->
<script src="public/js/jquery-1.6.3.min.js"></script>
<script src="public/js/jquery.shuffleLetters.js"></script>
<script src="public/js/script.js"></script>

</body>
</html>
