<link rel="stylesheet" type="text/css" href="<?php echo $this->webroot;?>css/draw/style.css">


<div id="containercanvas">
<canvas id="myCanvas" width="320" height="240"></canvas>
</div>
<div class="controls">
<ul>

<li class="white reset"><span>RESET</span></li>
<li class="red colorlist selected"></li>
<li class="blue colorlist"></li>
<li class="yellow colorlist"></li>
<li class="black colorlist"></li>

</ul>
<button class="reveal" id="revealColorSelect">Warna lain</button>
<button class="reveal" id="download">Masukkan Gambar</button>
<div id="colorSelect"> <span id="newColor"></span>
<div class="sliders">
<p>
<label for="red">Red</label>
<input id="red" name="red" type="range" min=0 max=255 value=0>
</p>
<p>
<label for="green">Green</label>
<input id="green" name="green" type="range" min=0 max=255 value=0>
</p>
<p>
<label for="blue">Blue</label>
<input id="blue" name="blue" type="range" min=0 max=255 value=0>
</p>
</div>
<div>
<button id="addNewColor">Tambah Warna</button>
</div>
</div>
</div>

<script src="<?php echo $this->webroot;?>js/draw/app.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript">

var context = $canvas[0].getContext("2d");

function loadImage(){
    base_image = new Image();
    base_image.src = 'http://localhost:8888/skope2/files/image_mikroskop/<?php echo $imageurl;?>';
    base_image.onload = function(){
      context.drawImage(base_image, 0, 0);
      // set to draw behind current content
    }
}
loadImage();

$(".reset").on("click", function(){
  var canvas = document.getElementById('myCanvas');
  
  console.log('clear');

  context.clearRect(0, 0, canvas.width, canvas.height);
  loadImage();
});


$("#download").click(function(){
  
   var c = document.getElementsByTagName("canvas")[0];

  mime = "image/png";
  var dataUrl = c.toDataURL(mime);
  

    $.ajax({
        type: "POST",
        url: '<?php echo $this->webroot;?>halamen/saveimage',
        data: {image:dataUrl},
        success: function(data){ 
            //$('.insertgambarmikroskop').show();
            //$('#anotegambarmikroskop').show();
            
            datatoinsert = data;
            //$('#anotegambarmikroskop').attr('data-urlimage','<?php echo $this->webroot;?>halamen/editimagemikro?filename='+data);
            //$( "#showgambarmikroskop button#anotegambarmikroskop" ).data( "urlimage", 52 );

            //$('#showgambarmikroskop button#anotegambarmikroskop').data('urlimage','asdjasdhasdhjasdjhasdajsdj');
            inserttoCKEditor(datatoinsert);
            //alert(datatoinsert);
            
            
            
        }
    });
  //window.open(c.toDataURL(mime));
  //window.open(dataUrl, "toDataURL() image", "width=500, height=300");
  
});

function inserttoCKEditor(imagefilename){

    var imageinserted = imagefilename;
    //$.fancybox.close();
    var html = '<img src="<?php echo $this->webroot;?>files/image_mikroskop/'+imageinserted+'" width="200"/>';
    var oEditor = CKEDITOR.instances.rich_ed;
    console.log(oEditor);
    CKEDITOR.instances.rich_ed.insertHtml(html);

    
    $.fancybox.close();
    
    return false;
    
}

</script>
