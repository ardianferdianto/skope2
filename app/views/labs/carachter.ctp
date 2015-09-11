<div class="labs index">

<h2>Tab Direktori Carachter Building</h2>
<p>
Berikut ini adalah halaman dari semua Carachter Building yang dibuat, anda dapat memanage halaman ini dengan action yang tersedia
</p>

<br/>
<br/>
<table class="data display datatable " id="example">
<thead>
	<th><?php echo 'No';?></th>
	<th><?php echo 'kelas';?></th>
	
	<th><?php echo 'title';?></th>
	<th><?php echo 'created';?></th>
	<th><?php echo 'modified';?></th>
	<th class="actions"><?php __('Actions');?></th>
</thead>
<?php
$i = 0;
$no = 0;
foreach ($eboks as $lab):
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
			<?php if ($groupAuth == 1) :?>

			
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $lab['Lab']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $lab['Lab']['id'])); ?>
			<?php endif;?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>

<div class="clear"></div>
<?php if ($groupAuth == 1) :?>
<div class="actions">
	
	<?php echo $html->link('Masukkan Carachter Building Baru','/labs/add/5/',array('class'=>'button')); ?>
	
</div>
<?php endif;?>




