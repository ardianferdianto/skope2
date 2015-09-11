<div class="quizzsQuestions form">
<?php echo $form->create('QuizzsQuestion');?>
	<fieldset>
 		<legend><?php __('Edit QuizzsQuestion');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('quizz_id');
		echo $form->input('question_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('QuizzsQuestion.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('QuizzsQuestion.id'))); ?></li>
		<li><?php echo $html->link(__('List QuizzsQuestions', true), array('action' => 'index'));?></li>
	</ul>
</div>
