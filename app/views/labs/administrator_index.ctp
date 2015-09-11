<div class="labs index">
<h2><?php __('Labs');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('kelas');?></th>
	<th><?php echo $paginator->sort('matapelajaran');?></th>
	<th><?php echo $paginator->sort('author');?></th>
	<th><?php echo $paginator->sort('title');?></th>
	<th><?php echo $paginator->sort('details');?></th>
	<th><?php echo $paginator->sort('file');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($labs as $lab):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $lab['Lab']['id']; ?>
		</td>
		<td>
			<?php echo $lab['Lab']['kelas']; ?>
		</td>
		<td>
			<?php echo $lab['Lab']['matapelajaran']; ?>
		</td>
		<td>
			<?php echo $lab['Lab']['author']; ?>
		</td>
		<td>
			<?php echo $lab['Lab']['title']; ?>
		</td>
		<td>
			<?php echo $lab['Lab']['details']; ?>
		</td>
		<td>
			<?php echo $lab['Lab']['file']; ?>
		</td>
		<td>
			<?php echo $lab['Lab']['created']; ?>
		</td>
		<td>
			<?php echo $lab['Lab']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $lab['Lab']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $lab['Lab']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $lab['Lab']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $lab['Lab']['id'])); ?>
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
		<li><?php echo $html->link(__('New Lab', true), array('action' => 'add')); ?></li>
	</ul>
</div>
