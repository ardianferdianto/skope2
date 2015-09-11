<?php echo $javascript->link('/resources/scripts/jquery.countdown.pack.js'); ?>
<?php echo $javascript->link('/resources/scripts/jquery.countdown-id.js'); ?>
<?php

	$pertanyaan1 = $questions[0]['Question']['id'];
	$pertanyaan2 = $questions[1]['Question']['id'];
	$pertanyaan3 = $questions[2]['Question']['id'];
	$pertanyaan4 = $questions[3]['Question']['id'];
	$pertanyaan5 = $questions[4]['Question']['id'];
	$pertanyaan6 = $questions[5]['Question']['id'];
	$pertanyaan7 = $questions[6]['Question']['id'];
	$pertanyaan8 = $questions[7]['Question']['id'];
	$pertanyaan9 = $questions[8]['Question']['id'];
	$pertanyaan10 = $questions[9]['Question']['id'];

?>
<script type="text/javascript">
jQuery(document).ready(function(){





	function highlightLast5(periods) {
	    if (jQuery.countdown.periodsToSeconds(periods) == 30) {
	        jQuery(this).addClass('highlight');
	    }
	}


	function liftOff() {

	 	alert('Waktu sudah habis');
		//alert('Maaf waktu anda sudah habis, kami melanjutkan pertanyaan berikutnya');
		nextQuestion();

		itungitung();
		//document..submit();
	}

	function watchCountdown(periods) {
	    jQuery('#monitor').text('Waktu yang anda miliki ' + periods[5] + ' menit dan ' +
	        periods[6] + ' detik lagi');
	}




	var idQuestion = 1;
	var noSoal = 1;
	var totaljawabanbetul = 0;
	var totaljawabansalah = 0;
	var totaljawabanpas = 0;
	var skor = 0;
	var jawabanYangDipilih;

	jQuery('.button-pilihan-jawaban ul li a').click(function() {
		jQuery('.button-pilihan-jawaban ul li a').removeClass('selected-answer');
		jQuery(this).addClass('selected-answer');
		//jawabanYangDipilih = "";
		//jawabanYangDipilih = jQuery(this);
	});

	//start question 1

	//startCount();

	function show(id){
		jQuery('#nomor-soal').html(id);
		jQuery('#pertanyaan-'+id).fadeIn();
		idQuestion++;
		noSoal++;
		//jawabanYangDipilih = "";
	};

	function findAswer(id){



		jawabanYangDipilih = jQuery('.button-pilihan-jawaban ul li').find('a.selected-answer');

		//if (jQuery(".button-pilihan-jawaban ul li a.selected-answer").length > 0){
			if(jawabanYangDipilih.hasClass('jawabanbetul')){
				totaljawabanbetul++;
			}else if(jawabanYangDipilih.hasClass('jawabansalah')){
				totaljawabansalah++;
			}else if(jawabanYangDipilih.length == 0){
				totaljawabanpas++;
			}

		//}else{
		//	totaljawabanpas++;
		//}
		//update every span holder jawaban

		jQuery('.holder-jawabanBetul').html(totaljawabanbetul);
		jQuery('.holder-jawabanSalah').html(totaljawabansalah);
		jQuery('.holder-jawabanPas').html(totaljawabanpas);
		return false;
	}

	function itungitung(){
		skor = (totaljawabanbetul*4)+(totaljawabansalah*-1)+(totaljawabanpas*0);
		jQuery('.holder-skor').html(skor);
	}

	function nextQuestion(){

		jQuery('.soal-entry').fadeOut();
		show(idQuestion);
		findAswer(noSoal);

		jQuery('.button-pilihan-jawaban ul li a').removeClass('selected-answer');


		jQuery('#timeBox').removeClass('highlight');
		shortly = new Date();
	    	shortly.setMinutes(shortly.getMinutes() + <?php echo $timeset;?>);
	    	jQuery('#timeBox').countdown('change', {until: shortly});
		jQuery('#timeBox').countdown({until: shortly,
	    	onExpiry: liftOff, onTick: highlightLast5,significant: 1});
	}


	jQuery('.button-next-quizz').click(function() {
		if(noSoal == 11){
			findAswer(noSoal);
			itungitung();
			showresult()

			//jQuery('.button-next-quizz').hide();
			//jQuery('.button-selesai-quizz').show();
			//jQuery('.button-history-quizz').show();

		}else{
			nextQuestion();

			itungitung();
		}

	});

	jQuery('#start-quizz-btn').click(function() {
		jQuery('.input-notification').hide();
		show(1);
		jQuery('#welcome-quiz').fadeOut();
		shortly = new Date();
	    	shortly.setMinutes(shortly.getMinutes() + <?php echo $timeset;?>);
		jQuery('#timeBox').countdown('change', {until: shortly});
		jQuery('#timeBox').countdown({until: shortly,
	    	onExpiry: liftOff, onTick: highlightLast5,significant: 1});
	});



	function showresult(){
		jQuery('.input-notification').show();
		jQuery('#timeBox').countdown('destroy');

		//hide element
		jQuery('.quizz-info').hide();
		jQuery('.detail-quizz').fadeOut();

		jQuery('#timeBox').fadeOut();
		jQuery('.button-next-quizz').hide();
		jQuery('.skor-quiz-sementara').fadeOut();

		//show element
		jQuery('.quizz-info-left').fadeIn();
		jQuery('.skor-info-left').fadeIn();
		jQuery('.soal-entry').show();
		jQuery('.button-selesai-quizz').show();
		jQuery('.button-pilihan-jawaban').hide();
		jQuery('#menu_list_top_pembelajaran').fadeIn();

		jQuery('#status-history').html("Result Quiz");

		//upddate link to download button
		jQuery("#download-btn").replaceWith( "<a class='button-pembelajaran' id='download-btn' href='<?php echo $this->webroot; ?>questions/viewquizz_pdf/<?php echo $kelas; ?>/<?php echo $mapel; ?>/<?php echo $level; ?>/<?php echo $tipe; ?>/"+totaljawabanbetul+"/"+totaljawabansalah+"/"+totaljawabanpas+"/"+skor+"/<?php echo $pertanyaan1;?>/<?php echo $pertanyaan2;?>/<?php echo $pertanyaan3;?>/<?php echo $pertanyaan4;?>/<?php echo $pertanyaan5;?>/<?php echo $pertanyaan6;?>/<?php echo $pertanyaan7;?>/<?php echo $pertanyaan8;?>/<?php echo $pertanyaan9;?>/<?php echo $pertanyaan10;?>'</a>" );

		//jQuery('#download-btn').replaceWith( '<a class="button-pembelajaran" id="download-btn" href="<?php echo $this->webroot; ?>questions/viewquizz_pdf/<?php echo $kelas; ?>/<?php echo $mapel; ?>/<?php echo $level; ?>/<?php echo $tipe; ?>/'+jawabanbenarselected+'/'+jawabansalahselected+'/'+jawabanpasselected+'/'+skorjawaban+'/<?php echo $pertanyaan1;?>/<?php echo $pertanyaan2;?>"></a>' ;



	}

});
</script>

