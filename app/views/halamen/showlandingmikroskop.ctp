<?php 
$varrecorder = uniqid();
?>
<div id="mikroskoplanding">
  
  <div class="row">
      <div class="optionmikroskop">
        <br/>
        <br/>
        <h3>PILIH TIPE OUTPUT <br/>YANG ANDA INGINKAN</h3>
        <br/>
        <br/>
      </div>
      <div class="col-md-6 optionmikroskop">
        <a href="#" class="btn btn-info btn-lg btn-block gambar_mikroskop" id="gambar_choosed">
          <span class="glyphicon glyphicon-picture" aria-hidden="true"></span>
          <br/>Gambar</a>
      </div>
      <div class="col-md-6 optionmikroskop">
        <a href="#" id="video_choosed" class="btn btn-info btn-lg btn-block gambar_mikroskop">
          <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
          <br/>Video</a>
      </div>

      <div id="showgambarmikroskop" style="display:none;">
        <video id="myImage" class="video-js vjs-default-skin" style="margin-left:10px;"></video>
        <br/>
        <button type="button" class="btn btn-primary insertgambarmikroskop" style="display:none;">Masukkan Gambar</button>

        <button type="button" class="btn btn-primary" id="anotegambarmikroskop" style="display:none;" data-urlimage="">Anotasi Gambar</button>

        <script>
        
        


        </script>

      </div>

      <div id="showvideomikroskop" style="display:none;">

        <video id="myRecordVideo" class="video-js vjs-default-skin" style="margin-left:20px;"></video>
        <br/>
        <button type="button" class="btn btn-primary insertvideomikroskop" style="display:none;">Selesai</button>

        <script>
        
        

        </script>

      </div>
  </div>
</div>

<script type="text/javascript">

$(window).on('fancyboxBeforeClose', function(){
    if($('#showgambarmikroskop').is(':visible')) {
    var oldPlayer2 = document.getElementById('myImage');
    videojs(oldPlayer2).dispose(); 
    }
    console.log('dtetetette');
});

$(document).on('click', '#gambar_choosed',function(e){
  e.preventDefault(); // avoids calling preview.php

  $('.optionmikroskop').fadeOut();
  $('#showgambarmikroskop').fadeIn();

  var player = videojs("myImage",
        {
            controls: true,
            width: 320,
            height: 240,
            children: {
                controlBar: {
                    children: {
                        currentTimeDisplay: false,
                        timeDivider: false,
                        durationDisplay: false,
                        muteToggle: false,
                        volumeControl: false,
                        fullscreenToggle: false
                    }
                }
            },
            plugins: {
                record: {
                    image: true
                }
            }
        });

        //player.videojs.destroy();

        // change player background color
        player.el().style.backgroundColor = "#6B2DA8";

        // error handling
        player.on('deviceError', function()
        {
            console.warn('device error:', player.deviceErrorCode);
        });

        player.on('startRecord', function()
        {
            $('.insertgambarmikroskop').hide();
            $('.anotegambarmikroskop').hide();
            
            /*$.ajax({
              type: "GET",
              url: '<?php echo $this->webroot;?>halamen/saveimage',
              data: {image:player.recordedData},
            });*/
            // the blob object contains the image data that
            // can be downloaded by the user, stored on server etc.

            //alert('stop');
        });

        // snapshot is available
        var datatoinsert = '';
        player.on('finishRecord', function()
        {
            // the blob object contains the image data that
            // can be downloaded by the user, stored on server etc.

            datatoinsert = '';
            $.ajax({
                type: "POST",
                url: '<?php echo $this->webroot;?>halamen/saveimage',
                data: {image:player.recordedData},
                success: function(data){ 
                    $('.insertgambarmikroskop').show();
                    $('#anotegambarmikroskop').show();
                    
                    datatoinsert = data;
                    $('#anotegambarmikroskop').attr('data-urlimage','<?php echo $this->webroot;?>halamen/editimagemikro?filename='+data);
                    //$( "#showgambarmikroskop button#anotegambarmikroskop" ).data( "urlimage", 52 );

                    //$('#showgambarmikroskop button#anotegambarmikroskop').data('urlimage','asdjasdhasdhjasdjhasdajsdj');
                    //alert(datatoinsert);
                    
                    
                    
                }
            });

            console.log('snapshot ready: ', player.recordedData);
        });

        $('.insertgambarmikroskop').on('click', function(e){
            e.preventDefault();
            var imageinserted = datatoinsert;
            //$.fancybox.close();
            var html = '<img src="<?php echo $this->webroot;?>files/image_mikroskop/'+imageinserted+'" width="200"/>';
            var oEditor = CKEDITOR.instances.rich_ed;
            console.log(oEditor);
            CKEDITOR.instances.rich_ed.insertHtml(html);

            var oldPlayer = document.getElementById('myImage');
            videojs(oldPlayer).dispose(); 
            
            $.fancybox.close();

            return false;
        });
      
  return false;
});

