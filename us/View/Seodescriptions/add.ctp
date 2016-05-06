<div class="seodescriptions form">
<?php echo $this->Form->create('Seodescription'); ?>
	<fieldset>
		<legend><?php echo __('Add Seodescription'); ?></legend>
	<?php
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Seodescriptions'), array('action' => 'index')); ?></li>
	</ul>
</div>