<table class="noprint headquizz" >
	<tr>
		<td>Kelas</td>
		<td>: <?php echo $kelas;?></td>
		<td>Jawaban Benar:</td>
		<td id="tabletotaljawabanbenar">: 0</td>
	</tr>
	<tr>
		<td>Bidang Study</td>
		<td>: <?php echo $mapel;?></td>
		<td>Jawaban Salah:</td>
		<td id="tabletotaljawabansalah">: 0</td>
	</tr>
	<tr>
		<td>Tipe Soal</td>
		<td>: <?php
					if($tipe ==1 ){
						echo 'Pilhan Ganda';
					}else{
						echo 'Uraian';
					}?>
		</td>
		<td>Jawaban Pas:</td>
		<td id="tabletotaljawabanpas">: 0</td>
	</tr>
	<tr>
		<td>Level Soal</td>
		<td>: <?php if($level ==1){
						echo 'Mudah';
					}elseif ($level ==2) {
						echo 'Sedang';
					}elseif ($level == 3) {
						echo 'Sulit';
					}?>
		</td>
		<td>Skor:</td>
		<td id="tabletotalskor">: 0</td>
	</tr>



</table>

<br/><br/>

<table class="noprint">
	<?php
	$no = 0;
	//$choiceList = ('A','B','C','D');

	foreach ($questions as $n):
	$no ++;
	?>
	<tr>
		<td>
		<?php
			echo '<h6>'.$no.'.&nbsp;&nbsp;&nbsp;&nbsp;'.$n['Question']['question'].'</h6><br/><br/>';

			if ($n['Question']['tipe'] == 1){
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

				echo "a. &nbsp;".$n['Question']['answer_a'];?><?php if($n['Question']['answer_true']==1){ ?>&nbsp;<img style="margin:0 auto;text-align:center;" align="center" src="<?php echo $this->webroot.'app/webroot/img/accept.gif'?>" width="9px"/ <?php };?><br/><br/><br/>
				<?php

				echo "b. &nbsp;".$n['Question']['answer_b'];?><?php if($n['Question']['answer_true']==2){ ?>&nbsp;<img style="margin:0 auto;text-align:center;" align="center" src="<?php echo $this->webroot.'app/webroot/img/accept.gif'?>" width="9px"/ <?php };?><br/><br/><br/>
				<?php

				echo "c. &nbsp;".$n['Question']['answer_c'];?><?php if($n['Question']['answer_true']==3){ ?>&nbsp;<img style="margin:0 auto;text-align:center;" align="center" src="<?php echo $this->webroot.'app/webroot/img/accept.gif'?>" width="9px"/ <?php };?><br/><br/><br/>
				<?php

				echo "d. &nbsp;".$n['Question']['answer_d'];?><?php if($n['Question']['answer_true']==4){ ?>&nbsp;<img style="margin:0 auto;text-align:center;" align="center" src="<?php echo $this->webroot.'app/webroot/img/accept.gif'?>" width="9px"/ <?php };?><br/><br/><br/>
			<?php
			}else if($n['Question']['tipe'] == 2){
				echo '<p><strong>Jawaban :</strong>  ';
				echo $n['answer2'];
				echo '</p>';

		}?>

		</td>
		<td>
			<?php
			if($n['Question']['images'] != null){ ?>
				<img style="margin:0 auto;text-align:center;" align="center" src="<?php echo $this->webroot.$n['Question']['images']; ?>" width="200" />

			<?php }?>
		</td>

		<td>&nbsp;</td>
	</tr>

	<?php endforeach;?>

