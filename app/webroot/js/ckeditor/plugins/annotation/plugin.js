CKEDITOR.plugins.add('annotation',
{
    init: function (editor) {
        var pluginName = 'Annotation';
        editor.ui.addButton('annotation',
            {
                label: 'Anotasi Gambar',
                command: 'OpenWindow',
                icon: CKEDITOR.plugins.getPath('annotation') + 'images/pen_12x12.png'
            });
        var cmd = editor.addCommand('OpenWindow', { exec: showMyDialog });
    }
});
function showMyDialog(e) {

	var editor = CKEDITOR.instances.rich_ed,
    sel = editor.getSelection().getSelectedElement();
    var elementselected = sel.getName();
    console.log(elementselected);

    if( elementselected != 'img'){
        alert('Anda harus memilih bagian dengan format image')
    }else{

        var urlimage = sel.data('cke-saved-src');

        console.log();
        //console.log(sel.baseURI);
        //sel.selectElement(sel.getStartElement());
        var hostname = window.location.hostname;
        var urleditor= 'http://'+hostname+'/skope2/halamen/editimagemikro_full?filename='+urlimage;

        $.fancybox({
            type: 'ajax',
            width:650,
            height:450,
            autoSize: false,
            padding:0,
            title   : 'CONNECT MIKROSKOP',
            content: '<div id="anotationcontainer"></div>',
            beforeShow : function(){
            $.ajax({
              type: "GET",
              dataType: "html",
              cache: false,
              url: urleditor, // preview.php
              //data: $("#postp").serializeArray(), // all form fields
              success: function (data) {
                $('#anotationcontainer').html('');
                $('#anotationcontainer').append(data);

                
                
              } // success
            }); // ajax
            },
            beforeClose : function(){
                $('#anotationcontainer').remove();
                //var oldPlayer = document.getElementById('myImage');
                //videojs(oldPlayer).dispose(); 
                //$('#mikroskoppage').html('');
            }
        });
    }
    
    //window.open(urleditor, 'MyWindow', 'width=600,height=600,scrollbars=no,scrolling=no,location=no,toolbar=no');
}