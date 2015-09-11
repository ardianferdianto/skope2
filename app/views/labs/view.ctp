
<div id="labs-detail" class="labs view">
		<h2 style="color:#fff;"><?php echo $lab['Lab']['title']; ?></h2>
		
		<p>Penerbit : <strong><?php echo $lab['Lab']['penerbit']; ?></strong> | Pengarang : <strong><?php echo $lab['Lab']['pengarang']; ?></strong> | Jumlah Halaman : <strong><?php echo $lab['Lab']['jumlahhalaman']; ?></strong> | Tahun : <strong><?php echo $lab['Lab']['tahun']; ?></strong></p>
		
		<ul id="menu_list_top_pembelajaran" style="right: 50px;top: 0;">
			<li><a class="button-pembelajaran" id="download3-btn" href="<?php echo $this->webroot; ?>files/labs/<?php echo $lab['Lab']['file']; ?>"></a></li>
			<li><a class="button-pembelajaran" id="back3-btn" href="<?php echo $this->webroot; ?>labs"></a></li>
		</ul>
		
		<div class="clear"></div>
		
		<br/>
		<div class="content-lab" style="background:#fff;">
			
			
			<div id="video"></div> 
			<?php 
				if( ($lab['Lab']['mimetype'] == 'application/pdf') || ($lab['Lab']['mimetype'] == 'application/x-pdf')){
				?>
				<iframe src='<?php echo $this->webroot.'/files/labs/'.$lab['Lab']['file']; ?>' width="100%" height="550px"></iframe>
				
				<?php }
				if(($lab['Lab']['mimetype'] == 'video/x-flv') || ($lab['Lab']['mimetype'] == 'application/octet-stream')){
				
				echo $video->loader(true); 
				echo $video->player($this->webroot.'/files/labs/'.$lab['Lab']['file'], 'video', false, 720, 576); 
			
				}
				echo '<br/>';
				echo '<br/>';
				
			?>
		</div>
</div>