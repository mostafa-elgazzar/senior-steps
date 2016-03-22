<div class="systemUsers form">
<?php echo $this->Form->create('SystemUser'); ?>
	<fieldset>
		<legend><?php echo __('Edit System User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SystemUser.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('SystemUser.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List System Users'), array('action' => 'index')); ?></li>
	</ul>
</div>
