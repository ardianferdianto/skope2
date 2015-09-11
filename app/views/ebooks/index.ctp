<style type="text/css">
.sila{
    height: 100px;
    float: left;
    padding:10px 5px 2px;
    text-align: center;
    color: #fff;
    font-size: 10px;
    overflow: hidden;
    -webkit-box-shadow: 3px 3px 5px 0px rgba(50, 50, 50, 0.5);
-moz-box-shadow:    3px 3px 5px 0px rgba(50, 50, 50, 0.5);
box-shadow:         3px 3px 5px 0px rgba(50, 50, 50, 0.5);
}
.sila_matapelajaran{
font-weight: 200;
font-size: 12px;
font-family: "Abril Fatface", serif;
margin-bottom: 4px;
display: block;
margin-top: 1px;
}

.backgroundyellow{
 background: #fccd42;
}
.silabus{
    position: relative;
    display: block;
    z-index: 3;
}
.backgroundblue{
 background: #009bdb;
}
.pelajaran{
    padding-top: 104px;
    text-align: center;
}
.pelajaran a{
    margin-top: 0;
    margin-bottom: 10px;
    float: none;
}

.soal-text h6 {
    
    margin-bottom: 8px;
    
}
.buttonss{
    width: 35px;
    height: 35px;
    display: block;
    margin-bottom: 6px;
}
.divider {
    border-top: 1px solid rgb(204, 204, 204);
    margin: 15px 0px 0px;
    padding: 10px 0px;
    clear: both;
}

.warning-erase {
    background-color: rgb(234, 230, 180);
    padding: 10px;
    text-align: center;
    margin-bottom: 6px;
}

#box{
    position: relative;
}
.bx-wrapper{
    position: absolute;
    top: 21px;
left: 24px;
max-width:400px !important;
}


#flashMessage{
    display: block;
    width: 95%;
    background-color: #1cbbd2;
    padding: 10px;
    text-align: center;
}

