<div class="uraianAnswers form">
<?php echo $form->create('UraianAnswer');?>
	<fieldset>
 		<legend><?php __('Edit UraianAnswer');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('user_id');
		echo $form->input('question_id');
		echo $form->input('quizz_id');
		echo $form->input('Jawaban');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('UraianAnswer.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('UraianAnswer.id'))); ?></li>
		<li><?php echo $html->link(__('List UraianAnswers', true), array('action' => 'index'));?></li>
	</ul>
</div>
