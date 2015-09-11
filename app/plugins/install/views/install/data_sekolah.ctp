<div class="install form clearfix">
    <h2><?php echo $this->pageTitle; ?></h2>
	<p class="desc">Silahkan masukkan profile sekolah</p>
    <?php
		
        echo $form->create('Data', array('url' => array('plugin' => 'install', 'controller' => 'install', 'action' => 'data_sekolah')));
        echo $form->input('profile_name', array('label' => 'Nama Sekolah','class'=>'input-normal'));
        echo $form->input('profile_alamat', array('type'=>'textarea','label' => 'Alamat','class'=>'input-normal'));
		?>
		<div class="radio-set">
			
			<label>Status Sekolah</label>
			<input type="hidden" value="" id="InstallStatus_" name="data[Data][profile_status]">
			<span>
			<input type="radio" value="1" class="input-radio" id="InstallStatus1" name="data[Data][profile_status]">
			<label for="InstallStatus1">Negeri</label>
			</span>
			<span>
			<input type="radio" value="2" class="input-radio" id="InstallStatus2" name="data[Data][profile_status]">
			<label for="InstallStatus2">Swasta</label>
			</span>
			<?php echo $form->error('profile_status');?>
		</div>
		<?php
		echo '<div class="input text">';
		echo '<label>Tahun Berdiri</label>';
		echo $form->year('tahunBerdiri', 1945, 2011, null, array('class'=>'year-set'), 'Pilih Tahun');	
		echo '</div>';
		echo $form->input('profile_telp', array('label' => 'Telpon','class'=>'input-normal'));

		echo $form->input('nama_pustakawan', array('label' => 'Petugas Perpustakaan','class'=>'input-normal'));

		echo $form->input('kepala_pustakawan', array('label' => 'Kepala Perpustakaan','class'=>'input-normal'));
		echo $form->input('profile_email', array('label' => 'Email Admin: ','class'=>'input-normal'));
		
		?>
		
        <br/>

        <div class="input text">
			<label style="width:100%;margin:15px 0 0">Anda akan melakukan aktivasi dengan cara :</label>
			
			<div style="margin:5px 0 0">
				<div style="margin-left:100px">
					<span style="background-color: #5a998b;
				    border-radius: 4px 4px 4px 4px;
				    display: inline-block;
				    margin: 5px 4px 5px 0;
				    padding: 8px 3px;">
						<input type="radio" name="lic" value="licenseonline">
						<label>Aktivasi Online</label>
						
					</span>
					<span style="background-color: #5a998b;
				    border-radius: 4px 4px 4px 4px;
				    display: inline-block;
				    margin: 5px 4px 5px 0;
				    padding: 8px 3px;">
						<input type="radio" name="lic" value="licenseoffline">
						<label>Aktivasi Offline</label>
						
					</span>
				</div>
				<script>
				jQuery(document).ready(function(){ 
					jQuery("div.desc").hide();
					jQuery(".licenseInput").val('');
				    jQuery("input[name$='lic']").click(function() {
				        var test = jQuery(this).val();
				        jQuery("div.desc").hide();
						jQuery(".licenseInput").val('');
				        jQuery("#"+test).show();
				    }); 
				});
		
				</script>
				<?php
				echo '<div id="licenseonline" class="desc" style="display:none;">';
				echo $form->input('licenseKey', array('label' => 'License Key','class'=>'input-normal licenseInput'));
				echo '</div>';		
				?>
				<div id="licenseoffline" class="desc" style="display:none;">
					<br/>
					<div class= 'blue_box'>
					<p>Silahkan berikan keterangan detail berikut ini pada costumer support anda:<br/>
					Serial Mesin = <strong><?php echo $zend_display;?></strong></p>
					</div>
					
					<label style="width:100%;margin:7px 0 8px">Jika anda sudah mendapatkan kode aktivasi masukkan detail sbb:</label>
					<?php echo $form->input('Key.keyfeedback', array('label' => 'Kode Aktivasi <br/><small>( Kode dari costumer support )</small>','class'=>'input-normal licenseInput'));?>
				</div>
			</div>
		<div class="submit"><input type="submit" value="Lanjutkan  →" class="button lanjut"></div>
		<?php echo $form->end();
    ?>
</div>