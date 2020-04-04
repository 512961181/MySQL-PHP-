<?php require"../init.php"?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
<!-- Bootstrap -->
<link href="../public/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="../public/css/add.css">

</head>
<body>

<div class="container add-bg img-rounded">
	<div class="container cate img-rounded">
		<form action="action.php?a=add" method="post">
			<div class="form-group">
                <h2>分类名</h2>
				<input type="text" class="form-control" id="cname" placeholder="请输入分类名" name="cname">
   			</div>
            <div class="form-group">
            	<h2>父类ID</h2>
				<input type="text" class="form-control" id="pid" placeholder="请输入父类ID" name="pid">
             </div>
             <div class="form-group">
                <h2>寻根路径</h2>
				<input type="text" class="form-control" id="path" placeholder="请输入寻根路径" name="path">
             </div>
             
            <div class="M">
                <button type="submit" class="btn btn-primary">添加</button>
                <button type="reset" class="btn btn-danger pull-right">清空重填</button>
        	</div>
		</form>
	</div>
</div>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="./public/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="./public/js/bootstrap.min.js"></script>
</body>
</html>
