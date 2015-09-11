<div class="labs form">

<?php echo $form->create('Lab',array('enctype'=>'multipart/form-data'));?>
	<fieldset>
	<?php

	echo '<p>';
	echo '<label>Tipe Ebook</label>';
	$listTypeEbook = array(3=>'BSE(Buku Sekolah Elektronik)',4=>'Carachter Building',5=>'Life Skill',6=>'Lain lainnya');
	
	echo $form->select('type',$listTypeEbook,null);
	echo '</p>';

	echo '<p>';

	
	echo '<label>Mata Pelajaran <br/><small>*jika ebook adalah BSE</small></label>';
	echo $form->select('matapelajaran',$listMataPelajaran,null);
	echo '</p>';
	
	echo '<p>';
	echo '<label>Kelas</label>';
	$listKelas = array(1=>1,2=>2,3=>3,4=>4,5=>5,6=>6,7=>7,8=>8,9=>9,10=>10,11=>11,12=>12);
	
	echo $form->select('kelas',$listKelas,null);
	echo '</p>';
	
	
	?>
	<p>
	<?php
	echo $form->input('title',array('class'=>'text-input large-input'));
	
	?>
	<?php
	
	
	?>
	</p>
	
	<?php
	echo $form->input('details');
	
	?>
	
	<p>
	<label>Browse file</label>
	<?php
	echo $form->input('file', array('label'=>false, 'type'=>'file'));
	echo '<small>File yang diijinkan Word, Excel, Pdf </small>';
	echo '</p>';?>
	
	
 	
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<?php echo $html->link(__('Kembali', true), array('action' => 'index'),array('class'=>'button'));?>
</div>




