<div class="papers view">
<h2><?php echo __('Paper'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($paper['Paper']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Account'); ?></dt>
		<dd>
			<?php echo $this->Html->link($paper['Account']['id'], array('controller' => 'accounts', 'action' => 'view', $paper['Account']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($paper['Paper']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Path'); ?></dt>
		<dd>
			<?php echo h($paper['Paper']['path']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Paper'), array('action' => 'edit', $paper['Paper']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Paper'), array('action' => 'delete', $paper['Paper']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $paper['Paper']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Papers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Paper'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts'), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account'), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
