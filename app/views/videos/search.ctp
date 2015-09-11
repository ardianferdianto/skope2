<?php if (!$videos):
    echo '<p class="booknotfound" style="color: #7b4520;margin: 70px 0 0 300px;font-weight: 700;">Tidak ditemukan video</p>';
else:?>

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
                <a href="<?php echo $this->webroot;?>videos/delete/<?php echo $video['Video']['id']; ?>" class="btn btn-7 btn-7g btn-icon-only icon-trash deletevideo" data-fancybox-type="ajax"></a>
                <a href="<?php echo $this->webroot;?>videos/edit/<?php echo $video['Video']['id']; ?>" class="btn btn-7 btn-7g btn-icon-only icon-pencil2 editvideo"></a>
                <a href="<?php echo $this->webroot;?>videos/download/<?php echo $video['Video']['file']; ?>" class="btn btn-7 btn-7g btn-icon-only icon-download"></a>
                <a class="fancyvideo btn btn-7 btn-7g btn-icon-only icon-play3" href="<?php echo $this->webroot;?><?php echo 'files/videos/'.$video['Video']['file']; ?>"></a>  
            </li>
        </section>
    </div>
<?php endforeach;?>

<?php endif; ?>



<script type="text/javascript">

$(".imgslide").on("click", function (e) {
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

Cufon.replace('.menuservices li', {hover: true}); 
Cufon.replace('h2.cufonreplace');

   
</script>

