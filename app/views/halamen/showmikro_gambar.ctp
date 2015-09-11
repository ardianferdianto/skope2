
<video id="myImage" class="video-js vjs-default-skin" style="margin-left:10px;"></video>
<br/>
<button type="button" class="btn btn-primary insertgambarmikroskop" style="display:none;">Masukkan Gambar</button>

<script>
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
    /*$.ajax({
      type: "GET",
      url: '<?php echo $this->webroot;?>halamen/saveimage',
      data: {image:player.recordedData},
    });*/
    // the blob object contains the image data that
    // can be downloaded by the user, stored on server etc.

    alert('stop');
});

// snapshot is available
player.on('finishRecord', function()
{
    // the blob object contains the image data that
    // can be downloaded by the user, stored on server etc.
    
    $.ajax({
        type: "POST",
        url: '<?php echo $this->webroot;?>halamen/saveimage',
        data: {image:player.recordedData},
        success: function(data){ 
            $('.insertgambarmikroskop').show();
        }
    });

    console.log('snapshot ready: ', player.recordedData);
});
$(document).on('click',function(){
    //$.fancybox.close();
    var html = '<a href="#">my anchor</a>';
    var oEditor = CKEDITOR.instances.rich_ed;
    console.log(oEditor);
    CKEDITOR.instances.rich_ed.insertHtml(html);
    

    //console.log($('textarea').ckeditorGet())
    //var oEditor = CKEDITOR.instances.rich_ed;
    //var html = "<a href='#''>my anchor</a>";

    //var newElement = CKEDITOR.dom.element.createFromHtml( html, oEditor.document );
    //oEditor.insertHtml( html );

    //CKEDITOR.instances.rich_ed.insertHtml('<p>This is a new paragraph.</p>');    
})


</script>
