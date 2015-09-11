<div class="container">
	<div class="bb-custom-wrapper">
		
		<div id="bb-bookblock" class="bb-bookblock">
			<div class="bb-item">
				<div class="bb-custom-firstpage">
					<h1>TRYOUT #<?php echo $quizz['Quizz']['kode'];?><span>Selamat datang di halaman tryout</span></h1>	
					
					<p></p>
				</div>
				<div class="bb-custom-side">
					<p>Selamat datang di halaman tryout. anda akan melakukan test untuk tryout:<br/><br/>
						Kode : <?php echo $quizz['Quizz']['kode'];?><br/>
						Mata Pelajaran : <?php echo $quizz['Pelajaran']['nama'];?><br/>
						Banyak Soal : <?php $banyakSoal = count($quizz['Question']); echo $banyakSoal;?><br/><br/>
						Tekan lanjut untuk mulai mengerjakan
					</p>
				</div>
			</div>

			<?php
			$no = 0; 
			foreach ($quizz['Question'] as $n): 
			$no++;
			?>
			<div class="bb-item <?php echo 'setsoal_'.$no;?>">
				<div class="bb-custom-side">
					
					<p style="margin-top:-50px;"><?php echo $no.'. '.$n['question'];?></p>
					
					<div style="width:100%;display:block;margin:0 auto;text-align:center;padding:8%;margin-top:-200px;">
						
					<?php
					if($n['images'] != null): ?>
						<div style="width:48%;display:block;float:left;background:#eeeeee;padding:10px;">
						<img style="margin:0 auto;text-align:center;" align="center" src="<?php echo $this->webroot.$n['images']; ?>" width="120" />
						</div>
					<?php endif;?>
					

						<?php if($n['video'] != null):?>

						<div style="width:48%;display:block;float:left;background:#eeeeee;margin:0 auto;text-align:center;margin-left:4%;padding:20px 25px;">
						<div id="question_videoid_<?php echo $n['id'];?>" class="myPlayer" style="width:150px;height:100px;float:left;margin-left:30px;">
					    
						</div>
						</div>

							<script type="text/javascript">

								jwplayer("question_videoid_<?php echo $n['id'];?>").setup({
						            'id': 'question_videoid_<?php echo $n['id'];?>',
						            'width': '200',
						            'height': '140px',
						            'aboutlink': 'http://basedidea.com',
						            'autostart':false,
						            //'skin': 'skins/five.xml',
						            'image':'<?php echo $this->webroot;?>images/vid.png',
						            'file': '<?php echo $this->webroot.$n['video'];?>',
						        
						        });
							</script>
							
						<?php endif;
						?>
					
					
					</div>
					
				</div>
				<div class="bb-custom-side jawaban">
					<span style="position:absolute;top:25px;left:100px;color:#c2c2c2;"> PILIH JAWABAN :</span>
					<?php
					if ($n['tipe'] == 1){
						
						?>
						<?php 

						if($n['answer_true']==1){
							echo "<p><span class='buttonjawaban jawabanbetul'>a</span>&nbsp;&nbsp;".$n['answer_a'];
						}else{
							echo "<p><span class='buttonjawaban jawabansalah'>a</span>&nbsp;&nbsp;".$n['answer_a'];
						}
						?>
						<br/><br/>
						
						<?php 

						if($n['answer_true']==2){
							echo "<span class='buttonjawaban jawabanbetul'>b</span> &nbsp;&nbsp;".$n['answer_b'];
						}else{
							echo "<span class='buttonjawaban jawabansalah'>b</span> &nbsp;&nbsp;".$n['answer_b'];
						}
						?>

						<br/><br/>

						<?php 
						if($n['answer_true']==3){
							echo "<span class='buttonjawaban jawabanbetul'>c</span> &nbsp;&nbsp;".$n['answer_c'];
						}else{
							echo "<span class='buttonjawaban jawabansalah'>c</span> &nbsp;&nbsp;".$n['answer_c'];
						}
						?>

						<br/><br/>
						<?php 
						if($n['answer_true']==4){
							echo "<span class='buttonjawaban jawabanbetul'>d</span> &nbsp;&nbsp;".$n['answer_d'];
						}else{
							echo "<span class='buttonjawaban jawabansalah'>d</span> &nbsp;&nbsp;".$n['answer_d'];
						}

						
						?>
						<br/><br/>
					<?php	
					}else if($n['tipe'] == 2){
						//echo '<p><strong>Jawaban :</strong>  ';
						//echo $n['answer2'];
						//echo '</p>';
						echo '______________________________________________________________________________';
						
					}?>
					
				</div>

			</div>

			<?php endforeach;?>


			<div class="bb-item">
				<div class="bb-custom-firstpage">
					<h1>Nilai anda : <strong id="countskor">8</strong><span>nilai dalam mengerjakan seluruh set soal</span></h1>	
					<p>
						Jawaban Benar : <span id="countjawabanbenar">0</span><br/>
						Jawaban Salah  : <span id="countjawabansalah">0</span><br/>
					</p>
				</div>
				<div class="bb-custom-side">
					
				</div>
			</div>

		
			
		</div>

		<nav>
			<!--<a id="bb-nav-first" href="#" class="bb-custom-icon bb-custom-icon-first" >First page</a>
			<a id="bb-nav-prev" href="#" class="bb-custom-icon bb-custom-icon-arrow-left">Previous</a>-->
			<a id="lanjut" href="#" class="bb-custom-icon bb-custom-icon-arrow-right" data-modal="modal-1"> Lanjut</a>
			<!--<a id="bb-nav-last" href="#" class="bb-custom-icon bb-custom-icon-last">Last page</a>-->
		</nav>

		<div class="md-modal md-effect-1" id="modal-1">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<!--<p>Penjelasan:<br/>
					ini adalah penjelasan </p>-->
					<br/>
					<br/>
					<button class="md-close">Lanjutkan soal</button>
				</div>
			</div>
		</div>

		<div class="md-overlay"></div><!-- the overlay element -->

	</div>

