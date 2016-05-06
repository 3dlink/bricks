<div class="seodescriptions view">
<h2><?php echo __('Seodescription'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($seodescription['Seodescription']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($seodescription['Seodescription']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Seodescription'), array('action' => 'edit', $seodescription['Seodescription']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Seodescription'), array('action' => 'delete', $seodescription['Seodescription']['id']), array(), __('Are you sure you want to delete # %s?', $seodescription['Seodescription']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Seodescriptions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seodescription'), array('action' => 'add')); ?> </li>
	</ul>
</div>
