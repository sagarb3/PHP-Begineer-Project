<link rel="stylesheet" href="css/scrollspy.css">
<section class="artistlist">
	<div class="artistindex" class="row">
		<section class="scrollspy clearfix col col-xs-3 hidden-xs">
		<ul class="nav nav-list affix hidden-sm">
			<li><a href="#Good"><span class="glyphicon glyphicon-user"></span>Good Student</a></li>
			<li><a href="#Average"><span class="glyphicon glyphicon-user"></span>Average Student</a></li>
			<li><a href="#Poor"><span class="glyphicon glyphicon-user"></span>Poor Student</a></li>
			<li><a href="#Not"><span class="glyphicon glyphicon-user"></span>Not Student</a></li>
		</ul>
			
		</section>
		<section class="artistinfo col col-xs-9">
			<?php include"Good.php";?>
			<?php include"Average.php";?>
			<?php include"Poor.php";?>
			<?php include"Not.php";?>
		</section>
	</div>
</section>