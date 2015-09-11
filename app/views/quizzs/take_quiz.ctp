<div class="quizzs index">
	<h2><?php __('Quiz Online');?></h2>
	<p>
	Selamat datang di kuis online, anda sedang mengisi kuis,
	</p>
	
	<?php if($hastake != null):?>
	<div class="notification attention png_bg">
		<a href="#" class="close"><img src="<?php echo $this->webroot; ?>resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
		<div>
				
				<p>Anda sudah menyelesaikan latihan ini, Nilai Anda adalah <strong><?php echo $hastake['QuizzPoint']['points']?></strong> <br/>Silahkan pilih remedial untuk mengulang</p>
			
				
			
		</div>
	</div>
	<?php endif; ?>
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
	<div class="clear"></div>
	<div class="content-box">
	<div class="content-box-header">
	<h3>Instruksi</h3>
	</div>
	<div class="content-box-content">
	<p>Sebelum mulai mengerjakan latihan ini, siapkan diri anda, halaman ini adalah halaman untuk melakukan latihan, untuk mata pelajaran yang ada di atas, dan detail latihan yang seperti anda lihat diatas<br/>
	Setelah ini silahkan anda pilih tombol <bold>Mulai</bold> untuk memulai, Selamat mengerjakan !
	</p>
	
	</div>
	</div>
	<div class="content-box">
	<div class="content-box-header">
	<h3>Instruksi Tambahan Dari Guru</h3>
	</div>
	<div class="content-box-content">
	<p><?php echo $quizz['Quizz']['details']?></p>
	
	</div>
	</div>
	<div class="clear"></div> 
	<?php if($hastake != null):?>
	<a href="<?php echo $this->webroot.'quizzs/do_quizz/'.$id;?>" class="button">Remedial</a>
	<?php else: ?>
	<a href="<?php echo $this->webroot.'quizzs/do_quizz/'.$id;?>" class="button">Mulai</a>
	<?php endif;?>
	
</div><!-- End content box -->