</div><!-- /container -->


<?php echo $javascript->link('/bookblock/js/jquerypp.custom.js'); ?>
<?php echo $javascript->link('/bookblock/js/jquery.bookblock.js'); ?>
<?php echo $javascript->link('/bookblock/js/classie.js'); ?>
<?php echo $javascript->link('/bookblock/js/modalEffects.js'); ?>

<script>
	var content = $('.md-content');
	var titlemodal = $('.md-content h3');
	var overlay = $('.md-overlay');

	$( document ).on( "click", '.buttonjawaban', function(e) {
			$('.buttonjawaban').removeClass('selected');
			$(this).addClass('selected');
			content.removeClass('true');
			content.removeClass('false');

			overlay.removeClass('overlaytrue');
			overlay.removeClass('overlayfalse');

			titlemodal.text('');

			if($(this).hasClass('jawabanbetul')){
				content.addClass('true');
				overlay.addClass('overlaytrue');
				titlemodal.text('BENAR!');

			}else if($(this).hasClass('jawabansalah')){
				content.addClass('false');
				overlay.addClass('overlayfalse');
				titlemodal.text('SALAH!');
			}else{
				content.addClass('');
			}
	});

	$('#lanjut').addClass('intro');
	
	var Page = (function() {
		
		var config = {
				$bookBlock : $( '#bb-bookblock' ),
				$navNext : $( '#bb-nav-next' ),
				$navPrev : $( '#bb-nav-prev' ),
				$navFirst : $( '#bb-nav-first' ),
				$navLast : $( '#bb-nav-last' )
			},
			init = function() {
				config.$bookBlock.bookblock( {
					speed : 1000,
					shadowSides : 0.8,
					shadowFlip : 0.4
				} );
				initEvents();
			},
			initEvents = function() {
				
				var $slides = config.$bookBlock.children();

				// add navigation events
				config.$navNext.on( 'click touchstart', function() {
					config.$bookBlock.bookblock( 'next' );
					return false;
				} );

				config.$navPrev.on( 'click touchstart', function() {
					config.$bookBlock.bookblock( 'prev' );
					return false;
				} );

				config.$navFirst.on( 'click touchstart', function() {
					config.$bookBlock.bookblock( 'first' );
					return false;
				} );

				config.$navLast.on( 'click touchstart', function() {
					config.$bookBlock.bookblock( 'last' );
					return false;
				} );
				
				// add swipe events
				$slides.on( {
					'swipeleft' : function( event ) {
						config.$bookBlock.bookblock( 'next' );
						return false;
					},
					'swiperight' : function( event ) {
						config.$bookBlock.bookblock( 'prev' );
						return false;
					}
				} );

				// add keyboard events
				$( document ).keydown( function(e) {
					var keyCode = e.keyCode || e.which,
						arrow = {
							left : 37,
							up : 38,
							right : 39,
							down : 40
						};

					switch (keyCode) {
						case arrow.left:
							config.$bookBlock.bookblock( 'prev' );
							break;
						case arrow.right:
							config.$bookBlock.bookblock( 'next' );
							break;
					}
				} );
			};

			return { init : init };

	})();
