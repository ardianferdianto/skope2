<div class="questions form">
	<h2><?php __('Form Penambahan Pertanyaan');?></h2>
	<p>
	Silahkan isi pertanyaan yang ingin anda masukkan di kuis ini
	</p>
	<div class="clear"></div> 
	<div class="content-box"><!-- Start Content Box -->
		
		<div class="content-box-header">
			
			<h3>From Penambahan Pertanyaan</h3>
			
						
			<div class="clear"></div>
			
		</div> <!-- End .content-box-header -->
		
		<div class="content-box-content">
			<?php echo $form->create('Question',array('action'=>'add/'.$questionId,'enctype'=>'multipart/form-data'));?>
				
				<script>
					jQuery(document).ready(function(){ 
					    jQuery("input[name$='data[Question][tipe]']").click(function() {
					        var test = jQuery(this).val();
							if(test == "1"){
					        	jQuery("#opt1").show();
								jQuery("#opt2").hide();
								
							}else{
								jQuery("#opt2").show();
								jQuery("#opt1").hide();
								
							}
					    }); 
					});
					
				</script>
				<style type="text/css">
				    .desc { display: none; }
				</style>
				
				<p style="float:left;display:inline-block">

				<label><label>Pilih jenis Soal</label></label>
				<?php
				$jenisSoal=array('1'=>'Pilihan Ganda','2'=>'Uraian');
				$attributes=array('legend'=>false,'label'=>false,'class'=>'jenis-asset');
				echo $form->radio('tipe',$jenisSoal,$attributes);
				echo $form->hidden('Question.kelas',array('value'=>$kelas));
				echo $form->hidden('Question.pelajaran_id',array('value'=>$matpelId));
				echo $form->hidden('Question.quizzId',array('value'=>$questionId));
				echo $form->hidden('Question.type',array('value'=>$type));
				
				?>
				</p>
				<?php
				echo '<div id="currentQuestOpt" style="float:left;margin-left:30px;margin-top:10px;">';
				echo '<span><i>Atau</i></span><br/><br/>';
				echo $html->link(__('Pilih dari soal yang sudah ada', true), array('controller' => 'questions','action' => 'current_add',$questionId,$type,$matpelId,$kelas),array('class'=>'button'));
				echo '</div>'
				?>
				<div class="clear"></div>
				<hr></hr>
				<div id="opt1" class="desc">
					<h5>Pilihan Ganda</h5>
					<fieldset>

					<?php
						
						
						echo '<p>';
						echo'<label>Tingkat Kesulitan:</label>';
						$levels = array(1=>'Mudah',2=>'Normal',3=>'Sulit',4=>'Sangat Sulit');
						echo $form->input('level1', array('label'=>false,'class'=>'text-input small-input','options' => $levels, 'empty' => '(Pilih Tingkat Kesulitan)'));

						echo '</p>';
						echo '<p>';
						
						echo'<label>Bobot skor</label>';
						echo $form->input('Question.point1',array('label'=>false));
						echo '</p>';
						
						echo '<p>';
						echo'<label>Pertanyaan</label>';
						echo $form->input('Question.question1',array('label'=>false,'type'=>'textarea'));
						echo '</p>';
						echo '<p>';
						echo'<label>Masukkan gambar jika ada</label>';

						echo $form->input('File1.image', array('label'=>false, 'type'=>'file'));
						echo '</p>';
						echo '<p>';
						echo'<label>Masukkan video jika ada</label>';

						echo $form->input('File3.image', array('label'=>false, 'type'=>'file'));
						echo '</p>';
						echo '<div class="divider"></div>';
						echo '<h5>Sekarang silahkan masukkan jawaban, dan checklist jawaban yang benar, jawaban yang benar hanya diperbolehkan satu jawaban</h5>';
						echo '<p>';
						echo $form->input('Answer.0.details', array('label'=>'Jawaban A','class'=>'text-input small-input'));

						echo $form->checkbox('Answer.0.true').'Ceklist jika jawaban A benar';
						echo '</p>';
						echo '<p>';
						echo $form->input('Answer.1.details', array('label'=>'Jawaban B','class'=>'text-input small-input'));
						echo $form->checkbox('Answer.1.true').'Ceklist jika jawaban B benar';
						echo '</p>';
						echo '<p>';
						echo $form->input('Answer.2.details', array('label'=>'Jawaban C','class'=>'text-input small-input'));
						echo $form->checkbox('Answer.2.true').'Ceklist jika jawaban C benar';
						echo '</p>';
						echo '<p>';
						echo $form->input('Answer.3.details', array('label'=>'Jawaban D','class'=>'text-input small-input'));
						echo $form->checkbox('Answer.3.true').'Ceklist jika jawaban D benar';
						echo '</p>';
					?>

					</fieldset>
					
					
				</div>
				<div id="opt2" class="desc">
					<h5>Uraian</h5>
					<fieldset>

					<?php
						
						
						echo '<p>';
						echo'<label>Tingkat Kesulitan:</label>';
						$levels = array(1=>'Mudah',2=>'Normal',3=>'Sulit',4=>'Sangat Sulit');
						echo $form->input('level2', array('label'=>false,'class'=>'text-input small-input','options' => $levels, 'empty' => '(Pilih Tingkat Kesulitan)'));

						echo '</p>';
						echo'<label>Bobot skor</label>';
						echo $form->input('Question.point2',array('label'=>false));
						echo '</p>';
						echo '<p>';
						echo'<label>Pertanyaan</label>';
						echo $form->input('Question.question2',array('label'=>false,'type'=>'textarea'));
						echo '</p>';
						echo '<p>';
						echo'<label>Masukkan gambar jika ada</label>';

						echo $form->input('File2.image', array('label'=>false, 'type'=>'file'));
						echo '</p>';
						echo '<p>';
						echo'<label>Masukkan video jika ada</label>';

						echo $form->input('File4.image', array('label'=>false, 'type'=>'file'));
						echo '</p>';
						
						

						echo '<div class="divider"></div>';
						echo '<h5>Sekarang silahkan masukkan jawaban uraian,</h5>';
						echo '<p>';
						echo $form->input('Question.answer2',array('label'=>'Jawaban Uraian'));
						echo '</p>';
					?>

					</fieldset>
				</div>
			<?php echo $form->end('Submit');?>
			
		</div>
	</div>
</div>


<div class="actions">
	<?php echo $html->link(__('Kembali', true), array('action' => 'home'),array('class'=>'button'));?>
</div>
