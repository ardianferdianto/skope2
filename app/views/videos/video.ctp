


<div id="holder-ebook">
	<ul id="menu_list_top_pembelajaran">
		<li><a class="button-pembelajaran" id="upload-btn2" href="#upload-ebook" rel="modal"></a></li>
		<li><a class="button-pembelajaran" id="home-btn" href="<?php echo $this->webroot; ?>users/home"></a></li>
	</ul>
	<h2 class="video_and_book">video & film</h2>
	<div id="menu-top-ebook">
		
	</div>
	<div class="content-ebook clearfix">
		<div class="topebook clearfix">
			<div id="category-ebook">
				<h3>Pilih Category</h3>
				<ul>
					<li><?php echo $ajax->link('Dokumenter Sejarah Indonesia
',array('controller'=>'labs', 'action' => 'find_category_video',12), array('class'=>'cat-video','update' => 'mychange' ,'escape' => false)); ?></li>
					<li><?php echo $ajax->link('IPTEK
', array('controller'=>'labs', 'action' => 'find_category_video',13), array('class'=>'cat-video','update' => 'mychange' ,'escape' => false)); ?></li>
					<li><?php echo $ajax->link('Life Skill
', array('controller'=>'labs', 'action' => 'find_category_video',14), array('class'=>'cat-video','update' => 'mychange' ,'escape' => false)); ?></li>
					<li><?php echo $ajax->link('Carachter Building
', array('controller'=>'labs', 'action' => 'find_category_video',15), array('class'=>'cat-video','update' => 'mychange' ,'escape' => false)); ?></li>
				</ul>
				<div id="video-list">
					
					<div id="mychange">
					</div>
					
				</div>
			</div>
			<div id="preview-video" class="clearfix">
				
			</div>
		</div>
		
		<div id="upload-ebook" style="display: none">
			<div class="labs form">
				<?php echo $form->create('Lab',array('enctype'=>'multipart/form-data'));?>
					<fieldset>
					<div style="float:left;width:300px;"
						<?php

						echo '<p>';
						echo '<label>Pilih Kategori</label>';
						$listTypeEbook = array(12=>'Dokumenter Sejarah Indonesia',13=>'IPTEK',14=>'Life Skill',15=>'Carachter Building');
						
						echo $form->select('type',$listTypeEbook,null);
						echo '</p>';
					?>

					<p>
					<?php
					echo $form->input('title',array('class'=>'text-input large-input','label'=>'Judul'));
					
					?>
					
					</p>
					<p>

					<?php
					echo $form->input('produksi',array('class'=>'text-input normal-input','label'=>'Produksi'));
					
					?>
					<p>

					<?php
					echo $form->input('sutradara',array('class'=>'text-input normal-input','label'=>'Sutradara'));
					
					?>
					
					</p>
					<p>
						<?php echo $form->year('tahunBerdiri', 1945, 2011, null, array('class'=>'year-set'), 'Pilih Tahun');	?>
						
					</p>
					<?php
					echo $form->input('details',array('label'=>'Resensi'));
					
					?>
					<p>
					<?php
					echo $form->input('File.image1', array('label'=>'Cover file:', 'type'=>'file'));
					echo '</p>';?>
					<p>
					<label>Browse file</label>
					<?php
					echo $form->input('file', array('label'=>false, 'type'=>'file'));
					
					echo '</p>';?>
					
					
				 	
					</fieldset>
				<?php echo $form->end('Submit');?>
			</div>
		</div><!--end labs upload div-->
	</div>

</div>
<!--<div class="labs index">

<h2>Tab Direktori E-Book</h2>
<p>
Silahkan pilih tipe Ebook
</p>
<br/>
<br/>
<?php if($groupAuth!=3):?>
<a class="shortcut-button-small" href="<?php echo $this->webroot; ?>labs/add" id="addData_left">
	<span>
		<img src="<?php echo $this->webroot; ?>resources/images/icons/paper_content_pencil_48.png" alt="icon"><br>
		Buat Data Baru
	</span>
</a>
<?php endif;?>

<hr/>
<br/>

<a class="shortcut-button-lesson" href="../labs/ebook/">
	<span>
		<img src="<?php echo $this->webroot; ?>resources/images/icons/add_bk_128x128x32.png" alt="icon"><br>
		BSE ( Buku Sekolah Elektronik)
	</span>
</a>

<a class="shortcut-button-lesson" href="../labs/carachter/">
	<span>
		<img src="<?php echo $this->webroot; ?>resources/images/icons/Positive_256x256.png" alt="icon"><br>
		Life Skill
	</span>
</a>

<a class="shortcut-button-lesson" href="../labs/lifeskill/">
	<span>
		<img src="<?php echo $this->webroot; ?>resources/images/icons/Key_256x256.png" alt="icon"><br>
		Carachter Building
	</span>
</a>

<a class="shortcut-button-lesson" href="../subjects/other/">
	<span>
		<img src="<?php echo $this->webroot; ?>resources/images/icons/forum.png" alt="icon"><br>
		Lain-lainya
	</span>
</a>-->






