<hr/>
<h4>Rincian Soal saat ini</h4>
<dl class="info clearfix">
<?php foreach ($options['Question'] as $key ) {
		if($key['tipe']==1 && $key['level']==1){
			$gandamudah++;
		}
		if($key['tipe']==1 && $key['level']==2){
			$gandasedang++;
		}
		if($key['tipe']==1 && $key['level']==3){
			$gandasulit++;
		}
		if($key['tipe']==2 && $key['level']==1){
			$uraianmudah++;
		}
		if($key['tipe']==2 && $key['level']==2){
			$uraiansedang++;
		}
		if($key['tipe']==3 && $key['level']==3){
			$uraiansulit++;
		}
	}
	$jumlahsoal = $gandamudah+$gandasedang+$gandasulit+$uraianmudah+$uraiansedang+$uraiansulit;
?>
	<dt>Kelas</dt>
	<dd><?php echo $options['Quizz']['kelas'];?></dd>
	<dt>Mata Pelajaran</dt>
	<dd><?php echo $options['Pelajaran']['nama'];?></dd>
	<dt>Soal Ganda Mudah</dt>
	<dd><?php echo $gandamudah;?></dd>
	<dt>Soal Ganda Sedang</dt>
	<dd><?php echo $gandasedang;?></dd>
	<dt>Soal Ganda Sulit</dt>
	<dd><?php echo $gandasulit;?></dd>
	<dt>Soal Uraian Mudah</dt>
	<dd><?php echo $uraianmudah;?></dd>
	<dt>Soal Uraian Sedang</dt>
	<dd><?php echo $gandamudah;?></dd>
	<dt>Soal Uraian Sulit</dt>
	<dd><?php echo $uraiansedang;?></dd>
	<dt>Jumlah Soal</dt>
	<dd><?php echo $jumlahsoal;?></dd>
	<dt>Jumlah Waktu</dt>
	<dd><?php echo $options['Quizz']['time'];?></dd>

</dl>