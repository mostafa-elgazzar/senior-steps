<div class="systemUsers view">
<h2><?php echo __('System User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($systemUser['SystemUser']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($systemUser['SystemUser']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($systemUser['SystemUser']['password']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit System User'), array('action' => 'edit', $systemUser['SystemUser']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete System User'), array('action' => 'delete', $systemUser['SystemUser']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $systemUser['SystemUser']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List System Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New System User'), array('action' => 'add')); ?> </li>
	</ul>
</div>
