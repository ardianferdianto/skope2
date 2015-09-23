<!--<a href="<?php echo $this->webroot;?>js/filemanager/dialog.php?type=0" type="button" class="btn btn-warning btn-lg buttonexplorer" >
    <span class="glyphicon glyphicon glyphicon-facetime-video" aria-hidden="true"></span> <br/>Connect Mikroskop
</a>-->
<button type="button" class="btn btn-warning btn-lg buttonmikroskop" >
    <span class="glyphicon glyphicon glyphicon-facetime-video" aria-hidden="true"></span> <br/>Connect Mikroskop
</button>
          <?php echo $form->create('Halaman',array('action'=>'','id'=>'pages_ed'));?>  
          <div class="form-group">
            <label for="exampleInputEmail1">Deskripsi Halaman</label>
            <?php echo $form->input('deskripsi_halaman',array('label'=>false,'type'=>'text','class'=>'form-control'));?>
          </div>

            <div class="form-group clearfix">
              <!-- <label for="exampleInputEmail1">Warna Cover</label> -->
                <?php 
                /*$colors = array(
                                "yellow"=>array('name' => 'Kuning', 'value' => "yellow",  'data-color' => '#CCBF06'),
                                "blue"=>array('name' => 'Biru', 'value' => "blue",  'data-color' => '#206da1'),
                                "green"=>array('name' => 'Hijau', 'value' => "green",  'data-color' => '#08a613'),
                                "grey"=>array('name' => 'Abu-abu', 'value' => "grey",  'data-color' => '#969084'));
                echo $form->input('Lesson.color', array('label'=>false,'class'=>'form-control','options' => $colors, 'id' => 'colorselector'));*/
                ?>
               <!--  </div> -->
               <div class="form-group">
                  <label for="exampleInputPassword1">Isi Penelitian</label>
                  <?php echo $form->input('content',array('id'=>'rich_ed','label'=>false,'type'=>'textarea','class'=>'form-control','cols'=>'30','rows'=>'3'));?>
                </div>
          </div>
          
       <?php echo $form->end();?>
        <button id="page_subm" class="btn btn-primary">Simpan</button>
        <script>
        
          CKEDITOR.config.allowedContent = true;
          CKEDITOR.replace('rich_ed' ,{
  filebrowserBrowseUrl : '<?php echo $this->webroot;?>js/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
  filebrowserUploadUrl : '<?php echo $this->webroot;?>js/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
  filebrowserImageBrowseUrl : '<?php echo $this->webroot;?>js/filemanager/dialog.php?type=1&editor=ckeditor&fldr='});

          
     /*   $('.buttonexplorer').fancybox({
        'width' : 880,
        'height'  : 570,
        'type'  : 'iframe',
        'autoScale'   : false
          });*/

    


        

        </script>