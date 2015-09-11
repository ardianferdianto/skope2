<div class="uraianAnswers index">
<h2><?php __('UraianAnswers');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('user_id');?></th>
	<th><?php echo $paginator->sort('question_id');?></th>
	<th><?php echo $paginator->sort('quizz_id');?></th>
	<th><?php echo $paginator->sort('Jawaban');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($uraianAnswers as $uraianAnswer):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $uraianAnswer['UraianAnswer']['id']; ?>
		</td>
		<td>
			<?php echo $uraianAnswer['UraianAnswer']['user_id']; ?>
		</td>
		<td>
			<?php echo $uraianAnswer['UraianAnswer']['question_id']; ?>
		</td>
		<td>
			<?php echo $uraianAnswer['UraianAnswer']['quizz_id']; ?>
		</td>
		<td>
			<?php echo $uraianAnswer['UraianAnswer']['Jawaban']; ?>
		</td>
		<td>
			<?php echo $uraianAnswer['UraianAnswer']['created']; ?>
		</td>
		<td>
			<?php echo $uraianAnswer['UraianAnswer']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $uraianAnswer['UraianAnswer']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $uraianAnswer['UraianAnswer']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $uraianAnswer['UraianAnswer']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $uraianAnswer['UraianAnswer']['id'])); ?>
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
		<li><?php echo $html->link(__('New UraianAnswer', true), array('action' => 'add')); ?></li>
	</ul>
</div>
