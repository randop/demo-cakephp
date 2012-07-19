<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1; user-scalable=0;" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	
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
				<a class="brand" href="#"><?php echo Configure::read('App.Name'); ?></a>
				<ul class="nav">
					<li><?php echo $this->Html->link('Home', array(
						'controller'=>'snippets','action'=>'index'
						)); ?></li>
				</ul>
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