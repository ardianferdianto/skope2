<div class="quizzs view">

	
	<div class="questions-view">
	<h2><?php __('Latihan');?></h2>
	<div class="notification information png_bg">
		<a href="#" class="close"><img src="<?php echo $this->webroot; ?>resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
		<div>
				
				<p>Ini adalah halaman pengeditan latihan lengkap, anda dapat mengedit semua item yang berhubungan dengan latihan, pertanyaan ,dan jawaban dalam satu halaman, silahkan pilih tombol edit sesuai dengan apa yang anda inginkan</p>
			
				
			
		</div>
	</div>
	
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
	echo '<br/><br/>'.$html->link('Edit Kuis ini', array('controller'=>'quizzs','action' => 'edit', $quizz['Quizz']['id'],),array('class'=>'button'));
	echo $html->link('Buat pertanyaan baru', array('controller'=>'questions','action' => 'add', $quizz['Quizz']['id'],1,$quizz['Quizz']['pelajaran_id'],$quizz['Quizz']['kelas']),array('class'=>'button secondbtn'));
	
	?>
	<div class="divider"></div>
	<?php 
	
	
	
	
	$no = 0;
	//$choiceList = ('A','B','C','D');
	foreach ($quizz['Question'] as $n):
	$no ++;
	
	?>
	
	<?php
	echo '<p>';
	echo '<h6>'.$no.'.'.$n['question'].'</h6>';
	echo '<br/><br/><span>Point: <strong>'.$n['point_nilai'].'</strong></span><br/><br/>';
	if($n['images'] != null){?>
	<img src="<?php echo $this->webroot.$n['images']; ?>" width="300" /> 
	<div class="clear"></div>
	<?php }
	
	if($n['video'] != null){
		
		
		echo $video->loader(true); 
		echo $video->player($this->webroot.$n['video'], 'video', false, 320, 300); 
	echo '<div id="video"></div>'	;
	echo '<p>Jika tampilan video bermasalah keluar tekan pause dan play lagi pada player</p>';
	}

	echo '<br/><br/>'.$html->link('Edit Pertanyaan ini', array('controller'=>'questions','action' => 'edit', $n['id'],$quizz['Quizz']['id']),array('class'=>'button'));
	echo $html->link('Hapus pertanyaan ini', array('controller'=>'quizzs_questions','action' => 'deleteEntries', $n['id'],$quizz['Quizz']['id']),array('class'=>'button secondbtn'));
	
	if ($n['tipe'] == 1){
		echo '<ul>';
	
		foreach ($n['Answer'] as $a):
		if($a['true'] == 1){
		echo '<li class="alt-true">';
		}else{
		echo '<li>';
		}
	
		if($a['true'] == 1){
		echo'<span class="input-notification success png_bg"> Ini Jawaban yang benar</span><br/><br/>';}
		echo $a['details']; 
		echo '<br/><br/>'.$html->link('Edit Jawaban ini', array('controller'=>'answers','action' => 'edit', $a['id'],$quizz['Quizz']['id'],$n['id']));
		echo '</li>';
		endforeach;
		echo '</ul>';
	}else if($n['tipe'] == 2){
		echo '<br/><br/><p>Jawaban : ';
		echo $n['answer2'];
		echo '</p>';
		
	}
	
	 
	 ?>
	 
	
	
	<?php endforeach;
	echo '</p>';
	 ?>
	 </div>
	
	 <?php echo '<br/><br/>'.$html->link('Kembali', array('controller'=>'quizzs','action' => 'index'),array('class'=>'button'));?>
	 
</div><!-- End content box -->
