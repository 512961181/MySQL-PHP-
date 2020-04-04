<!--main-->
<?php require "../init.php";

	  $pid=isset($_GET['pid'])?$_GET['pid']:0;
      $sql="select `id`,`cname`,`pid`,`path`,`display`,concat(path,id) bpath from category order by bpath";
      $catelist=query($link,$sql);
      foreach($catelist as $key=>$val){
      	$num=count(explode(',',trim($val['path'],','))) -1;
      	$catelist[$key]['cname']=str_repeat("——",$num).$val['cname'];
      }
     
      mysqli_close($link);
      //  v($user_list);
      // exit;
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>main</title>
    
   
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">

   
  </head>
  <body>
  	<div class="container">
  		<h1>分类列表</h1>
	  	<from action="./index.php">
	     	<select name="pid">
	     		<option value="0">全部</option>
	     		 <?php foreach($catelist as $key=>$val) : ?>
			        <option value="<?php echo $val['id'] ?>" <?php if($pid==$val['id']) echo 'select'?>><?php echo $val['cname']?></option>
			     <?php endforeach?>
	     	</select>
	     	<input type="submit" value="搜索">
	    </from>
  	</div>
    <script src="../public/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../public/js/bootstrap.min.js"></script>
  </body>
</html>