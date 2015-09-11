<script type="text/javascript" language="JavaScript">
<!--
function checkCheckBoxes(theForm) {
	if (
	theForm.escholl_agree.checked == false) 
	{
		alert ('Anda Harus Menyetuji Perjanjian Penggunaan Aplikasi');
		return false;
	} else { 	
		return true;
	}
}
//-->
</script>
<div class="install index">
	<h2><?php echo $this->pageTitle; ?></h2>
	<div class="blue_box">
	<table class="precheck clearfix">
		<?php

			
			//print_r($validatePhp['message']);
			foreach ($validateTest as $n):?>
			
				<tr>
					<td class="message-check">
						<?php echo $n['message'];?>
					</td>
					<td><?php if($n['status'] == 1){
						echo $html->image('icon_accept.gif', array('alt' => 'Status Oke')).'Oke';
					}else if($n['status'] == 2){
						echo $html->image('icon_alert.gif', array('alt' => 'Status warning')).'Warning';
					}else{
						echo $html->image('icon_stop.gif', array('alt' => 'Status failed')).'Erorr';
					}?></td>
				</tr>
			
			
			<?php endforeach;?>
		</table>
	</div>
	<?php if($allOke == 1):
	?>
	<div id="license-agreement">
		<?php echo $form->create('Install', array('url' => array('plugin' => 'install', 'controller' => 'install', 'action' => 'database'),'onsubmit'=>'return checkCheckBoxes(this)')); ?>
			
        <h3>Perjanjian Penggunaan Aplikasi</h3>
        <textarea rows="10" cols="55" id="license_textarea"><?php echo file_get_contents('license.txt') ?></textarea>
        <span class="agreement clearfix">
			<input type="checkbox" name="eschool-agree" id="escholl_agree" value="1">
			<label for="InstallStatus1">Saya setuju</label>
		</span>
		
      </div>
	<br/>
	<div class="submit"><input type="submit" value="Lanjutkan  →" class="button lanjut left"></div>
	<?php $form->end();?>
	<?php else:?>
		<div class="notice_box clearfix">
			<p><strong>Error :</strong>Silahkan di koreksi kesalahan pada pre-install tersebut, <br/> <?php echo $appLicationName;?> tidak dapat berjalan jika salah satu syarat diatas tidak terpenuhi </p>
		</div>
		<?php echo $html->link('Ulang Pengecekan', array('action' => 'precheck'),array('class'=>'button')); ?>
	<?php endif ?>
</div>