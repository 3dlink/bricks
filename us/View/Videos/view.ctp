<div class="videos view">
<h2><?php echo __('Video'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($video['Video']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($video['Video']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Video'); ?></dt>
		<dd>
			<?php echo h($video['Video']['video']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Video'), array('action' => 'edit', $video['Video']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Video'), array('action' => 'delete', $video['Video']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $video['Video']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Videos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Video'), array('action' => 'add')); ?> </li>
	</ul>
</div>
