
<div class="masthead clearfix">
  <div class="inner">
   
  </div>
</div>

<div class="inner cover animsition">
  <div style="right: 0">
    <a class="btn btn-primary glyphicon glyphicon-play filtering" title="View" href="<?php echo $this->webroot; ?>lessons/view/<?php echo $halamanID ?>" style="margin-right: -89.5em;"></a>
    <a class="btn btn-success glyphicon glyphicon-home filtering" title="Awal" href="<?php echo $this->webroot; ?>" style="right: -83em;"></a>
      
    </div>
  <div class="row" id="createnew_panel">
    <div class="col-md-3 leftpanel">
      <button class="btn btn-white bt-title">
        <h4><?php echo $this->data['Lesson']['title']?></h4>
        <p>Oleh : <?php echo $this->data['Lesson']['author']?></p>
      </button>
      <div class="col-md-3 leftpanel pages">
        
      </div>
      <a href="<?php echo $this->webroot;?>" class="btn btn-success btn-lg">SIMPAN</a>
    </div>
    <div class="col-md-9 rightpanel" style="left: 0%;">
      <button id="commandpanel" class="btn btn-primary glyphicon glyphicon-menu-left" title="hide panel"> hide</button>
      <div class="title_container_createnew">
        <h1 class="title_createnew"> Menulis Penelitian </h1>
        <p>Selamat datang di modul penulisan penelitian, untuk menambah halaman penelitian silahkan klik (+) disamping </p>
      </div>

      <div id="step1_createnew" class="wizard_createnew" >
       
      </div>

      <button id="edit" class="btn btn-primary" style="display:none;" >Edit</button>
      <button id="delete" class="btn btn-warning" style="display:none;" >Delete</button>
    </div>
    <div class="pollSlider" style="display:none;right:-50px;"></div>
  </div>


