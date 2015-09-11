<div class="quizzs view">

	
	<div class="questions-view">
	<h2><?php __('Detail soal');?></h2>
	
	
	<?php
	
	
	?>
	
	<dl class="info">
		<dt>Kelas:</dt>
		<dd><?php echo $question['Question']['kelas']?></dd>
		<dt>Mata Pelajaran : </dt>
		<dd><?php echo $question['Pelajaran']['nama']?></dd>
		<dt>Point : </dt>
		<dd><?php echo $question['Question']['point_nilai']?></dd>
		<dt>Tingkat Kesulitan : </dt>
		<dd><?php 
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
		echo $level;?></dd>
		<dt>Tipe Soal : </dt>
		<dd><?php
		$tipe = $question['Question']['tipe'];
		if ($tipe ==1){
			$tipe = "Pilihan Ganda";
		}else if($tipe ==2){
			$tipe = "Uraian";
		}else{
			$tipe = "Tidak diketahui";
		};
		echo $tipe;
		?></dd>
		<dt>Tanggal dibuat : </dt>
		<dd><?php echo $question['Question']['created']; ?></dd>
		
	</dl>
	<div class="clear"></div>
	
	<div class="divider"></div>
	
	<p>
		<label>Pertanyaan:</label><br/>
		<strong><?php echo $question['Question']['question']; ?></strong>
	</p>
	
	
	
	<?php
	
	
	if($question['Question']['images'] != null){?>
	<img src="<?php echo $this->webroot.$question['Question']['images']; ?>" width="300" /> 
	<div class="clear"></div>
	<?php }
	
	if($question['Question']['video'] != null){
		
		
		echo $video->loader(true); 
		echo $video->player($this->webroot.$question['Question']['video'], 'video', false, 320, 300); 
	echo '<div id="video"></div>'	;
	echo '<p>Jika tampilan video bermasalah keluar tekan pause dan play lagi pada player</p>';
	}

	echo '<br/><br/>';
	
	if($question['Question']['tipe'] == 1){
		echo '<p>Jawaban</p>';
		echo '<ul>';
	
		foreach ($question['Answer'] as $a):
		if($a['true'] == 1){
		echo '<li class="alt-true">';
		}else{
		echo '<li>';
		}
	
		if($a['true'] == 1){
		echo'<span class="input-notification success png_bg"> Ini Jawaban yang benar</span><br/><br/>';}
		echo $a['details']; 
		echo '<br/><br/>'.$html->link('Edit Jawaban ini', array('controller'=>'answers','action' => 'edit_single', $a['id'],$question['Question']['id']));
		echo '</li>';
		endforeach;
		echo '</ul>';
	
	 
		
	 }else if($question['Question']['tipe'] == 2){
		echo '<p>Jawaban</p>';
		echo '<strong>'.$question['Question']['answer2'].'</strong>';
		echo '<br/><br/>'.$html->link('Edit Jawaban ini', array('controller'=>'questions','action' => 'edit_uraian',$question['Question']['id']));
	}
	?>
	 </div>
	
	 
	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('Edit Soal Ini', true), array('action' => 'edit_single', $question['Question']['id'])); ?> </li>
			<li><?php echo $html->link(__('Delete Soal Ini', true), array('action' => 'delete', $question['Question']['id']), null, sprintf(__('Anda yakin ingin menghapus? # %s?', true), $question['Question']['id'])); ?> </li>
			<li><?php echo $html->link(__('kembali', true), array('action' => 'index')); ?> </li>
			
		</ul>
	</div>
	 
</div><!-- End content box -->



