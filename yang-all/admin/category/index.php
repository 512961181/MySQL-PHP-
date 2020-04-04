<!--main-->
<?php require "../init.php";

  $pid=isset($_GET['pid'])?$_GET['pid']:0;
  $sql="select `id`,`cname`,`pid`,`path`,`display` from category where `pid`=$pid";
  $clist=query($link,$sql);
  //关闭连接    
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
    <link href="../public/css/cate.css" rel="stylesheet">
   
  </head>
  <body>
  	<div class="container cate-bg img-rounded">
      <table class="table table-hover table-border">
        <tr>
          <th>ID</th>
          <th>分类名</th>
          <th>父级ID</th>
          <th>寻根路径</th>
          <th>是否显示</th>
          <th>操作</th>
        </tr>
        <?php if(empty($clist)): ?>
        <tr>
          <td colspan="6">
            <h3 class="text-center">
              <label class="label label-danger">暂无数据</label>
            </h3>
          </td>
        </tr>
        <?php else :?>
        <?php foreach($clist as $key => $val) : ?>
          <tr>
            <td><?php echo $val['id'] ?></td>
            <td><?php echo $val['cname'] ?></td>
            <td><?php echo $val['pid'] ?></td>
            <td><?php echo $val['path'] ?></td>
            <td>
              <?php if($val['display']==1): ?>
                <a href="./action.php?a=display&id=<?php echo $val['id'] ?>&display=2"><span class="glyphicon glyphicon-ok"></span></a>
              <?php else: ?>             
                <a href="./action.php?a=display&id=<?php echo $val['id'] ?>&display=1"><span class="glyphicon glyphicon-remove"></span></a>
              <?php endif ?>
            </td>
            <td>
              <a href="./index.php?pid=<?php echo $val['id'] ?>" class="btn btn-success">查看子类</a>
              <a href="./edit.php?id=<?php echo $val['id'] ?>" class="btn btn-info">编辑</a>
              <a href="./action.php?a=del&id=<?php echo $val['id'] ?>&pid=<?php echo $val['pid']?>&path=<?php echo $val['path']?>" class="btn btn-danger">删除</a>
            </td>
          </tr>
        <?php endforeach ?>
        <?php endif ?>
      </table>
  	</div>
    <script src="../public/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../public/js/bootstrap.min.js"></script>
  </body>
</html>