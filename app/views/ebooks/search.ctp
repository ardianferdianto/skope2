<?php if (!$ebooks):
	echo '<p class="booknotfound" style="color: #7b4520;margin: 70px 0 0 300px;font-weight: 700;">Tidak ditemukan ebook</p>';
else:?>

<?php foreach ($ebooks as $ebook) :?>
	<figure id="bookshelf_<?php echo $ebook['Ebook']['id']?>" class="entrybook">
        <div class="book" data-book="book-1" data-image="<?php echo $this->webroot.$ebook['Ebook']['cover']?>"></div>
        
        <div class="buttons"></div>
        
        <div class="details">
            <ul>
                <li>
                    <figcaption><h2 id="judulbuku"><?php echo $ebook['Ebook']['title']?><span id="pengarangbuku"><?php echo $ebook['Ebook']['pengarang']?></span></h2 class="cufonreplace"></figcaption>
                </li>
                <li id="detailbuku"><?php echo $ebook['Ebook']['details']?></li>

                <li class="buttonlist">
                     <a href="<?php echo $this->webroot;?>ebooks/delete/<?php echo $ebook['Ebook']['id']; ?>" class="btn btn-7 btn-7g btn-icon-only icon-trash deleteebook" data-fancybox-type="ajax"></a>
                    <a href="<?php echo $this->webroot;?>ebooks/edit/<?php echo $ebook['Ebook']['id']; ?>" class="btn btn-7 btn-7g btn-icon-only icon-pencil2 editebook editbutton"></a>
                    <a href="<?php echo $this->webroot;?>ebooks/download/<?php echo $ebook['Ebook']['id']; ?>" class="btn btn-7 btn-7g btn-icon-only icon-download"></a>
                    <a href="<?php echo $this->webroot;?><?php echo 'files/ebooks/'.$ebook['Ebook']['id']; ?>?<?php echo time();?>" class="btn btn-7 btn-7g btn-icon-only icon-play3 viewebook"></a>  
                </li>
                
            </ul>
        </div>
    </figure>
<?php endforeach;?>
<script type="text/javascript">

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
            },1000);
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

</script>
<?php endif; ?>

<?php echo $javascript->link('bookblock.min.js'); ?>
<?php echo $javascript->link('classie.js'); ?>
<?php echo $javascript->link('bookshelf.js'); ?>