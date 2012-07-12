<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Randolph Ledesma">
	<title>
		<?php echo $title_for_layout . ' - '; ?>
		<?php echo Configure::read('App.Name'); ?>
	</title>
	<?php
		echo $this->Html->css( array('base','core.lib','bootstrap','bootstrap-responsive') );
		echo $this->Html->script(array('jquery','bootstrap')); 
		echo $scripts_for_layout;
	?>
</head>
<body>
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
			  <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </a>
			  <a class="brand" href="#">Project name</a>
			  <div class="nav-collapse">
				<ul class="nav">
				  <li class="active"><a href="#">Home</a></li>
				</ul>
			  </div><!--/.nav-collapse -->
			</div>
		</div>
	</div>

	<div class="container">
	<?php
		echo $content_for_layout;
	?>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>