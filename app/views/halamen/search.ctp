
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