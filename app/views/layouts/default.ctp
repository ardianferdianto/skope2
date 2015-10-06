<!DOCTYPE html>
<html lang="en" id="<?php if($contentdisplay == 'content'):?>contentdisplayed<?php endif;?>">
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
    <script src="<?php echo $this->webroot;?>js/notify.min.js"></script>
    
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
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><![endif]-->
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="<?php echo $this->webroot;?>skope_node/RTCMultiConnection.js"></script>
    <script src="<?php echo $this->webroot;?>skope_node/dev/FileBufferReader.js"></script>

    <!-- socket.io for signaling -->
    <script src="http://localhost:9001/socket.io/socket.io.js"></script>
    <script>

        var connection = new RTCMultiConnection();
        connection.socketURL = 'http://localhost:9001/';
        connection.enableFileSharing = true; // by default, it is "false".
        $('#join-room').on("click", function(e) {
            connection.join('room_server');
        });
        function submitfunction(){
          //var from = $('#user').val();
          var message = $('#m').val();
          if(message != '') {
            connection.send(message);
          }
          $('#m').val('').focus();
            return false;
        }
        function appendDIV(event) {
            $.notify("Message from server "+event.data || event);
        }
        $(document).ready(function() {
          
          $('#file').on('click',function(){
            var socket = connection.getSocket();
            socket.emit('custom-event', 'his there');
          });
          
          connection.session = {
              data : true
          };
          connection.sdpConstraints.mandatory = {
              OfferToReceiveAudio: false,
              OfferToReceiveVideo: false
          };
          connection.onmessage = appendDIV;
          connection.connectSocket(function(socket) {
              socket.on('custom-message', function(message) {
                  console.log(message);
              });
              connection.sdpConstraints.mandatory = {
                  OfferToReceiveAudio: false,
                  OfferToReceiveVideo: false
              };

              connection.connect('server_room');
              socket.emit('custom-message', 'server_room');
              connection.open('server_room');
          });

          document.getElementById('share-file').onclick = function() {
              var fileSelector = new FileSelector();
              fileSelector.selectSingleFile(function(file) {
                  connection.send(file);
              });
          };

          //var socket = io.connect('http://localhost:9001/');
          /*socket.on('custom-event', function(data) {
                console.log('tes'+data);
          });*/
          //$('#share-reference').on("click",function(){
            $('.iframe-btn').fancybox({
                'width' : 880,
                'height'  : 570,
                'type'  : 'iframe',
                'autoScale'   : false
              });
              
         
              //
              // Handles message from ResponsiveFilemanager
              //
              function OnMessage(e){
                var event = e.originalEvent;
                 // Make sure the sender of the event is trusted
                 if(event.data.sender === 'responsivefilemanager'){
                    if(event.data.field_id){
                      var fieldID=event.data.field_id;
                      var url=event.data.url;
                      $('#m').val(url).trigger('change');
                      $.fancybox.close();

                      // Delete handler of the message from ResponsiveFilemanager
                      $(window).off('message', OnMessage);
                    }
                 }
              }

              // Handler for a message from ResponsiveFilemanager
              $('.iframe-btn').on('click',function(){
                $(window).on('message', OnMessage);
              });
          });
        //});
        connection.onopen = function() {
            document.getElementById('share-file').disabled      = false;
            //socket.emit('custom-event', 'his there');
        };
    </script>
  </head>

  <body id="<?php if($contentdisplay == 'content'):?>contentdisplayed<?php endif;?>">

    <div class="site-wrapper animsition">

      <!--<span><p><a href="http://localhost:8888/client.html">Skope Conference</a></p></span>-->
      <div class="site-wrapper-inner container-fluid">

        <!--<button id="connectnode" type="button" class="btn btn-warning btn-lg connectserver" >
            <span class="glyphicon glyphicon glyphicon-facetime-video" aria-hidden="true"></span> <br/>Connect Server
        </button>-->
        <div class="cover-container <?php if($contentdisplay == 'content'):?>contentdisplayed <?php endif;?>">
          
          <?php echo $content_for_layout;?>
            <div class="mastfoot">
              
              <p> Hak cipta dilindungi undang undang atas nama <br/>PT.Ide Hasama Indonesia</p>
              <img src="<?php echo $this->webroot?>art/smicro_new/hasama_logo.png">
              
            <!-- <div class="inner">
              <p>SKOPE dibuat di Indonesia dengan agsfsfgsgasafgsagf.</p>
            </div> -->
          </div>
        </div>
        <form id="form" action="" onsubmit="return submitfunction();" >
          <input type="hidden" id="user" value="" /><input id="m" autocomplete="off" placeholder="Type yor message here.." /><input type="submit" id="button" value="Send"/>
          <button id="share-file" disabled>Share File</button><a href="<?php echo $this->webroot;?>js/filemanager/dialog.php?type=2&field_id=m" class="btn iframe-btn" type="button">Open File Manager</a><button id="file">Share Fucking File</button>
        </form>
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
          $(window).trigger('fancyboxBeforeClose');
          //$('#mikroskoppage').html('');
        }
        
      }); //fancybox
    });
    </script>
    <script type="text/javascript">
    //window.appurlname = '<?php echo $urlappname;?>';
    </script>
    
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    
  </body>
</html>