</div>
<script src="<?php echo $this->webroot;?>js/video.js"></script>
<script src="<?php echo $this->webroot;?>js/RecordRTC.js"></script>
<script src="<?php echo $this->webroot;?>js/videojs.record.js"></script>
<script>
  function CKupdate(){
    for ( instance in CKEDITOR.instances )
        CKEDITOR.instances[instance].updateElement();
  }

  $(document).ready(function() { 
    $('#step1_createnew').hide();
    $.ajax({
      url:"<?php echo $this->webroot; ?>halamen/explorer",
      dataType: 'html',
      success: function(result){
        $('.pollSlider').html(result);
      }
    });
    $(".col-md-3.leftpanel.pages").sortable({
      handle: 'button',
      cancel: '',
      axis: 'y',
      update: function (event, ui) {
        //$(this).find('span.sortabledrag button').index(ui.item)
        var data = $(".col-md-3.leftpanel.pages").sortable("serialize");//opsi= toArray
        console.log(data);
        var newIndex = $(ui.item).index();
        $.ajax({
            data: data,
            type: 'POST',
            url: "<?php echo $this->webroot; ?>halamen/edit_order",
            success: function(data) {
                cek_pages();
            }
        });
        //$('button.btn.btn-white.bt-pages').data("order",newIndex);
        console.log(newIndex);
      }
    }).disableSelection();
    cek_pages();
  });

  $('.bt-title').on("click",function(){
    $('#edit') .hide();
    $('#delete') .hide();
    $('#step1_createnew').html('<h5>Tunggu....</h5>');
    html_ajax("<?php echo $this->webroot; ?>halamen/edit_title/<?php echo $halamanID;?>");
    
  });
  $('#step1_createnew').on("click","#title_subm",function() {
      $.ajax({
            type: "POST",
            url: "<?php echo $this->webroot; ?>halamen/edit_title/<?php echo $halamanID;?>",
            data: $("#title_ed").serialize(),
            beforeSend: function() {
                $('#step1_createnew').fadeOut();
                /*$('#step1_createnew').html('<h2>Loading.......</h2>');*/

            },
            success: function(data) {
                $('#step1_createnew').html(data);
                $('#step1_createnew').fadeIn("slow");
            }

        })
  });
  $('#step1_createnew').on("click","#page_subm",function() {
      CKupdate();
      //alert($page_id);
      $.ajax({
            type: "POST",
            url: "<?php echo $this->webroot; ?>halamen/edit_pages/"+$page_id,
            data: $("#pages_ed").serialize(),
            beforeSend: function() {
                $('#step1_createnew').fadeOut();
            },
            success: function(data) {
                html_ajax("<?php echo $this->webroot; ?>halamen/view_pages/"+$page_id);
                //$('#step1_createnew').html(data);
                $('#edit') .show();
                $('#delete') .show();
                //$('#step1_createnew').fadeIn("slow");
            }

        })
  });
  $('#step1_createnew').on("click","#add_page",function() {
      CKupdate();
      var halaman=$('#tambahpage').data('lasts');
      console.log(halaman);
      $.ajax({
            type: "POST",
            url: "<?php echo $this->webroot; ?>halamen/add_pages/<?php echo $halamanID;?>/"+halaman,
            data: $("#pages_add").serialize(),
            beforeSend: function() {
                $('#step1_createnew').fadeOut();
            },
            success: function(data) {
                $('#edit').hide();
                $('#delete').hide();
                cek_pages();  
            }

        })
  });
  $('.col-md-3.leftpanel.pages').on("click","button.btn.btn-white.bt-pages",function() {
      $page_id=$(this).data('pageid');
      var page_ord=$(this).data('order');
      $('#step1_createnew').html('<h5>Tunggu....</h5>');
      html_ajax("<?php echo $this->webroot; ?>halamen/view_pages/"+$page_id);
      $('#edit') .show();
      $('#delete').show();
  });
  $('.col-md-3.leftpanel.pages').on("click","#tambahpage",function() {
      var halaman=$('#tambahpage').data('lasts');
      console.log(halaman);
      html_ajax("<?php echo $this->webroot;?>halamen/add_pages/<?php echo $halamanID;?>/"+halaman);
      $('#edit').hide();
      $('#delete').hide();
  });
  $('#edit').on("click",function() {
      html_ajax("<?php echo $this->webroot; ?>halamen/edit_pages/"+$page_id);
      $('#edit') .hide();
      $('#delete').hide();
  });
   $('#delete').on("click",function() {
      if (confirm("Are you sure?")) {
        $.ajax({
          url: "<?php echo $this->webroot; ?>halamen/delete_pages/"+$page_id,
          dataType: 'html',
          success: function(result){
            cek_pages();
          }
        });
      }
      $('#edit') .hide();
      $('#delete').hide();
  });

  window.staterightside = 'notshown';

  $("#commandpanel").click(function() {

    if(window.staterightside == 'notshown'){
      
      showsidebar();

    }else{

      hidesidebar();
    }
  });

  $( ".pollSlider" )
  .mouseover(function() {
    $('.rightpanel').transition({ width: '50%'});
    $('.pollSlider').transition({ width: '50%'});
  })
  .mouseout(function() {
    $('.rightpanel')
    .transition({ width: '75%'});
    $('.pollSlider')
    .transition({ width: '25%'});
  });
  

  function showsidebar(){
    $('#commandpanel').removeClass('glyphicon-menu-left');
      $('.leftpanel')
      .transition({ left:-20})
      .transition({ opacity: 0 });
      $('.leftpanel').hide();
      $('.rightpanel')
      .transition({ left: -10})
      .transition({ left: 0});
      $('.pollSlider').show();
      $('.pollSlider').css('opacity',0);
      $('.pollSlider').transition({opacity:100,right:0});
      
      $('#commandpanel').addClass('glyphicon-menu-right');
      window.staterightside = 'showed';
  }

  function hidesidebar(){

    $('#commandpanel').removeClass('glyphicon-menu-right');

    $('.leftpanel').show();
    $('.leftpanel').css('opacity',100);
      
    $('.leftpanel')
    .transition({ left:0});

    $('.rightpanel')
    .transition({ left: 10})
    .transition({ left: 0});
    $('.pollSlider').hide();
      
    $('.pollSlider').transition({opacity:0,right:50});
    $('#commandpanel').addClass('glyphicon-menu-left');
    window.staterightside = 'notshown';

  }

  function cek_pages(){
    $.ajax({
      dataType:'json',
      url: "<?php echo $this->webroot; ?>halamen/pages/<?php echo $halamanID;?>",
      success: function(data) {

          $('.col-md-3.leftpanel.pages').empty();
          var hitung=0;
          console.log(data);
          for (var i=0; i<data.length; i++){
              $('.col-md-3.leftpanel.pages').append('<span class="sortabledrag" id="item-'+data[i]['Halaman']['id']+'"><button class="btn btn-white bt-pages" data-order="'+i+'" data-pageid="'+data[i]['Halaman']['id']+'"><p><h4>'+data[i]['Halaman']['deskripsi_halaman']+'</h4></p><p class="hal">Page '+( parseInt(i)+1)+'</p></button></span>');
              hitung++
            //}
          }
          //alert(hitung); 
          $('.col-md-3.leftpanel.pages').append('<button class="btn btn-white bt-title" id="tambahpage" data-lasts="'+hitung+'"><h1>+</h1></button>');
      }

    })
  }
  function html_ajax(lempar_url){
     $.ajax({
        url: lempar_url,
        dataType: 'html',
        success: function(result){
          $('#step1_createnew').html(result);
          //$('.align li').hide();
          $('#step1_createnew').fadeIn();
        }
      });
  }


  

 /* $('#step1_createnew').on("click",'#title_subm',function(){
    alert('asdasd');
  });*/

</script>