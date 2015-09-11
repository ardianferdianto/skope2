<div class="quizzs index">
	<h2>Hasil Latihan</h2>
	<p>Hasil latihan anda untuk soal ini adalah<span id="nilaiResult"><?php 
	echo $score;
	?></span></br/></br/>
	Sistem ini hanya menghitung skor untuk pilihan ganda, soal uraian akan dilihat oleh guru
	</p>
	
	<dl class="info">
		<dt>Total Jawaban Benar :</dt>
		<dd><?php echo $countTrue;?></dd>
		
		
	</dl>
	<div class="clear"></div>
	<?php echo $html->link(__('Selesai',true), array('action' => 'index'),array('class'=>'button')); ?>
	
	
</div><!-- End content box -->


