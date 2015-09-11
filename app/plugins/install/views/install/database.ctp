<script type="text/javascript">
	function confirmDelete(){
		var x=window.confirm("Anda Yakin ingin melanjutkan ? \n\ Jika Ya, Harap membackup database anda terlebih dahulu sebelumnya, penghapusan database akan menyebabkan anda kehilangan semua data ")
		if (x)
		window.location.href = '<?php echo $url;?>';
		else
		return false;
	}
</script>
<div class="install form clearfix">
    <h2><?php echo $this->pageTitle; ?></h2>
	<?php
	if($databaseInstalled == true):?>
		<div class="notice_box clearfix">
			<p><strong>Error :</strong>Instalasi tidak dapat dilanjutkan karena database <?php echo $appLicationName;?>  sudah ada sebelumnya <br/> 
				<?php echo $html->link(
				'Klik disini untuk menghapus database sebelumnya',
				array( 'plugin' => 'install','controller' => 'install', 'action' => 'database','delete'=>1),
				array( 'class'=>'run_install','id'=>'run_install','onclick'=>'confirmDelete();return false;')
				);?>
				<br/><strong>PENTING : Harap membackup database anda terlebih dahulu sebelumnya, penghapusan database akan menyebabkan anda kehilangan semua data!</strong> </p>
		</div>
	<?php else:?>
	<p class="desc">Silahkan langsung tekan lanjutkan ,jika anda tidak mengetahui</p>
    <?php
        echo $form->create('Install', array('url' => array('plugin' => 'install', 'controller' => 'install', 'action' => 'database')));
        echo $form->input('Install.host', array('label' => 'Host', 'value' => 'localhost','class'=>'input-normal'));
        echo $form->input('Install.login', array('label' => 'User / Login', 'value' => 'root','class'=>'input-normal'));
        echo $form->input('Install.password', array('label' => 'Password','class'=>'input-normal'));
		
        ?>
		<div class="submit"><input type="submit" value="Lanjutkan  →" class="button lanjut"></div>
		<?php echo $form->end();
		?>
	<?php endif;?>	
    
</div>