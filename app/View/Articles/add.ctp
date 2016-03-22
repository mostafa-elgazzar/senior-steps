<div class="articles form">
<?php echo $this->Form->create('Article'); ?>
	<fieldset>
		<legend><?php echo __('Add Article'); ?></legend>
	<?php
		echo $this->Form->input('article_category_id');
		echo $this->Form->input('title');
		echo $this->Form->input('body');
		echo $this->Form->input('image_path');
		echo $this->Form->input('thumb_path');
		echo $this->Form->input('active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Articles'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Article Categories'), array('controller' => 'article_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Article Category'), array('controller' => 'article_categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
