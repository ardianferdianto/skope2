
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
           
            <input name="data[Lesson][title]" type="text" class="form-control" maxlength="255" value="" id="LessonTitle">
           
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Nama Group</label>
            <input type="text" class="form-control"  name="data[Lesson][author]" id="exampleInputEmail155555" placeholder="">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Deskripsi Singkat penelitian</label>
            <input type="text" class="form-control"  name="data[Lesson][description]" id="exampleInputEmail2342341" placeholder="">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Anggota group</label>
            <textarea class="form-control" rows="3"></textarea>
          </div>

          
          <button type="submit" class="btn btn-primary">Simpan</button>
        <?php $form->end();?>
      </div>
    </div>
  </div>

</div>

