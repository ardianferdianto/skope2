<div class="labs form">
<?php echo $form->create('Lab');?>
	<fieldset>
 		<legend><?php __('Edit Lab');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('kelas');
		echo $form->input('matapelajaran');
		echo $form->input('author');
		echo $form->input('title');
		echo $form->input('details');
		echo $form->input('file');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Lab.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Lab.id'))); ?></li>
		<li><?php echo $html->link(__('List Labs', true), array('action' => 'index'));?></li>
	</ul>
</div>