$(document).on('click', '#anotegambarmikroskop',function(e){

    e.preventDefault(); // avoids calling preview.php

    var oldPlayer = document.getElementById('myImage');
    videojs(oldPlayer).dispose(); 

    var Href = $(this).data('urlimage');

    $.fancybox({
        type: 'ajax',
        width:650,
        height:450,
        autoSize: false,
        padding:0,
        title   : 'CONNECT MIKROSKOP',
        content: '<div id="anotationcontainer"></div>',
        beforeShow : function(){
        $.ajax({
          type: "GET",
          dataType: "html",
          cache: false,
          url: Href, // preview.php
          //data: $("#postp").serializeArray(), // all form fields
          success: function (data) {
            $('#anotationcontainer').append(data);

            
            
          } // success
        }); // ajax
        },
        beforeClose : function(){
            $('#anotationcontainer').remove();
            var oldPlayer = document.getElementById('myImage');
            videojs(oldPlayer).dispose(); 
            //$('#mikroskoppage').html('');
        }
    });
    return false;
});






$(document).on('click', '#video_choosed',function(e){
  e.preventDefault(); // avoids calling preview.php

  $('.optionmikroskop').fadeOut();
  $('#showvideomikroskop').fadeIn();



        var videotoinsert = '';
        var randnumber = '';
        var playerVideo = videojs("myRecordVideo",
        {
            controls: true,
            width: 320,
            height: 240,
            children: {
                controlBar: {
                    children: {
                        muteToggle: false,
                        volumeControl: false
                    }
                }
            },
            plugins: {
                record: {
                    audio: false,
                    video: true,
                    maxLength: 100000000
                }
            }
        });

        // change player background color
        playerVideo.el().style.backgroundColor = "#47AFD1";

        // error handling
        playerVideo.on('deviceError', function()
        {
            console.warn('device error:', player.deviceErrorCode);
        });

        // user clicked the record button and started recording
        playerVideo.on('startRecord', function()
        {
            randnumber = Math.random().toString(36).substr(2, 9);
            videotoinsert = '';
            $('.insertvideomikroskop').hide();
            console.log('started recording!');
        });


        // user completed recording and stream is available
        playerVideo.on('finishRecord', function()
        {
            $('.insertvideomikroskop').show();
            var fileType = 'video'; // or "audio"

            var fileName = 'video-'+randnumber+'.webm';  // or "wav"

            blob = playerVideo.recordedData;
            var formData = new FormData();
            formData.append(fileType + '-filename', fileName);
            formData.append(fileType + '-blob', blob);

            xhr('<?php echo $this->webroot;?>halamen/savevideo', formData, function (fName) {
                
            });

            function xhr(url, data, callback) {
                var request = new XMLHttpRequest();
                request.onreadystatechange = function () {
                    if (request.readyState == 4 && request.status == 200) {
                        videotoinsert = request.responseText;
                        
                        //callback(location.href + request.responseText);
                    }
                };
                request.open('POST', url);
                request.send(data);
            }
            
        });

         $('.insertvideomikroskop').on('click', function(e){
            e.preventDefault();
            var imageinserted = videotoinsert;
            //$.fancybox.close();
            var videoInserted = '<video id="really-cool-video" class="video-js vjs-default-skin" controls preload="auto" ><source src="<?php echo $this->webroot;?>files/video_mikroskop/'+imageinserted+'" type="video/webm"></video>';

            var toencode ='<cke:video controls="controls" poster="http://localhost/skope/app/webroot/source/6.png" id="video<?php echo $varrecorder;?>"><cke:source src="<?php echo $this->webroot;?>files/video_mikroskop/'+imageinserted+'" type="video/webm"><cke:source src="<?php echo $this->webroot;?>files/video_mikroskop/'+imageinserted+'" type="video/webm"></cke:source></cke:source></cke:video>';

            var encoded = encodeURIComponent(toencode);
            

            var toinserted = '<img class="cke_video" data-cke-realelement="'+encoded+'" data-cke-real-node-type="1" alt="Video" title="Video" align="" src="" data-cke-real-element-type="video" style="width: 555px; height: 408px; background-image: url(http://localhost/skope/app/webroot/source/6.png);">';
            

            
            
            CKEDITOR.instances.rich_ed.insertHtml(toinserted);
            //void('Video');

            // get the videojs player with id of "video_1"

            var oldPlayer = document.getElementById('myRecordVideo_html5_api');
            videojs(oldPlayer).dispose(); 
              
            $.fancybox.close();


            //$("myRecordVideo-<?php echo $varrecorder;?>").videojs.destroy();

            return false;
        });
  return false;
});
</script>





