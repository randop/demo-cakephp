<?php $this->Html->css(array('codemirror'),'stylesheet',array('inline'=>false)); ?>
<a class="btn btn-primary btn-large" onclick="showSnippet('add'); return false;" class="btn btn-primary btn-large">Add</a>

<div id="mainPanel">
	<div id="navList" class="panels">
		<?php if ( empty($snippets) ): ?>
			<h2>No list to display.</h2>
		<?php else: ?>
			<ul>
			<?php foreach ($snippets as $snippet): ?>
				<li><?php echo $snippet['Snippet']['title']; ?></li>
			<?php endforeach; ?>
			</ul>
		<?php endif; ?>
	</div>
	<div id="previewPanel" class="panels">
		<header class="clear">
			<div class="btn-group fr">
			  <button class="btn">Edit</button>
			  <button class="btn">Raw</button>
			</div>
		</header>
		<section class="clear">
			
		</section>
	</div>
</div>

<div class="modal hide" id="snippetModal">
	<?php
		echo $this->Form->create('Snippet',array(
			'id'=>'addSnippetForm',
			'default'=>false,
			'url'=>array(
				'action'=>'add'
			)
		));
	?>
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">×</button>
		<h3 class="modal-title">&nbsp;</h3>
	</div>
	<div class="modal-body">
	<?php
		echo $this->Form->input('title',array(
			'class'=>'w98 snippet-title',
			'label'=>false,
			'placeholder'=>'Title'
		));
		echo $this->Form->input('content',array(
			'id'=>'snippetEditor',
			'label'=>false
		));
	?>
	</div>
	<div class="modal-footer">
		<?php 
			echo $this->Form->input('category_id', array(
				'div'=>false,
				'label'=>false,
				'class'=>'fl'
			)); 
		?>
		<a href="#" class="btn btn-large" data-dismiss="modal">Cancel</a>
		<a href="#" id="addSnippetButton" class="btn btn-primary btn-success btn-large">Save</a>
	</div>
	<?php
		echo $this->Form->end(); 
	?>
</div>

<?php echo $this->Html->script(array('bootstrap-modal','codemirror','snippets.index')); ?>