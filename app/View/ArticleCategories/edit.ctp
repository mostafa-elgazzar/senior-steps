<div class="articleCategories form">
<?php echo $this->Form->create('ArticleCategory'); ?>
	<fieldset>
		<legend><?php echo __('Edit Article Category'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('sort');
		echo $this->Form->input('active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ArticleCategory.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('ArticleCategory.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Article Categories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Articles'), array('controller' => 'articles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Article'), array('controller' => 'articles', 'action' => 'add')); ?> </li>
	</ul>
</div>
