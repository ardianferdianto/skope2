<?php
	echo $html->css('jplist.core.min.css');
	echo $html->css('jplist.pagination-bundle.min.css');
	echo $html->css('book1.css');
	echo $html->css('jquery.fancybox.css');

	echo $javascript->link('jplist.core.min.js'); 
	echo $javascript->link('jplist.pagination-bundle.min.js');
	echo $javascript->link('jquery.fancybox.pack.js');
?>

<?php if(empty($pelajaranId)):?>
<nav class="navbar navbar-fixed-top" style="margin-top: 10px">
	<div class="container row center-block">

		<div class="form-group col-xs-3">
		<?php
			echo $form->select(
				'Pelajaran',
				$listPelajaran,
				null,
				array('action'=>'cari', 'class'=>'form-control filtering','id'=>'filtermapel'),
				array('all'=>'Mata pelajaran')
			)
		?>		
		</div>

		<div class="form-group col-xs-2">
		<?php
			echo $form->select(
				'Grade',
				$listGrade,
				null,
				array('action'=>'cari', 'class'=>'form-control filtering','id'=>'filterkelas'),
				array('all'=>'Kelas / Grade')
			)
		?>
		</div>

		<div class="col-xs-4 right-inner-addon ">
		<?php echo $form->create('Halaman',array('action'=>'search','id'=>'keyword','enctype'=>'multipart/form-data'));?>
			<i class="glyphicon glyphicon-search"></i>
			<input name="data[keyword]" data-keyboardname="cari" id="keywordinput" class="form-control filtering" type="text" placeholder="Pencarian...." />
		<?php echo $form->end()?>
		</div>
		
		<div style="right: 0">
			<a class="btn btn-success glyphicon glyphicon-home filtering" title="Awal" href="<?php echo $this->webroot; ?>"></a>
			<a class="btn btn-primary glyphicon glyphicon-plus filtering" title="Buat" href="<?php echo $this->webroot; ?>halamen/createnew"></a>
			<a class="btn btn-warning glyphicon glyphicon-search filtering" title="Mikroskop" href="<?php echo $this->webroot; ?>halamen/showcam"></a>
		</div>

	</div>
</nav>
<?php endif;?>

<div id="jplistpaging">
	<ul class="align list">
		<?php foreach ($listLesson as $item ): ?>
		<li class="list-item">
			<figure class='book'>
				<!-- Front -->
				<ul class='hardcover_front'>
					<li>
						<div class="coverDesign <?php echo $item['Lesson']['color'] ?>">
							<span class="ribbon">kls.<?php echo $item['Lesson']['grade_id'] ?></span>
							<h1><?php echo $item['Lesson']['author'] ?></h1>
							<p><?php echo $item['Lesson']['title'] ?></p>
						</div>
					</li>
					<li></li>
				</ul>
				<!-- Pages -->
				<ul class='page'>
					<li></li>
					<li>
						<p><?php echo $item['Lesson']['description'] ?></p>
						<div class="pageBtn">
							<a class="btn btn-primary glyphicon glyphicon-play" title="View" href="<?php echo $this->webroot; ?>lessons/view/<?php echo $item['Lesson']['id'] ?>"></a>
							<a class="btn btn-warning glyphicon glyphicon-edit" title="Edit" href="<?php echo $this->webroot; ?>halamen/write/<?php echo $item['Lesson']['id'] ?>"></a>
							<a class="btn btn-danger glyphicon glyphicon-remove-sign" title="Delete" href="<?php echo $this->webroot; ?>lessons/delete/<?php echo $item['Lesson']['id'] ?>"></a>
							<a class="btn btn-info glyphicon glyphicon-download-alt" title="Download" data-donlod="<?php echo $item['Lesson']['id'] ?>" href="#"></a>
						</div>
					</li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
				<!-- Back -->
				<ul class='hardcover_back'>
					<li></li>
					<li></li>
				</ul>
				<!-- Spinning -->
				<ul class='book_spine'>
					<li></li>
					<li></li>
				</ul>
			</figure>
		</li>
		<?php endforeach;?>
	</ul>

	<!-- <nav style="display: inline-block"> -->
	<!-- panel -->
	<div class="jplist-panel"  style="display: inline-block">
		<div 
		   class="jplist-pagination" 
		   data-control-type="pagination" 
		   data-control-name="paging" 
		   data-control-action="paging"
		   data-items-per-page="6"
		   data-control-animate-to-top="true">
		</div>
	</div>
	<!-- </nav> -->
</div>

<script type="text/javascript">
	$('#jplistpaging').jplist({				
		itemsBox: '.list' 
		,itemPath: '.list-item' 
		,panelPath: '.jplist-panel'	
	});

	$("#filtermapel").on("change",function(e){
		var alamatmapel=$("#filtermapel").val();
		var alamatkelas=$("#filterkelas").val();
		//console.log(alamat);
		console.log(alamatkelas);
		console.log(alamatmapel);
		$('.align').html('<h5>Mencari....</h5>')
		$.ajax({
			url: "<?php echo $this->webroot; ?>halamen/cari/"+alamatmapel+"/"+alamatkelas,
			dataType: 'html',
			success: function(result){
				$('#jplistpaging').html(result);
				$('.align li').hide();
				$('.align li').fadeIn();
			}
		});
		$("#keywordinput").val('');
		event.preventDefault();	
		//return false;
	});

	$("#filterkelas").on("change",function(e){

		var alamatkelas=$("#filterkelas").val();
		var alamatmapel=$("#filtermapel").val();
		console.log(alamatkelas);
		
		$('.align').html('<h5>Mencari....</h5>')
		$.ajax({
			url: "<?php echo $this->webroot; ?>halamen/cari/"+alamatmapel+"/"+alamatkelas,
			dataType: 'html',
			success: function(result){
				$('#jplistpaging').html(result);
				$('.align li').hide();
				$('.align li').fadeIn();
			}
		});
		$("#keywordinput").val('');
		event.preventDefault();
		//return false;
	})

	$( "#keyword" ).submit(function( event ) {

		var keyword=$("#keywordinput").val();
		var keywordsent = {keyword_string:keyword};
		$('.align').html('<h5>Mencari....</h5>')
		$.ajax({
			url: "<?php echo $this->webroot; ?>halamen/search/",
			data: keywordsent,
			dataType: 'html',
			success: function(result){
				$('#jplistpaging').html(result);
				$('.align li').hide();
				$('.align li').fadeIn();
				$('#jplistpaging').jplist({				
					itemsBox: '.list' 
					,itemPath: '.list-item' 
					,panelPath: '.jplist-panel'	
				});
			}
		});
		$("#filtermapel").val('all');
		$("#filterkelas").val('all');
  		//alert( "Handler for .submit() called." );
  		event.preventDefault();
	});
	$("#jplistpaging").on("click",'.btn.btn-info.glyphicon.glyphicon-download-alt',function(){
		var lesid=$(this).data("donlod");
		$('#jplistpaging').html('<h3>Generating download link....</h3>')
		$.ajax({
			url: "<?php echo $this->webroot; ?>halamen/download/"+lesid,
			dataType: 'html',
			success: function(result){
				$('#jplistpaging').html(result);
				$('#jplistpaging').hide();
				$('#jplistpaging').fadeIn();
			}
		});
	});
</script>