</style>
<script type="text/javascript">

    
</script>
<!-- Begin .bigCarusel -->
<ul class="bigCarusel">
    <li id="sectionfake"></li>
    
    <!-- Begin #sectionHome -->
    <li id="sectionHome">
        <div id="welcomeani">
            
        </div>
        <div class="content">
            <div class="contentLeft">
                
                <div id="box">
                

                  <ul class="bxslider">
                    <li><img src="<?php echo $this->webroot;?>images/picture.jpg"></li>
                    <li><img src="<?php echo $this->webroot;?>images/pic1.png"></li>
                    <li><img src="<?php echo $this->webroot;?>images/pic2.png"></li>
                    <li><img src="<?php echo $this->webroot;?>images/pic3.png"></li>
                    <li><img src="<?php echo $this->webroot;?>images/pic4.png"></li>
                    <li><img src="<?php echo $this->webroot;?>images/pic5.png"></li>
                    <li><img src="<?php echo $this->webroot;?>images/pic6.png"></li>
                    
                    
                  </ul>
                  <img src="<?php echo $this->webroot;?>images/pictureframe.png" id="tablet" style="position: relative;z-index: 2;"/>
                </div>


                
                <div class="redrope">
                    <img  class="pngfix" src="images/redrope.png" width="394" height="178" alt="redrope" />
                </div>
            </div>
            <!-- .contentLeft -->
            
            <div class="contentRight">
                <div class="intro">
                    
                    <h1>Selamat datang di E-Teaching Technology.<br /><br />Dalam applikasi ini anda akan melihat kumpulan Video, BSE, Evaluasi, RPP & silabus, Presentasi yang terdapat di applikasi ini. <br/> Silahkan pilih modul modul dibawah ini untuk memulai</h1>
                </div>
                
                <div class="Gallerymenu">
                    <!--<img src="images/nowopendayly1.png" width="128" height="18" alt="open" class="pic1" />-->
                    <a class="gotoVideopage pic2" href="javascript:void(0);" onclick="gotoPage((905 + 435), 'sectionGallery', 1);">
                        <img src="images/visitgallery.png" width="170" alt="visit-gallery" />
                    </a>
                    <a class="gotoEbookpage pic3" href="javascript:void(0);" onclick="gotoPage((1810 + 870), 'sectionServices', 1);"><img  src="images/services.png" width="170" alt="services"  /></a>
                    <a class="gotoSilabuspage pic4" href="javascript:void(0);" onclick="gotoPage((3215 + 870), 'sectionContact', 1);"><img  src="images/visitsilabus.png" width="170" alt="services" /></a>

                    <a class="gotoEvaluasipage pic5" href="javascript:void(0);" onclick="gotoPage((4580 + 870), 'sectionEvaluasi', 1);"><img  src="images/visiteval.png" width="170" alt="services"  /></a>

                    <!--<a class="gotoCdpage" href="javascript:void(0);" onclick="gotoPage((5945 + 870), 'sectionEvaluasi', 1);"><img  src="images/visitbelajar.png" width="150" alt="services" class="pic4" /></a>-->


                    <!--<a class="gotoPresentasipage" href="javascript:void(0);" onclick="gotoPage((7310 + 870), 'sectionEvaluasi', 1);"><img  src="images/visitpresent.png" width="150" alt="services" class="pic4" /></a>-->

                    <a class="gotoPresentasipage pic6" href="javascript:void(0);" onclick="gotoPage((5945 + 870), 'sectionLesson', 1);"><img  src="images/visitpresent.png" width="170" alt="services"  /></a>

                </div>

                
                <!-- .Gallerymenu -->
            </div>
            <!-- .contentRight -->
        </div>
        <!-- .content -->
    </li>
    <!-- End #sectionHome -->
    
    <!-- Begin #sectionGallery -->
    <li style="margin-left:480px;position:relative;" id="sectionGallery">
        <div id="welcomeanivideo">
            
        </div>
        <div class="content">
            <div class="slideshow">
                <div class="arrLeft">
                    <a href="javascript: void(0);" onclick="galleryCarusel('prev');"><img src="images/arrow-left.png" width="26" height="51" alt="left" /></a>
                </div>
                <!-- .arrLeft -->
                
                <div class="galleryCarusel" style="overflow: hidden;position:relative; width:784px;margin-left:20px;">
                    <div class="arrCenter" style="width:10000px;">
                        <!--entry videos -->
                        <?php foreach ($videos as $video) :?>
                        <div class="imgSlideshow firstpic filter1" id="videoentry_<?php echo $video['Video']['id']?>">
                            <p class="videosutradara_preview"><?php echo $video['Video']['produksi']?></p>
                            <img class="cover_video" src="<?php echo $this->webroot;?><?php echo $video['Video']['cover']?>" width="228" height="170" alt="" /> 
                            <span class="imgslide">
                                <a href="#" class="galleryLightbox"><img class="pngfix pngfix1" src="images/framegallery1.png" width="248" height="184" alt="Picture of the month" /></a>
                            </span>
                            <h2 class="cufonreplace videotitle_preview"><?php echo $video['Video']['title']?></h2>
                            <a class="closedetailvideo" href=""><img src="<?php echo $this->webroot?>images/fancy_close.png"/></a>
                            <section class="detailsvideo">
                                
                                <span class="sutradara_video_preview" style="border-bottom:1px dotted #BEC9CB;width:100%;display:block;padding-bottom:6px;margin-bottom:3px;"><?php echo $excerpt->makeExcerpt($video['Video']['sutradara'],25,'');?></span>
                                
                                <span class="details_video_preview"> <?php echo $excerpt->makeExcerpt($video['Video']['details'],60,' ...');?></span>
                                </br>
                                <li class="buttonlist buttonlistvideolist" style="opacity: 1;">
                                    <a href="<?php echo $this->webroot;?>videos/delete/<?php echo $video['Video']['id']; ?>" class="btn btn-7 btn-7g btn-icon-only icon-trash deletevideo hasTooltip" data-fancybox-type="ajax" data-tooltip="Hapus Video"></a>
                                    <a href="<?php echo $this->webroot;?>videos/edit/<?php echo $video['Video']['id']; ?>" class="btn btn-7 btn-7g btn-icon-only icon-pencil2 editvideo hasTooltip" data-tooltip="Edit Video"></a>
                                    <a href="<?php echo $this->webroot;?><?php echo 'files/videos/'.$video['Video']['file']; ?>" class="btn btn-7 btn-7g btn-icon-only icon-download hasTooltip" data-tooltip="Download Video"></a>
                                    <a class="fancyvideo btn btn-7 btn-7g btn-icon-only icon-play3 hasTooltip" href="<?php echo $this->webroot;?><?php echo 'files/videos/'.$video['Video']['file']; ?>" data-tooltip="Lihat Video"></a>  
                                </li>
                            </section>
                        </div>
                        <?php endforeach;?>
                        <!-- End entry -->
                    </div>
                    <!-- .arrCenter -->
                </div>
                <!-- .galleryCarusel -->
                
                <div class="arrRight">
                    <a href="javascript: void(0);" onclick="galleryCarusel('next');"><img src="images/arrow-right.png" width="26" height="51" alt="right" /></a>
                </div>

                <a class="addvideo popupuploadvideo" href="#uploadvideo"><img src="<?php echo $this->webroot?>images/plus_alt_32x32.png"/></a>
                <!-- .arrRight -->
            </div>
            <!-- .slideshow -->
            
            <div class="bench">
                <img  class="pngfix" src="images/3poles1.png" width="493" height="325" alt="bench" />
            </div>
            <div class="bench1 categoryselectvideo">
                <img  class="pngfix" src="images/3poles3.png" width="493" height="325" alt="bench1" />
            </div>

            <div id="videopanel" style="opacity:0;left:784px;">
                <h3>Select Category</h3>
                <?php 
                echo $form->select('category_id',$listCategoryVideo,null,array('id'=>'dropdownfiltercategory_video'),array('empty'=>'Semua Category'));
                ?>
                
                <br/><br/>
               <?php echo $form->create('Video',array('action'=>'search','enctype'=>'multipart/form-data'));?>
                
                  <input type="search" id="searchquery_video" placeholder="Search" name="searchquery" style="width: 130px;border: none;padding: 7px;font-size: 11.5px;vertical-align: bottom;">
                  <input type="submit" style="border-style: none; background: url('images/searchbutton.png') no-repeat; width: 32px; height: 32px;" value="">
                <?php echo $form->end();?>

                <a id="close_videopanel" href="#" style="position:absolute;width:30px;height:30px;top:0;right:0;"><img src="<?php echo $this->webroot;?>images/fancy_close.png"></a>
               
            </div>

        </div>
        <!-- .content -->
    </li>
    <!-- End #sectionGallery -->
    
    <!-- Begin #sectionServices -->
    <li style="margin-left:450px;width:950px;position:relative;" id="sectionGallery">
        <div id="welcomeaniebook">
            
        </div>
        <div class="content">
            <div class="slideshow1">
                <div class="mainebook">
                    <div id="bookshelf" class="bookshelf">
                        <?php
                        $no = 0;
                        $multiple = 0;
                        foreach ($ebooks as $ebook) :
                        
                        $no ++;
                        ?>
                        
                        <figure id="bookshelf_<?php echo $ebook['Ebook']['id']?>" class="entrybook <?php echo 'entryno_'.$no;?>">
                                <div class="book" data-book="book-1" data-image="<?php echo $this->webroot.$ebook['Ebook']['cover']?>"></div>
                                
                                <div class="buttons"></div>
                                
                                <div class="details">
                                    <ul>
                                        <li>
                                            <figcaption><h2 id="judulbuku"><?php echo $ebook['Ebook']['title']?><span id="pengarangbuku"><?php echo $ebook['Ebook']['pengarang']?></span></h2 class="cufonreplace"></figcaption>
                                        </li>
                                        <li id="detailbuku"><?php echo $ebook['Ebook']['details']?></li>

                                        <li class="buttonlist">
                                            <a href="<?php echo $this->webroot;?>ebooks/delete/<?php echo $ebook['Ebook']['id']; ?>" class="btn btn-7 btn-7g btn-icon-only icon-trash deleteebook hasTooltip" data-tooltip="Delete Ebook" data-fancybox-type="ajax"></a>
                                            <a href="<?php echo $this->webroot;?>ebooks/edit/<?php echo $ebook['Ebook']['id']; ?>" class="btn btn-7 btn-7g btn-icon-only icon-pencil2 editebook editbutton hasTooltip" data-tooltip="Edit Ebook"></a>
                                            <a href="<?php echo $this->webroot;?>ebooks/download/<?php echo $ebook['Ebook']['id']; ?>" class="btn btn-7 btn-7g btn-icon-only icon-download hasTooltip" data-tooltip="Download Ebook"></a>
                                            <a href="<?php echo $this->webroot;?><?php echo 'files/ebooks/'.$ebook['Ebook']['id']; ?>?<?php echo time();?>" class="btn btn-7 btn-7g btn-icon-only icon-play3 viewebook hasTooltip" data-tooltip="Lihat Ebook"></a>  
                                        </li>
                                        
                                    </ul>
                                </div>
                            </figure>

                        <?php 
                        
                        endforeach;



                        ?>

                    </div>
                </div><!-- /main -->
            </div>
            <!-- .slideshow -->
            
            <div class="bench">
                <img  class="pngfix" src="images/3poles2.png"  alt="bench" />
            </div>
            <div class="bench2">
                <a class="categoryselectebook" href="#"> <img  class="pngfix" src="images/3poles4.png"  alt="bench1" /></a>
            </div>
            <div id="ebookpanel" style="opacity:0;left:784px;">
                <h3>Select Category</h3>
                <?php 
                echo $form->select('category_id',$listCategory,null,array('id'=>'dropdownfiltercategory'),array('empty'=>'Semua Category'));
                ?>
                
                <br/><br/>
               <?php echo $form->create('Ebook',array('action'=>'search','enctype'=>'multipart/form-data'));?>
                
                  <input type="search" id="searchquery" placeholder="Search" name="searchquery" style="width: 130px;border: none;padding: 7px;font-size: 11.5px;vertical-align: bottom;">
                  <input type="submit" style="border-style: none; background: url('images/searchbutton.png') no-repeat; width: 32px; height: 32px;" value="">
                <?php echo $form->end();?>

                <a id="close_ebookpanel" href="#" style="position:absolute;width:30px;height:30px;top:0;right:0;"><img src="<?php echo $this->webroot;?>images/fancy_close.png"></a>
               
            </div>

            <a href="#uploadebook" class="btn btn-7 btn-7g btn-icon-only tmbh icon-plus popupuploadebook"></a>
     
        </div>
        <!-- .content -->
    </li>
    <!-- End #sectionServices -->


    <li style="margin-left:480px;position:relative" id="sectionContact">
        <div id="welcomeanisilabus">
            
        </div>
        <div class="content">
            <div class="contact slideshow2">
                <div class="silabus">
                    <a class="sila rotateright backgroundyellow" href="<?php echo $this->webroot;?>files/silabus/kelas 1/[1] RPP SD KELAS 1 SEMESTER 1 - Diri Sendiri  Jujur Tertib dan Bersih.docx">
                        <span class="sila_matapelajaran">Diri Sendiri  Jujur Tertib dan Bersih</span>
                        <span class="sila_kelas">Kelas 1</span><br/>
                        <span class="sila_tahun">Semester 1</span>

                    </a>
                    <a class="sila rotateright backgroundblue" href="<?php echo $this->webroot;?>files/silabus/kelas 1/[2] RPP SD KELAS 1 SEMESTER 1 - Kegemaranku.docx">KEGEMARANKU</span>
                        <span class="sila_kelas">Kelas 1</span><br/>
                        <span class="sila_tahun">Semester 1</span>
                    </a>
                    <a class="sila backgroundyellow" href="<?php echo $this->webroot;?>files/silabus/kelas 1/[3] RPP SD KELAS 1 SEMESTER 1 - Kegiatanku.docx">
                        <span class="sila_matapelajaran">Kegiatanku</span>
                        <span class="sila_kelas">Kelas 1</span><br/>
                        <span class="sila_tahun">Semester 1</span>
                    </a>
                    <a class="sila rotateright backgroundblue" href="<?php echo $this->webroot;?>files/silabus/kelas 1/[1] RPP SD KELAS 2 SEMESTER 1 - Hidup Rukun.docx">
                        <span class="sila_matapelajaran">Hidup Rukun</span>
                        <span class="sila_kelas">Kelas 2</span><br/>
                        <span class="sila_tahun">Semester 1</span>
                    </a>

                    <a class="sila rotateleft backgroundyellow" href="<?php echo $this->webroot;?>files/kelas 1/silabus/[3] RPP SD KELAS 2 SEMESTER 1 - Tugasku sehari-hari.docx">
                        <span class="sila_matapelajaran">Tugas Sehari-hari</span>
                        <span class="sila_kelas">Kelas 2</span><br/>
                        <span class="sila_tahun">2013</span>
                    </a>

                    <a class="sila backgroundblue" href="<?php echo $this->webroot;?>files/silabus/kelas 3/[9] RPP SD KELAS 3 SEMESTER 2 - Menjaga Kelestarian Lingkungan.docx">
                        <span class="sila_matapelajaran">Menjaga Kelestarian Lingkungan</span>
                        <span class="sila_kelas">Kelas 3</span><br/>
                        <span class="sila_tahun">Semester 2</span>
                    </a>

                    <a class="sila backgroundyellow" href="<?php echo $this->webroot;?>files/silabus/kelas 3/[3] RPP SD KELAS 3 SEMESTER 1 - Mengenal Cuaca dan Musim.docx">
                        <span class="sila_matapelajaran">Mengenal Cuaca dan Musim</span>
                        <span class="sila_kelas">Kelas 3</span><br/>
                        <span class="sila_tahun">Semester 1</span>
                    </a>

                    <a class="sila rotateright backgroundyellow" href="<?php echo $this->webroot;?>files/silabus/kelas 4/[2] RPP SD KELAS 4 SEMESTER 1 - Selalu Berhemat Energipdf.docx">
                        <span class="sila_matapelajaran">Selalu Berhemat Energi</span>
                        <span class="sila_kelas">Kelas 4</span><br/>
                        <span class="sila_tahun">Semester 1</span>

                    </a>
                    <a class="sila rotateright backgroundblue" href="<?php echo $this->webroot;?>files/silabus/kelas 4/[7] RPP SD KELAS 4 SEMESTER 2 - Cita-Citaku.docx">
                        <span class="sila_matapelajaran">Cita-citaku</span>
                        <span class="sila_kelas">Kelas 4</span><br/>
                        <span class="sila_tahun">Semester 2</span>
                    </a>
                    <a class="sila backgroundyellow" href="<?php echo $this->webroot;?>files/silabus/kelas 5/[5] RPP SD KELAS 5 SEMESTER 2 - Sehat Itu Penting.docx">
                        <span class="sila_matapelajaran">Sehat Itu Penting</span>
                        <span class="sila_kelas">Kelas 5</span><br/>
                        <span class="sila_tahun">Semester 2</span>
                    </a>

                    <a class="sila rotateright backgroundblue" href="<?php echo $this->webroot;?>files/silabus/kelas 5/[4] RPP SD KELAS 5 SEMESTER 2 - Bangga Sebagai Bangsa Indonesia.docx">
                        <span class="sila_matapelajaran">Bangga Sebagai Bangsa Indonesia</span>
                        <span class="sila_kelas">Kelas 5</span><br/>
                        <span class="sila_tahun">Semester 2</span>
                    </a>

                    <a class="sila rotateleft backgroundyellow" href="<?php echo $this->webroot;?>files/silabus/kelas 6/[1] RPP SD KELAS 6 SEMESTER 1 - Selamatkan Makhluk hidup.docx">
                        <span class="sila_matapelajaran">Selamatkan Makhluk Hidup</span>
                        <span class="sila_kelas">Kelas 6</span><br/>
                        <span class="sila_tahun">Semester 1</span>
                    </a>

                    <a class="sila backgroundblue" href="<?php echo $this->webroot;?>files/silabus/kelas 6/[2] RPP SD KELAS 6 SEMESTER 1 - Persatuan dan Perbedaan.docx">
                        <span class="sila_matapelajaran">Persatuan dan Perbedaan</span>
                        <span class="sila_kelas">Kelas 6</span><br/>
                        <span class="sila_tahun">Semester 1</span>
                    </a>

                    <a class="sila backgroundyellow" href="<?php echo $this->webroot;?>files/silabus/kelas 6/[4] RPP SD KELAS 6 SEMESTER 2 - Globalisasi.docx">
                        <span class="sila_matapelajaran">Globalisasi</span>
                        <span class="sila_kelas">Kelas 6</span><br/>
                        <span class="sila_tahun">Semester 2</span>
                    </a>

                    
                </div>
                <div class="form">
                    <div class="form_info">
                        
                        <!-- .email_address -->
                        <div class="clear"></div>
                        
                        
                        
                        <!-- .your_company -->
                        <div class="clear"></div>
                        
                        
                        
                        <!-- .phone_number -->
                        <div class="clear"></div>
                        
                    </div>
                    <!-- .form_info -->
                    
                    
                </div>


                <!-- .form -->
                
                
            </div>
            <div class="chair">
                <img src="images/chairtable1.png" width="565" height="300" alt="1" />
            </div>
            <div class="slb1">
                <img src="images/silabus1.png" width="565" height="300" alt="1" />
            </div>
            <!-- .contact -->
        </div>
        <!-- .content -->
    </li>
    <!-- End #sectionContact -->
    
    
    <li style="margin-left:429px;position:relative" id="sectionEvaluasi">
        
        <div class="content">
            <div class="contact slideshow3">
                 <div class="eval" id="evaluasiset1">
                    <a class="classselect" data-kelas="1" href=""><span class="kel">Kelas</span></br><span class="ev">1</span><br/></a>
                    <a class="classselect" data-kelas="2" href=""><span class="kel">Kelas</span></br><span class="ev">2</span></a>
                    <a class="classselect" data-kelas="3" href=""><span class="kel">Kelas</span></br><span class="ev">3</span></a>
                    <a class="classselect" data-kelas="4" href=""><span class="kel">Kelas</span></br><span class="ev">4</span></a>
                    <a class="classselect" data-kelas="5" href=""><span class="kel">Kelas</span></br><span class="ev">5</span></a>
                    <a class="classselect" data-kelas="6" href=""><span class="kel">Kelas</span></br><span class="ev">6</span></a>
                    

                    
                </div>

                <div id="evaluasiset2" style="display:none;">
                    <div class="pelajaran">

                        <?php foreach ($listPelajaran as $pelajaran):?>
                        
                        <a class="buttontobackground matpel_button" data-matpel="<?php echo $pelajaran['Pelajaran']['alias'];?>" href="#"><span class="mata"><?php echo $pelajaran['Pelajaran']['nama'];?>  |</span></br><span class=""></span><br/></a>

                        <?php endforeach;?>

                        

                        
                    </div>
                    <div class="pilihan">
                        <div class="mudah">
                            <a data-tipesoal="1" data-level="1" class="level_button buttontobackground" href=""><span class="mata">Pilihan Ganda Mudah</span></a>
                            <a data-tipesoal="2" data-level="1" class="level_button buttontobackground" href=""><span class="mata">Soal Essay Mudah </span></a>
                        </div>
                        <div class="sedang">
                             <a data-tipesoal="1" data-level="2" class="level_button buttontobackground" href=""><span class="mata">Pilihan Ganda Sedang</span></a>
                            <a data-tipesoal="2" data-level="2" class="level_button buttontobackground" href=""><span class="mata">Soal Essay Sedang </span></a>
                        </div>
                        <div class="sulit">
                            <a data-tipesoal="1" data-level="3" class="level_button buttontobackground" href=""><span class="mata">Pilihan Ganda Sulit</span></a>
                            <a data-tipesoal="2" data-level="3" class="level_button buttontobackground" href=""><span class="mata">Soal Essay Sulit </span></a>
                        </div>
                        
                    </div>
                    <a id="evaluasisetback" href="#"><span  class="back">BACK</span></a>
                    <a id="evaluasisetgo" href="#"><span class="ok">OK</span></a>
                </div>

                <div class="chair1">
                        <img src="images/chairtable.png" width="565" height="300" alt="1" />
                </div>

                <div id="welcomeanievaluasi">
            
                </div>

                <div id="evaluasiset3" style="display:none;">

                    <div class="buttonright">
                        <a class="buttonss hasTooltip backtoselectsoal" href="#" data-tooltip="Kembali"><img src="<?php echo $this->webroot?>images/back_alt_32x32.png"/></a>
                        <a class="buttonss hasTooltip addquestion_button" href="#" data-tooltip="Tambah Soal"><img src="<?php echo $this->webroot?>images/plus_alt_32x32.png"/></a>
                        <a class="buttonss hasTooltip downloadsoal" data-tooltip="Download Soal" href="#"><img src="<?php echo $this->webroot?>images/download_alt_32x32.png"/></a>
                        <a class="buttonss hasTooltip fancyboxupload" data-tooltip="Upload Soal" href="#uploadquestionbulk"><img src="<?php echo $this->webroot?>images/upload_alt_32x32.png"/></a>
                        <a class="buttonss hasTooltip" data-tooltip="Download Form Template Soal" href="<?php echo $this->webroot?>files/quizz/form-default-import-pertanyaan.xls"><img src="<?php echo $this->webroot?>images/form_alt_32x32.png"/></a>

                        <!--<a class="buttonss hasTooltip" data-tooltip="Kuis" href="#"><img src="<?php echo $this->webroot?>images/quizz_alt_32x32.png"/></a>-->

                        <a class="buttonss hasTooltip copytotryout" data-tooltip="Salin Ke Try Out" href="#"><img src="<?php echo $this->webroot?>images/copytry_alt_32x32.png"/></a>

                        <a class="buttonss hasTooltip fancybox" data-tooltip="Try Out" data-fancybox-type="iframe" data-fancybox-width="100%" data-fancybox-height="100%" href="<?php echo $this->webroot?>quizzs"><img src="<?php echo $this->webroot?>images/tryout_alt_32x32.png"/></a>
                    </div>

                    <div class="box-soal">
                        <p>Memproses data...</p>
                    </div>

                    <div class="form">
                        
                        <div class="board">
                            <img src="images/blackboard1.png" width="250" height="320" alt="1" />
                            <div class="detail-soal">
                                <dl>
                                    <dt>Kelas</dt>
                                    <dd id="kelas_board_selected">: 1</dd>
                                    <dt>Bidang Study</dt>
                                    <dd id="mapel_board_selected">: pkn</dd>
                                    <dt >Tipe Soal</dt>
                                    <dd id="tipe_board_selected">: Pilhan Ganda                      </dd>
                                    <dt>Level</dt>
                                    <dd id="level_board_selected">: 
                                    Mudah                       </dd>
                                    
                                    <dt id="totalquestion_board_selected">Jumlah Soal</dt>
                                    <dd>: 14</dd>
                                </dl>

                                <div style="margin-top:18px;">
                                Keterangan :<br>
                                <div style="margin-top:8px;" class="icon-quizz"></div> &nbsp;&nbsp;&nbsp;&nbsp;Soal Quizz
                                <br>

                                <div style="margin-top:8px;" class="icon-ujian"></div> &nbsp;&nbsp;&nbsp;&nbsp;Soal Ujian
                                <br>
                                <span class="input-notification success png_bg" style="margin:0 0 0 2px;padding:4px 0 2px 25px;"></span> Jawaban Benar
                                <br>
                                <span style="margin-top:8px;display:block;">Untuk menambah simbol-simbol khusus pada bank soal, copy paste dari sumbernya.</span>

                                </div>

                            </div>
                        </div>
                       
                    </div>

                    

                    <!--startuploadform-->
                    <div id="uploadquestionbulk" class="subjects form" style="display:none;">

                        <div class="loader loaderform" style="display:none;">
                            <img src="<?php echo $this->webroot;?>images/rotite-30-29.png" width="928" height="29" style="position: absolute; display: block; overflow: hidden; left: 0px; top: 0px; margin: 0px; padding: 0px; max-width: none; max-height: none; border: none; line-height: 1; background-color: transparent; -webkit-backface-visibility: hidden; -webkit-user-select: none;">
                            
                        </div>
                        <br/>
                        <p class="statusload loaderformstatus"> Memproses data, mohon menunggu </p>
                        <?php echo $form->create('Question',array('type'=>'file','action'=>'import_question'));?>

                            <div id="edit_ebooks">
                                <div id="edit_ebooks-wrapper">

                                    <h2><?php __('Form Upload Pertanyaan');?></h2>
                                    <div class="warning-erase">
                                        <p><strong>PERHATIAN!!</strong><br/>
                                            <div style="width:100%;display:block;text-align:left;">
                                            Anda akan mengupload set soal untuk :<br/>
                                            Kelas : <span id="kelas_upload_text"></span><br/>
                                            Bidang Study : <span id="pelajaran_upload_text"></span><br/>
                                            Tipe Soal : <span id="tipe_upload_text"></span><br/>
                                            Level :<span id="level_upload_text"></span>
                                            </br>
                                            </div>
                                        </p>
                                        <fieldset>
                                    </div>      
                                    
                                    <p>
                                    <?php
                                    echo $form->input('kelas',array('type'=>'hidden','value'=>''));
                                    echo $form->input('mapel',array('type'=>'hidden','value'=>''));
                                    echo $form->input('level',array('type'=>'hidden','value'=>''));
                                    echo $form->input('tipe',array('type'=>'hidden','value'=>''));
                                    echo $form->input('csv', array('label'=>'File Excel (.xls):', 'type'=>'file'));
                                    echo '</p>';?>
                                    <p>
                                        <?php echo $form->input('image', array('label'=>'File Zip Gambar dan Video(.zip):', 'type'=>'file'));?>
                                    </p>

                                        
                                    </fieldset>
                                    <div class="submit">
                                        <button class="btn btn-2 btn-2g" type="submit" id="QuestionAddSingleFormButton">Submit</button>
                                    </div>
                                    <br/>
                                    <br/>
                                </div>
                            </div>
                            <?php echo $form->end();?>

                            <script type="text/javascript">


                            (function() {
                                
                            function showResponse(responsesText, statusText, xhr, $form)  { 
                                // for normal html responses, the first argument to the success callback 
                                // is the XMLHttpRequest object's responseText property 
                             
                                // if the ajaxSubmit method was passed an Options Object with the dataType 
                                // property set to 'xml' then the first argument to the success callback 
                                // is the XMLHttpRequest object's responseXML property 
                             
                                // if the ajaxSubmit method was passed an Options Object with the dataType 
                                // property set to 'json' then the first argument to the success callback 
                                // is the json data object returned by the server 
                                
                                    setTimeout(function() {
                                        $(".statusload").hide();
                                        $(".loader").hide();
                                        $.fancybox.close();
                                        $("#QuestionImportQuestionForm").clearForm();
                                        $("#QuestionImportQuestionForm2").show();
                                        $('.box-soal').html(responsesText);

                                        
                                    },2000);
                                
                                
                            } 

                            var options3 = {
                                //target:        '#output2',   // target element to update
                                //beforeSubmit:  showRequest,  // pre-submit callback
                                
                                dataType:      'html',  // post-submit callback
                                success:       showResponse

                                    

                                
                            };

                            // bind form2 using ajaxSubmit
                            $('#QuestionImportQuestionForm').on('submit', function(e) {
                                e.preventDefault(); // avoids calling preview.php
                                // submit the form via ajax
                                $("#QuestionImportQuestionForm2").fadeOut();
                                //$.fancybox.resize();
                                $(".loaderformstatus").fadeIn();
                                $(".loaderform").fadeIn();

                                
                                $(this).ajaxSubmit(options3);
                                

                                return false;
                            });

                            })();       
                            </script>
                        </div>

                        <!--enduploadform-->
                </div>
                
                
            </div>
            <!-- .contact -->
        </div>
        <!-- .content -->
    </li>






    <li style="margin-left:330px;width:1150px;position:relative" id="sectionLesson">
        <div id="welcomeanipresentasi">
            
        </div>
        <div class="content">
            <div class="slideshow5">
                <div class="arrLeft">
                    <a href="javascript: void(0);" onclick="galleryCarusel2('prev');"><img src="images/arrow-left.png" width="26" height="51" alt="left" /></a>
                </div>
                <!-- .arrLeft -->
                
                <div class="galleryCarusel2" style="overflow: hidden;position:relative; width:1000px;margin-left:20px;">
                    <div class="arrCenter" style="width:10000px;height:400px;">
                        
                        <!--entry lessons -->
                        <ul id="bk-list" class="bk-list clearfix">
                            <?php foreach ($listLesson as $item ):?>
                            
                            
                            <li class="imgSlideshow2" id="bookid_<?php echo $item['Lesson']['id']?>">
                                <div class="bk-book book-1 book-<?php echo $item['Lesson']['color'];?> bk-bookdefault viewlesson" data-urldata="<?php echo $item['Lesson']['id']?>">
                                    <div class="bk-front">
                                        <div class="bk-cover">
                                            <h2>
                                                <span><?php echo $item['Lesson']['author']?></span>
                                                <span><?php echo $item['Lesson']['title']?></span>
                                            </h2>
                                        </div>
                                        <div class="bk-cover-back"></div>
                                    </div>
                                    <div class="bk-page">
                                        
                                    </div>
                                    <div class="bk-back">
                                        <p><?php echo $item['Lesson']['description']?></p>
                                    </div>
                                    <div class="bk-right"></div>
                                    <div class="bk-left">
                                        
                                    </div>
                                    <div class="bk-top"></div>
                                    <div class="bk-bottom"></div>
                                </div>
                                <div class="bk-info">
                                    <button class="bk-bookback">Detail</button>
                                    <button class="btn editlesson btn-icon-only icon-pencil2" data-lessonid="<?php echo $item['Lesson']['id']?>"></button>
                                    <button class="btn deletelesson btn-icon-only icon-trash" data-lessonid="<?php echo $item['Lesson']['id']?>" data-urldata="<?php echo $this->webroot;?>lessons/delete/<?php echo $item['Lesson']['id']?>"></button>
                                </div>
                                
                            </li>
                            <?php endforeach;?>

                        </ul>
                        
                        <!-- End lesson -->
                    </div>
                    <!-- .arrCenter -->
                </div>
                <!-- .galleryCarusel -->
                
                <div class="arrRight">
                    <a href="javascript: void(0);" onclick="galleryCarusel2('next');"><img src="images/arrow-right.png" width="26" height="51" alt="right" /></a>
                </div>

                <a class="addlesson popupuploadlesson" href="#uploadlesson"><img src="<?php echo $this->webroot?>images/plus_alt_32x32.png"/></a>
                <!-- .arrRight -->
            </div>
            <!-- .slideshow -->
            
            

            <div id="videopanel" style="opacity:0;left:784px;">
                <h3>Select Category</h3>
                <?php 
                echo $form->select('category_id',$listCategoryVideo,null,array('id'=>'dropdownfiltercategory_video'),array('empty'=>'Semua Category'));
                ?>
                
                <br/><br/>
               <?php echo $form->create('Video',array('action'=>'search','enctype'=>'multipart/form-data'));?>
                
                  <input type="search" id="searchquery_video" placeholder="Search" name="searchquery" style="width: 130px;border: none;padding: 7px;font-size: 11.5px;vertical-align: bottom;">
                  <input type="submit" style="border-style: none; background: url('images/searchbutton.png') no-repeat; width: 32px; height: 32px;" value="">
                <?php echo $form->end();?>

                <a id="close_videopanel" href="#" style="position:absolute;width:30px;height:30px;top:0;right:0;"><img src="<?php echo $this->webroot;?>images/fancy_close.png"></a>
               
            </div>

        </div>
        <!-- .content -->
    </li>


    
    

    <!--end gallery video -->
    
    
