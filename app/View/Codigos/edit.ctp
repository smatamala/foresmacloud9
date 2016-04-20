<div class="codigos form">
<?php echo $this->Form->create('Codigo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Codigo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('codigo');
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Codigo.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Codigo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Codigos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Produccions'), array('controller' => 'produccions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produccion'), array('controller' => 'produccions', 'action' => 'add')); ?> </li>
	</ul>
</div>
