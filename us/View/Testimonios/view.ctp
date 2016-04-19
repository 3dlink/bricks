<div class="testimonios view">
<h2><?php echo __('Testimonio'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($testimonio['Testimonio']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Testimonio'); ?></dt>
		<dd>
			<?php echo h($testimonio['Testimonio']['testimonio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Autor'); ?></dt>
		<dd>
			<?php echo h($testimonio['Testimonio']['autor']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Testimonio'), array('action' => 'edit', $testimonio['Testimonio']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Testimonio'), array('action' => 'delete', $testimonio['Testimonio']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $testimonio['Testimonio']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Testimonios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Testimonio'), array('action' => 'add')); ?> </li>
	</ul>
</div>
