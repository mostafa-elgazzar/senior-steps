<div class="paragraphs view">
<h2><?php echo __('Paragraph'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($paragraph['Paragraph']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($paragraph['Paragraph']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Body'); ?></dt>
		<dd>
			<?php echo h($paragraph['Paragraph']['body']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Paragraph'), array('action' => 'edit', $paragraph['Paragraph']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Paragraph'), array('action' => 'delete', $paragraph['Paragraph']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $paragraph['Paragraph']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Paragraphs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Paragraph'), array('action' => 'add')); ?> </li>
	</ul>
</div>
