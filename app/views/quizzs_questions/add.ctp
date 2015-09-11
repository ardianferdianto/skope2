<?php if($status==2):?>
	<div class="notification error png_bg">
		<div>
			Pertanyaan tidak berhasil disalin
		</div>
	</div>
<?php elseif($status==3):?>
	<div class="notification error png_bg">
		
		<div>
			Pertanyaan tidak berhasil disalin, sudah ada soal ini sebelumnya di dalam tryout
		</div>
	</div>
<?php else:?>
	<div class="notification success png_bg">
		
		<div>
			Pertanyaan berhasil disalin
		</div>
	</div>
<?php endif;?>