</ul>



<div style="display:none">

<div id="uploadlesson">
    
    <div class="loader" style="display:none;">
        <img src="<?php echo $this->webroot;?>images/rotite-30-29.png" width="928" height="29" style="position: absolute; display: block; overflow: hidden; left: 0px; top: 0px; margin: 0px; padding: 0px; max-width: none; max-height: none; border: none; line-height: 1; background-color: transparent; -webkit-backface-visibility: hidden; -webkit-user-select: none;">
    </div>
    <br/>
    <p class="statusload"> Memproses data, mohon menunggu </p>

     <div id="upload-lesson2">
        <div id="lessonsteptitle">
            <img src="<?php echo $this->webroot;?>images/lessonslogo.png">
            <h1 id="titlecreator">Lesson Creator</h1>
            <h3 id="step_title">JUDUL BAHAN AJAR</h3>
            <p id="desc_title"> Selamat datang di Lesson Creator, silahkan masukan judul dan deskripsi singkat tentang bahan ajar anda terlebih dahulu</p>
        </div>

        <div id="step1_lesson" style="width:90%;text-align:center;margin:0 auto;">

        <?php echo $form->create('Lesson',array('enctype'=>'multipart/form-data','style'=>'width: 100%;position: relative;float: left;text-align: left;'));?>

            <div style="float:left;width:65%;margin-top:10px;">
                <div class="input text textareablock">
                    
                    <?php
                        echo $form->input('title',array('class'=>'text-input large-input','label'=>'Judul Lesson','div'=>false,'style'=>'width:50%;'));
                    ?>
                </div>

                <div class="input text textareablock">

                    <?php
                        echo $form->input('author',array('class'=>'text-input large-input','label'=>'Nama Guru','div'=>false,'style'=>'width:50%;'));
                    ?>

                </div>

                <div class="input text textareablock">
                    <label>Pilih Kelas</label>
                    <?php
                        $arrayKelas = array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6');
                        echo $form->select('kelas',$arrayKelas,null,array('class'=>'text-input large-input','label'=>'Kelas','div'=>false,'style'=>'width:30%;'));
                    ?>

                </div>

                <div class="input text textareablock">
                    <label>Pilih Mata Pelajaran</label>
                    <?php
                        
                        echo $form->select('pelajaran_id',$listPelajaran2,null,array('class'=>'text-input large-input','label'=>'Pelajaran','div'=>false,'style'=>'width:50%;'));
                    ?>

                </div>

                <div class="input text textareablock" style="display:block;margin:10px 0;float: left;">
                    <label>Pilih Warna Cover</label>
                    <div class="colorlist" style="float:left;width: 300px;">
                        <div class="colorlistselect" data-color="orange" style="display:inline-block;width:30px;height:30px;background-color:#ff924a;">&nbsp;</div>

                        <div class="colorlistselect" data-color="blue" style="display:inline-block;width:30px;height:30px;background-color:#3fb5db;">&nbsp;</div>

                        <div class="colorlistselect" data-color="green" style="display:inline-block;width:30px;height:30px;background-color:#a4c19e;">&nbsp;</div>
                    </div>

                </div>

                <?php
                    echo $form->input('color',array('type'=>'hidden','id'=>'colortosave'));
                ?>

                <div class="input textarea textareablock">
                    <?php
                        echo $form->input('description',array('class'=>'text-input large-input','type'=>'textarea','label'=>'Deskripsi Singkat','div'=>false));
                    ?>
                </div>

            </div>
            <div style="float:left;width:32%;margin-left:15px;">
                <br/>
                <button id="submit_step1" class="btn btn-4 btn-4c icon-arrow-right">Lanjutkan</button>
            </div>
            <?php echo $form->end();?>
        </form>
        </div>


        <div id="step2_lesson" style="text-align:left;display:none;">
            <p style="width:40%;"> Halaman yang sudah anda buat : </p>
            <div id="pages_lesson_area">
                <p>- Klik pada halaman untuk mengedit, atau menghapus halaman <br/> - Tahan dan arahkan halaman untuk memanage order halaman </p>
                <p class="no_halaman">Belum ada halaman, silahkan tambahkan halaman</p>
                <ul class="sortable">
                </ul>
                
            </div>

            <div id="lesson_action_area">
                <p style="margin-top:0;">Anda sedang mengedit bahan ajar :<br/>
                    <span id="title_bahanajar" style="display:block;margin-top:7px;margin-bottom:5px;"></span>
                    Oleh : <span id="author_bahanajar"></span><br/>
                    Untuk Kelas <span id="kelas_bahanajar"></span>  - <span id="pelajaran_bahanajar"></span>
                </p>
                <button id="add_leson_page" class="btn btn-3 btn-3a icon-document-add">Tambah Halaman</button><br/>
                <button class="btn btn-3 btn-3a icon-zoom previewlesson" id="previewlesson_btn" data-urldata="" >Preview</button><br/>
                <button id="finish_lesson" class="btn btn-3 btn-3a icon-checkmark-circle">Finish</button>
            </div>

            <?php echo $form->create('Halaman',array('action'=>'updateorder','enctype'=>'multipart/form-data'));?>
                
            <?php echo $form->end();?>
        </div>


        <div id="step3_lesson" style="text-align:center;margin:0 auto;display:none;">
            
            <ul>
                <li><a class="selected_text_template" href="#" data-templatetype="text" data-template = "1"><img src="<?php echo $this->webroot;?>images/templ-doc-text.png"/><br/>Full Teks</a></li>

                <li><a class="selected_text_image_template" href="#" data-templatetype="file" data-template = "2"><img src="<?php echo $this->webroot;?>images/templ-doc-image-left.png"/><br/>Teks&Media Rata Kiri</a></li>

                <li><a class="selected_text_video_template" href="#" data-templatetype="file" data-template = "3"><img src="<?php echo $this->webroot;?>images/templ-doc-image-right.png"/><br/>Teks&Media Rata Kanan</a></li>

                <li><a class="selected_text_video_template" href="#" data-templatetype="file" data-template = "4"><img src="<?php echo $this->webroot;?>images/templ-doc-image-center.png"/><br/>Teks&Media Atas</a></li>

                <li><a class="selected_text_video_template" href="#" data-templatetype="file" data-template = "5"><img src="<?php echo $this->webroot;?>images/templ-doc-image.png"/><br/>Full Media</a></li>
            </ul>
            <br/>
            <br/>
            <button id="" class="btn btn-4 btn-4c btn-back icon-arrow-left" data-fromlesson="3">Kembali</button>
            <button id="submit_step3" class="btn btn-4 btn-4c icon-arrow-right">Lanjut</button>


        </div>


        <div id="step4_lesson" style="text-align:center;margin:0 auto;display:none;">
            <?php echo $form->create('Halaman',array('enctype'=>'multipart/form-data'));?>

            <?php
            echo $form->input('lesson_id',array('type'=>'hidden','id'=>'lessonidtosave'));
            ?>

            <?php
            echo $form->input('template_type',array('type'=>'hidden','id'=>'lessontypetosave'));
            ?>

            <?php
            echo $form->input('order',array('type'=>'hidden','id'=>'lessonordertosave'));
            ?>
            <?php
            echo $form->input('mediafiles', array('label'=>false, 'type'=>'file','style'=>'visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;'));
            ?>

            <?php
            echo $form->input('file',array('type'=>'hidden','id'=>'lesson_filename_tosave'));
            ?>

            <?php
            echo $form->input('file_type',array('type'=>'hidden','id'=>'lesson_filetype_tosave'));
            ?>

            <?php
            echo $form->input('file_extension',array('type'=>'hidden','id'=>'lesson_fileextension_tosave'));
            ?>

            

            <div id="template_container_text" class="template_container" style="display:none;margin:0 auto;text-align:center;">
                <div style="width:60%;margin:0 auto;text-align:center;" class="">
                    <div class="inserttextarea">
                    </div>
                </div>
                    <br/>
                    <br/>
                <button id="" class="btn btn-4 btn-4c btn-back icon-arrow-left" data-fromlesson="4">Batal</button>
                <button id="submit_step4" class="btn btn-4 btn-4c icon-arrow-right">Simpan</button>
            </div>

            <div id="template_container_file" class="template_container" style="display:none;margin:0 auto;text-align:center;">

                <div class="uploadcontainer default">

                </div>

                <div style="width:60%;float:left;">
                    <div class="inserttextarea">
                    </div>
                
                </div>
                <div class="clear" style="float:none;clear:booth;"></div>
                <br/>
                <br/>
                <button id="" class="btn btn-4 btn-4c btn-back icon-arrow-left" data-fromlesson="4">Batal</button>
                <button id="submit_step4" class="btn btn-4 btn-4c icon-arrow-right">Simpan</button>
            </div>


            





            <?php echo $form->end();?>


        </div>
        
     </div><!--end labs upload div-->

