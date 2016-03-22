<div class="adCategories view">
<h2><?php echo __('Ad Category'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($adCategory['AdCategory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($adCategory['AdCategory']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image Path'); ?></dt>
		<dd>
			<?php echo h($adCategory['AdCategory']['image_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($adCategory['AdCategory']['active']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ad Category'), array('action' => 'edit', $adCategory['AdCategory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ad Category'), array('action' => 'delete', $adCategory['AdCategory']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $adCategory['AdCategory']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Ad Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ad Category'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ads'), array('controller' => 'ads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ad'), array('controller' => 'ads', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Ads'); ?></h3>
	<?php if (!empty($adCategory['Ad'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Ad Category Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Logo Path'); ?></th>
		<th><?php echo __('Url'); ?></th>
		<th><?php echo __('Body'); ?></th>
		<th><?php echo __('Active'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($adCategory['Ad'] as $ad): ?>
		<tr>
			<td><?php echo $ad['id']; ?></td>
			<td><?php echo $ad['ad_category_id']; ?></td>
			<td><?php echo $ad['title']; ?></td>
			<td><?php echo $ad['logo_path']; ?></td>
			<td><?php echo $ad['url']; ?></td>
			<td><?php echo $ad['body']; ?></td>
			<td><?php echo $ad['active']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'ads', 'action' => 'view', $ad['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'ads', 'action' => 'edit', $ad['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'ads', 'action' => 'delete', $ad['id']), array('confirm' => __('Are you sure you want to delete # %s?', $ad['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Ad'), array('controller' => 'ads', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
