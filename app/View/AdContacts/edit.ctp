<div class="adContacts form">
<?php echo $this->Form->create('AdContact'); ?>
	<fieldset>
		<legend><?php echo __('Edit Ad Contact'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('ad_id');
		echo $this->Form->input('type');
		echo $this->Form->input('value');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('AdContact.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('AdContact.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Ad Contacts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Ads'), array('controller' => 'ads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ad'), array('controller' => 'ads', 'action' => 'add')); ?> </li>
	</ul>
</div>