</script>
<script>
		Page.init();
</script>

<script type="text/javascript">

var jawabanYangDipilih;
var idQuestion = 1;
var noSoal = 0;
var totaljawabanbetul = 0;
var totaljawabansalah = 0;
var totaljawabanpas = 0;
var totalsoal = <?php echo count($quizz['Question']);?>;
var skor = 0;
var holdertotaljawabanbenar = $('#countjawabanbenar');
var holdertotaljawabansalah = $('#countjawabansalah');
var holderskor = $('#countskor');


var modal = $('.md-modal');


function findAswer(id){

	jawabanYangDipilih = jQuery('.setsoal_'+id+' .jawaban').find('span.buttonjawaban.selected');
	jawabanYangDipilihcount = jQuery('.setsoal_'+id+' .jawaban').find('span.buttonjawaban').length;
	
	if ((jQuery('.setsoal_'+id+' .jawaban').find('span.buttonjawaban.selected').length > 0)){
		if(jawabanYangDipilih.hasClass('jawabanbetul')){
			totaljawabanbetul++;
			$('#lanjut').removeClass('setsoal_'+(id-1));
			$('#lanjut').addClass('setsoal_'+id);
			itungitung(id);
		}else if(jawabanYangDipilih.hasClass('jawabansalah')){
			totaljawabansalah++;
			$('#lanjut').removeClass('setsoal_'+(id-1));
			$('#lanjut').addClass('setsoal_'+id);
			itungitung(id);
		}else{

			
			totaljawabanpas++;
		}
	}else{
		alert('silahkan pilih jawaban terlebih dahulu')	
	}

	

	
}


function show(id){
	

}


function nextQuestion(){

	
	findAswer(noSoal);

}

function itungitung(id){
	idQuestion++;
	noSoal++;
	modal.addClass('md-show');
	
	skor = (totaljawabanbetul/totalsoal)*10;
	//jQuery('.holder-skor').html(skor);
	$(holdertotaljawabanbenar).text(totaljawabanbetul);
	$(holdertotaljawabansalah).text(totaljawabansalah);
	$(holderskor).text(skor);

	setTimeout(function() {
		if(id == totalsoal){
			$('#lanjut').text('Selesai');
			$('#lanjut').attr('href','<?php echo $this->webroot;?>quizzs');
			$('#lanjut').attr('id','dsfdf');
		}else{

		}
	},1000);
	
}





jQuery('#lanjut').click(function() {



	if($(this).hasClass('intro')){
		$( '#bb-bookblock' ).bookblock( 'next' );
		
		idQuestion++;
		noSoal++;
		$('#lanjut').removeClass('intro');
		$('#lanjut').addClass('setsoal_1');
		return false;

	}else{

		
		if(noSoal == totalsoal+1){
			//nextQuestion();
	

		}else{
			
			
			nextQuestion();

			
		}

	}
	
	

	
	

});


jQuery('.md-close').click(function() {
	modal.removeClass('md-show');
	$( '#bb-bookblock' ).bookblock( 'next' );
});

</script>