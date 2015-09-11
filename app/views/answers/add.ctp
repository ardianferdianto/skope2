<div class="answers form">
<?php echo $form->create('Answer');?>
	<fieldset>
 		<legend><?php __('Add Answer');?></legend>
	<?php
		echo $form->input('question_id');
		echo $form->input('details');
		echo $form->input('true');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Answers', true), array('action' => 'index'));?></li>
	</ul>
</div>
