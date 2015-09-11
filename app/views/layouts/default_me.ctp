<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="<?php echo $this->webroot; ?>favicon.ico"/>
	<title>SKOPE</title>

	<?php
		echo $html->css('bootstrap.min.css');
		echo $html->css('cover.css');
		echo $html->css('animsition.min.css');
		//echo $html->css('book1.css');
		
		echo $javascript->link('jquery-2.1.4.min.js'); 
		echo $javascript->link('modernizr.custom.js'); 
		echo $javascript->link('jquery.animsition.min.js'); 
    ?>

	<script type="text/javascript">
		window.urlscriptCam = '<?php echo $this->webroot;?>js/ScriptCam-master/';
	</script>

	<script type="text/javascript">
		$(document).ready(function() {
			$(".animsition").animsition({
				inClass               :'fade-in',
				outClass              :'fade-out',
				inDuration            :1500,
				outDuration           :800,
				linkElement           :'.animsition-link',
				// e.g. linkElement   :'a:not([target="_blank"]):not([href^=#])'
				loading               :true,
				loadingParentElement  :'body', //animsition wrapper element
				loadingClass          :'animsition-loading',
				unSupportCss          :['animation-duration','-webkit-animation-duration','-o-animation-duration'],
				//"unSupportCss" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
				//The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
				overlay               :false,
				overlayClass          :'animsition-overlay-slide',
				overlayParentElement  :'body'
			});
		});
	</script>
</head>
<body>
	<div class="container">

		<?php echo $content_for_layout; ?>

	</div>

	<footer class="footer">
		<div class="container">
			<p>SKOPE dibuat di Indonesia dengan agsfsfgsgasafgsagf.</p>
		</div>
	</footer>
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo $this->webroot;?>js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
</body>
</html>
