
<div id="edit_ebooks">
<div id="edit_ebooks-wrapper">
<div class="loader loaderform" style="display:none;">
    <img src="<?php echo $this->webroot;?>images/rotite-30-29.png" width="928" height="29" style="position: absolute; display: block; overflow: hidden; left: 0px; top: 0px; margin: 0px; padding: 0px; max-width: none; max-height: none; border: none; line-height: 1; background-color: transparent; -webkit-backface-visibility: hidden; -webkit-user-select: none;">
    
</div>
<br/>
<p class="statusload loaderformstatus"> Memproses data, mohon menunggu </p>

	<?php echo $form->create('Ebook',array('action'=>'edit','enctype'=>'multipart/form-data'));?>
		<fieldset>
			<div style="float:left;width:300px;">
			<?php
			echo $form->input('id');
			echo '<p>';
			echo '<label>Category Ebook</label>';
			echo $form->select('category_id',$listCategory,null);
			echo '</p>';
			?>


		<p>
		<?php
		echo $form->input('title',array('class'=>'text-input large-input','label'=>'Judul Buku'));
		
		?>
		
		</p>


		
		<p>

		<?php
		echo $form->input('pengarang',array('class'=>'text-input normal-input','label'=>'Pengarang'));
		
		?>
		<p>

		<?php
		echo $form->input('penerbit',array('class'=>'text-input normal-input','label'=>'Penerbit'));
		
		?>
		
		</p>
		<p>
			<?php echo $form->input('jumlahhalaman',array('class'=>'text-input normal-input','ebookel'=>'Jumlah halaman'));	?>
		</p>
		
		<p>
			<?php echo $form->year('tahunBerdiri', 1945, 2015, null, array('class'=>'year-set'), 'Pilih Tahun');	?>
			
		</p>
		<?php
		echo $form->input('details',array('label'=>'Resensi'));
		echo $form->input('cover',array('type'=>'hidden','value'=>$ebook['Ebook']['cover']));
		?>
		
		
		
	 	
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
            alert(responsesText.flashMessage);
        	$(".loaderformstatus").hide();
        	$(".loaderform").hide();
        	$.fancybox.close();

        	//process
        	var booktoresponse = $('#bookshelf_'+responsesText.idtodelete);
        	
        	
        	$(booktoresponse).find('div.book').attr('data-image',responsesText.coverbg);

        	$(booktoresponse).find('div.book').append('<style>#bookshelf_'+responsesText.idtodelete+' .book .cover::before{background: -webkit-linear-gradient(left, transparent 0%, rgba(0, 0, 0, 0.01) 1%, rgba(0, 0, 0, 0.1) 50%, transparent 100%), url("<?php echo $this->webroot?>'+responsesText.coverbg+'"), #009bdb;background: linear-gradient(to right, transparent 0%, rgba(0, 0, 0, 0.01) 1%, rgba(0, 0, 0, 0.1) 50%, transparent 100%), url("<?php echo $this->webroot?>'+responsesText.coverbg+'"), #009bdb;background-size:160px 100px;}</style>');
        	$(booktoresponse).find('h2#judulbuku').text(responsesText.title);
        	$(booktoresponse).find('span#pengarangbuku').text(responsesText.pengarang);
        	$(booktoresponse).find('li#detailbuku').text(responsesText.details);
        	$(booktoresponse).find('.front').css({
        		'background':'url(<?php echo $this->webroot?>'+responsesText.coverbg+')',
        		'background-size':'80px 99px'
        	});

        	$(booktoresponse).find('li.buttonlist > a.icon-download').attr('href','<?php echo $this->webroot?>ebooks/download/'+responsesText.filelocation);
        	$(booktoresponse).find('li.buttonlist > a.viewebook').attr('href','<?php echo $this->webroot?>files/ebooks/'+responsesText.filelocation);
        	$(booktoresponse).removeClass('details-open');
			$(booktoresponse).find('li.buttonlist').fadeOut();
        	
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
$('#EbookEditForm').on('submit', function(e) {
    e.preventDefault(); // avoids calling preview.php
    // submit the form via ajax
    $("#EbookEditForm").fadeOut();
    //$.fancybox.resize();
    $(".loaderformstatus").fadeIn();
    $(".loaderform").fadeIn();

    
    $(this).ajaxSubmit(options3);
    

    return false;
});

})();       
</script>
