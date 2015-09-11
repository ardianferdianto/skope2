
<div class="quizzs form">
	
	
	<div class="clear"></div> 
	<div class="content-box"><!-- Start Content Box -->
		
		<div class="content-box-header">
			
			<h3>From Edit Pertanyaan</h3>
			
						
			<div class="clear"></div>
			
		</div> <!-- End .content-box-header -->
		
		<div class="content-box-content">
			<?php echo $form->create('Answer');?>
				<fieldset>
			 		
				<?php
					
					
					echo $form->hidden('Answer.quizz_id',array('value'=>$QuizzId));
					echo '<p>';
					echo $form->input('details',array('label'=>'Deskripsi jawaban'));
					echo '</p>';
					echo '<p>';
					echo'<label>Ceklist jika, Jawaban ini benar</label>';
					if($answer['Answer']['true'] == 1){
					?>
						<div class="notification attention png_bg">
							<a href="#" class="close"><img src="/lms/resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
							<div>
									
									<p>Ini adalah jawaban benar yang anda set sebelumnya , <br/> Jika anda men-uncheck pilihan ini anda butuh untuk memilih jawaban baru yang benar selanjutnya</p>
									<p>Jika tidak, anda tidak mempunyai jawaban yang benar untuk pertanyaan ini</p>
								
									
								
							</div>
						</div>
						
					<?php
					}else{
					?>
					<div class="notification attention png_bg">
						<a href="#" class="close"><img src="/lms/resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
						<div>
								
								<p>Jika anda memilih jawaban ini sebagai jawaban yang benar, maka jangan lupa untuk menchecklist jawaban yang sebelumnya benar,setelah ini!</p>
								<p>Jika tidak, anda akan mempunyai 2 jawaban yang benar untuk pertanyaan ini</p>
							
								
							
						</div>
					</div>
					
					<?php
					}
					echo '<br/>';
					echo '<br/>';
					echo $form->checkbox('true',array('label'=>false)).'Pilih sebagai jawaban yang benar';
					
					
					echo '</p>';
					
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
		<li><?php echo $html->link(__('Kembali', true), array('controller'=>'questions','action' => 'index'));?></li>
	</ul>
</div>
