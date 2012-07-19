<?php $this->Html->css(array('codemirror'),'stylesheet',array('inline'=>false)); ?>
<div id="mainPanel" class="clear cm">
	<div id="navList" class="panels well">
		<header style="padding: 8px; margin-bottom: 18px;">
			<a class="btn btn-primary fl il" style="font-size: 14pt;"
				onclick="showSnippet('add'); return false;" >+</a>&nbsp;	
			<div class="input-append il fr">
				<input class="span2" id="appendedInputButton" type="text" placeholder="Search" style="width: 148px;" />
				<button class="btn" type="button">
					<i class="icon-search"></i>
				</button>
				<button class="btn" type="button">
					<i class="icon-remove-sign"></i>
				</button>
			</div>
		</header>
		<?php if ( empty($snippets) ): ?>
			<h2>No list to display.</h2>
		<?php else: ?>
			<ul class="nav nav-list clear" id="snippetList">
			<?php foreach ($snippets as $snippet): ?>
				<li>
					<?php
						$snippetLink = $this->Html->url(array('controller'=>'snippets','action'=>'view',$snippet['Snippet']['id']));
					?>
					<a href="<?php echo $snippetLink; ?>" class="snippetLink">
					<span class="label label-info"><?php echo $snippet['Category']['category']; ?></span>&nbsp;
					<?php echo $snippet['Snippet']['title']; ?>
					</a>
				</li>
			<?php endforeach; ?>
			</ul>
		<?php endif; ?>
	</div>
	<div id="previewPanel" class="panels well">
		<header class="clear">
			<span class="label label-info fl il">PHP</span>
			<h3 class="il fl">&nbsp;S</h3>
			<div class="btn-group fr">
				<button class="btn"><i class="icon-pencil"></i> Edit</button>
				<button class="btn"><i class="icon-file"></i> Raw</button>
				<button class="btn"><i class="icon-trash"></i> Delete</button>
			</div>
		</header>
		<section class="clear">
			<textarea></textarea>
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