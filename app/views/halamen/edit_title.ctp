<?php echo $form->create('Halaman',array('action'=>'edit_title/'.$halamanID,'id'=>'title_ed'));?>
          
          <div class="form-group">
            <label for="exampleInputEmail1">Judul Penelitian</label>
            <?php echo $form->input('Lesson.title',array('label'=>false,'type'=>'text','class'=>'form-control'));?>
            <!-- <input name="data[Lesson][title]" type="text" class="form-control" value="Menghitung Bilangan Bulat" id="LessonTitle"> -->
            <!-- <input type="text" class="form-control" name="data[Lesson][title]" id="LessonTitle" maxlength="255" value=""> -->
          </div>

          <div class="form-inline">
            <div class="form-group">
              <label for="exampleInputEmail1">Mata Pelajaran</label>
              <?php
              //echo $form->select('pelajaran_id',$pelajaranlist);
              ?>
                      
              <?php 
              $pelajaran = $pelajaranlist;
              
              echo $form->input('Lesson.pelajaran_id', array('label'=>false,'class'=>'form-control','options' => $pelajaranlist, 'empty' => '(Pilih Tingkat Kesulitan)'));
              ?>

            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Kelas</label>
              <?php echo $form->input('Lesson.grade_id',array('label'=>false,'class'=>'form-control','options'=>$opsi));?>
            </div>

            <div class="form-group clearfix">
              <label for="exampleInputEmail1">Warna Cover</label>
                <?php 
                $colors = array(
                                "yellow"=>array('name' => 'Kuning', 'value' => "yellow",  'data-color' => '#CCBF06'),
                                "blue"=>array('name' => 'Biru', 'value' => "blue",  'data-color' => '#206da1'),
                                "green"=>array('name' => 'Hijau', 'value' => "green",  'data-color' => '#08a613'),
                                "grey"=>array('name' => 'Abu-abu', 'value' => "grey",  'data-color' => '#969084'));
                echo $form->input('Lesson.color', array('label'=>false,'class'=>'form-control','options' => $colors, 'id' => 'colorselector'));
                ?>
                </div>
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Nama Group</label>
            
            <?php echo $form->input('Lesson.author',array('label'=>false,'type'=>'text','class'=>'form-control'));?>
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Deskripsi Singkat penelitian</label>
            <?php echo $form->input('Lesson.description',array('label'=>false,'type'=>'text','class'=>'form-control'));?>
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Anggota group</label>
            
            <?php echo $form->input('Lesson.kelompok',array('label'=>false,'type'=>'textarea','class'=>'form-control','rows'=>"3"));?>
          </div>

          

        </form>
        <button id="title_subm" class="btn btn-primary">Simpan</button>
<script>

     $('select#colorselector.form-control').colorselector({
        callback: function (value, color, title) {
          $("#colorValue").val(title);
          $("#colorColor").val(color);
        }
      });
/*var options_submitformtryout = {
  //beforeSubmit:  showRequest,  // pre-submit callback 
  success:       showResponse_submitformtryout  // post-submit callback
};*/
 /* $('#colorselector').colorselector({
    callback: function (value, color, title) {
      $("#colorValue").val(title);
      $("#colorColor").val(color);
    }
  });*/
/*  $('#title_subm').on("click",function(){
    //alert("hai");
    $('#title_ed').ajaxSubmit(options_submitformtryout);
    
  });
  function showResponse_submitformtryout(responseText, statusText, xhr, $form)  { 
      setTimeout(function() {
        alert('success');
      }, 1000);
    }*/
</script>