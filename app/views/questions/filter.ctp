<div id="listSoal">
	
	<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?php echo ('id');?></th>
		<th><?php echo ('Pertanyaan');?></th>
		<th><?php echo ('Tipe');?></th>
		<th><?php echo ('Kelas');?></th>
		<th><?php echo ('Mata Pelajaran');?></th>
		<th><?php echo ('Level');?></th>
		<th><?php echo ('created');?></th>
	
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($questions as $question):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	$tipe = $question['Question']['tipe'];
	if ($tipe ==1){
		$tipe = "Pilihan Ganda";
	}else if($tipe ==2){
		$tipe = "Uraian";
	}else{
		$tipe = "Tidak diketahui";
	}
	$level = $question['Question']['level'];
	$levels = array(1=>'Mudah',2=>'Normal',3=>'Sulit',4=>'Sangat Sulit');
	if ($level == 1){
		$level = "Mudah";
	}else if($level == 2){
		$level = "Normal";
	}
	else if($level == 3){
		$level = "Sulit";
	}
	else if($level == 4){
		$level = "Sangat Sulit";
	}
	else{
		$level = "Tidak diketahui";
	}
	?>
		<tr<?php echo $class;?>>
			<td>
				<?php echo $question['Question']['id']; ?>
			</td>
		
			<td>
				<?php echo $question['Question']['question']; ?>
			</td>
			<td>
				<?php echo $tipe; ?>
			</td>
			<td>
				<?php echo $question['Question']['kelas']; ?>
			</td>
			<td>
				<?php echo $question['Pelajaran']['nama']; ?>
			</td>
			<td>
				<?php echo $level; ?>
			</td>
			<td>
				<?php echo $question['Question']['created']; ?>
			</td>
		
			<td class="actions">
				<?php echo $html->link(__('View', true), array('action' => 'view', $question['Question']['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('action' => 'edit', $question['Question']['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('action' => 'delete', $question['Question']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $question['Question']['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>

	
</div>