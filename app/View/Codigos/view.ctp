<div class="codigos view">
<h2><?php echo __('Codigo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($codigo['Codigo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo'); ?></dt>
		<dd>
			<?php echo h($codigo['Codigo']['codigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($codigo['Codigo']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Codigo'), array('action' => 'edit', $codigo['Codigo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Codigo'), array('action' => 'delete', $codigo['Codigo']['id']), array(), __('Are you sure you want to delete # %s?', $codigo['Codigo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Codigos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Codigo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Produccions'), array('controller' => 'produccions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produccion'), array('controller' => 'produccions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Produccions'); ?></h3>
	<?php if (!empty($codigo['Produccion'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Dia'); ?></th>
		<th><?php echo __('Horai'); ?></th>
		<th><?php echo __('Horaf'); ?></th>
		<th><?php echo __('Produccion'); ?></th>
		<th><?php echo __('Consumo'); ?></th>
		<th><?php echo __('Horast'); ?></th>
		<th><?php echo __('Horasp'); ?></th>
		<th><?php echo __('Observaciones'); ?></th>
		<th><?php echo __('Empleado Id'); ?></th>
		<th><?php echo __('Maquina Id'); ?></th>
		<th><?php echo __('Faena Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Codigo Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($codigo['Produccion'] as $produccion): ?>
		<tr>
			<td><?php echo $produccion['id']; ?></td>
			<td><?php echo $produccion['dia']; ?></td>
			<td><?php echo $produccion['horai']; ?></td>
			<td><?php echo $produccion['horaf']; ?></td>
			<td><?php echo $produccion['produccion']; ?></td>
			<td><?php echo $produccion['consumo']; ?></td>
			<td><?php echo $produccion['horast']; ?></td>
			<td><?php echo $produccion['horasp']; ?></td>
			<td><?php echo $produccion['observaciones']; ?></td>
			<td><?php echo $produccion['empleado_id']; ?></td>
			<td><?php echo $produccion['maquina_id']; ?></td>
			<td><?php echo $produccion['faena_id']; ?></td>
			<td><?php echo $produccion['created']; ?></td>
			<td><?php echo $produccion['modified']; ?></td>
			<td><?php echo $produccion['codigo_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'produccions', 'action' => 'view', $produccion['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'produccions', 'action' => 'edit', $produccion['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'produccions', 'action' => 'delete', $produccion['id']), array(), __('Are you sure you want to delete # %s?', $produccion['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Produccion'), array('controller' => 'produccions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
