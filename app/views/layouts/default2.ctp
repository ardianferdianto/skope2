<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="<?php echo $this->webroot; ?>favicon.ico"/>

    <title>SKOPE</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo $this->webroot;?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo $this->webroot;?>css/cover.css" rel="stylesheet">
    <link href="<?php echo $this->webroot;?>css/animsition.min.css" rel="stylesheet">
    
    <!-- Custom basic template -->
    <?php
      //echo $html->css('normalize.css');
      echo $html->css('book1.css');

      echo $javascript->link('modernizr.custom.js'); 
      echo $javascript->link('jquery-2.1.4.min.js'); 
    ?>

    <!--<script src="<?php echo $this->webroot;?>js/jquery.1.11.3.js"></script>-->
    <script type="text/javascript">
      window.urlscriptCam = '<?php echo $this->webroot;?>js/ScriptCam-master/';

    </script>
    <script src="<?php echo $this->webroot;?>js/jquery.animsition.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
  
  $(".animsition").animsition({
  
    inClass               :   'fade-in',
    outClass              :   'fade-out',
    inDuration            :    1500,
    outDuration           :    800,
    linkElement           :   '.animsition-link',
    // e.g. linkElement   :   'a:not([target="_blank"]):not([href^=#])'
    loading               :    true,
    loadingParentElement  :   'body', //animsition wrapper element
    loadingClass          :   'animsition-loading',
    unSupportCss          : [ 'animation-duration',
                              '-webkit-animation-duration',
                              '-o-animation-duration'
                            ],
    //"unSupportCss" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
    //The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
    
    overlay               :   false,
    
    overlayClass          :   'animsition-overlay-slide',
    overlayParentElement  :   'body'
  });
});
    </script>
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><![endif]-->
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="site-wrapper animsition">

      <div class="site-wrapper-inner">

        <div class="cover-container <?php if($contentdisplay == 'content'):?>contentdisplayed <?php endif;?>">
          
          <?php echo $content_for_layout;?>

          <div class="mastfoot">

            <div class="inner">

              <p>SKOPE dibuat di Indonesia dengan agsfsfgsgasafgsagf.</p>
            
            </div>
          
          </div>

        </div>
      
      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    
    <script src="<?php echo $this->webroot;?>js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    
  </body>
</html>