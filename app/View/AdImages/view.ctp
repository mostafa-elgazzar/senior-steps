<div class="adImages view">
<h2><?php echo __('Ad Image'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($adImage['AdImage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ad'); ?></dt>
		<dd>
			<?php echo $this->Html->link($adImage['Ad']['title'], array('controller' => 'ads', 'action' => 'view', $adImage['Ad']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image Path'); ?></dt>
		<dd>
			<?php echo h($adImage['AdImage']['image_path']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ad Image'), array('action' => 'edit', $adImage['AdImage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ad Image'), array('action' => 'delete', $adImage['AdImage']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $adImage['AdImage']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Ad Images'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ad Image'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ads'), array('controller' => 'ads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ad'), array('controller' => 'ads', 'action' => 'add')); ?> </li>
	</ul>
</div>
