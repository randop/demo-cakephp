<?php echo $this->Form->create('Post'); ?>
	<?php echo $this->Form->input('Post.title'); ?>
	<?php echo $this->Form->input('Post.contents'); ?>
<?php echo $this->Form->end('submit'); ?>