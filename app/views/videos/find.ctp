<div class="assets index">


<h2>Pencarian Ebook</h2>
<div class="content-box">
<div class="content-box-content">
<?php
	echo $form->create('Lab', array('action'=>'find','class'=>'search'));
	echo '<p>';
	echo 'Judul: '.$form->input('title', array('div' => false,'label'=>false,'class'=>'text-input small-input'));
	echo 'Mata Pelajaran: '.$form->select('matapelajaran',$listMataPelajaran,array('label'=>false,'class'=>'text-input small-input'));
	
	
	$arrayKelas = array(10=>10,11=>11,12=>12);
	echo 'Kelas: '.$form->select('kelas',$arrayKelas,array('label'=>false,'class'=>'text-input small-input'));
	$arraySemester = array(null=>'Pilih Semua','1'=>'Ganjil','2'=>'Genap');
	echo '</p>';
	echo '<p>';

	echo 'Penulis: '.$form->select('author',$listGuru,null,array('label'=>false,'class'=>'text-input small-input'));
	echo '</p>';
	//echo $form->input('matapelajaran', array('div' => false, 'options' => $listMataPelajaran));
	//echo $form->input('status', array('div' => false, 'multiple' => 'checkbox', 'options' => array('open', 'closed')));
	echo '<p>';
	echo $form->submit(__('Search', true), array('div' => false,'class'=>'button'));
	echo '</p>';
	echo $form->end();
?>
</div>
</div>


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
foreach ($labs as $asset):
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
			<?php echo $asset['Lab']['kelas'];
			
			?>
		</td>
		<td>
			<?php echo $asset['Pelajaran']['nama']; ?>
		</td>
		<td>
			<?php echo $asset['Lab']['title']; ?>
		</td>
		
		<td>
			<?php echo $asset['Lab']['created']; ?>
		</td>
		<td>
			<?php echo $asset['Lab']['modified']; ?>
		</td>
		<?php if ($groupAuth == 3 || $groupAuth == 2):?>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $asset['Lab']['id'])); ?><br/>
		</td>
		<?php else:?>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $asset['Lab']['id'])); ?><br/>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $asset['Lab']['id'])); ?><br/>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $asset['Lab']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $asset['Lab']['title'])); ?>
		</td>
		
		<?php endif;?>
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



