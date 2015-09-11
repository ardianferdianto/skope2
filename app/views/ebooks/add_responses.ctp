<?php echo $javascript->link('bookblock.min.js'); ?>
<?php echo $javascript->link('classie.js'); ?>
<?php echo $javascript->link('bookshelf_single.js'); ?>
<?php if (!$ebook):
	echo '<p class="booknotfound" style="color: #7b4520;margin: 70px 0 0 300px;font-weight: 700;">Tidak ditemukan ebook</p>';
else:?>


	<figure id="bookshelf_<?php echo $ebook['Ebook']['id']?>" class="bookjustadded entrybook">
        <div class="book" data-book="book-1" data-image="<?php echo $ebook['Ebook']['cover']?>"></div>
        
        <div class="buttons"></div>
        
        <div class="details">
            <ul>
                <li>
                    <figcaption><h2 id="judulbuku"><?php echo $ebook['Ebook']['title']?><span id="pengarangbuku"><?php echo $ebook['Ebook']['pengarang']?></span></h2 class="cufonreplace"></figcaption>
                </li>
                <li id="detailbuku"><?php echo $ebook['Ebook']['details']?></li>

                <li class="buttonlist">
                    <a href="<?php echo $this->webroot?>ebooks/delete/<?php echo $ebook['Ebook']['id']; ?>" class="btn btn-7 btn-7g btn-icon-only icon-trash deleteebook" data-fancybox-type="ajax"></a>
                    <a href="<?php echo $this->webroot?>ebooks/edit/<?php echo $ebook['Ebook']['id']; ?>" class="btn btn-7 btn-7g btn-icon-only icon-pencil2 editebook editbutton"></a>
                    <a href="<?php echo $this->webroot?>ebooks/download/<?php echo $ebook['Ebook']['file']; ?>" class="btn btn-7 btn-7g btn-icon-only icon-download"></a>
                    <a href="<?php echo $this->webroot;?><?php echo 'files/ebooks/'.$ebook['Ebook']['id']; ?>?<?php echo time();?>" class="btn btn-7 btn-7g btn-icon-only icon-play3 viewebook"></a>  
                </li>
                
            </ul>
        </div>
    </figure>

    <script type="text/javascript">
    var thisbook = $("#bookshelf_<?php echo $ebook['Ebook']['id']?>");
    $(thisbook).hide();
    setTimeout(function() {
        $(thisbook).fadeIn();
        $(thisbook).removeClass('bookjustadded');
        alert('Buku berhasil ditambahkan');
        
    },1000); 
       
    </script>
<?php endif; ?>

