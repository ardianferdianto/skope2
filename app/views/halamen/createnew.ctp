<div class="masthead clearfix">
  <div class="inner">
   <h1 class="cover-heading">
    <span style="color:#40c4ff;font-size:7em;">SKO</span><span style="color:#fdd734;font-size:7em;">PE</span><br/>
    theSMARTMICROSCOPE</h1>
  </div>
</div>

<div class="inner cover animsition">

  <div class="row" id="createnew_panel">
    <div class="col-md-3 leftpanel">

    </div>
    <div class="col-md-9 rightpanel">
      <div class="title_container_createnew">
        <h1 class="title_createnew"> Pembuatan Penelitian </h1>
        <p>Selamat datang di modul pembuatan penilitian, untuk memulai silahkan isi judul dan identitas penelitian yang di perlukan </p>
      </div>

      <div id="step1_createnew" class="wizard_createnew">
        <?php echo $form->create('Halaman',array('action'=>'createnew'));?>
          
          <div class="form-group">
            <label for="exampleInputEmail1">Judul Penelitian</label>
            <input type="text" class="form-control" name="data[Lesson][title]" id="LessonTitle" maxlength="255" value="">
          </div>

          <div class="form-inline">
            <div class="form-group">
              <label for="exampleInputEmail1">Mata Pelajaran</label>
              <select type="text" class="form-control" name="data[Lesson][pelajaran_id]" id="LessonTitle">
                <?php foreach ($listPelajaran as $pelajaran ):?>
                  <option value="<?php echo $pelajaran['Pelajaran']['id'] ?>">
                    <?php echo $pelajaran['Pelajaran']['nama'] ?>
                  </option>
                <?php endforeach; ?>
              </select>          
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Kelas</label>
              <select type="text" class="form-control" name="data[Lesson][grade_id]" id="LessonTitle">
                <?php foreach ($kelasID as $pelajaran ):?>
                  <option value="<?php echo $pelajaran['title'] ?>">
                    <?php echo $pelajaran['title'] ?>
                  </option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="form-group clearfix">
              <label for="exampleInputEmail1">Warna Cover</label>
                <select type="text" class="form-control" name="data[Lesson][color]" id="colorselector">
                  <option value="yellow" data-color="#CCBF06">Kuning</option>
                  <option value="blue" data-color="#206da1">Biru</option>
                  <option value="green" data-color="#08a613">Hijau</option>
                  <option value="grey" data-color="#969084">Abu-abu</option>
                </select>
                </div>
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Nama Group</label>
            <input type="text" class="form-control"  name="data[Lesson][author]" id="exampleInputEmail155555" placeholder="">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Deskripsi Singkat penelitian</label>
            <input id="awe" type="text" class="form-control"  name="data[Lesson][description]" id="exampleInputEmail2342341" placeholder="">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Anggota group</label>
            <textarea class="form-control" name="data[Lesson][kelompok]" rows="3"></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Simpan</button>

        <?php $form->end();?>
      </div>
    </div>
  </div>

</div>

<script>
  $('#colorselector').colorselector({
    callback: function (value, color, title) {
      $("#colorValue").val(title);
      $("#colorColor").val(color);
    }
  });
</script>