</div>
</div>


<script type="text/javascript">




/*$("#EbookAddForm").bind("submit", function() {

    $("#upload-ebook").fadeOut();
    $.fancybox.resize();
    $(".statusload").fadeIn();
    $(".loader").fadeIn();

});*/

var $classselect = $('a.classselect');

var $evaluasistep1 = $('#evaluasiset1');

var $evaluasistep2 = $('#evaluasiset2');

var $evaluasistep3 = $('#evaluasiset3');

var $evaluasisetback = $('#evaluasisetback');

var $matpelbutton = $('.matpel_button');

var $kelasselect = '';
var $matpelselect = '';
var $levelselect = '';

var $tipesoalselect = '';

function resetbuttonselected(){
    $('.matpel_button').removeClass('active');
    $('.level_button').removeClass('active');
}


function resetevaluasi(){
    $evaluasistep1.fadeIn();
    $evaluasistep2.fadeOut();
    $evaluasistep3.fadeOut();

    $('.matpel_button').removeClass('active');
    $('.level_button').removeClass('active');

    $('.box-soal').html('');
}

$( document ).on( "click", 'a#btnHome,a.backtoselectsoal', function(e) {
    resetevaluasi();
});
$( document ).on( "click", 'a.classselect', function(e) {

    var datakelas = $(this).data('kelas');

    $kelasselect = datakelas;
    
    $evaluasistep1.fadeOut();

    $evaluasistep2.fadeIn();

    return false;

});


