
<?php echo $form->create('Quizz',array('action'=>'add_single','type'=>'file'));?>
<h2><?php __('Form Penambahan Try Out');?></h2>

	<fieldset>
		<?php
			echo '<p>';
			echo '<label>Kode</label>';
			echo $form->input('kode',array('label'=>false,'class'=>'text-input medium-input'));
			echo '</p>';
			echo '<p>';
			echo '<label>Mata Pelajaran</label>';
			echo $form->select('pelajaran_id',$listMataPelajaran,null);
			echo '</p>';
			echo '<p>';
			echo '<label>Kelas</label>';
			$listKelas = array(1=>1,2=>2,3=>3,4=>4,5=>5,6=>6);
			echo $form->select('kelas',$listKelas,null);
			echo '</p>';

			echo $form->input('time',array('type'=>'hidden','value'=>45));
			echo $form->input('title',array('type'=>'hidden','value'=>'Try out'));
			/*echo '<p>';
			echo '<label>Waktu untuk mengerjakan (dalam menit)</label>';
			
			echo $form->input('time',array('class'=>'text-input small-input','label'=>false,'div' => false));
			echo '<span class="input-notification">Menit</span>';
			
			echo '</p>';
			echo '<p>';
			echo $form->input('details');
			echo '</p>';
			echo '<p>';
			
			echo '</p>';*/
			/*echo '<p>';
			echo '<label>Pilih Publish jika anda menginginkan siswa langsung bisa melihat</label>';
			echo $form->checkbox('published',array('label'=>false)).'Publish ? ';
			echo '</p>';*/
		?>
	</fieldset>
	<br/>
	<br/>
	<?php echo $form->end('OK');?>