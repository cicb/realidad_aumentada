<div class="extras form">
<?php echo $this->Form->create('Extra'); ?>
	<fieldset>
		<legend><?php echo __('Add Extra'); ?></legend>
	<?php
		echo $this->Form->input('item_id');
		echo $this->Form->input('name');
		echo $this->Form->input('left');
		echo $this->Form->input('right');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Extras'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
