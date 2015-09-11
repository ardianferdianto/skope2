<script type="text/javascript">
	document.observe("dom:loaded", bodyOnload);
	function bodyOnload() {
	    $('loading_list').hide();
	}
	
	function hideWaiting(){
		
	        //Effect.SlideDown('dom_element_id', { afterFinish: function () { Effect.Appear('loading_list', { duration: 3.0})} } );
			$('tohide').fade({ duration: 0.7, from: 1, to: 0, afterFinish:function () { Effect.Appear('loading_list', { duration: 1.5})}});
	     
		
	}
	
</script>

<div class="install">
    <h2><?php echo $this->pageTitle; ?></h2>
	<div id="tohide">
	<p class="towait">Silahkan tekan tombol dibawah ini untuk melakukan instalasi program. </br></br></p>
	<div class="blue_box clearfix towait" id="info-wait">
	Setelah anda menekan tombol dibawah ini, system akan melakukan instalasi. Silahkan menunggu, mungkin membutuhkan waktu beberapa menit (tergantung dari kemampuan hardware anda).
	</div>
	
    <?php
		/*
        echo $html->link(__('Click here to build your database', true), array(
            'plugin' => 'install',
            'controller' => 'install',
            'action' => 'data',
            'run' => 1,
        ));
    	*/
	
	echo $html->link(
	'Klik disini untuk memulai proses instalasi',
	array( 'plugin' => 'install','controller' => 'install', 'action' => 'data','run'=>1),
	array( 'class'=>'run_install button','id'=>'run_install','onclick'=>' event.returnValue = false; hideWaiting();return false;')
	);
	
	?>
	</div>
	
	<script type="text/javascript">
	//<![CDATA[
	Event.observe('run_install', 'click', function(event) { new Ajax.Updater('status_sims','/eteaching_sd/install/runDbApp1/run:1', {asynchronous:true, evalScripts:true, requestHeaders:['X-Update', 'status_sims']}) }, false);
	//]]>
	</script>
	<div id="status">
		<div class="menu" id="loading_list">
			<ul>
				<li>
					<div class="clearfix" id="status_sims">
					<span class="logo-menu" id="sims">&nbsp;</span>
					<p>
					<?php echo $html->image('loading-install.gif');?><span>Harap tunggu sistem sedang menginstall Aplikasi</span>
					</p>
					</div>
				</li>
				
			</ul>
		</div>
	</div>
</div>