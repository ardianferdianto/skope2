<style type="text/css">
.backempty {
	position: relative;
	top: 0;
	left: 0;
	font-size: 20px;
	color: white;
	cursor: pointer;
}
</style>
<script type="text/javascript">
$(document).ready(function(){


	$('.hasTooltip').each(function() { // Notice the .each() loop, discussed below
	    $(this).qtip({
	        content: {
	            text: $(this).data('tooltip') // Use the "div" element next to this for the content
	        },

	        position: {
	        	my: 'top left',
        		at: 'right bottom',  // Position my top left..
    		}
	    });
	});

	$(".imagesoal").fancybox({
	    helpers : {
	        
	    }
	});




	<?php if( isset($status)):?>

		setTimeout(function() {
        
        	alert('<?php echo $status;?>');
        
    	},1000); 
	<?php endif;?>

	
	

});


</script>
<?php
	if($banyakSoal==0):
		echo '<p class="red">Belum ada soal untuk data yang dipilih</p><br/><br/>
		<span class="backempty" id="soalempty">&#8636; BACK</span>';
	else:
	$no = 0;
	//$choiceList = ('A','B','C','D');
	
	foreach ($questions as $n):
	$no ++;
	?>
<div id="question_id_<?php echo $n['Question']['id'];?>" class="clearfix questionentry"style="display:block;">
<div style="float:left;width:70px;">

	<?php echo $form->create('QuizzsQuestion',array('action'=>'add','id'=>'question_form_'.$n['Question']['id'],'enctype'=>'multipart/form-data'));

	echo $form->hidden('QuizzsQuestion.quizz_id',array('value'=>$quizz['Quizz']['id']));
	echo $form->hidden('QuizzsQuestion.question_id',array('value'=>$n['Question']['id']));
	echo $form->hidden('QuizzsQuestion.question_tipe',array('value'=>$n['Question']['tipe']));
	echo $form->hidden('QuizzsQuestion.question_level',array('value'=>$n['Question']['level']));
	?>
	<input type="image" src="<?php echo $this->webroot?>img/plus_alt_16x16.png" class="" style="margin-top:-10px;margin-left:-10px;">
	<?php
	echo $form->end();
	;?>

	
	&nbsp;&nbsp;&nbsp;


	<script type="text/javascript">



(function() {
    
function showResponse(responsesText, statusText, xhr, $form)  { 
    setTimeout(function() {
    	
        $("#question_form_<?php echo $n['Question']['id'];?>").show();
        
        $('#question_id_<?php echo $n['Question']['id'];?>').html(responsesText);
        
        console.log(responsesText);

    	
	},2000);
} 

var options3 = {
    //target:        '#output2',   // target element to update
    //beforeSubmit:  showRequest,  // pre-submit callback
    
    dataType:      'html',  // post-submit callback
    success:       showResponse

    	

    
};

// bind form2 using ajaxSubmit
$('#question_form_<?php echo $n['Question']['id'];?>').on('submit', function(e) {
    e.preventDefault(); // avoids calling preview.php
    // submit the form via ajax
    $('#question_id_<?php echo $n['Question']['id'];?>').html('memproses data...');
    
    $(this).ajaxSubmit(options3);
    

    return false;
});

})();     
		      
	</script>

	<?php echo $form->end();?>
</div>
<div style="float:left;">
	<div class="soal-entry clearfix">
	
			<div class="soal-text" style="width:265px">

			<?php
			echo '<h6>'.$no.'.&nbsp;&nbsp;&nbsp;&nbsp;<span class="questionitem"> '.$n['Question']['question'].'</span></h6>';

			if ($n['Question']['tipe'] == 1){
				
				?>
				<?php 
				echo '<div class="option_a_item">';
				
				echo "a. &nbsp;".$n['Question']['answer_a'];?><span class="jawabanbenar"><?php if($n['Question']['answer_true']==1){echo " <span class='input-notification success png_bg'></span>";}?></span><br/><br/>
				
				</div>
				
				
				<?php 
				echo '<div class="option_b_item">';
				echo "b. &nbsp;".$n['Question']['answer_b'];?><span class="jawabanbenar"><?php if($n['Question']['answer_true']==2){echo " <span class='input-notification success png_bg'></span>";}?></span><br/><br/>
				</div>


				<?php 
				echo '<div class="option_c_item">';
				echo "c. &nbsp;".$n['Question']['answer_c'];?><span class="jawabanbenar"><?php if($n['Question']['answer_true']==3){echo " <span class='input-notification success png_bg'></span>";}?></span><br/><br/>
				</div>

				<?php 
				echo '<div class="option_d_item">';
				echo "d. &nbsp;".$n['Question']['answer_d'];?><dspanclass="jawabanbenar"><?php if($n['Question']['answer_true']==4){echo " <span class='input-notification success png_bg'></span>";}?></dspan<br/><br/>
				</div>

			<?php	
			}else if($n['Question']['tipe'] == 2){
				echo '<p><strong>Jawaban :</strong>  ';
				echo '<span class="option_essay_item">'.$n['Question']['answer2'].'</span>';
				echo '</p>';
				
			}?>
			</div><!--end soaltext-->

			<div class="soal-image" style="width:150px">
				<?php
				if($n['Question']['images'] != null){ ?>
					<a class="imagesoal" href="<?php echo $this->webroot.$n['Question']['images']; ?>"><img class="option_image_item" style="margin:0 auto;text-align:center;" align="center" src="<?php echo $this->webroot.$n['Question']['images']; ?>" width="140" /> </a>
				
				<?php }?>

			</div>

			<div class="soal-video" style="width:195px;">
			
				<?php if($n['Question']['video'] != null):?>
					
					<div id="question_videoid_<?php echo $n['Question']['id'];?>" class="myPlayer" style="width:180px;height:150px;float:right;" href="<?php echo $this->webroot.$n['Question']['video'];?>">
					    
					</div>

					<script type="text/javascript">

						jwplayer("question_videoid_<?php echo $n['Question']['id'];?>").setup({
				            'id': 'question_videoid_<?php echo $n['Question']['id'];?>',
				            'width': '195',
				            'height': '160',
				            'aboutlink': 'http://basedidea.com',
				            'autostart':false,
				            //'skin': 'skins/five.xml',
				            'image':'<?php echo $this->webroot;?>images/vid.png',
				            'file': '<?php echo $this->webroot.$n['Question']['video'];?>',
				        
				        });
					</script>
				<?php endif;
				?>

				
			</div>
	</div><!--end soalentry-->
	
</div>
</div>
<div class="clear"></div>
<?php
endforeach;

endif;?>


