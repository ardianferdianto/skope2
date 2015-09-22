    <link rel="stylesheet" type="text/css" href="<?php echo $this->webroot;?>css/draw/canvas_style.css">
    <?php echo $javascript->link('jquery-2.1.4.min.js');?>
    <?php echo $javascript->link('jquery-ui.min.js');?>
    
    <script type="text/javascript" src="<?php echo $this->webroot;?>js/draw/sketch.js"></script>
    <div id="SketchTools">
        <!-- Basic tools -->
        <a href="#SketchPad" data-color="#000000" title="Black"><img src="<?php echo $this->webroot?>images/draw/black_icon.png" alt="Black"/></a>
        <a href="#SketchPad" data-color="#ff0000" title="Red"><img src="<?php echo $this->webroot?>images/draw/red_icon.png" alt="Red"/></a>
        <a href="#SketchPad" data-color="#00ff00" title="Green"><img src="<?php echo $this->webroot?>images/draw/green_icon.png" alt="Green"/></a>
        <a href="#SketchPad" data-color="#0000ff" title="Blue"><img src="<?php echo $this->webroot?>images/draw/blue_icon.png" alt="Blue"/></a>
        <a href="#SketchPad" data-color="#ffff00" title="Yellow"><img src="<?php echo $this->webroot?>images/draw/yellow_icon.png" alt="Yellow"/></a>
        <a href="#SketchPad" data-color="#00ffff" title="Cyan"><img src="<?php echo $this->webroot?>images/draw/cyan_icon.png" alt="Cyan"/></a>
        <br/>
        <!-- Advanced colors -->
        <a href="#SketchPad" data-color="#e74c3c" title="Alizarin"><img src="<?php echo $this->webroot?>images/draw/alizarin_icon.png" alt="Alizarin"/></a>
        <a href="#SketchPad" data-color="#c0392b" title="Pomegrante"><img src="<?php echo $this->webroot?>images/draw/pomegrante_icon.png" alt="Pomegrante"/></a>
        <a href="#SketchPad" data-color="#2ecc71" title="Emerald"><img src="<?php echo $this->webroot?>images/draw/emerald_icon.png" alt="Emerald"/></a>
        <a href="#SketchPad" data-color="#1abc9c" title="Torquoise"><img src="<?php echo $this->webroot?>images/draw/torquoise_icon.png" alt="Torquoise"/></a>
        <a href="#SketchPad" data-color="#3498db" title="Peter River"><img src="<?php echo $this->webroot?>images/draw/peterriver_icon.png" alt="Peter River"/></a>
        <a href="#SketchPad" data-color="#9b59b6" title="Amethyst"><img src="<?php echo $this->webroot?>images/draw/amethyst_icon.png" alt="Amethyst"/></a>
        <a href="#SketchPad" data-color="#f1c40f" title="Sun Flower"><img src="<?php echo $this->webroot?>images/draw/sunflower_icon.png" alt="Sun Flower"/></a>
        <a href="#SketchPad" data-color="#f39c12" title="Orange"><img src="<?php echo $this->webroot?>images/draw/orange_icon.png" alt="Orange"/></a>
        <br/>
        <a href="#SketchPad" data-color="#ecf0f1" title="Clouds"><img src="<?php echo $this->webroot?>images/draw/clouds_icon.png" alt="Clouds"/></a>
        <a href="#SketchPad" data-color="#bdc3c7" title="Silver"><img src="<?php echo $this->webroot?>images/draw/silver_icon.png" alt="Silver"/></a>
        <a href="#SketchPad" data-color="#7f8c8d" title="Asbestos"><img src="<?php echo $this->webroot?>images/draw/asbestos_icon.png" alt="Asbestos"/></a>
        <a href="#SketchPad" data-color="#34495e" title="Wet Asphalt"><img src="<?php echo $this->webroot?>images/draw/wetasphalt_icon.png" alt="Wet Asphalt"/></a>
        <a href="#SketchPad" data-color="#ffffff" title="Eraser"><img src="<?php echo $this->webroot?>images/draw/eraser_icon.png" alt="Eraser"/></a>

        <a href="#SketchPad" data-tool="eraser" title="Reset">Reset</a>
        <a href="#SketchPad" data-tool="marker" title="Reset">Aktifkan Marker</a>

        
        <br/>
        <!-- Size options -->
        <a href="#SketchPad" data-size="1"><img src="<?php echo $this->webroot?>images/draw/pencil_icon.png" alt="Pencil"/></a>
        <a href="#SketchPad" data-size="3"><img src="<?php echo $this->webroot?>images/draw/pen_icon.png" alt="Pen"/></a>
        <a href="#SketchPad" data-size="5"><img src="<?php echo $this->webroot?>images/draw/stick_icon.png" alt="Stick"/></a>
        <a href="#SketchPad" data-size="9"><img src="<?php echo $this->webroot?>images/draw/smallbrush_icon.png" alt="Small brush"/></a>
        <a href="#SketchPad" data-size="15"><img src="<?php echo $this->webroot?>images/draw/mediumbrush_icon.png" alt="Medium brush"/></a>
        <a href="#SketchPad" data-size="30"><img src="<?php echo $this->webroot?>images/draw/bigbrush_icon.png" alt="Big brush"/></a>
        <a href="#SketchPad" data-size="60"><img src="<?php echo $this->webroot?>images/draw/bucket_icon.png" alt="Huge bucket"/></a>
        <br/>
        <a href="#SketchPad" data-download='png' id="DownloadPng">Download .PNG</a>
        <br/>
    </div>
    <div id="SketchPadArea">
    <span class="draggable">*<input type="text " id="" class="resizable ui-state-active" value="This is input box"></span>
    <canvas id="SketchPad" width="450" height="300" >
    </div>

        
    </canvas>

    <script type="text/javascript">
    var canvas = document.getElementById('SketchPad'),
    context = canvas.getContext('2d');

    make_base();

    function make_base()
    {
      base_image = new Image();
      base_image.src = '<?php echo $this->webroot;?>files/image_mikroskop/<?php echo $imageurl;?>';
      base_image.onload = function(){
        context.drawImage(base_image, 100, 100);
      }
    }
   
    

    
      $(function() {
        $('#SketchPad').sketch();
      });
    $(function() {
        $( ".resizable" ).resizable({
            containment: "#SketchPad"
        });
        $( ".draggable" ).draggable({containment: "#SketchPad"});
    });
    </script>
        
