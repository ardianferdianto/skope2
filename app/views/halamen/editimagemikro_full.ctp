<div id="anotationcontainer">
<?php 
$varrecorder = uniqid();
?>
<link rel="stylesheet" type="text/css" href="<?php echo $this->webroot;?>css/draw/style.css">

<style type="text/css">
body{
  background: #384047;
}
.draggable { 
  width: 20px; height: 20px; padding: 0.5em; 
  position: absolute;
  font-size: 11px;
}
.draggable textarea{
  background: rgba(255,255,255,0.2);
  border: 1px solid rgba(0,0,0,0.5);
  position: absolute;
}
.draggable .moveicon{
border: none;
cursor: -webkit-grab; cursor: -moz-grab;

}
.draggable{
  border: none;
}
.trashicon{
  position: absolute;
  left: 130px;
  top: 5px;
  cursor: pointer;
}
.colortext_selector{
  width: 10px;
  height: 10px;
  position: absolute;
  left: 110px;
  top: 6px;
  display: block;
  background: #000;
  

}
.colortextareacontainer{
    background-color: #fff;
    float: left;
    padding: 10px;
    position: absolute;
    top: -28px;
    left: 67px;
    width: 100px;
}
.colortextavailable{
  width: 10px;
  height: 10px;
  display: inline-block;
  float: left;
  margin-right: 10px;
  border: 1px solid #000;
}
.colortextavailable.selected{
  border: 2px solid red;
}

.colortextavailable#black{
  background: #000;
}

.colortextavailable#white{
  background: #fff;
}

.colortextavailable#red{
  background: red;
}

.colortextavailable#blue{
  background: blue;
}

</style>
<div id="containercanvas">



<canvas id="myCanvas_<?php echo $varrecorder;?>" width="320" height="240"></canvas>
</div>
<div class="controls">
<ul>

<li class="white textboxinsert"><span>A</span></li>

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




$(".reset").on("click", function(){

  var canvas = document.getElementById('myCanvas_<?php echo $varrecorder;?>');
  console.log('clear');
  context.clearRect(0, 0, canvas.width, canvas.height);
  loadImage();

});



function loadImage(){

    
    base_image = new Image();
    base_image.src = '<?php echo $imageurl;?>';

    base_image.onload = function() {
        context.drawImage(base_image, 0, 0);
        //context.drawImage(imageObj, 69, 50);
    };
    
    
}

loadImage();

$("#download").click(function(){
  
  draw_text();
   var c = document.getElementsByTagName("canvas")[0];

  mime = "image/png";
  var dataUrl = c.toDataURL(mime);
  

    $.ajax({
        type: "POST",
        url: '<?php echo $this->webroot;?>halamen/saveimage',
        data: {image:dataUrl},
        success: function(data){ 
            
            
            datatoinsert = data;
            
            inserttoCKEditor(datatoinsert);

            
        }
    });
  
  
});

function inserttoCKEditor(imagefilename){

    var imageinserted = imagefilename;
    //$.fancybox.close();
    var html = '<img src="<?php echo $this->webroot;?>files/image_mikroskop/'+imageinserted+'" width="200"/>';
    var oEditor = CKEDITOR.instances.rich_ed;
    console.log(oEditor);
    CKEDITOR.instances.rich_ed.insertHtml(html);

    //var oldPlayer = document.getElementById('myImage');
    //videojs(oldPlayer).dispose(); 
    
    $.fancybox.close();
    
    return false;
    
}

var ItemArray = [];
ItemArray.push({
    RoomName : 'RoomName', 
    Item : []
});



var arraytextbox ={};

window.indextextbox = -1;
$(".textboxinsert").click(function(){
  window.indextextbox++;
  console.log(window.indextextbox);
  //var indextextbox = '<?php echo uniqid();?>';
  var elementinsert = '<div id="textareadrag_'+window.indextextbox+'" class="ui-widget-content draggable"><img class="moveicon" src="<?php echo $this->webroot?>images/move_12x12.png"><div class="colortextareacontainer" style="display:none;"><a class="colortextavailable selected" id="black" data-color="#000" href="#"></a><a class="colortextavailable" id="white" href="#" data-color="#fff"></a><a class="colortextavailable" id="red" href="#" data-color="#ff0000"></a><a class="colortextavailable" id="blue" href="#" data-color="#0055cc"></a></div><span class="colortext_selector"></span><img class="trashicon" src="<?php echo $this->webroot?>images/trash_stroke_12x12.png"><textarea>Drag me around</textarea></div>';

  $('#containercanvas').prepend(elementinsert);
  arraytextbox['textareadrag_'+window.indextextbox] = {
        positionLeft: 0,
        positionTop: 0
  };
  
  

  $( ".draggable" ).draggable({
    cursor: "hand",
    
    containment: "#containercanvas",
      start: function() {
        $(this).find( "textarea" ).css( "background", "rgba(255,255,255,0.8)" );
      } , 
      stop: function() {
        arraytextbox['textareadrag_'+window.indextextbox].positionLeft = $(this).position().left;
        arraytextbox['textareadrag_'+window.indextextbox].positionTop = $(this).position().top;
        
        console.log(arraytextbox);
        $(this).find( "textarea" ).css( "background", "rgba(255,255,255,0.2)" );
      }
  });

});

function draw_text(){
    var data = arraytextbox;
    
    $.each(data, function( k, v ) {
      var leftposition_final  = 0;
      var topposition_final  = 0;
      console.log(v +'dan k'+k);
      var valuetext = $('#'+k+' textarea').val();
      var colortext = $('#'+k+' textarea').data('color');
      //alert( "Key: " + k + ", Value: " + v );
      $.each(v, function( k1, v1 ) {
        if(k1=='positionLeft'){
          leftposition_final =v1+10;
        }else if(k1=='positionTop'){
          topposition_final =v1+25;  
        }
        
      });
      writetext(valuetext,leftposition_final,topposition_final,colortext);
      //console.log(valuetext,leftposition_final,topposition_final);
    });


    console.log(data);
    
  
}

function writetext(valuetext,leftposition_final,topposition_final,colortext){
  context.font = "13px Arial";
  context.fillStyle = colortext;
  context.fillText(valuetext,leftposition_final,topposition_final);

}

$('body').on('click', '.trashicon', function () {
  $(this).parent().remove();
});


$('body').on('click', '.colortext_selector', function () {
  $(this).parent().find('.colortextareacontainer').show();
});

$('body').on('click', '.colortextavailable', function () {
  $('.colortextareacontainer').hide();
  var colorselected = $(this).data('color');
  $('.colortextavailable').removeClass('selected');
  $(this).addClass('selected');
  $(this).parent().parent().find('textarea').css('color',colorselected);
  $(this).parent().parent().find('textarea').data('color',colorselected);

  $(this).parent().parent().find('.colortext_selector').css('background',colorselected);

});



</script>
</div>
