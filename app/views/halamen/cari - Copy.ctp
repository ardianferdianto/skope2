<div class="galleryCarusel2" style="overflow: hidden;position:relative; width:1000px;margin-left:20px;">
	<div class="arrCenter" style="width:10000px;height:400px;">
		<!--entry lessons -->
		<ul id="bk-list" class="bk-list clearfix">
			<?php foreach ($listLesson as $item): ?>
			<li class="imgSlideshow2" id="bookid_<?php echo $item['Lesson']['id']?>">
				<div class="bk-book book-1 book-<?php echo $item['Lesson']['color'];?> bk-bookdefault viewlesson" data-urldata="<?php echo $item['Lesson']['id']?>">
					<div class="bk-front">
						<div class="bk-cover">
							
							<h2>
								<span><?php echo $item['Lesson']['author']?></span>
								<span><?php echo $item['Lesson']['title']?></span>
							</h2>
							
						</div>
						<div class="bk-cover-back"></div>
					</div>
					<div class="bk-page"></div>
					<div class="bk-back">
						<p><?php echo $item['Lesson']['description']?></p>
					</div>
					<div class="bk-right"></div>
					<div class="bk-left"></div>
					<div class="bk-top"></div>
					<div class="bk-bottom"></div>
				</div>
				<div class="bk-info">
					<button class="bk-bookback">Detail</button>
					<button class="btn editlesson btn-icon-only icon-pencil2" data-lessonid="<?php echo $item['Lesson']['id']?>"></button>
					<button class="btn deletelesson btn-icon-only icon-trash" data-lessonid="<?php echo $item['Lesson']['id']?>" data-urldata="<?php echo $this->webroot;?>lessons/delete/<?php echo $item['Lesson']['id']?>"></button>
				</div>
			</li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>