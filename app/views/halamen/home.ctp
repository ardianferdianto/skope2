

<div class="masthead clearfix">
  <div class="inner">
   <h1 class="cover-heading">
    <img src="<?php echo $this->webroot?>art/smicro_new/logo.png">
    </h1>
  </div>
</div>

<div class="inner cover menuhome animsition ">
  
  <p class="lead" style="margin-top:-20px;margin-bottom:25px;font-size:1em;">Selamat datang di SKOPE<br/>silahkan anda pilih menu dibawah untuk memulai</p>
  <p class="lead">
    <!--<a href="#" class="btn btn-lg btn-default">Learn more</a>-->
  </p>

  <div class="row" id="mainmenu">
  	<div class="col-md-4 animsition">
      <div id="home_createpenelitian">
  		<a href="<?php echo $this->webroot;?>halamen/createnew" id="makenew" class="home_button_main">
  			<img src="<?php echo $this->webroot;?>art/smicro_new/create.png"/>
  		</a>
      </div>
      <span class="desc_menu_home">Buat Penelitian</span>
</div>

<div class="col-md-4 animsition " id="">
      <div id="home_browsepenelitian">
      <a href="<?php echo $this->webroot;?>halamen/cari" id="makenew" class="home_button_main">
        <img src="<?php echo $this->webroot;?>art/smicro_new/browse.png"/>
      </a>
      </div>
      <span class="desc_menu_home">Cari Penelitian</span>

  		
</div>

<div class="col-md-4 animsition">
  		<div id="home_previewpenelitian">
      <a href="<?php echo $this->webroot;?>halamen/showcam" id="makenew" class="home_button_main">
        <img src="<?php echo $this->webroot;?>art/smicro_new/preview.png"/>
      </a>
      </div>
      <span class="desc_menu_home">Preview Mikroskop</span>
</div>
  </div>
</div>
