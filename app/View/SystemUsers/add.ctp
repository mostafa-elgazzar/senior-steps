<div class="systemUsers form">
<?php echo $this->Form->create('SystemUser'); ?>
	<fieldset>
		<legend><?php echo __('Add System User'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('password');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List System Users'), array('action' => 'index')); ?></li>
	</ul>
</div>
