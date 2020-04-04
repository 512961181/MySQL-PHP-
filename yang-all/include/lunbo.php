<!--轮播-->
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
        <li data-target="#carousel-example-generic" data-slide-to="5"></li>
        <li data-target="#carousel-example-generic" data-slide-to="6"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
	    <div class="item active">
	      
          <img src="<?php echo $lb[1]['img'];?>" alt="...">
	      <div class="carousel-caption">
          	<h1><?php echo $lb[1]['text'];?></h1>
	      </div>
	    </div>
	    <div class="item">
	     <img src="<?php echo $lb[2]['img'];?>" alt="...">
	      <div class="carousel-caption">
          	<h1><?php echo $lb[2]['text'];?></h1>
	      </div>
	    </div>
	    <div class="item">
	      <img src="<?php echo $lb[3]['img'];?>" alt="...">
	      <div class="carousel-caption">
          	<h1><?php echo $lb[3]['text'];?></h1>
	      </div>
	    </div>
	    <div class="item">
	      <img src="<?php echo $lb[4]['img'];?>" alt="...">
	      <div class="carousel-caption">
          	<h1><?php echo $lb[4]['text'];?></h1>
	      </div>
	    </div>
	    <div class="item">
	      <img src="<?php echo $lb[5]['img'];?>" alt="...">
	      <div class="carousel-caption">
          	<h1><?php echo $lb[5]['text'];?></h1>
	      </div>
	    </div>
        <div class="item">
	      <img src="<?php echo $lb[6]['img'];?>" alt="...">
	      <div class="carousel-caption">
          	<h1><?php echo $lb[6]['text'];?></h1>
	      </div>
	    </div>
        <div class="item">
	      <img src="<?php echo $lb[7]['img'];?>" alt="...">
	      <div class="carousel-caption">
          	<h1><?php echo $lb[7]['text'];?></h1>
	      </div>
	    </div>
	  </div>
	
	  <!--左右翻图 -->
	  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>