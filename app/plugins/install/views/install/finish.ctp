<div class="install">
	
	
    <h2><?php echo $this->pageTitle; ?></h2>

    <p>
		Selanjutnya anda dapat menggunakan applikasi dengan detail login sementara sbb :
        </p>
<br/>
<div class="blue_box">
        <p>Username: <strong>admin</strong><br />
        Password: <strong>admin123</strong></p>
<br/>
<span style="color:#8c1a26;">
	*Penting!! Harap mengganti password default berikut ini setelah anda menggunakan applikasi	
    </span>
</div>


    

    <?php
        echo $html->link(__('Klik disini untuk memulai Applikasi', true), array(
            'plugin' => 'install',
            'controller' => 'install',
            'action' => 'deleteInstallFolder',
            'delete' => 1,
        ),array('class'=>'button'));
    ?>
	<br/>
</div>