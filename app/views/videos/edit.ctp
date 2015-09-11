
<div id="edit_ebooks">
<div id="edit_ebooks-wrapper">
<div class="loader loaderform" style="display:none;">
    <img src="<?php echo $this->webroot;?>images/rotite-30-29.png" width="928" height="29" style="position: absolute; display: block; overflow: hidden; left: 0px; top: 0px; margin: 0px; padding: 0px; max-width: none; max-height: none; border: none; line-height: 1; background-color: transparent; -webkit-backface-visibility: hidden; -webkit-user-select: none;">
    
</div>
<br/>
<p class="statusload loaderformstatus"> Memproses data, mohon menunggu </p>

	<?php echo $form->create('Video',array('action'=>'edit','enctype'=>'multipart/form-data'));?>
		<fieldset>
			<div style="float:left;width:300px;">
			<?php
			echo $form->input('id');
			echo '<p>';
			echo '<label>Category Video</label>';
			echo $form->select('category_id',$listCategory,null);
			echo '</p>';
			?>


		<p>
		<?php
		echo $form->input('title',array('class'=>'text-input large-input','label'=>'Judul Video'));
		
		?>
		
		</p>


		
		<p>

		<?php
		echo $form->input('sutradara',array('class'=>'text-input normal-input','label'=>'Sutradara'));
		
		?>
		<p>

		<?php
		echo $form->input('produksi',array('class'=>'text-input normal-input','label'=>'Produksi'));
		
		?>
		
		</p>
		<p>
			<?php echo $form->year('tahunBerdiri', 1945, 2015, null, array('class'=>'year-set'), 'Pilih Tahun');	?>
			
		</p>
		<?php
		echo $form->input('details',array('label'=>'Resensi'));
		
		?>
		<?php
		
		echo '<p>';
		echo '<span>Cover anda sebelumnya</span><br/>';
		if($video['Video']['cover']!=null){
		$vowels = array("img/");
		$cover = str_replace($vowels, "", $video['Video']['cover']);
		echo $html->image($cover,array('width'=>'100px'));
		}else{
			echo '<p>Belum ada cover</p>';
		}

		?>
		
		<p>
		
		<?php
		echo $form->input('File.image1', array('label'=>'Ganti Cover file:', 'type'=>'file'));

		echo '</p>';
		echo '<p>';

		echo '<span>File anda sebelumnya</span><br/>';
		?>
		<p>Nama File : <strong><?php echo $video['Video']['file']; ?></strong></p>
		
		<p>
		<label>Ganti file</label>
		<?php
          echo $form->input('file', array('label'=>false, 'type'=>'file'));
		
		;?>
		</p>
		
		
	 	
		</fieldset>
		<div class="submit">
            <button class="btn btn-2 btn-2g" type="submit">Update</button>
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
    if(responsesText.status == "true"){
    	setTimeout(function() {
        	$(".loaderformstatus").hide();
        	$(".loaderform").hide();
        	$.fancybox.close();

        	//process
        	var itemtoresponse = $('#videoentry_'+responsesText.idtodelete);

        	var sutradara_text = responsesText.sutradara;
        	var produksi_text = responsesText.produksi;
        	var title_text = responsesText.title;
        	var detail_text = responsesText.details;
        	var file_location = responsesText.fileLocation;
        	var cover_image = responsesText.coverbg;

        	$(itemtoresponse).find('.videosutradara_preview').text(produksi_text);

        	$(itemtoresponse).find('.cover_video').attr('src','<?php echo $this->webroot;?>'+cover_image);

        	$(itemtoresponse).find('.videotitle_preview').text(title_text);
        	$(itemtoresponse).find('.sutradara_video_preview').text(sutradara_text);
        	
        	$(itemtoresponse).find('.details_video_preview').text(detail_text);
        	
        	$().createExcerpts('#videoentry_'+responsesText.idtodelete+' .sutradara_video_preview',25,'');
        	$().createExcerpts('#videoentry_'+responsesText.idtodelete+' .details_video_preview',60,'...');

        	$(itemtoresponse).find('li.buttonlistvideolist > a.icon-download').attr('href','<?php echo $this->webroot?>videos/download/'+file_location);
        	$(itemtoresponse).find('li.buttonlist > a.icon-play3').attr('href','<?php echo $this->webroot?>files/videos/'+file_location);
        	
        	$('.detailsvideo').fadeOut();
            $('.closedetailvideo').fadeOut();

            Cufon.replace('.menuservices li', {hover: true}); 
    		Cufon.replace('h2.cufonreplace');
        	
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
$('#VideoEditForm').on('submit', function(e) {
    e.preventDefault(); // avoids calling preview.php
    // submit the form via ajax
    $("#VideoEditForm").fadeOut();
    //$.fancybox.resize();
    $(".loaderformstatus").fadeIn();
    $(".loaderform").fadeIn();

    
    $(this).ajaxSubmit(options3);
    

    return false;
});

})();       
</script>
