<div class="quizzs form">
	
	
	<div class="clear"></div> 
	<div class="content-box"><!-- Start Content Box -->
		
		<div class="content-box-header">
			
			<h3>From Edit Pertanyaan</h3>
			
						
			<div class="clear"></div>
			
		</div> <!-- End .content-box-header -->
		
		<div class="content-box-content">
			<?php echo $form->create('Question',array('enctype'=>'multipart/form-data'));?>
				<fieldset>
			 		
				<?php
					echo $form->hidden('Question.quizz_id',array('value'=>$QuizzId));
					echo '</p>';
					echo'<label>Bobot skor</label>';
					echo $form->input('Question.point_nilai',array('label'=>false));
					echo '</p>';
					echo '<p>';
					echo'<label>Pertanyaan</label>';
					echo $form->input('Question.question',array('label'=>false));
					echo '</p>';
					echo '<p>';
					echo'<label>File Gambar Sebelumnya</label>';
					if($question['Question']['images'] != null || !empty ($question['Question']['images'])){?>
					<br/>
					<img src="<?php echo $this->webroot.$question['Question']['images']; ?>" width="300" /> 
					
					
					<?php 
					echo '</p>';
					echo '<p>';
					echo'<label>Rubah Gambar</label>';
					echo $form->input('File.image', array('label'=>false, 'type'=>'file'));
					echo '</p>';
					}else{
					
					echo 'Tidak ada gambar';
					
					echo '<p>';
					echo'<label>Tambah Gambar</label>';
					echo $form->input('File.image', array('label'=>false, 'type'=>'file'));
					echo '</p>';
					}
					
					echo '<p>';
					echo'<label>File Video Sebelumnya</label>';
					if($question['Question']['video'] != null || !empty ($question['Question']['video'])){
					echo '<br/>';
					echo $video->loader(true); 
					echo $video->player($this->webroot.$question['Question']['video'], 'video', false, 320, 300); 
					echo '<div id="video"></div>'	;
					echo '<p>Jika tampilan video bermasalah keluar tekan pause dan play lagi pada player</p>';?>
					<?php 
					echo '</p>';
					echo '<p>';
					echo'<label>Rubah Video</label>';
					echo $form->input('File2.image', array('label'=>false, 'type'=>'file'));
					echo '</p>';
					}else{
					
					echo 'Tidak ada video';
					
					echo '<p>';
					echo'<label>Tambah Video</label>';
					echo $form->input('File2.image', array('label'=>false, 'type'=>'file'));
					echo '</p>';
						
					}
					
					if ($question['Question']['tipe'] == 2){
						echo '<p>';
						echo $form->input('Question.answer2',array('label'=>'Jawaban Uraian'));
						echo '</p>';
					}
					
					
				?>
				
				</fieldset>
			<p>
			<?php echo $form->end('Submit');?>
			</p>
			
		</div>
	</div>
	
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Kembali', true), array('controller'=>'quizzs','action' => 'view',$QuizzId));?></li>
	</ul>
</div>
