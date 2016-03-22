<div class="ads form">
<?php echo $this->Form->create('Ad'); ?>
	<fieldset>
		<legend><?php echo __('Add Ad'); ?></legend>
	<?php
		echo $this->Form->input('ad_category_id');
		echo $this->Form->input('title');
		echo $this->Form->input('logo_path');
		echo $this->Form->input('url');
		echo $this->Form->input('body');
		echo $this->Form->input('active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Ads'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Ad Categories'), array('controller' => 'ad_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ad Category'), array('controller' => 'ad_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ad Contacts'), array('controller' => 'ad_contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ad Contact'), array('controller' => 'ad_contacts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ad Images'), array('controller' => 'ad_images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ad Image'), array('controller' => 'ad_images', 'action' => 'add')); ?> </li>
	</ul>
</div>
