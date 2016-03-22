<div class="adImages index">
	<h2><?php echo __('Ad Images'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('ad_id'); ?></th>
			<th><?php echo $this->Paginator->sort('image_path'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($adImages as $adImage): ?>
	<tr>
		<td><?php echo h($adImage['AdImage']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($adImage['Ad']['title'], array('controller' => 'ads', 'action' => 'view', $adImage['Ad']['id'])); ?>
		</td>
		<td><?php echo h($adImage['AdImage']['image_path']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $adImage['AdImage']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $adImage['AdImage']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $adImage['AdImage']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $adImage['AdImage']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Ad Image'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Ads'), array('controller' => 'ads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ad'), array('controller' => 'ads', 'action' => 'add')); ?> </li>
	</ul>
</div>