$( document ).on( "click", "a#evaluasisetback", function(e) {

    $evaluasistep2.fadeOut();
    $evaluasistep1.fadeIn();

    resetbuttonselected();
    return false;


});


$( document ).on( "click", "#soalempty", function(e) {

    $evaluasistep2.fadeIn();
    $evaluasistep3.fadeOut();

    resetbuttonselected();

    return false;

});



$( document ).on( "click", 'a.matpel_button', function(e) {

    var datamatpel = $(this).data('matpel');

    $matpelselect = datamatpel;

    $('.matpel_button').removeClass('active');
    $(this).addClass('active');
    return false;
});


$( document ).on( "click", 'a.level_button', function(e) {

    var datalevel = $(this).data('level');

    var datatipesoal = $(this).data('tipesoal');

    $levelselect = datalevel;

    $tipesoalselect = datatipesoal;

    $('.level_button').removeClass('active');
    $(this).addClass('active');
    return false;
});

$( document ).on( "click", "a#evaluasisetgo", function(e) {

    if($levelselect=='' || $matpelselect==''){
        alert('Silahkan pilih Mata Pelajaran, dan Level soal terlebih dahulu');

    }else{

        $('.box-soal').html('<p>Memproses premintaan</p>');
        resetbuttonselected();
        $evaluasistep2.fadeOut();
        $evaluasistep3.fadeIn();
        var gotourl = 'questions/proses/'+$kelasselect+'/'+$matpelselect+'/'+$levelselect+'/'+$tipesoalselect;
        

        $('#kelas_board_selected').text(': '+$kelasselect);
        $('#mapel_board_selected').text(': '+$matpelselect);
        
        var levelselectconvert='';
        if($levelselect == 1){
            levelselectconvert='Mudah';
        }else if($levelselect == 2){
            levelselectconvert='Sedang';
        }else if($levelselect == 3){
            levelselectconvert='Sulit';
        }


        var tipesoalconvert='';
        if($tipesoalselect == 1){
            tipesoalconvert='Pilihan Ganda';
        }else if($tipesoalselect == 2){
            tipesoalconvert='Uraian';
        }
        
        $('#tipe_board_selected').text(': '+tipesoalconvert);
        $('#level_board_selected').text(': '+levelselectconvert);


        //loading soal

        $.ajax({
          type: "GET",
          dataType: "html",
          cache: false,
          url: '<?php echo $this->webroot;?>'+gotourl, // preview.php
          //data: $("#postp").serializeArray(), // all form fields
          success: function (data) {
            $('.box-soal').html(data);
            
          } // success
        }); // ajax

    }

    

    return false;

    

    

});

