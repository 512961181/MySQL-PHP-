<!DOCTYPE html>
  <html lang="zh-CN">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
      <link rel="icon" href="../public/images/ico.png" type="image/jpg" size="50*50">
      <title>页面跳转</title>
      <meta http-equiv="refresh" content="<?php echo $t ?>;url=<?php echo $url ?>">


      <!-- Bootstrap -->
      <link href="../public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	  <link href="../public/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
	  <link rel="stylesheet" href="../public/css/index.css">
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
        <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

    </head>
    <body>
      <?php //v($_SERVER) ?>
      <div class="container mt100">
          <div class="jumbotron">
            <h1><?php echo $msg ?></h1>
            <p>页面将在<?php echo $t ?>后跳转到</p>
            <p><?php echo $url ?></p>
            <a class="btn btn-primary btn-lg" href="<?php echo $url ?> " target="_main">立即跳转</a>
          </div>
      </div>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="../public/js/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="../public/js/bootstrap.min.js"></script>
    </body>
  </html>