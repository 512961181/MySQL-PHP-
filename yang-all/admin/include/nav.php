<!-- 导航条 -->	
<?php require"init.php"?>
    <nav class="navbar navbar-inverse nav-top transparent" id="daohang">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand " href="../index.php"><span class="icon"></span>首页</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="../produce-main.php" class="dropdown-toggle" data-toggle="dropdown">产品设计</a>
              <ul class="dropdown-menu">
                <li><a href="../produce-main.php">广告设计</a></li>
                <li><a href="../produce-main.php">动漫设计</a></li>
                <li><a href="../produce-main.php">工业设计</a></li>
                <li><a href="../produce-main.php">游戏设计</a></li>
                <li><a href="../produce-main.php">网站设计</a></li>
              </ul>
            </li> 
            <li class="dropdown">
              <a href="../index.php#serve" class="dropdown-toggle" data-toggle="dropdown">服务中心</a>
              <ul class="dropdown-menu">
                <li><a href="../index.php#serve">标志/VI</a></li>
                <li><a href="../index.php#serve">品牌战略</a></li>
                <li><a href="../index.php#serve">空间导示</a></li>
                <li><a href="../index.php#serve">网络互动</a></li>
                <li><a href="../index.php#serve">产品包装</a></li>
                <li><a href="../index.php#serve">广告传媒</a></li>
              </ul>
            </li>      
            
			<li><a href="../introduce-main.php">企业介绍</a></li>
            <li><a href="../join.php">加入我们</a></li>
        	<li><a href="../contact.php">联系我们</a></li>
          </ul>

		  <?php if(empty($_SESSION['home'])): ?>
          <ul class="nav navbar-nav navbar-right">
            <form class="navbar-form navbar-left">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="输入关键字">
            </div>
            <button type="submit" class="btn btn-default glyphicon glyphicon-search"></button>
       
          </form>
            <li><a href="../login.php"><span class="glyphicon glyphicon-king rmt10"></span>登陆</a></li>
            <li><a href="../register.php"><span class="glyphicon glyphicon-tower rmt10"></span>注册</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list-alt"></span></a>
              <ul class="dropdown-menu">
                <li><a href="login.php"><span class="glyphicon glyphicon-modal-window rmt10"></span>网站后台</a></li>
              </ul>
            </li>
          </ul>
          <?php else: ?>
          <ul class="nav navbar-nav navbar-right">
            <form class="navbar-form navbar-left">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="输入关键字">
            </div>
            <button type="submit" class="btn btn-default glyphicon glyphicon-search"></button>
       
          </form>
            <li><a href="#"><span class="glyphicon glyphicon-user rmt10"></span><?php echo $_SESSION['home'] ?></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list-alt"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#"><span class="glyphicon glyphicon-th rmt10"></span>资料</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-knight rmt10"></span>成为会员</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-modal-window rmt10"></span>网站后台</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="./include/logout.php"><span class="glyphicon glyphicon-remove-sign rmt10"></span>退出</a></li>
              </ul>
            </li>
          </ul>
          <?php endif ?>
        </div>
      </div>
    </nav>
