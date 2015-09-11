<div class="labs index">
<?php if ($groupAuth == 1) :?>
<h2>Tab Direktori E-Book</h2>
<p>
Berikut ini adalah halaman dari semua Ebook yang dibuat, anda dapat memanage halaman ini dengan action yang tersedia
</p>
<?php echo $html->link(__('lakukan pencarian', true), array('action' => 'find'));?>

<table cellpadding="0" cellspacing="0">
<thead>
	<th><?php echo 'No';?></th>
	<th><?php echo $paginator->sort('kelas');?></th>
	<th><?php echo $paginator->sort('matapelajaran');?></th>
	<th><?php echo $paginator->sort('title');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th class="actions"><?php __('Actions');?></th>
</thead>
<?php
$i = 0;
$no = 0;
foreach ($labs as $lab):
	$no++;
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $no; ?>
		</td>
		<td>
			<?php echo $lab['Lab']['kelas'];?>
			
			
			
		</td>
		<td>
			<?php echo $lab['Pelajaran']['nama']; ?>
		</td>
		
		<td>
			<?php echo $lab['Lab']['title']; ?>
		</td>
		
		<td>
			<?php echo $lab['Lab']['created']; ?>
		</td>
		<td>
			<?php echo $lab['Lab']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $lab['Lab']['id'])); ?><br/>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $lab['Lab']['id'])); ?><br/>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $lab['Lab']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $lab['Lab']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="pagination">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>
<div class="clear"></div>
<div class="actions">
	<?php echo $html->link('Buat File Lab Baru','/labs/add',array('class'=>'button')); ?>
</div>



<?php else:?>
<h2>Tab Direktori E-Book</h2>
<p>
Berikut ini adalah halaman dari semua Ebook yang dibuat, anda dapat memanage halaman ini dengan action yang tersedia
</p>
<?php echo $html->link(__('lakukan pencarian', true), array('action' => 'find'));?>
<table cellpadding="0" cellspacing="0">
<thead>
	<th><?php echo 'No';?></th>
	<th><?php echo ('kelas');?></th>
	<th><?php echo ('matapelajaran');?></th>
	
	<th><?php echo ('title');?></th>
	<th><?php echo ('created');?></th>
	<th><?php echo ('modified');?></th>
	<th class="actions"><?php __('Actions');?></th>
</thead>
<?php
$i = 0;
$no = 0;
foreach ($labsMurid as $lab):
	$no++;
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $no; ?>
		</td>
		<td>
			<?php echo $lab['Lab']['kelas'];?>
			
			
			
		</td>
		<td>
			<?php echo $lab['Pelajaran']['nama']; ?>
		</td>
		
		<td>
			<?php echo $lab['Lab']['title']; ?>
		</td>
		
		<td>
			<?php echo $lab['Lab']['created']; ?>
		</td>
		<td>
			<?php echo $lab['Lab']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $lab['Lab']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>

<div class="clear"></div>

<?php endif;?>
