<div class="quizzs index">
<script type="text/javascript">
$(document).ready(function(){
//jquerycountdown
shortly = new Date(); 
shortly.setMinutes(shortly.getMinutes() + <?php echo $quizz['Quizz']['time']?>); 
$('#timeBox').countdown('change', {until: shortly});
$('#timeBox').countdown({until: shortly,  
    onExpiry: liftOff, onTick: watchCountdown}); 
 

     

 
function liftOff() { 
	alert('Maaf waktu anda sudah habis, kami akan menghitung jawaban yang anda seleseaikan');
    $('#QuizzResultsForm').submit();
    //document..submit(); 
} 
 
function watchCountdown(periods) { 
    $('#monitor').text('Waktu yang anda miliki ' + periods[5] + ' menit dan ' + 
        periods[6] + ' detik lagi'); 
}
});
</script>
	<div class="timeContainer">
		
		
		<div id="timeBox"></div>
		
	
	</div>
	<div class="questions-list">
	<h2><?php __('Latihan');
	
	?></h2>
	<p>Silahkan isi jawaban dibawah ini, dan perhatikan timer waktu yang tersedia, jika waktu habis maka sistem akan langsung menghitung jawaban anda,<br/>
	Selamat Mengerjakan!</p>
	<dl class="info">
		<dt>Judul kuis :</dt>
		<dd><?php echo $quizz['Quizz']['title']?></dd>
		<dt>Mata Pelajaran : </dt>
		<dd><?php echo $quizz['Pelajaran']['nama']?></dd>
		<dt>Kelas : </dt>
		<dd><?php echo $quizz['Quizz']['kelas']?></dd>
		<dt>Guru : </dt>
		<dd><?php echo $quizz['User']['nama']?></dd>
	</dl>
	<div class="divider"></div>
	<?php 
	echo $form->create('Quizz',array('action'=>'results'));
	echo $form->input('QuizzPoint.quizz_id',array('type'=>'hidden','value'=>$id));
	$banyakSoal = count($quizz['Question']);
	echo $form->input('banyak_soal',array('type'=>'hidden','value'=>$banyakSoal));
	if($remedId != null){
	echo $form->input('QuizzPoint.id',array('type'=>'hidden','value'=>$remedId));
		
	}
	$no = 0;
	$z = 0;
	//$choiceList = ('A','B','C','D');
	foreach ($quizz['Question'] as $n):
	$no ++;
	$z ++;
	
	
	?>
	
	<?php
	
	echo '<p>';
	echo '<label>'.$no.'.'.$n['question'].'</label>';
	if($n['images'] != null){?>
	<img src="<?php echo $this->webroot.$n['images']; ?>" width="300" /> 
	<div class="clear"></div>
	<?php }
	
	if($n['video'] != null){
		echo '<p>Jika tampilan video bermasalah keluar tekan pause dan play lagi pada player</p>';
		
		echo $video->loader(true); 
		echo $video->player($this->webroot.$n['video'], 'video', false, 330, 300); 
		echo '<div id="video"></div>';
		}
	?>
	 
	<div class="clear"></div>
	<?php
	if($n['tipe']==1){
	
	?>
	<?php 
	
	foreach ($n['Answer'] as $a):
	
	$options=array($a['id']=>$a['details']);
	$attributes=array('legend'=>false,'value'=>false,'label'=>false);
	
	echo $form->radio('jawaban.'.$no,$options,$attributes);
	echo '<br/>';
	endforeach;
	}else if($n['tipe']==2){
		$idQuizz = $n['id'];
		echo '<br/>';?>

		
		<input type="hidden" name="data[UraianAnswer][<?php echo $idQuizz; ?>][user_id]" value="<?php echo $loggedInIdAsli;?>">
		<input type="hidden" name="data[UraianAnswer][<?php echo $idQuizz; ?>][question_id]" value="<?php echo $n['id'];?>">
		<input type="hidden" name="data[UraianAnswer][<?php echo $idQuizz; ?>][quizz_id]" value="<?php echo $quizz['Quizz']['id'];?>">
		
		<textarea  rows="6" cols="30" name="data[UraianAnswer][<?php echo $idQuizz; ?>][jawaban_uraian]"></textarea>
	<?php
	}
	
	echo '</p>';
	 
	 ?>
	 
	
	
	<?php endforeach;
	echo '<p>';
	 echo $form->end('Submit');
	 echo '</p>';
	 ?>
	 </div>
</div><!-- End content box -->