</table>
<div id="timeBox"></div>
<div id="banksoal index">
	<div class="quizz-wrapper clearfix">
		<h2 id="status-history">Nomor : <span id="nomor-soal">1</span></h2>
			<ul id="menu_list_top_pembelajaran" style="top:80px;display:none;">
				<!--<li><a href="#" onClick=" window.print(); return false" id="print-btn"><img src="<?php echo $this->webroot; ?>resources/images/button/print-btn.png"/></a></li>-->
				<li><a class="button-pembelajaran" id="back-btn" href="<?php echo $this->webroot; ?>questions/proses/<?php echo $kelas; ?>/<?php echo $mapel; ?>/<?php echo $level; ?>/<?php echo $tipe; ?>"></a></li>
				<li><a class="button-pembelajaran" id="download-btn" href=""></a></li>
				<li><a class="button-pembelajaran" id="home-btn" href="<?php echo $this->webroot; ?>users/home"></a></li>

			</ul>
			<div class="quizz-info">
				<dl>
					<dt>Nama</dt>
					<dd>: <?php echo $loggedInName;?></dd>
					<dt>Kelas</dt>
					<dd>: <?php echo $kelas;?></dd>
					<dt>Bidang Study</dt>
					<dd>: <?php echo $mapel;?></dd>
					<dt>Tipe Soal</dt>
					<dd>: <?php
					if($tipe ==1 ){
						echo 'Pilhan Ganda';
					}else{
						echo 'Uraian';
					}?>
					</dd>
					<dt>Level</dt>
					<dd>:
					<?php if($level ==1){
						echo 'Mudah';
					}elseif ($level ==2) {
						echo 'Sedang';
					}elseif ($level == 3) {
						echo 'Sulit';
					}?>
					</dd>

					<dt>Jumlah Soal</dt>
					<dd>: 10</dd>
					<dt>Tanggal</dt>
					<dd>: <?php echo date('l jS F Y');?></dd>
				</dl>
			</div>
			<!--<ul class="list-button-kuis">
				<!--<li><a class="button-pembelajaran" id="upload-btn" href="#subjectadd" rel="modal">></a></li>-->
				<!--<li><a class="button-pembelajaran" id="kuis-btn" href="#downloadlist"></a></li>
				<li><a class="button-pembelajaran" id="tryoutkuis-btn" href="<?php echo $this->webroot; ?>quizzs"></a></li>
				<li><a class="button-pembelajaran" id="salintryoutkuis-btn" href="<?php echo $this->webroot; ?>questions/select_tryout/<?php echo $kelas; ?>/<?php echo $mapel; ?>/<?php echo $level; ?>/<?php echo $tipe; ?>" rel="_modal"></a></li>
				<li><a class="button-pembelajaran" id="addkuis-btn" href="<?php echo $this->webroot; ?>questions/add_single/<?php echo $kelas; ?>/<?php echo $mapel; ?>/<?php echo $level; ?>/<?php echo $tipe; ?>"></a></li>
				<li><a class="button-pembelajaran" id="downloadformkuis-btn" href="#downloadlist"></a></li>
				<li><a class="button-pembelajaran" id="download-btn" href="#downloadlist" rel="modal"></a></li>
				<li><a class="button-pembelajaran" id="back-btn" href="<?php echo $this->webroot; ?>questions/home"></a></li>
				<li><a class="button-pembelajaran" id="home-btn" href="<?php echo $this->webroot; ?>users/home"></a></li>
			</ul>-->
			<div class="main-content-quizz clearfix">

				<div style="float:left;width:300px;" class="celarfix">
					<div class="quizz-info-left clearfix" style="display:none;">
					<dl>
						<dt>Nama</dt>
						<dd>: <?php echo $loggedInName;?></dd>
						<dt>Kelas</dt>
						<dd>: <?php echo $kelas;?></dd>
						<dt>Bidang Study</dt>
						<dd>: <?php echo $mapel;?></dd>
						<dt>Tipe Soal</dt>
						<dd>: <?php
						if($tipe ==1 ){
							echo 'Pilhan Ganda';
						}else{
							echo 'Uraian';
						}?>
						</dd>
						<dt>Level</dt>
						<dd>:
						<?php if($level ==1){
							echo 'Mudah';
						}elseif ($level ==2) {
							echo 'Sedang';
						}elseif ($level == 3) {
							echo 'Sulit';
						}?>
						</dd>

						<dt>Jumlah Soal</dt>
						<dd>: 10</dd>
						<dt>Tanggal</dt>
						<dd>: <?php echo date('l jS F Y');?></dd>
					</dl>
					</div>

					<div class="skor-info-left clearfix" style="display:none;">
					<dl>
						<dt>Jawaban Benar</dt>
						<dd >: <span class="holder-jawabanBetul">0</span></dd>
						<dt>Jawaban Salah</dt>
						<dd>: <span class="holder-jawabanSalah">0</span></dd>
						<dt>Tidak Jawab</dt>
						<dd>: <span class="holder-jawabanPas">0</span></dd>
						<dt>Skor</dt>
						<dd>: <span class="holder-skor">0</span></dd>

					</dl>
					</div>

					<div class="detail-quizz">

						<strong>KETENTUAN</strong>
						<ol>
							<li>DURASI WAKTU SETIAP SOAL SELAMA 1 MENIT DAN SOAL AKAN OTOMATIS BERGANTI SETELAH DURASI HABIS</li>
							<li>SETIAP QUIZ BERJUMLAH 10 SOAL DAN ANDA BISA MENJAWAB KELOMPOK QUIZ BARU SETELAH KELUAR DARI DIREKTORI INI </li>
							<li>JAWABAN BENAR DIBERI NILAI 4, SALAH DIBERI NILAI MINUS 1 DAN TIDAK MENJAWAB DIBERI NILAI 0</li>
							<li>ANDA BISA KELUAR DARI MENU INI SETELAH DURASI WAKTU 10 SOAL SELESAI.</li>
						</ol>
					</div>
				</div>

				<div class="box-soal-quizz">

					<div id="welcome-quiz" style="text-align:center;width:100%;padding:70px 0 0;">
						<h4 style="margin:0 0 30px 0;">Apakah anda sudah siap untuk mengerjakan Quiz ini ?</h4>
						<a id="start-quizz-btn" href="#" style="margin:0 15px 0 0;"><?php echo $html->image("ok-btn1.png")?></a>
						<a href="<?php echo $this->webroot; ?>questions/proses/<?php echo $kelas; ?>/<?php echo $mapel; ?>/<?php echo $level; ?>/<?php echo $tipe; ?>"><?php echo $html->image("btl-btn1.png")?></a>
					</div>
					<?php

						$no = 0;
						//$choiceList = ('A','B','C','D');

						foreach ($questions as $n){
						$no ++;
						?>

					<div id="pertanyaan-<?php echo $no;?>" class="soal-entry clearfix" style="display:none;">

							<div class="soal-text">

							<?php
							echo '<h6>'.$no.'.&nbsp;&nbsp;&nbsp;&nbsp;'.$n['Question']['question'].'</h6><br/><br/>';

							if ($n['Question']['tipe'] == 1){
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

								echo "a. &nbsp;".$n['Question']['answer_a'];?><?php if($n['Question']['answer_true']==1){echo " <span class='input-notification success png_bg'></span>";}?><br/><br/><br/>
								<?php

								echo "b. &nbsp;".$n['Question']['answer_b'];?><?php if($n['Question']['answer_true']==2){echo " <span class='input-notification success png_bg'></span>";}?><br/><br/><br/>
								<?php

								echo "c. &nbsp;".$n['Question']['answer_c'];?><?php if($n['Question']['answer_true']==3){echo " <span class='input-notification success png_bg'></span>";}?><br/><br/><br/>
								<?php

								echo "d. &nbsp;".$n['Question']['answer_d'];?><?php if($n['Question']['answer_true']==4){echo " <span class='input-notification success png_bg'></span>";}?><br/><br/><br/>
							<?php
							}else if($n['Question']['tipe'] == 2){
								echo '<p><strong>Jawaban :</strong>  ';
								echo $n['answer2'];
								echo '</p>';

							}?>
							</div><!--end soaltext-->

							<div class="soal-image">
								<?php
								if($n['Question']['images'] != null){ ?>
									<img style="margin:0 auto;text-align:center;" align="center" src="<?php echo $this->webroot.$n['Question']['images']; ?>" width="200" />

								<?php }?>

							</div>

							<div class="soal-video">

								<?php if($n['Question']['video'] != null):?>

									<a class="myPlayer" href="<?php echo $this->webroot.$n['Question']['video'];?>">

									</a>



								<?php endif;
								?>

								<script type="text/javascript">
								flowplayer(".myPlayer", "<?php echo $this->webroot;?>files/flowplayer-3.2.12.swf", {
								      clip:  {
								          autoPlay: false,

								      }
								  });

								</script>


							</div>

							<div class="button-pilihan-jawaban">
								<strong style="color:#000;">PILIH JAWABAN :</strong>
								<ul>
									<li><a class="aoption <?php if($n['Question']['answer_true']==1){echo 'jawabanbetul';}else{echo 'jawabansalah';}?>" href="#"></a></li>
									<li><a class="boption <?php if($n['Question']['answer_true']==2){echo 'jawabanbetul';}else{echo 'jawabansalah';}?>" href="#"></a></li>
									<li><a class="coption <?php if($n['Question']['answer_true']==3){echo 'jawabanbetul';}else{echo 'jawabansalah';}?>" href="#"></a></li>
									<li><a class="doption <?php if($n['Question']['answer_true']==4){echo 'jawabanbetul';}else{echo 'jawabansalah';}?>" href="#"></a></li>

								</ul>
							</div>
					</div><!--end soalentry-->


					<?php
					}
					?>
				</div>
			</div>
			<div class="bank-soal-footer clearfix">
				<div class="skor-quiz-sementara">
					SKOR SAMPAI SAAT INI : (<span class="holder-jawabanBetul">0</span> X 4 ) + (<span class="holder-jawabanSalah">0</span> X -1) + (<span class="holder-jawabanPas">0</span> X 0) = <span class="holder-skor">0</span>
				</div>
				<a class="button-next-quizz" id="next-btn" href="#"></a>
				<a class="button-selesai-quizz" style="display:none;" id="selesai-btn" href="<?php echo $this->webroot; ?>questions/proses/<?php echo $kelas; ?>/<?php echo $mapel; ?>/<?php echo $level; ?>/<?php echo $tipe; ?>"></a>
				<a class="button-history-quizz" style="display:none;" id="history-btn" href="#"></a>
			</div>

	</div>
</div>
