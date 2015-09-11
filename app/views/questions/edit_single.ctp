
<?php echo $javascript->link('jwplayer.js'); ?>
<script type="text/javascript">jwplayer.key="J0+IRhB3+LyO0fw2I+2qT2Df8HVdPabwmJVeDWFFoplmVxFF5uw6ZlnPNXo=";


</script>

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

		<?php echo $form->create('Question',array('action'=>'edit_single','enctype'=>'multipart/form-data'));?>

		<h2>Rubah Soal</h2>
		<fieldset>
	 		
		<?php

		echo $form->input('Question.kelas',array('type'=>'hidden','value'=>$kelas));
		echo $form->input('Question.mapel',array('type'=>'hidden','value'=>$mapel));
		echo $form->input('Question.level',array('type'=>'hidden','value'=>$level));
		echo $form->input('Question.tipe',array('type'=>'hidden','value'=>$tipe));
		?>
		<p>

		<label>Target</label>
		
		<?php
		$jenisSoal=array('1'=>'Quizz','2'=>'Ujian');
		$attributes=array('legend'=>false,'label'=>false,'class'=>'radio-inline');
		echo $form->radio('target',$jenisSoal,$attributes);
		?>

		</p>
		<?php	
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
		if($question['Question']['video'] != null || !empty ($question['Question']['video'])){?>
		<br/>
		<div id="editquestion_videoid_<?php echo $question['Question']['id'];?>" class="myPlayer" style="width:180px;height:150px;float:right;" href="<?php echo $this->webroot.$question['Question']['video'];?>">
					    
		</div>

		<script type="text/javascript">

			jwplayer("editquestion_videoid_<?php echo $question['Question']['id'];?>").setup({
	            'id': 'question_videoid_<?php echo $question['Question']['id'];?>',
	            'width': '200',
	            'height': '150',
	            'aboutlink': 'http://basedidea.com',
	            'autostart':false,
	            //'skin': 'skins/five.xml',
	            'image':'<?php echo $this->webroot;?>images/vid.png',
	            'file': '<?php echo $this->webroot.$question['Question']['video'];?>',
	        
	        });
		</script>
		
		<?php 
		
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

		if($this->data['Question']['tipe']==1) :
			
			echo '<div class="divider"></div>';
			echo '<label>Jawaban</label>';
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

			echo '<p>';
			
			echo '<label>Pilih Jawaban Benar</label>';
			$options = array(1=>'A',2=>'B',3=>'C',4=>'D');
			$attributes=array('legend'=>false,'label'=>false,'class'=>'radio-inline');
			echo $form->radio('Question.answer_true',$options,$attributes);

			echo '</p>';

		else:
		?>
			<p>Jawaban : <?php echo $form->input('Question.answer2', array('label'=>'Jawaban Uraian','type'=>'textarea'));?></p>
			<?php endif;?>
			
		
		</fieldset>
		<div class="submit">
            <button class="btn btn-2 btn-2g" type="submit" id="QuestionAddSingleFormButton">Update</button>
        </div>
        <br/>
        <br/>
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
    
    if(responsesText.status == "true"){

    	setTimeout(function() {
        	$(".loaderformstatus").hide();
        	$(".loaderform").hide();
        	$.fancybox.close();

        	//process
        	var itemtrue = responsesText.answer_true;
        	var itemtoresponse = $('#question_id_'+responsesText.idtoResponse);

        	var nomorsoal = responsesText.idtoResponse;
        	
        	$(itemtoresponse).find('.questionitem').html(responsesText.question);

			$(itemtoresponse).find('.option_a_item').html('a.&nbsp;&nbsp;'+responsesText.answer_a+'&nbsp <span class="jawabanbenar"></span><br/><br/>');

        	$(itemtoresponse).find('.option_b_item').html('b.&nbsp;&nbsp;'+responsesText.answer_b+'&nbsp <span class="jawabanbenar"></span><br/><br/>');

        	$(itemtoresponse).find('.option_c_item').html('c.&nbsp;&nbsp;'+responsesText.answer_c+'&nbsp <span class="jawabanbenar"></span><br/><br/>');

        	$(itemtoresponse).find('.option_d_item').html('d.&nbsp;&nbsp;'+responsesText.answer_d+'&nbsp <span class="jawabanbenar"></span><br/><br/>');

        	if (itemtrue == 1 ) {

        		$("#question_id_"+nomorsoal+" .option_a_item .jawabanbenar").append('<span class="input-notification success png_bg"></span>');
        	}
        	else if(itemtrue == 2){
        		$("#question_id_"+nomorsoal+" .option_b_item .jawabanbenar").append('&nbsp <span class="input-notification success png_bg"></span>');
        	}
        	else if(itemtrue == 3){
        		$("#question_id_"+nomorsoal+" .option_c_item .jawabanbenar").append('&nbsp <span class="input-notification success png_bg"></span>');
        	}
        	else if(itemtrue == 4){
        		$("#question_id_"+nomorsoal+" .option_d_item .jawabanbenar").append('&nbsp <span class="input-notification success png_bg"></span>');
        	}else{

        	};

        	var images =responsesText.images;

        	if ((responsesText.images != null) && (responsesText.images != '')){
        		$("#question_id_"+nomorsoal+" .soal-image").html('');
        		$("#question_id_"+nomorsoal+" .soal-image").append('<a class="imagesoal" href="'+images+'"><img class="option_image_item" style="margin:0 auto;text-align:center;" align="center" src="'+images+'" width="140" /> </a>')
        	};


        	var video =responsesText.video;

        	if ((responsesText.video != null) && (responsesText.video != '')){
        		$("#question_id_"+nomorsoal+" .soal-video").html('');
        		$("#question_id_"+nomorsoal+" .soal-video").append('<div id="question_videoid_'+nomorsoal+'" class="myPlayer" style="width:180px;height:150px;float:right;" href="'+video+'"></div>')

        		jwplayer('question_videoid_'+nomorsoal).setup({
		            'id': 'question_videoid_'+nomorsoal,
		            'width': '200',
		            'height': '150',
		            'aboutlink': 'http://basedidea.com',
		            'autostart':false,
		            //'skin': 'skins/five.xml',
		            'image':'<?php echo $this->webroot;?>images/vid.png',
		            'file': video,
		        
		        });

        	};

        	$('#question_id_'+nomorsoal+' .option_essay_item').text(responsesText.answer_uraian);




        	$(itemtoresponse).find('.questiontype').removeClass('icon-quizz');
        	$(itemtoresponse).find('.questiontype').removeClass('icon-ujian');

        	if(responsesText.tipe == 1){
        		$(itemtoresponse).find('.questiontype').addClass('icon-quizz');
        	}else{
        		$(itemtoresponse).find('.questiontype').addClass('icon-ujian');
        	}
        	
        	alert(responsesText.flashMessage);

        	console.log(responsesText);
        	
    	},4000);
    }else{

    }
    
    
} 

var options3 = {
    //target:        '#output2',   // target element to update
    //beforeSubmit:  showRequest,  // pre-submit callback
    
    dataType:      'json',  // post-submit callback
    success:       showResponse

    	

    
};

// bind form2 using ajaxSubmit
$('#QuestionEditSingleForm').on('submit', function(e) {
    e.preventDefault(); // avoids calling preview.php
    // submit the form via ajax
    $("#QuestionEditSingleForm").fadeOut();
    //$.fancybox.resize();
    $(".loaderformstatus").fadeIn();
    $(".loaderform").fadeIn();

    
    $(this).ajaxSubmit(options3);
    

    return false;
});

})();       
</script>


