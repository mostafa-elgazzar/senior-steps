<div class="adCategories form">
<?php echo $this->Form->create('AdCategory'); ?>
	<fieldset>
		<legend><?php echo __('Add Ad Category'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('image_path');
		echo $this->Form->input('active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Ad Categories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Ads'), array('controller' => 'ads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ad'), array('controller' => 'ads', 'action' => 'add')); ?> </li>
	</ul>
</div>
