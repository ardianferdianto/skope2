<div class="quizzs view">

	
	<div class="questions-view">
	<h2><?php __('Latihan');?></h2>
	<p> Berikut ini adalah halaman detail latihan,
	anda dapat melihat juga nilai siswa yang telah mengerjakan latihan ini
	</p>
	
	<?php
	$banyakSoal = count($quizz['Question']);
	echo $form->input('banyak_soal',array('type'=>'hidden','value'=>$banyakSoal));
	?>
	<p><strong>Detail latihan sebagai berikut</strong></p>
	<dl class="info">
		<dt>Judul kuis :</dt>
		<dd><?php echo $quizz['Quizz']['title']?></dd>
		<dt>Mata Pelajaran : </dt>
		<dd><?php echo $quizz['Pelajaran']['nama']?></dd>
		<dt>Kelas : </dt>
		<dd><?php echo $quizz['Quizz']['kelas']?></dd>
		<dt>Guru : </dt>
		<dd><?php echo $quizz['User']['nama']?></dd>
		<dt>Jumlah Pertanyaan : </dt>
		<dd><?php echo $banyakSoal?></dd>
		<dt>Waktu Pengerjaan : </dt>
		<dd><?php echo $quizz['Quizz']['time'].'Menit';?></dd>
	</dl>
	<div class="clear"></div>
	<?php
	echo '<br/><br/>'.$html->link('Edit Kuis ini', array('controller'=>'quizzs','action' => 'view', $quizz['Quizz']['id'],),array('class'=>'button'));
	
	
	?>
	<div class="divider"></div>
	
	<div class="actions">
		<h3>Siswa yang sudah mengerjakan latihan ini</h3>
		
		<table cellpadding="0" cellspacing="0">
		<tr>
			<th><strong>No</strong></th>
			<th><strong>Nama Siswa</strong></th>
			<th><strong>Tanggal Mengerjakan</strong></th>
			<th><strong>Point</strong></th>
			<th><strong>Action</strong></th>
		</tr>
		<?php
		$i = 0;
		$no =0;
		
		
		foreach ($quizSerahList as $b):
		//foreach ($namaSiswa as $n ):
			$class = null;
			$no++;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		
			<tr<?php echo $class; ?>>
			
				<td>
					<?php echo $no; ?>
				</td>
				
				<td>
					<?php echo $b['User']['nama']; ?>
				</td>
				
				<td>
					<?php echo $b['QuizzPoint']['modified']; ?>
				</td>
				<td>
					<?php echo $b['QuizzPoint']['points']; ?>
				</td>
				<td>
					<?php echo $html->link('Lihat jawaban uraian', array('controller'=>'uraian_answers','action' => 'view/'.$b['User']['id'].'/'.$quizz['Quizz']['id']),array('class'=>'button')); ?>
					
				</td>
				
			</tr>
		<?php //endforeach; ?>
		<?php endforeach; ?>
		</table>
	</div>
	 </div>
	
	 <?php echo '<br/><br/>'.$html->link('Kembali', array('controller'=>'quizzs','action' => 'index'),array('class'=>'button'));?>
	
	 
</div><!-- End content box -->
