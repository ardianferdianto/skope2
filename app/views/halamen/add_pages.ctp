<button type="button" class="btn btn-warning btn-lg buttonmikroskop" >
    <span class="glyphicon glyphicon glyphicon-facetime-video" aria-hidden="true"></span> <br/>Connect Mikroskop
</button>
  <?php echo $form->create('Halaman',array('action'=>'','id'=>'pages_add'));?>  
  <div class="form-group">
    <label for="exampleInputEmail1">Deskripsi Halaman</label>
    <?php //echo $lessonID; ?>
    <?php //echo $page;?>
    <?php echo $form->input('deskripsi_halaman',array('label'=>false,'type'=>'text','class'=>'form-control'));?>
  </div>

  <div class="form-group clearfix">
    <div class="form-group">
      <label for="exampleInputPassword1">Isi Penelitian</label>
      <?php echo $form->input('content',array('id'=>'rich_ed','label'=>false,'type'=>'textarea','class'=>'form-control','cols'=>'30','rows'=>'3'));?>
    </div>
  </div>
  
<?php echo $form->end();?>
<button id="add_page" class="btn btn-primary">Simpan</button>
<script>
  CKEDITOR.replace('rich_ed' ,{
filebrowserBrowseUrl : '<?php echo $this->webroot;?>js/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
filebrowserUploadUrl : '<?php echo $this->webroot;?>js/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
filebrowserImageBrowseUrl : '<?php echo $this->webroot;?>js/filemanager/dialog.php?type=1&editor=ckeditor&fldr='});
</script>