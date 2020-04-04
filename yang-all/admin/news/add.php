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

<div class="container news-bg img-rounded">
	<div class="container news img-rounded">
		<form action="action.php?a=add" method="post">
			<div class="form-group">
                <h2>作者</h2>
				<input type="text" class="form-control" id="author" placeholder="请输入作者" name="author">
   			</div>
            <div class="form-group">
            	<h2>类别</h2>
				<input type="text" class="form-control" id="sort" placeholder="请输入分类" name="sort">
             </div>
             <div class="form-group">
                <h2>标题</h2>
				<input type="text" class="form-control" id="title" placeholder="请输入标题" name="title">
             </div>
             <div class="form-group">  
            	<h2>内容</h2>
                <textarea rows="15" cols="100"  class="form-control" id="text" name="text" placeholder="请输入新闻内容">
                </textarea>
         	</div>
            
            <div class="M">
                <button type="submit" class="btn btn-primary">上传文章</button>
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
