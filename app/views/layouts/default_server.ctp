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
    <link rel="stylesheet" href="<?php echo $this->webroot;?>css/cover.css" >
    <link rel="stylesheet" href="<?php echo $this->webroot;?>css/animsition.min.css" >
    
    <link rel="stylesheet" type="text/css" href="<?php echo $this->webroot;?>css/tooltipster.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $this->webroot;?>css/themes/tooltipster-light.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $this->webroot;?>css/themes/tooltipster-noir.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $this->webroot;?>css/themes/tooltipster-punk.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $this->webroot;?>css/themes/tooltipster-shadow.css" />

    <link rel="stylesheet" type="text/css" href="<?php echo $this->webroot;?>css/videojs.css" />

    <link rel="stylesheet" type="text/css" href="<?php echo $this->webroot;?>css/videojs.record.css" />

    <?php echo $html->css('jquery.fancybox'); ?>

    <?php echo $html->css('helpers/jquery.fancybox-buttons.css?v=1.0.5'); ?>
    <?php echo $html->css('helpers/jquery.fancybox-thumbs.css?v=1.0.7'); ?>


    <!-- Custom basic template -->
    <?php

      //echo $html->css('normalize.css');
      //echo $html->css('book1.css');
      echo $html->css('app.css');
      echo $html->css('bootstrap-colorselector.css');

      echo $javascript->link('modernizr.custom.js'); 
      echo $javascript->link('jquery-2.1.4.min.js');
      echo $javascript->link('jquery.tooltipster.min.js');
      echo $javascript->link('bootstrap-colorselector.js');
      echo $javascript->link('ckeditor/ckeditor.js');
      echo $javascript->link('jquery.form.min.js');
      echo $javascript->link('jquery-ui.min.js');
    ?>
    <?php echo $javascript->link('jquery.fancybox.pack.js'); ?>
    <?php echo $javascript->link('/css/helpers/jquery.fancybox-buttons.js?v=1.0.5'); ?>
    <?php echo $javascript->link('/css/helpers/jquery.fancybox-media.js?v=1.0.6'); ?>
    <?php echo $javascript->link('/css/helpers/jquery.fancybox-thumbs.js?v=1.0.7'); ?>

    <!--<script src="<?php echo $this->webroot;?>js/jquery.1.11.3.js"></script>-->
    <script type="text/javascript">
      window.urlscriptCam = '<?php echo $this->webroot;?>js/ScriptCam-master/';

    </script>
    <script src="<?php echo $this->webroot;?>js/jquery.animsition.min.js"></script>
    <script src="<?php echo $this->webroot;?>js/jquery.transit.min.js"></script>
    
<script src="<?php echo $this->webroot;?>node/notify.min.js"></script>
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
    
        <script src="http://localhost:8888/socket.io/socket.io.js"> </script>
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
        <button id="connectnode" type="button" class="btn btn-warning btn-lg connectserver" >
            <span class="glyphicon glyphicon glyphicon-facetime-video" aria-hidden="true"></span> <br/>Connect Server
        </button>
        <div class="cover-container <?php if($contentdisplay == 'content'):?>contentdisplayed <?php endif;?>">
          
          <?php echo $content_for_layout;?>
                    <div class="mastfoot">
            <!-- <div class="inner">
              <p>SKOPE dibuat di Indonesia dengan agsfsfgsgasafgsagf.</p>
            </div> -->
          </div>
        </div>

      </div>

    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
 
    <script src="<?php echo $this->webroot;?>js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $( document ).on( "click", ".buttonmikroskop", function(e) {

      $.fancybox({
        type: 'ajax',
        width:350,
        height:350,
        autoSize: false,
        title   : 'CONNECT MIKROSKOP',
        content: '<div id="mikroskoppage"></div>',
        beforeShow : function(){
            $.ajax({
              type: "GET",
              dataType: "html",
              cache: false,
              url: "<?php echo $this->webroot;?>halamen/showlandingmikroskop", // preview.php
              //data: $("#postp").serializeArray(), // all form fields
              success: function (data) {
                $('#mikroskoppage').append(data);
                
              } // success
            }); // ajax
        },
        beforeClose : function(){
          $('#mikroskoppage').remove();
          //$('#mikroskoppage').html('');
        }
        //href: "<?php echo $this->webroot;?>halamen/showlandingmikroskop"
        
      }); //fancybox
    });
    </script>
    
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    
  </body>
</html>