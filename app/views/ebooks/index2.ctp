<?php
echo $javascript->link('/resources/scripts/contentflow.js'); ?>
<script tyle="text/javascript">
    var cf = new ContentFlow('contentFlow', {reflectionColor: "#000000"});
</script>


<div id="holder-ebook">
	<ul id="menu_list_top_pembelajaran">
		<li><a class="button-pembelajaran" id="upload-btn2" href="#upload-ebook" rel="modal"></a></li>
		<li><a class="button-pembelajaran" id="home-btn" href="<?php echo $this->webroot; ?>users/home"></a></li>
	</ul>
	<h2 class="video_and_book">Ebook</h2>

	<div id="menu-top-ebook">

	</div>
	<div class="content-ebook clearfix">
		<div class="topebook clearfix">
			<div id="category-ebook">
				<h3>Pilih Category</h3>


				<!-- ===== FLOW ===== -->
			    <div id="contentFlow" class="ContentFlow">
			        <!-- should be place before flow so that contained images will be loaded first -->
			        <div class="loadIndicator"><div class="indicator"></div></div>
			       <!-- <div class="flow">



			            <?php echo $ajax->link($html->image("bse2.png",array('class'=>'content')), array('controller'=>'labs', 'action' => 'find_category',6), array('class'=>'item','update' => 'mychange' ,'escape' => false));?>

			            <?php echo $ajax->link($html->image("bse.png",array('class'=>'content')), array('controller'=>'labs', 'action' => 'find_category',7), array('class'=>'item','update' => 'mychange' ,'escape' => false));?>

			            <?php echo $ajax->link($html->image("ebookcarachter.png",array('class'=>'content')), array('controller'=>'labs', 'action' => 'find_category',8), array('class'=>'item','update' => 'mychange' ,'escape' => false));?>

			            <?php echo $ajax->link($html->image("life-skill.png",array('class'=>'content')), array('controller'=>'labs', 'action' => 'find_category',9), array('class'=>'item','update' => 'mychange' ,'escape' => false));?>

			            <?php echo $ajax->link($html->image("komputer.png",array('class'=>'content')), array('controller'=>'labs', 'action' => 'find_category',10), array('class'=>'item','update' => 'mychange' ,'escape' => false));?>





			            <?php echo $ajax->link($html->image("fiksi.png",array('class'=>'content')), array('controller'=>'labs', 'action' => 'find_category',11), array('class'=>'item','update' => 'mychange' ,'escape' => false));?>




			        </div>-->
			        <div class="flow">


			            <a href="#" id="link2053872650" onclick="event.returnValue = false; return false;" class="item">
				            <?php echo $html->image('bse2.png',array('class'=>'content'));?>
				        </a>

			            <script type="text/javascript">
						//<![CDATA[
						Event.observe('link2053872650', 'click', function(event) { new Ajax.Updater('mychange','<?php echo $this->webroot;?>labs/find_category/6', {asynchronous:true, evalScripts:true, requestHeaders:['X-Update', 'mychange']}) }, false);
						//]]>
						</script>

			            <a href="#" id="link917756547" onclick=" event.returnValue = false; return false;" class="item">
				            <?php echo $html->image('bse.png',array('class'=>'content'));?>

			            </a>
			            <script type="text/javascript">
						//<![CDATA[
						Event.observe('link917756547', 'click', function(event) { new Ajax.Updater('mychange','<?php echo $this->webroot;?>labs/find_category/7', {asynchronous:true, evalScripts:true, requestHeaders:['X-Update', 'mychange']}) }, false);
						//]]>
						</script>

						<a href="#" id="link34441279" onclick=" event.returnValue = false; return false;" class="item">
							<?php echo $html->image('ebookcarachter.png',array('class'=>'content'));?>
				         </a>
			            <script type="text/javascript">
						//<![CDATA[
						Event.observe('link34441279', 'click', function(event) { new Ajax.Updater('mychange','<?php echo $this->webroot;?>labs/find_category/8', {asynchronous:true, evalScripts:true, requestHeaders:['X-Update', 'mychange']}) }, false);
						//]]>
						</script>

						<a href="#" id="link1071788709" onclick=" event.returnValue = false; return false;" class="item">
							<?php echo $html->image('life-skill.png',array('class'=>'content'));?>

			        	</a>

			            <script type="text/javascript">
						//<![CDATA[
						Event.observe('link1071788709', 'click', function(event) { new Ajax.Updater('mychange','<?php echo $this->webroot;?>labs/find_category/9', {asynchronous:true, evalScripts:true, requestHeaders:['X-Update', 'mychange']}) }, false);
						//]]>
						</script>

						<a href="#" id="link2035093705" onclick=" event.returnValue = false; return false;" class="item">
				           <?php echo $html->image('komputer.png',array('class'=>'content'));?>

				         </a>

						<script type="text/javascript">
						//<![CDATA[
						Event.observe('link2035093705', 'click', function(event) { new Ajax.Updater('mychange','<?php echo $this->webroot;?>labs/find_category/10', {asynchronous:true, evalScripts:true, requestHeaders:['X-Update', 'mychange']}) }, false);
						//]]>
						</script>

			            <a href="#" id="link1006707057" onclick=" event.returnValue = false; return false;" class="item">
			            	<?php echo $html->image('fiksi.png',array('class'=>'content'));?>

			            </a>

						<script type="text/javascript">
						//<![CDATA[
						Event.observe('link1006707057', 'click', function(event) { new Ajax.Updater('mychange','<?php echo $this->webroot;?>labs/find_category/11', {asynchronous:true, evalScripts:true, requestHeaders:['X-Update', 'mychange']}) }, false);
						//]]>
						</script>



					</div>
			        <div class="globalCaption"></div>
			        <div class="scrollbar">
			            <div class="slider"><div class="position"></div></div>
			        </div>

			    </div>
			</div>
			<div id="preview-ebook" class="clearfix">

			</div>
		</div>
		<div id="ebook-list" class="clearfix">
			<h3>Pilih Ebook</h3>
			<div id="mychange">
			</div>

		</div>
		<div id="upload-ebook" style="display: none">
			<div class="labs form">
				<?php echo $form->create('Lab',array('enctype'=>'multipart/form-data'));?>
					<fieldset>
					<div style="float:left;width:300px;"
						<?php

						echo '<p>';
						echo '<label>Tipe Ebook</label>';
						$listTypeEbook = array(6=>'BSE(Buku Sekolah Elektronik)',7=>'BSE Non Kemendiknas',8=>'Character Building',9=>'Life Skill',10=>'Komputer',11=>'Fiksi');

						echo $form->select('type',$listTypeEbook,null);
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
						<?php echo $form->year('tahunBerdiri', 1945, 2011, null, array('class'=>'year-set'), 'Pilih Tahun');	?>
						<?php echo $form->input('jumlahhalaman',array('class'=>'text-input normal-input','label'=>'Jumlah halaman'));	?>
					</p>
					<?php
					echo $form->input('details',array('label'=>'Resensi'));

					?>
					<p>
					<label>Cover file</label>
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






