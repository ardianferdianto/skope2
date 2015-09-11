<div class="quizzs view">

	
	<div class="questions-view">
	<h2><?php __('Detail Jawaban Uraian');?></h2>
	
	
	
	
	
	<?php 
	
	
	
	
	$no = 0;
	//$choiceList = ('A','B','C','D');
	foreach ($uraianAnswers as $n):
	$no ++;
	
	?>
	
	<?php
	echo '<p>';
	echo '<h6>'.$no.'.'.$n['Question']['question'].'</h6>';
	echo '<br/><br/><span>Point: <strong>'.$n['Question']['point_nilai'].'</strong></span><br/><br/>';
	if($n['Question']['images'] != null){?>
	<img src="<?php echo $this->webroot.$n['Question']['images']; ?>" width="300" /> 
	<div class="clear"></div>
	<?php }
	
	if($n['Question']['video'] != null){
		
		
		echo $video->loader(true); 
		echo $video->player($this->webroot.$n['Question']['video'], 'video', false, 320, 300); 
	echo '<div id="video"></div>'	;
	echo '<p>Jika tampilan video bermasalah keluar tekan pause dan play lagi pada player</p>';
	}

	
	
	echo '<p>';
	echo '<br/><br/><p>Jawaban Siswa: <br/>';
	echo '<strong>'.$n['UraianAnswer']['jawaban_uraian'].'</strong>';
	echo '</p>';
	if($groupAuth != 3){
	echo '<p>';
	echo '<br/><br/><p>Jawaban Guru: <br/>';
	echo '<strong>'.$n['Question']['answer2'].'</strong>';
	echo '</p>';
	}
		
	
	echo '<div class="divider"></div>';
	 
	 ?>
	 
	
	
	<?php endforeach;
	echo '</p>';
	
	 ?>
	 </div>
	
	 <?php echo '<br/><br/>'.$html->link('Kembali', array('controller'=>'users','action' => 'siswa'),array('class'=>'button'));?>
	 
</div><!-- End content box -->
