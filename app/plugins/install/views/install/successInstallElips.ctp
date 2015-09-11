<span class="logo-menu active" id="elips">&nbsp;</span>
<p>
	<?php echo $html->image('Select.png');?> <span>Berhasil menginstall Elibrary</span>
	<?php if ($checkInstall == 3) {?>
		<script>
		alert('Selamat Instalasi berhasil Dilakukan !');
		window.location.href = '<?php echo $url;?>';
		</script>
	<?php }?>
</p>