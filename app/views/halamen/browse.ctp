
BROWSE
<?php echo $halamanbuatkeview['Halaman']['id'];?>
<?php foreach ($halamanbuatkeview as $item) :?>
  <h5><?php echo $item['Halaman']['lesson_id'];?></h5>
<?php endforeach;?>
<div class="masthead clearfix">
  <div class="inner">
   <h1 class="cover-heading">
    <span style="color:#40c4ff;font-size:7em;">SKO</span><span style="color:#fdd734;font-size:7em;">PE</span><br/>
    theSMARTMICROSCOPE</h1>
  </div>
</div>

<div class="inner cover animsition">
  
  <p class="lead" style="margin-top:20px;margin-bottom:25px;">Selamat datang di SKOPE<br/>silahkan anda pilih menu dibawah untuk memulai</p>
  <p class="lead">
    <!--<a href="#" class="btn btn-lg btn-default">Learn more</a>-->
  </p>

  <div class="row" id="mainmenu">
  	<div class="col-md-4 animsition">
  		<a href="<?php echo $this->webroot;?>halamen/createnew" id="makenew" class="home_button_main"><span class="glyphicon glyphicon-plus icon_home" aria-hidden="true"></span><br/>
  			<span>BUAT <br/>PENELITIAN</span>
  		</a>
</div>

<div class="col-md-4 animsition">
  		<a href="#" id="browse" class="home_button_main"><span class="glyphicon glyphicon-th icon_home" aria-hidden="true"></span><br/>
  			<span>CARI <br/>PENELITIAN</span>
  		</a>
</div>

<div class="col-md-4 animsition">
  		<a href="<?php echo $this->webroot;?>halamen/showcam" id="preview" class="home_button_main animsition-link" data-animsition-out="fade-out-up" data-animsition-out-duration="1000"><span class="glyphicon glyphicon-search icon_home" aria-hidden="true"></span><br/>
  			<span>PREVIEW <br/>MIKROSKOP</span>
  		</a>
</div>
  </div>
</div>
