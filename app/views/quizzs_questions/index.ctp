<div class="quizzsQuestions index">
<h2><?php __('QuizzsQuestions');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('quizz_id');?></th>
	<th><?php echo $paginator->sort('question_id');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($quizzsQuestions as $quizzsQuestion):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $quizzsQuestion['QuizzsQuestion']['id']; ?>
		</td>
		<td>
			<?php echo $quizzsQuestion['QuizzsQuestion']['quizz_id']; ?>
		</td>
		<td>
			<?php echo $quizzsQuestion['QuizzsQuestion']['question_id']; ?>
		</td>
		<td>
			<?php echo $quizzsQuestion['QuizzsQuestion']['created']; ?>
		</td>
		<td>
			<?php echo $quizzsQuestion['QuizzsQuestion']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $quizzsQuestion['QuizzsQuestion']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $quizzsQuestion['QuizzsQuestion']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $quizzsQuestion['QuizzsQuestion']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $quizzsQuestion['QuizzsQuestion']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New QuizzsQuestion', true), array('action' => 'add')); ?></li>
	</ul>
</div>
