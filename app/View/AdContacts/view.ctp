<div class="adContacts view">
<h2><?php echo __('Ad Contact'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($adContact['AdContact']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ad'); ?></dt>
		<dd>
			<?php echo $this->Html->link($adContact['Ad']['title'], array('controller' => 'ads', 'action' => 'view', $adContact['Ad']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($adContact['AdContact']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Value'); ?></dt>
		<dd>
			<?php echo h($adContact['AdContact']['value']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ad Contact'), array('action' => 'edit', $adContact['AdContact']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ad Contact'), array('action' => 'delete', $adContact['AdContact']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $adContact['AdContact']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Ad Contacts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ad Contact'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ads'), array('controller' => 'ads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ad'), array('controller' => 'ads', 'action' => 'add')); ?> </li>
	</ul>
</div>
