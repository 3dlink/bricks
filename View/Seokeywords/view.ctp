<div class="seokeywords view">
<h2><?php echo __('Seokeyword'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($seokeyword['Seokeyword']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Keyword'); ?></dt>
		<dd>
			<?php echo h($seokeyword['Seokeyword']['keyword']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Seokeyword'), array('action' => 'edit', $seokeyword['Seokeyword']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Seokeyword'), array('action' => 'delete', $seokeyword['Seokeyword']['id']), array(), __('Are you sure you want to delete # %s?', $seokeyword['Seokeyword']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Seokeywords'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seokeyword'), array('action' => 'add')); ?> </li>
	</ul>
</div>
