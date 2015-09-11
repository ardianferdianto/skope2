<div id="edit_labs">
<div id="edit_labs-wrapper">
	<?php echo $form->create('Lab',array('enctype'=>'multipart/form-data'));?>
		<fieldset>
		<?php if($tipe == 1):?>
		<div style="float:left;width:300px;"
			<?php
			echo $form->input('id');
			echo '<p>';
			echo '<label>Tipe Ebook</label>';
			$listTypeEbook = array(6=>'BSE(Buku Sekolah Elektronik)',7=>'BSE Non Kemendiknas',8=>'Character Building',9=>'Life Skill',10=>'Komputer',11=>'Fiksi');
			
			echo $form->select('type',$listTypeEbook,null);
			echo '</p>';
		elseif($tipe == 2):
		?>

	<div style="float:left;width:300px;"
			<?php

			echo '<p>';
			echo '<label>Pilih Kategori</label>';
			$listTypeEbook = array(12=>'Dokumenter Sejarah Indonesia',13=>'IPTEK',14=>'Life Skill',15=>'Carachter Building');
			
			echo $form->select('type',$listTypeEbook,null);
			echo '</p>';
			endif;
			?>

		<p>
		<?php
		echo $form->input('title',array('class'=>'text-input large-input','label'=>'Judul Buku'));
		
		?>
		
		</p>


		<?php if($tipe == 1):?>
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
			<?php echo $form->input('jumlahhalaman',array('class'=>'text-input normal-input','label'=>'Jumlah halaman'));	?>
		</p>
		<?php elseif($tipe == 2):?>
		<p>

		<?php
		echo $form->input('produksi',array('class'=>'text-input normal-input','label'=>'Produksi'));
		
		?>
		<p>

		<?php
		echo $form->input('sutradara',array('class'=>'text-input normal-input','label'=>'Sutradara'));
		
		?>
		
		</p>
		<?php endif;?>
		<p>
			<?php echo $form->year('tahunBerdiri', 1945, 2011, null, array('class'=>'year-set'), 'Pilih Tahun');	?>
			
		</p>
		<?php
		echo $form->input('details',array('label'=>'Resensi'));
		
		?>
		<?php
		
		echo '<p>';
		echo '<span>Cover anda sebelumnya</span><br/>';
		if($lab['Lab']['file']!=null){
		$vowels = array("img/");
		$cover = str_replace($vowels, "", $lab['Lab']['cover']);
		

		echo $html->image($cover,array('width'=>'100px'));
		}else{
			echo '<p>Belum ada cover</p>';
		}

		?>
		
		<p>
		
		<?php
		echo $form->input('File.image1', array('label'=>'Ganti Cover file:', 'type'=>'file'));

		echo '</p>';
		echo '<p>';

		echo '<span>File anda sebelumnya</span><br/>';
		?>
		<p>Nama File : <strong><?php echo $lab['Lab']['file']; ?></strong></p>
		
		<p>
		<label>Ganti file</label>
		<?php
		echo $form->input('file', array('label'=>false, 'type'=>'file'));
		
		echo '</p>';?>
		</p>
		
		
	 	
		</fieldset>
		<div class="submit-form" style="margin:30px 0">
			<?php
			echo $form->submit('ok-btn.png',array('div'=>false,'class' => '','id'=>'oke-btn'));
			if($tipe == 1):
			echo $html->link($html->image("btl-btn.png"), array('action' => 'index'), array('escape' => false));
			else:
				echo $html->link($html->image("btl-btn.png"), array('action' => 'video'), array('escape' => false));
			endif;
			?>
		</div>
	<?php echo $form->end();?>
</div>
</div>
