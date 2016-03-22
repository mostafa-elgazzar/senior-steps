<div class="paragraphs form">
<?php echo $this->Form->create('Paragraph'); ?>
	<fieldset>
		<legend><?php echo __('Add Paragraph'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('body');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Paragraphs'), array('action' => 'index')); ?></li>
	</ul>
</div>
