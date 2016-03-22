<div class="ads view">
<h2><?php echo __('Ad'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($ad['Ad']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ad Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ad['AdCategory']['title'], array('controller' => 'ad_categories', 'action' => 'view', $ad['AdCategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($ad['Ad']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Logo Path'); ?></dt>
		<dd>
			<?php echo h($ad['Ad']['logo_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($ad['Ad']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Body'); ?></dt>
		<dd>
			<?php echo h($ad['Ad']['body']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($ad['Ad']['active']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ad'), array('action' => 'edit', $ad['Ad']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ad'), array('action' => 'delete', $ad['Ad']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $ad['Ad']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Ads'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ad'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ad Categories'), array('controller' => 'ad_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ad Category'), array('controller' => 'ad_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ad Contacts'), array('controller' => 'ad_contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ad Contact'), array('controller' => 'ad_contacts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ad Images'), array('controller' => 'ad_images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ad Image'), array('controller' => 'ad_images', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Ad Contacts'); ?></h3>
	<?php if (!empty($ad['AdContact'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Ad Id'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Value'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ad['AdContact'] as $adContact): ?>
		<tr>
			<td><?php echo $adContact['id']; ?></td>
			<td><?php echo $adContact['ad_id']; ?></td>
			<td><?php echo $adContact['type']; ?></td>
			<td><?php echo $adContact['value']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'ad_contacts', 'action' => 'view', $adContact['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'ad_contacts', 'action' => 'edit', $adContact['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'ad_contacts', 'action' => 'delete', $adContact['id']), array('confirm' => __('Are you sure you want to delete # %s?', $adContact['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Ad Contact'), array('controller' => 'ad_contacts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Ad Images'); ?></h3>
	<?php if (!empty($ad['AdImage'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Ad Id'); ?></th>
		<th><?php echo __('Image Path'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ad['AdImage'] as $adImage): ?>
		<tr>
			<td><?php echo $adImage['id']; ?></td>
			<td><?php echo $adImage['ad_id']; ?></td>
			<td><?php echo $adImage['image_path']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'ad_images', 'action' => 'view', $adImage['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'ad_images', 'action' => 'edit', $adImage['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'ad_images', 'action' => 'delete', $adImage['id']), array('confirm' => __('Are you sure you want to delete # %s?', $adImage['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Ad Image'), array('controller' => 'ad_images', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
