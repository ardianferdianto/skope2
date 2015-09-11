<div id="banksoal index">
	<div class="tryout-soal-wrapper clearfix">
		<h2 class="titleiframe">HALAMAN SOAL</h2>
		
			<ul class="list-button-kuis">
				<li><a class="button-pembelajaran" id="download-btn" href="<?php echo $this->webroot; ?>quizzs/view_pdf/<?php echo $quizz['Quizz']['id']; ?>"><img src="<?php echo $this->webroot?>images/download_alt_32x32.png"/><br/>Download</a></li>

				<li><a class="button-pembelajaran" id="slideshow-btn" href="<?php echo $this->webroot; ?>quizzs/present_single/<?php echo $quizz['Quizz']['id']; ?>"><img src="<?php echo $this->webroot?>images/slideshow_alt_32x32.png"/><br/>Slideshow</a></li>
				<!--<li><a href="#" onClick=" window.print(); return false" id="print-btn"><img src="<?php echo $this->webroot; ?>resources/images/button/print-btn.png"/></a></li>-->
				<li><a class="button-pembelajaran" id="back-btn" href="<?php echo $this->webroot; ?>quizzs"><img src="<?php echo $this->webroot?>images/back_alt_32x32.png"/><br/>Kembali</a></li>
				
			</ul>
			
			<div class="tryout-content clearfix">
				<div class="clear"></div>
				<?php $banyakSoal = count($quizz['Question']);?>
				<dl class="info">
					<dt>Kode kuis</dt>
					<dd>: <?php echo $quizz['Quizz']['kode']?></dd>
					<dt>Tanggal</dt>
					<dd>: <?php echo $quizz['Quizz']['created']?></dd>
					
					<dt>Jumlah Soal</dt>
					<dd>: <?php echo $banyakSoal?></dd>
					<dt>Waktu Pengerjaan</dt>
					<dd>: <?php echo $quizz['Quizz']['time'].'Menit';?></dd>
				</dl>
				<div class="clear"></div>
				<hr/>
				<hr/>
				<br/>
				<br/>
				<?php
				if($banyakSoal == 0) :
					echo '<p class="red">Belum ada soal</p>';
				else:

					$no = 0;
					//$choiceList = ('A','B','C','D');
					foreach ($quizz['Question'] as $n):
					$no ++;
					
					?>

					<div class="soal-entry clearfix">
						
							<div class="soal-text">

							<?php
							echo '<h6>'.$no.'.&nbsp;&nbsp;&nbsp;&nbsp;'.$n['question'].'</h6>';

							if ($n['tipe'] == 1){
								/*$abc = 0;
								//foreach ($n['Answer'] as $s):
								$abc ++;
								if($abc == 1){
									$abcd = "a. ";
								}elseif ($abc == 2) {
									$abcd = "b. ";
								}elseif ($abc == 3) {
									$abcd = "c. ";
								}elseif ($abc == 4) {
									$abcd = "d. ";
								}*/
								?>
								<?php 

								echo "a. &nbsp;".$n['answer_a'];?><!--<?php if($n['answer_true']==1){echo " <span class='input-notification success png_bg'></span>";}?>--><br/><br/>
								<?php 

								echo "b. &nbsp;".$n['answer_b'];?><!--<?php if($n['answer_true']==2){echo " <span class='input-notification success png_bg'></span>";}?>--><br/><br/>
								<?php 

								echo "c. &nbsp;".$n['answer_c'];?><!--<?php if($n['answer_true']==3){echo " <span class='input-notification success png_bg'></span>";}?>--><br/><br/>
								<?php 

								echo "d. &nbsp;".$n['answer_d'];?><!--<?php if($n['answer_true']==4){echo " <span class='input-notification success png_bg'></span>";}?>--><br/><br/>
							<?php	
							}else if($n['tipe'] == 2){
								//echo '<p><strong>Jawaban :</strong>  ';
								//echo $n['answer2'];
								//echo '</p>';
								echo '______________________________________________________________________________';
								
							}?>
							</div><!--end soaltext-->

							<div class="soal-image">
								<?php
								if($n['images'] != null){ ?>
									<img style="margin:0 auto;text-align:center;" align="center" src="<?php echo $this->webroot.$n['images']; ?>" width="200" /> 
								
								<?php }?>

							</div>

							<div class="soal-video">
							
								<?php if($n['video'] != null):?>
									
									<a class="myPlayer" href="<?php echo $this->webroot.$n['video'];?>">
									    
									</a>
									
									
									
								<?php endif;
								?>

								

								
							</div>
					</div><!--end soalentry-->
					<?php endforeach;
						
						 
					endif;?>
				
			</div><!--end tryout-->

			<div class="bank-soal-footer clearfix">
				
			</div>
		
	</div>
</div>



