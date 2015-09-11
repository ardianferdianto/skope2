<div class="uraianAnswers form">
<?php echo $form->create('UraianAnswer');?>
	<fieldset>
 		<legend><?php __('Add UraianAnswer');?></legend>
	<?php
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
		<li><?php echo $html->link(__('List UraianAnswers', true), array('action' => 'index'));?></li>
	</ul>
</div>
