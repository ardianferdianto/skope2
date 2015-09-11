<h2>Direktori Try Out</h2>
<br/>
<br/>
<?php if($groupAuth!=3):?>
<a class="shortcut-button-small" href="<?php echo $this->webroot; ?>quizzs/home" id="addData_left">
	<span>
		<img src="<?php echo $this->webroot; ?>resources/images/icons/arrow_left_alt1_32x32.png" alt="icon"><br>
		Kembali
	</span>
</a>
<?php endif;?>
<h3>Silahkan Pilih Mata Pelajaran</h3>
<hr/>
<br/>
<?php
$i = 0;
foreach ($listMataPelajaran as $pelajaran):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
<a class="shortcut-button-lesson" href="../pelajaran/<?php echo $idKelas?>/<?php echo $pelajaran['Pelajaran']['id']?>">
	<span>
		<img src="<?php echo $this->webroot; ?>resources/images/icons/add_bk_128x128x32.png" alt="icon"><br>
		<?php echo $pelajaran['Pelajaran']['nama'];?>
	</span>
</a>

<?php endforeach; ?>



<br/>



