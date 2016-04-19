<div class="equipos view">
<h2><?php echo __('Equipo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($equipo['Equipo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($equipo['Equipo']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cargo'); ?></dt>
		<dd>
			<?php echo h($equipo['Equipo']['cargo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Linkedin'); ?></dt>
		<dd>
			<?php echo h($equipo['Equipo']['linkedin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Imagen'); ?></dt>
		<dd>
			<?php echo h($equipo['Equipo']['imagen']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Equipo'), array('action' => 'edit', $equipo['Equipo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Equipo'), array('action' => 'delete', $equipo['Equipo']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $equipo['Equipo']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipo'), array('action' => 'add')); ?> </li>
	</ul>
</div>
