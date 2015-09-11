<style type="text/css">
.radio-inline{
	margin-left: 10px;
	margin-right: 10px;
	display: inline-block;
}
</style>
<div id="edit_ebooks">
<div id="edit_ebooks-wrapper">
<div class="loader loaderform" style="display:none;">
    <img src="<?php echo $this->webroot;?>images/rotite-30-29.png" width="928" height="29" style="position: absolute; display: block; overflow: hidden; left: 0px; top: 0px; margin: 0px; padding: 0px; max-width: none; max-height: none; border: none; line-height: 1; background-color: transparent; -webkit-backface-visibility: hidden; -webkit-user-select: none;">
    
</div>
<br/>
<p class="statusload loaderformstatus"> Memproses data, mohon menunggu </p>
	
	<?php echo $form->create('Question',array('action'=>'add_single','enctype'=>'multipart/form-data'));?>

		<h2>Tambah Soal</h2>
		
		

		<?php if($tipe == 1 ):?>
		<div id="opt1" class="desc">
		
		<fieldset>
		
	 	<p>

		<label>Target</label>
		
		<?php
		$jenisSoal=array('1'=>'Quizz','2'=>'Ujian');
		$attributes=array('legend'=>false,'label'=>false,'class'=>'radio-inline');
		echo $form->radio('target',$jenisSoal,$attributes);
		?>

		</p>
		<?php
			//add hidden fields
			echo $form->input('tipe',array('type'=>'hidden','value'=>$tipe));
			echo $form->input('kelas1',array('type'=>'hidden','value'=>$kelas));

			echo $form->input('mapel',array('type'=>'hidden','value'=>$mapel));
			echo $form->input('level1',array('type'=>'hidden','value'=>$level));

			
			
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
			echo $form->input('Question.answer_a', array('label'=>'Jawaban A','class'=>'text-input small-input'));
			
			
			echo '</p>';
			echo '<p>';
			echo $form->input('Question.answer_b', array('label'=>'Jawaban B','class'=>'text-input small-input'));
			
			echo '</p>';
			echo '<p>';
			echo $form->input('Question.answer_c', array('label'=>'Jawaban C','class'=>'text-input small-input'));
			
			echo '</p>';
			echo '<p>';
			echo $form->input('Question.answer_d', array('label'=>'Jawaban D','class'=>'text-input small-input'));
			
			echo '</p>';

			
		?>


		<p>

		<label>Pilih Jawaban Benar</label>
		
		<?php
		$options = array(1=>'A',2=>'B',3=>'C',4=>'D');
		$attributes=array('legend'=>false,'label'=>false,'class'=>'radio-inline');
		echo $form->radio('Question.answer_true',$options,$attributes);
		?>

		</p>
		
		</fieldset>
		</div>
		<?php elseif ($tipe == 2 ):?>
		
		<div id="opt2" class="desc">
			<fieldset>
			
			<label>Pertanyaan untuk Ujian</label>
			<?php
				echo $form->input('target2',array('type'=>'hidden','value'=>2));
				echo $form->input('tipe',array('type'=>'hidden','value'=>$tipe));
				echo $form->input('kelas2',array('type'=>'hidden','value'=>$kelas));
				echo $form->input('mapel',array('type'=>'hidden','value'=>$mapel));
				echo $form->input('level2',array('type'=>'hidden','value'=>$level));
				
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
		<?php endif;?>

		
		<div class="submit">
            <button class="btn btn-2 btn-2g" type="submit" id="QuestionAddSingleFormButton">Submit</button>
        </div>
        <br/>
        <br/>
	<?php echo $form->end();?>
</div>
</div>




<script type="text/javascript">


(function() {
    
function showResponse(responsesText, statusText, xhr, $form)  { 
    // for normal html responses, the first argument to the success callback 
    // is the XMLHttpRequest object's responseText property 
 
    // if the ajaxSubmit method was passed an Options Object with the dataType 
    // property set to 'xml' then the first argument to the success callback 
    // is the XMLHttpRequest object's responseXML property 
 
    // if the ajaxSubmit method was passed an Options Object with the dataType 
    // property set to 'json' then the first argument to the success callback 
    // is the json data object returned by the server 
    
    	setTimeout(function() {
        	$(".statusload").hide();
	        $(".loader").hide();
	        $.fancybox.close();
	        $("#QuestionAddSingleForm").clearForm();
	        $("#QuestionAddSingleForm").show();
	        $('.box-soal').append(responsesText);

        	
    	},2000);
    
    
} 

var options3 = {
    //target:        '#output2',   // target element to update
    //beforeSubmit:  showRequest,  // pre-submit callback
    
    dataType:      'html',  // post-submit callback
    success:       showResponse

    	

    
};

// bind form2 using ajaxSubmit
$('#QuestionAddSingleForm').on('submit', function(e) {
    e.preventDefault(); // avoids calling preview.php
    // submit the form via ajax
    $("#QuestionAddSingleForm").fadeOut();
    //$.fancybox.resize();
    $(".loaderformstatus").fadeIn();
    $(".loaderform").fadeIn();

    
    $(this).ajaxSubmit(options3);
    

    return false;
});

})();       
</script>