$( document ).on( "click", "a.downloadsoal", function(e) {
    e.preventDefault(); // avoids calling preview.php
    var gotourl = '<?php echo $this->webroot;?>questions/view_pdf/'+$kelasselect+'/'+$matpelselect+'/'+$levelselect+'/'+$tipesoalselect;
    

    window.location.href = gotourl;

    

});

$( document ).on( "click", "a.addquestion_button", function(e) {
    e.preventDefault(); // avoids calling preview.php
    var linkEdit = '<?php echo $this->webroot;?>questions/add_single/'+$kelasselect+'/'+$matpelselect+'/'+$levelselect+'/'+$tipesoalselect;
    $.fancybox({
        helpers :{
            overlay:{closeClick:false}
        },
        type: 'ajax',
        width:600,
        autoSize: false,
        title   : 'Form Penambahan Soal',
        content: '<div id="addquestionsingle"></div>',
        beforeShow : function(){
            $.ajax({
              type: "GET",
              dataType: "html",
              cache: false,
              url: linkEdit, // preview.php
              //data: $("#postp").serializeArray(), // all form fields
              success: function (data) {
                $('#addquestionsingle').append(data);
                
              } // success
            }); // ajax
        }
        
    }); //fancybox
    return false;
});

$( document ).on( "click", "a.copytotryout", function(e) {

    e.preventDefault(); // avoids calling preview.php
    var linkEdit = '<?php echo $this->webroot;?>questions/select_tryout/'+$kelasselect+'/'+$matpelselect+'/'+$levelselect+'/'+$tipesoalselect;
    $.fancybox({
        helpers :{
            overlay:{closeClick:false}
        },
        type: 'ajax',
        

        title   : 'Salin Ke Try Out',
        content: '<div id="addquestionsingle"></div>',
        beforeShow : function(){
            $.ajax({
              type: "GET",
              dataType: "html",
              cache: false,
              url: linkEdit, // preview.php
              //data: $("#postp").serializeArray(), // all form fields
              success: function (data) {
                $('#addquestionsingle').append(data);
                
              } // success
            }); // ajax
        }
        
    }); //fancybox
    return false; 
});







$( document ).on( "click", "a.viewebook", function() {
    $.fancybox({

        type: 'html',
        autoSize: false,
        width:'100%',
        height:'100%',
        content: '<embed src="'+this.href+'" height="100%" width="100%" />',
        beforeClose: function() {
            $(".fancybox-inner").unwrap();
        },
        padding:0,
        openEffect:'elastic',
        closeEffect:'elastic',
    }); //fancybox
    return false;
});


$( document ).on( "click", ".viewlesson", function() {
    urldata = $(this).data('urldata');
    $.fancybox({

        type: 'html',
        autoSize: false,
        width:'100%',
        height:'100%',
        
        content: '<embed src="<?php echo $this->webroot;?>lessons/view/'+urldata+'" height="100%" width="100%" />',

        beforeClose: function() {
            $(".fancybox-inner").unwrap();
        },
        padding:0,
        openEffect:'elastic',
        closeEffect:'elastic',
    }); //fancybox
    return false;
});


$( document ).on( "click", "a.editquestion_button", function(e) {
    e.preventDefault(); // avoids calling preview.php
    var id_question_select = $(this).data('idquestion');
    var linkEdit = '<?php echo $this->webroot;?>questions/edit_single/'+id_question_select+'/'+$kelasselect+'/'+$matpelselect+'/'+$levelselect+'/'+$tipesoalselect;
    
    $.fancybox({
        helpers :{
            overlay:{closeClick:false}
        },
        type: 'ajax',
        width:600,
        autoSize: false,
        title   : 'Form Edit Soal',
        content: '<div id="editquestionsingle"></div>',
        beforeShow : function(){
            $.ajax({
              type: "GET",
              dataType: "html",
              cache: false,
              url: linkEdit, // preview.php
              //data: $("#postp").serializeArray(), // all form fields
              success: function (data) {

               

                $('#editquestionsingle').append(data);
                
              } // success
            }); // ajax
        }
        
    }); //fancybox
    return false;
});




$( document ).on( "click", "a.viewsilabus", function() {
    $.fancybox({
        type: 'html',
        autoSize: false,
        content: '<embed src="'+this.href+'#nameddest=self&page=1&view=FitH,0&zoom=80,0,0" type="application/msword " height="99%" width="100%" />',
        beforeClose: function() {
            $(".fancybox-inner").unwrap();
        },
        padding:0,
        openEffect:'elastic',
        closeEffect:'elastic',
    }); //fancybox
    return false;
});


