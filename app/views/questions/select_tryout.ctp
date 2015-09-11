<p class="statusload loaderformstatus"> Memproses data, mohon menunggu </p>
<?php echo $form->create('Question',array('action'=>'salin_tryout','type'=>'file'));?>
<h2><?php __('Salin Soal ke Try Out');?></h2>


	<fieldset>
	<?php
	echo $form->input('kelas',array('type'=>'hidden','value'=>$kelas)); 
	echo $form->input('mapel',array('type'=>'hidden','value'=>$mapel)); 
	echo $form->input('level',array('type'=>'hidden','value'=>$level)); 
	echo $form->input('tipe',array('type'=>'hidden','value'=>$tipe)); 
	echo '<p>';
	echo $form->select('Quizz.id', $quizz, null, array('id' =>'tryout_dropdown'),array('label'=>'Pilih Kode Tryout:'));
	//$options = array('url' => array('controller'=>'quizzs','action'=>'update_quizz_select'),'update' => 'quizz_detail_info','loading'=>"Element.show('plsLoaderID')",'loaded'=>"Element.hide('plsLoaderID')");
	//echo $ajax->observeField('tryout_dropdown',$options);
	echo '</p>';		
	?>

	<div id="quizz_detail_info">

	</div>
	<br/>

	<div class="submit">
        <button class="btn btn-2 btn-2g" type="submit" id="QuestionAddSingleFormButton">Submit</button>
    </div>
    <br/>
    <br/>
    

		
	</fieldset>
<?php echo $form->end();?>





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
	        //$(".loader").hide();
	        $.fancybox.close();
	        $("#QuestionSalinTryoutForm").clearForm();
	        $("#QuestionSalinTryoutForm").show();
	        $('.box-soal').html(responsesText);

        	
    	},2000);
    
    
} 

var options3 = {
    //target:        '#output2',   // target element to update
    //beforeSubmit:  showRequest,  // pre-submit callback
    
    dataType:      'html',  // post-submit callback
    success:       showResponse

    	

    
};

// bind form2 using ajaxSubmit
$('#QuestionSalinTryoutForm').on('submit', function(e) {
    e.preventDefault(); // avoids calling preview.php
    // submit the form via ajax
    $("#QuestionSalinTryoutForm").fadeOut();
    //$.fancybox.resize();
    $(".loaderformstatus").fadeIn();
    //$(".loaderform").fadeIn();

    
	$(this).ajaxSubmit(options3);
    

    return false;
});

})();       
</script>