<div class="quizzsQuestions view">
<h2><?php  __('QuizzsQuestion');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $quizzsQuestion['QuizzsQuestion']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Quizz Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $quizzsQuestion['QuizzsQuestion']['quizz_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Question Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $quizzsQuestion['QuizzsQuestion']['question_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $quizzsQuestion['QuizzsQuestion']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $quizzsQuestion['QuizzsQuestion']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit QuizzsQuestion', true), array('action' => 'edit', $quizzsQuestion['QuizzsQuestion']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete QuizzsQuestion', true), array('action' => 'delete', $quizzsQuestion['QuizzsQuestion']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $quizzsQuestion['QuizzsQuestion']['id'])); ?> </li>
		<li><?php echo $html->link(__('List QuizzsQuestions', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New QuizzsQuestion', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