$(".fancybox2")
.fancybox({
    openEffect  : 'none',
    closeEffect : 'none',
    nextEffect  : 'none',
    prevEffect  : 'none',
    padding     : 10,
    fitToView   : true,
    width       : 450,
    autoSize    : false,
});

$( document ).on( "click", "a.editbutton", function(e) {
    e.preventDefault(); // avoids calling preview.php
    var linkEdit = this.href;
    $.fancybox({
        helpers :{
            overlay:{closeClick:false}
        },
        type: 'ajax',
        width:500,
        autoSize: false,
        content: '<div id="editebook"></div>',
        beforeShow : function(){
            $.ajax({
              type: "GET",
              dataType: "html",
              cache: false,
              url: linkEdit, // preview.php
              //data: $("#postp").serializeArray(), // all form fields
              success: function (data) {
                $('#editebook').append(data);
                
              } // success
            }); // ajax
        }
        
    }); //fancybox
    return false;
});



$( document ).on( "click", "a.editvideo", function(e) {
    e.preventDefault(); // avoids calling preview.php
    var linkEdit = this.href;
    $.fancybox({
        helpers :{
            overlay:{closeClick:false}
        },
        type: 'ajax',
        width:500,
        autoSize: false,
        content: '<div id="editvideo"></div>',
        beforeShow : function(){
            $.ajax({
              type: "GET",
              dataType: "html",
              cache: false,
              url: linkEdit, // preview.php
              //data: $("#postp").serializeArray(), // all form fields
              success: function (data) {
                $('#editvideo').append(data);
                
              } // success
            }); // ajax
        }
        
    }); //fancybox
    return false;
});




function storeDataAjax(data){
    return data;
}



$( document ).on( "click", "a.deleteebook", function(e) {
    e.preventDefault(); // avoids calling preview.php

    if(confirm('Apakah anda yakin akan menghapus item ini ? Semua data di ebook ini akan di hapus juga')){
        $.fancybox.showLoading();

        var clickedItem = $(this);

        $.ajax({
          type: "POST",
          dataType: "json",
          cache: false,
          url: this.href, // preview.php
          //data: $("#postp").serializeArray(), // all form fields
          success: function (data) {
            console.log(data);
            
            // on success, post (preview) returned data in fancybox
            if(data.status == "true"){
                clickedItem.parents('figure').removeClass('details-open');

                setTimeout(function() {
                    clickedItem.parents('figure').fadeOut('slow',function(){
                        clickedItem.parents('figure').remove();
                        reindexcountbook();
                        $.fancybox.hideLoading();
                        alert(data.flashMessage);
                        
                    })
                },1000);
                
            }else{

            }
          } // success
        }); // ajax
    }else{
        //alert('Batal menghapus')
    }
}); // on




$( document ).on( "click", "a.deletevideo", function(e) {
    e.preventDefault(); // avoids calling preview.php

    if(confirm('Apakah anda yakin akan menghapus item ini ?')){
        $.fancybox.showLoading();
        $('.detailsvideo').hide();
        $('.closedetailvideo').hide();
        var clickedItem = $(this);

        $.ajax({
          type: "POST",
          dataType: "json",
          cache: false,
          url: this.href, // preview.php
          //data: $("#postp").serializeArray(), // all form fields
          success: function (data) {
            console.log(data);
            
            // on success, post (preview) returned data in fancybox
            if(data.status == "true"){
                //clickedItem.parents('firstpic').removeClass('details-open');
                setTimeout(function() {
                    clickedItem.parents('.firstpic').fadeOut('slow',function(){
                        clickedItem.parents('.firstpic').remove();
                        $.fancybox.hideLoading();
                    })
                },1000);
            }else{
                alert('Terjadi kesalahan, tidak berhasil menghapus');
                $.fancybox.hideLoading();
            }
          } // success
        }); // ajax
    }else{
        // /alert('Batal menghapus');
    }
}); // on



$( document ).on( "click", "a.deletesoal", function(e) {
    e.preventDefault(); // avoids calling preview.php

    if(confirm('Apakah anda yakin akan menghapus item ini ?')){
        $.fancybox.showLoading();

        var clickedItem = $(this);

        $.ajax({
          type: "POST",
          dataType: "json",
          cache: false,
          url: this.href, // preview.php
          //data: $("#postp").serializeArray(), // all form fields
          success: function (data) {
            console.log(data);
            
            // on success, post (preview) returned data in fancybox
            if(data.status == "true"){
                //clickedItem.parents('figure').removeClass('details-open');
                setTimeout(function() {
                    clickedItem.parents('.questionentry').fadeOut('slow',function(){
                        clickedItem.parents('.questionentry').remove();
                        $.fancybox.hideLoading();
                        alert(data.flashMessage);
                    })
                },1000);
                
                
                
            }else{

            }
          } // success
        }); // ajax
    }else{
        //alert('Batal menghapus')
    }
}); // on

$('.categoryselectebook').on("click", function (e) {
    e.preventDefault(); // avoids calling preview.php
    $("#ebookpanel").css('z-index', '10');
    $("#ebookpanel").transition({y: '-40px',opacity: 1 },function(){
        $(this).css({
           
        });
    });
}); // on

$('#close_ebookpanel').on("click", function (e) {
    e.preventDefault(); // avoids calling preview.php
    $("#ebookpanel").transition({y: '0',opacity: 0 },function(){
        $(this).css({
           'z-index' : '0'
        });
    });
}); // on



$('.categoryselectvideo').on("click", function (e) {
    e.preventDefault(); // avoids calling preview.php

    $("#videopanel").transition({y: '-40px',opacity: 1},function(){
        $(this).css({
           'z-index' : '5'
        });
    });
}); // on

$('#close_videopanel').on("click", function (e) {
    e.preventDefault(); // avoids calling preview.php
    $("#videopanel").transition({y: '0',opacity: 0},function(){
        $(this).css({
           'z-index' : '0'
        });
    });
}); // on


$('.imgslide').on("click", function (e) {
    e.preventDefault(); // avoids calling preview.php
    
    var parentini = $(this).parents('.imgSlideshow');
    e.preventDefault(); // avoids calling preview.php
    $(parentini).transition({
        perspective: '200px',
        rotateY: '180deg'
    }, function() {
        $(parentini).css({
           'rotateY' : '0deg',
        });

        
        $(parentini).find(".closedetailvideo").show();
        $(parentini).children(".detailsvideo").show();
    });
    $('.closedetailvideo').fadeOut();
    $(".detailsvideo").fadeOut();
    
    
    

}); // on


$('.closedetailvideo').on("click", function (e) {
    e.preventDefault(); // avoids calling preview.php
    $(this).fadeOut();
    $(this).next(".detailsvideo").fadeOut();

}); // on




$('#dropdownfiltercategory').on('change', function() {
    $.fancybox.showLoading();
    $('#bookshelf').fadeOut('slow');
  var valueDropdown = this.value ; // or $(this).val()
    $.ajax({
      type: "POST",
      dataType: "html",
      cache: false,
      url: '<?php echo $this->webroot?>ebooks/find_category/'+valueDropdown, // preview.php
      //data: $("#postp").serializeArray(), // all form fields
      success: function (data) {
        $.fancybox.hideLoading();
        $('#bookshelf').fadeIn('slow');
        $('#bookshelf').html(data);
        console.log(data);
        
        
      } // success
    }); // ajax
});


$('#dropdownfiltercategory_video').on('change', function() {
    galleryCarusel('startover');
    $.fancybox.showLoading();
    $('.arrCenter').fadeOut('slow');
  var valueDropdown = this.value ; // or $(this).val()
    $.ajax({
      type: "POST",
      dataType: "html",
      cache: false,
      url: '<?php echo $this->webroot?>videos/find_category/'+valueDropdown, // preview.php
      //data: $("#postp").serializeArray(), // all form fields
      success: function (data) {
        $.fancybox.hideLoading();
        $('.arrCenter').fadeIn('slow');
        $('.arrCenter').html(data);
        console.log(valueDropdown);
        
        
      } // success
    }); // ajax
});


$('#EbookSearchForm').on('submit', function(e) {
    e.preventDefault(); // avoids calling preview.php
    $.fancybox.showLoading();
    $('#bookshelf').fadeOut('slow');
    var valueSearch = $('#searchquery').val() ; // or $(this).val()
    $.ajax({
      type: "POST",
      dataType: "html",
      cache: false,
      url: '<?php echo $this->webroot?>ebooks/search?keyword='+valueSearch, // preview.php
      //data: $("#postp").serializeArray(), // all form fields
      success: function (data) {
        $.fancybox.hideLoading();
        $('#bookshelf').fadeIn('slow');
        $('#bookshelf').html(data);
        console.log(data);
        console.log(valueSearch);
        
        
        
      } // success
    }); // ajax
});



