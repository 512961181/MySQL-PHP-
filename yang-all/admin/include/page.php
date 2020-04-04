<!-- <a href="./index.php?page=1" class="btn btn-default">首页</a>
<a href="./index.php?page=<?php echo $prev ?>" class="btn btn-default">上一页</a><-->
<!--数字连接 -->
<!--<?php echo $num_link ?>
<a href="./index.php?page=<?php echo $next ?>" class="btn btn-default">下一页</a>       
<a href="./index.php?page=<?php echo $allpage ?>" class="btn btn-default">尾页</a>
-->
<?php 
echo" <span>共{$allpage}页，当前第{$page}页，本页显示{$rows}条记录，共{$total}条数据</span>";
//判断是否设置了分页的文件名，如果没设置，默认为index.php
 $pageurl=isset($pageurl)?$pageurl:'index.php';
?>


<nav aria-label="Page navigation">
  <from action="" method="get" class="form-inline">
  <ul class="pagination">
  	<li><a href="./index.php?page=1">首页</a></li>
    <li>
      <a href="./index.php?page=<?php echo $prev ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
  	<!--数字连接 -->
  	<?php echo $num_link?>
      <li>
        <a href="./index.php?page=<?php echo $next ?>" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
      <li><a href="./index.php?page=<?php echo $allpage ?>">尾页</a></li>
      <li>
        <select name="page" class="form-control">
        <!--
          <option value="5">5</option>
          <option value="10">10</option>
          <option value="20">20</option>
          <option value="30">30</option>
          <option value="40">40</option>
          <option value="50">50</option> -->
          <?php
             for($i=1;$i<=$allpage;$i++){
               echo '<option value="'.$i.'">'.$i.'</option>';
             }
           ?>
        </select>
        <button class="btn btn-primary">GO!</button>
      </li>
    </ul>
  </from>
</nav>