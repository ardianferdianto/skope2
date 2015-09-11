<div class="quizzs form">
	
	
	<div class="clear"></div> 
	<div class="content-box"><!-- Start Content Box -->
		
		<div class="content-box-header">
			
			<h3>From Edit Kuis Online</h3>
			
						
			<div class="clear"></div>
			
		</div> <!-- End .content-box-header -->
		
		<div class="content-box-content">
			<?php echo $form->create('Quizz');?>
				<fieldset>
			 		
				<?php
					echo '<p>';
					echo '<label>Judul</label>';
					echo $form->input('title',array('label'=>false,'class'=>'text-input medium-input'));
					echo '</p>';
					echo '<p>';
					echo '<label>Mata Pelajaran</label>';
					echo $form->select('pelajaran_id',$listMataPelajaran,null);
					echo '</p>';
					echo '<p>';
					echo '<label>Kelas</label>';
					$listKelas = array(1=>1,2=>2,3=>3,4=>4,5=>5,6=>6,7=>7,8=>8,9=>9,10=>10,11=>11,12=>12);
					echo $form->select('kelas',$listKelas,null);
					echo '</p>';
					echo '<p>';
					echo '<label>Waktu untuk mengerjakan (dalam menit)</label>';
					
					echo $form->input('time',array('class'=>'text-input small-input','label'=>false,'div' => false));
					echo '<span class="input-notification">Menit</span>';
					
					echo '</p>';
					echo '<p>';
					echo $form->input('details');
					echo '</p>';
					echo '<p>';
					
					echo '</p>';
					echo '<p>';
					echo '<label>Pilih Publish jika anda menginginkan siswa langsung bisa melihat</label>';
					echo $form->checkbox('published',array('label'=>false)).'Publish ? ';
					echo '</p>';
				?>
				</fieldset>
			<?php echo $form->end('Submit');?>
			
		</div>
	</div>
	
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Kembali', true), array('action' => 'view',$id));?></li>
	</ul>
</div>