$('#VideoSearchForm').on('submit', function(e) {
    e.preventDefault(); // avoids calling preview.php
    galleryCarusel('startover');
    $.fancybox.showLoading();
    $('.arrCenter').fadeOut('slow');
    var valueSearch = $('#searchquery_video').val() ; // or $(this).val()
    $.ajax({
      type: "POST",
      dataType: "html",
      cache: false,
      url: '<?php echo $this->webroot?>videos/search?keyword='+valueSearch, // preview.php
      //data: $("#postp").serializeArray(), // all form fields
      success: function (data) {
        $.fancybox.hideLoading();
        $('.arrCenter').fadeIn('slow');
        $('.arrCenter').html(data);
        console.log(data);
        console.log(valueSearch);
      } // success
    }); // ajax
});


$( document ).on( "click", "a.fancyvideo", function() {
    videoplay = this.href;
   $.fancybox({

    padding : 0, // optional
    title : this.title,
    content: '<div id="containerPlayer">Loading the player ...</div>',
    beforeShow:function(){
        jwplayer("containerPlayer").setup({
            'id': 'playerID',
            'width': '900',
            'height': '550',
            'aboutlink': 'http://basedidea.com',
            'autostart':true,
            //'skin': 'skins/five.xml',
            'image':'images/imagesscreenshot.png',
            'file': videoplay
            
        });
    },
    beforeClose: function() {
        $(".fancybox-inner").unwrap();
    }
   }); // fancybox
   return false;
  
}); // ready


$(".fancyboxupload").fancybox({
    openEffect  : 'elastic',
    closeEffect : 'elastic',
    width:400,
    autoSize: false,
    beforeShow:function(){
        $('#QuestionImportQuestionForm #QuestionKelas').val($kelasselect);
        $('#QuestionImportQuestionForm #QuestionMapel').val($matpelselect);
        $('#QuestionImportQuestionForm #QuestionLevel').val($levelselect);
        $('#QuestionImportQuestionForm #QuestionTipe').val($tipesoalselect);


        $('#QuestionImportQuestionForm #kelas_upload_text').text($kelasselect);
        $('#QuestionImportQuestionForm #pelajaran_upload_text').text($matpelselect);

        
        if($levelselect == 1){
            $('#QuestionImportQuestionForm #level_upload_text').text('Mudah');
        }else if($levelselect == 2){
            $('#QuestionImportQuestionForm #level_upload_text').text('Sedang');
        }else if($levelselect == 3){
            $('#QuestionImportQuestionForm #level_upload_text').text('Sulit');
        }



        if($tipesoalselect == 1){
            $('#QuestionImportQuestionForm #tipe_upload_text').text('Ganda');
        }else if($tipesoalselect == 2){
            $('#QuestionImportQuestionForm #tipe_upload_text').text('Uraian');
        }

        


        

    },

    helpers : {
        
    }
});


function addCloseButton(){
    $('#step1_lesson').html('');
    var appendClose = '<a title="Close" class="fancybox-close" href="javascript:;"></a>';
    $('.fancybox-skin').append(appendClose);

    $( ".fancybox-close" ).on( "click",function(e) {
        e.preventDefault(); // avoids calling preview.php
        var x;
        if (confirm("Apakah anda yakin akan menutup jendela ini? Jika ya data tidak akan tersimpan") == true) {
            $.fancybox.close();
            resetuploadlesson();
            x = "You pressed OK!";
        } else {
            x = "You pressed Cancel!";
        }
        
        
        
    });
    
}

$( document ).on( "click", ".previewlesson", function() {
    saveorder();
    var urldata = $(this).data('urldata');
    $.fancybox({
        closeBtn    : false, // hide close button
        closeClick  : false, // prevents closing when clicking INSIDE fancybox
        type: 'html',
        autoSize: false,
        width:'100%',
        height:'100%',
        content: '<embed src="<?php echo $this->webroot;?>lessons/view/'+urldata+'" height="100%" width="100%" />',
        beforeShow: function(){
            addCloseButton();
        },
        beforeClose: function() {
            $(".fancybox-inner").unwrap();
        },
        afterLoad   : function() {
            this.inner.prepend( '<a id="backtoeditor" href="#uploadlesson" class="btn icon-pencil">&nbsp;&nbsp;Kembali ke halaman Editor</a>' );
            
        },
        padding:0,
        openEffect:'elastic',
        closeEffect:'elastic',
    }); //fancybox
    return false;
});

$(function() {

    Books.init();

});


$(document).ready(
    function() {
        $('#welcomeani').flash(
        {
            swf:'<?php echo $this->webroot; ?>welcome_ani.swf',
            width: 550,
            height: 480,
            wmode: 'transparent'
        }
        );

        $('#welcomeaniebook').flash(
        {
            swf:'<?php echo $this->webroot; ?>aniebook.swf',
            width: 550,
            height: 480,
            wmode: 'transparent'
        }
        );

        $('#welcomeanivideo').flash(
        {
            swf:'<?php echo $this->webroot; ?>ani_video.swf',
            width: 550,
            height: 480,
            wmode: 'transparent'
        }
        );

        $('#welcomeanisilabus').flash(
        {
            swf:'<?php echo $this->webroot; ?>ani_silabus.swf',
            width: 550,
            height: 480,
            wmode: 'transparent'
        }
        );

        $('#welcomeanievaluasi').flash(
        {
            swf:'<?php echo $this->webroot; ?>ani_evaluasi.swf',
            width: 550,
            height: 480,
            wmode: 'transparent'
        }
        );

        $('#welcomeanipresentasi').flash(
        {
            swf:'<?php echo $this->webroot; ?>ani_presentasi.swf',
            width: 550,
            height: 480,
            wmode: 'transparent'
        }
        );


        function slickit(){
    
            var divs = $("figure.entrybook");
            for(var i = 0; i < divs.length; i+=24) {
              divs.slice(i, i+24).wrapAll("<div class='new'></div>");
            }

            $('#bookshelf').slick({
                slide:'div',
                slidesToShow:1,
                
            });
        }

        
        
    }

    
);




addcountbook();


function reindexcountbook(){


    var i = 0;
    var findelement = $( "figure.entrybook" );
    var rand = Math.floor((Math.random() * 30) + 1);
    var countelement = findelement.length;
    console.log(countelement);
    //$( "figure.entrybook" ).data('countebook',0);
    $(findelement).each(function() {
        i++;
        countelement -- ;
        
        
        $(this).attr('data-countebookreindex'+rand,i);
        if(countelement == 0){
            setTimeout(function() {
                reindexebook(rand);        
            },300);
        }
    });
}

function addcountbook(){

    var i = 0;
    $( "figure.entrybook" ).each(function() {

        i++;
        $(this).attr('data-countebook','');
        
        $(this).attr('data-countebook',i);
        
    });
    indexebook();

}


function indexebook(){
    console.log('startreindexagain');
    var multipleBook = 0;
    var datacount = '';
    var findelement2 = $( "figure.entrybook" );
    
    $(findelement2).each(function() {
    
        $(this).removeClass('showonright');
        var datacount = $(this).data('countebook');

        console.log(datacount);
        if (datacount % 8 == 0){
            $(this).addClass('showonright');
            console.log('find');
            
        }
        else if (datacount  % ((multipleBook*7)+(multipleBook-1)) == 0 ) {
            multipleBook++;
            $(this).addClass('showonright');
            console.log('find');
            
        }
        

        if (datacount == 1){
            $(this).removeClass('showonright');
        }
        

    });
    slickit();
}

function reindexebook(rand){
    console.log('startreindexagain');
    var multipleBook = 0;
    var datacount = '';
    var findelement2 = $( "figure.entrybook" );
    
    $(findelement2).each(function() {
    
        $(this).removeClass('showonright');
        var datacount = $(this).data('countebookreindex'+rand);

        console.log(datacount);
        if (datacount % 8 == 0){
            $(this).addClass('showonright');
            console.log('find');
            
        }
        else if (datacount  % ((multipleBook*7)+(multipleBook-1)) == 0 ) {
            multipleBook++;
            $(this).addClass('showonright');
            console.log('find');
            
        }
        

        if (datacount == 1){
            $(this).removeClass('showonright');
        }
        

    });
    slickit();
}




    

function slickit(){

    var divs = $("figure.entrybook");
    $('#bookshelf').unslick();
    $('.containerbookshelf').children().unwrap();
    for(var i = 0; i < divs.length; i+=24) {
      divs.slice(i, i+24).wrapAll("<div class='containerbookshelf'></div>");
    }
    $( "#bookshelf div:first-child" ).addClass('lastbookshelf');

    $('#bookshelf').slick({
        slide:'div',
        slidesToShow:1,
        infinite: false,
        
    });
}

$(document).ready(function(){
  $('.bxslider').bxSlider({
    pager:false,
    auto:true
  });
});

$(function() {

    

}); 














</script>



<!-- End .bigCarusel -->


