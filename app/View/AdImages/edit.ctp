<div class="adImages form">
<?php echo $this->Form->create('AdImage'); ?>
	<fieldset>
		<legend><?php echo __('Edit Ad Image'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('ad_id');
		echo $this->Form->input('image_path');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('AdImage.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('AdImage.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Ad Images'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Ads'), array('controller' => 'ads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ad'), array('controller' => 'ads', 'action' => 'add')); ?> </li>
	</ul>
</div>
