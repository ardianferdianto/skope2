
<div id="ebooks-detail" class="ebooks view">
		<!--<h2 style="color:#fff;"><?php echo $ebook['Ebook']['title']; ?></h2>
		
		<p>Penerbit : <strong><?php echo $ebook['Ebook']['penerbit']; ?></strong> | Pengarang : <strong><?php echo $ebook['Ebook']['pengarang']; ?></strong> | Jumlah Halaman : <strong><?php echo $ebook['Ebook']['jumlahhalaman']; ?></strong> | Tahun : <strong><?php echo $ebook['Ebook']['tahun']; ?></strong></p>
		
		<ul id="menu_list_top_pembelajaran" style="right: 50px;top: 0;">
			<li><a class="button-pembelajaran" id="download3-btn" href="<?php echo $this->webroot; ?>files/ebooks/<?php echo $ebook['Ebook']['file']; ?>"></a></li>
			<li><a class="button-pembelajaran" id="back3-btn" href="<?php echo $this->webroot; ?>ebooks"></a></li>
		</ul>
		
		<div class="clear"></div>
		
		<br/>-->
		<div class="content-ebook" style="background:#fff;">
			
			
			<div id="video"></div> 
			<?php 
				if( ($ebook['Ebook']['mimetype'] == 'application/pdf') || ($ebook['Ebook']['mimetype'] == 'application/x-pdf')){
				?>
				<iframe src='http://192.168.2.4:82<?php echo '/files/ebooks/'.$ebook['Ebook']['file']; ?>' width="100%" height="550px"></iframe>
				
				<?php }
				if(($ebook['Ebook']['mimetype'] == 'video/x-flv') || ($ebook['Ebook']['mimetype'] == 'application/octet-stream')){
				
				echo $video->loader(true); 
				echo $video->player($this->webroot.'/files/ebooks/'.$ebook['Ebook']['file'], 'video', false, 720, 576); 
			
				}
				echo '<br/>';
				echo '<br/>';
				
			?>
		</div>
</div>