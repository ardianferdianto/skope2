/*galleryLightboxvar autoSelect = function(){
	var currentURL = window.location;
	var selectOpacity = 1;
	if(currentURL.hash == "#Gallery"){
		$("#sectionGallery").css("opacity", 1);
		gotoPage((905 + 435), 'sectionGallery', selectOpacity);
	}else if(currentURL.hash == "#Services"){
		$("#sectionServices").css("opacity", 1);
		gotoPage((1810 + 870), 'sectionServices', selectOpacity);
	}else if(currentURL.hash == "#Contact"){
		$("#sectionContact").css("opacity", 1);
		gotoPage((2720 + 1320), 'sectionContact', selectOpacity);
	}else if(currentURL.hash == "#Contact2"){
		$("#sectionContact2").css("opacity", 1);
		gotoPage((3570 + 1800), 'sectionContact2', selectOpacity);
	}else{
		$("#sectionHome").css("opacity", 1);
		gotoPage(0, 'sectionHome', selectOpacity);
	}
	
}*/


window.urlapp = window.location.host;

// jQuery function to set a maximum length or characters for a page element it can handle mutiple elements
$.fn.createExcerpts = function(elems,length,more_txt) {
	$.each($(elems), function() { 
	    var item_html = $(this).html(); //
	    var length_item = item_html.length;
	    if(length_item > length){
		    item_html = item_html.replace(/<\/?[^>]+>/gi, ''); //replace html tags
		    item_html = jQuery.trim(item_html);  //trim whitespace
		    $(this).html(item_html.substring(0,length)+more_txt);  //update the html on page
		}
	});
	return this; //allow jQuery chaining 
}

var gotoPage = function(marginLeft, liID, opacity){
	$('#caruselWrapper').animate({
		scrollLeft : marginLeft
	},  850, 'easeInOutExpo', function(){
		$("#" + liID). animate({opacity: opacity}, 200);
		//hack fix all
		$(".bigCarusel li").css("opacity", 1);
	});                
	
	return false;
}



var initLayouts = function(){
	// adjust width fake :D // stupid thing
	var tempWidth = (($("body").width() - 850) / 2) - 50;
	$("#sectionfake").width(tempWidth);
}

var servicesSlide = function(moveTo){
	
	$('.contentTextSlide').stop().animate({
		scrollTop : moveTo
	},  350, 'easeInOutExpo', function(){
		
	});
}

var galleryCarusel = function(action){
	var move = function(direction){
		var moveTo = 0;
		var stepSize = 774;
		var currentPos = $('.galleryCarusel').scrollLeft();
		
		var limitSize = (($(".imgSlideshow").size() / 3) * stepSize) - stepSize;
		if(direction == 'next'){
			if(currentPos < limitSize){
				moveTo = currentPos + stepSize;
			}else{
				moveTo = 0;
			}
		} else if(direction == 'prev'){
			if(currentPos > 0){
				moveTo = currentPos - stepSize;
			}else{
				moveTo = 0;
			}
		

		} else if(direction == 'startover'){
			
			moveTo = 0;
			
		}
	
		$('.galleryCarusel').stop().animate({
			scrollLeft : moveTo
		},  350, 'easeInOutExpo', function(){
			$('.detailsvideo').hide();
			$('.closedetailvideo').hide();
			
		});
	} 
	
	if(action == 'next'){
		move('next');
	}else if(action == 'prev'){
		move('prev');
	}else if(action == 'startover'){
		move('startover');
	}else{
	alert('act: ' + action + ' not bind');
	}
}



var galleryCarusel2 = function(action){
	var move = function(direction){
		var moveTo = 0;
		var stepSize = 1000;
		var currentPos = $('.galleryCarusel2').scrollLeft();
		
		var limitSize = (($(".imgSlideshow2").size() / 4) * stepSize) - stepSize;
		if(direction == 'next'){
			if(currentPos < limitSize){
				moveTo = currentPos + stepSize;
			}else{
				moveTo = 0;
			}
		} else if(direction == 'prev'){
			if(currentPos > 0){
				moveTo = currentPos - stepSize;
			}else{
				moveTo = 0;
			}
		

		} else if(direction == 'startover'){
			
			moveTo = 0;
			
		}
	
		$('.galleryCarusel2').stop().animate({
			scrollLeft : moveTo
		},  350, 'easeInOutExpo', function(){
			$('.detailsvideo').hide();
			$('.closedetailvideo').hide();
			
		});
	} 
	
	if(action == 'next'){
		move('next');
	}else if(action == 'prev'){
		move('prev');
	}else if(action == 'startover'){
		move('startover');
	}else{
	alert('act: ' + action + ' not bind');
	}
}

function str_replace (search, replace, subject, count) {
    var i = 0, j = 0, temp = '', repl = '', sl = 0, fl = 0,
            f = [].concat(search),
            r = [].concat(replace),
            s = subject,
            ra = r instanceof Array, sa = s instanceof Array;
    s = [].concat(s);
    if (count) {
        this.window[count] = 0;
    }

    for (i=0, sl=s.length; i < sl; i++) {
        if (s[i] === '') {
            continue;
        }
        for (j=0, fl=f.length; j < fl; j++) {
            temp = s[i]+'';
            repl = ra ? (r[j] !== undefined ? r[j] : '') : r[0];
            s[i] = (temp).split(f[j]).join(repl);
            if (count && s[i] !== temp) {
                this.window[count] += (temp.length-s[i].length)/f[j].length;}
        }
    }
    return sa ? s : s[0];
}





var currentShow = '';
var currentClasa = '';
var caruselFilter = function(clasa){
	$(".imgSlideshow").css('display', 'none');
	currentClasa = clasa;
	currentShow += "," + clasa;
	$(currentShow).css('display', 'block');
	
	$(".galleryMenu").animate({
		opacity : 0,
		bottom: '150px'
	}, {duration: 300, easing: 'easeOutBack'});
}

$(window).resize(function() {
	initLayouts();
});


function addCloseButtonSetting(){
    
    var appendClose = '<a title="Close" class="fancybox-close" href="javascript:;"></a>';
    $('.fancybox-skin').append(appendClose);

    $( ".fancybox-close" ).on( "click",function(e) {
        e.preventDefault(); // avoids calling preview.php
        	
  			$("iframe").contents().find("body").html('<div style="display:block;width:100%;margin:0 auto;text-align:center;background-color:#3b4dac;height:100%;"><h3 style="font-family: Lato, Calibri, Arial, sans-serif;font-size:25px;color:#fff;padding-top:100px;">Memuat data ulang, harap menunggu ...</h3></div>');

		
        window.location.reload()
        

       // $('iframe').html('<p>Memuat data ulang, harap menunggu ...');
        
        
    });
    
}

$(document).ready(function(){


	$('.hasTooltip').each(function() { // Notice the .each() loop, discussed below
	    $(this).qtip({
	        content: {
	            text: $(this).data('tooltip') // Use the "div" element next to this for the content
	        },

	        position: {
	        	my: 'top left',
        		at: 'right center',  // Position my top left..
    		}
	    });
	});

	//edit
    $('#pages_lesson_area div.page-count-lesson').each(function() { // Notice the .each() loop, discussed below

      $(this).qtip(
      {
         content: {
            // Set the text to an image HTML string with the correct src URL to the loading image you want to use
            text: '<img class="throbber" src="/projects/qtip/images/throbber.gif" alt="Loading..." />',
            url: 'http://localhost/eteaching_sd/lessons/view/1', // Use the rel attribute of each element for the url to load
            title: {
               text: 'Wikipedia - ' + $(this).text(), // Give the tooltip a title using each elements text
               button: 'Close' // Show a close link in the title
            }
         },
         position: {
            corner: {
               target: 'bottomMiddle', // Position the tooltip above the link
               tooltip: 'topMiddle'
            },
            adjust: {
               screen: true // Keep the tooltip on-screen at all times
            }
         },
         show: { 
            when: 'click', 
            solo: true // Only show one tooltip at a time
         },
         hide: 'unfocus',
         style: {
            tip: true, // Apply a speech bubble tip to the tooltip at the designated tooltip corner
            border: {
               width: 0,
               radius: 4
            },
            name: 'light', // Use the default light style
            width: 570 // Set the tooltip width
         }
      })
   });
						   
	$(".bigCarusel li").css("opacity", 1);
	initLayouts();
	//autoSelect();
	var clickOpacity = 1;
	
	$(".galleryMenu").css('opacity', 0);
	$(".categoriesBtn").click(function(){
		if($(".galleryMenu").css('opacity') == 0){
			$(".galleryMenu").animate({
				opacity : 1,
				bottom: '160px'
			}, {duration: 400, easing: 'easeOutBack'});
		}else{
			$(".galleryMenu").animate({
				opacity : 0,
				bottom: '150px'
			}, {duration: 400, easing: 'easeOutBack'});
		}
		return;
	});


	$(".popupuploadebook").fancybox({
		title	: 'Form Penambahan Ebook',
	    helpers :{
	    	overlay:{closeClick:false}
	    },
		'openEffect'	: 'elastic',
		'closeEffect'	: 'elastic',
		beforeClose: function() {
        	$('#EbookAddForm').show();
        	$('#VideoAddForm').show();
			$('#CategoryAddForm').hide();
			$('.loader').hide();
			$('.categorynameinput').val('');
			
    	}
		
	});

	$(".popupuploadvideo").fancybox({
		title	: 'Form Penambahan Video',
	    helpers :{
	    	overlay:{closeClick:false}
	    },
		'openEffect'	: 'elastic',
		'closeEffect'	: 'elastic',
		beforeClose: function() {
        	$('#VideoAddForm').show();
        	$('#EbookAddForm').show();
			$('#CategoryAddForm').hide();
			$('.loader').hide();
			$('.categorynameinput').val('');
			
    	}
	});



	


	$(".fancybox").fancybox({
		
		fitToView	: false,
		width		: '95%',
		height		: '95%',
		autoSize	: false,
		closeClick	: false,
		
	});

	$(".fancyboxsetting").fancybox({
		
		fitToView	: false,
		padding:0,
		autoSize	: false,
		width		: '70%',
		height		: '80%',
		closeBtn    : false, // hide close button
            closeClick  : false, // prevents closing when clicking INSIDE fancybox
            helpers :{
                overlay:{closeClick:false}
            },
		beforeShow: function(){
            
            addCloseButtonSetting();
        },
		
	});


	
	
	$('.galleryMenu-row').click(function(){
		if($(this).find(".checkbox").hasClass('checkboxSelected')){
			$(this).find(".checkbox").removeClass('checkboxSelected');
			$(this).find(".checkbox").css('background-position', '0px -19px');
			var temcurrentShow = str_replace("," + currentClasa, "", currentShow);
			$(".imgSlideshow").css('display', 'block');
			//$(temcurrentShow).css('display', 'block');
		}
		$(this).find(".checkbox").addClass('checkboxSelected');
	});	
	
	$('.menuservices ul li').click(function(){
		$(".menuservices a").removeClass('selected');
		$(this).find("a").addClass('selected');
	});
	
	$('#btnHome').click(function(){
		gotoPage(0, 'sectionHome', clickOpacity);
		$('.logo').css('font-size','2.1em');
		changetextLogo('Welcome to E-Teaching Technology',1000);
		$('#welcomeani').html('');
		$('#welcomeani').flash(
        {
            swf:'welcome_ani.swf',
            width: 550,
            height: 480,
            wmode: 'transparent'
        }
        );
		Cufon.replace('.logo', {hover: true}); 
		
	});

	$('.gotoVideopage').click(function(){
		$('#welcomeanivideo').html('');
		$('#welcomeanivideo').flash(
        {
            swf:'ani_video.swf',
            width: 550,
            height: 480,
            wmode: 'transparent'
        });
        $('#welcomeanivideo').css('z-index','10');

		setTimeout(function() {
			$('#welcomeanivideo').css('z-index','4');
		},21000);
	});

	$('.gotoSilabuspage').click(function(){
		$('#welcomeanisilabus').html('');
		$('#welcomeanisilabus').flash(
        {
            swf:'ani_silabus.swf',
            width: 550,
            height: 480,
            wmode: 'transparent'
        });
        $('#welcomeanisilabus').css('z-index','10');

		setTimeout(function() {
			$( "#welcomeanisilabus" ).animate({
			    
			    left: "-70px",
			    
			  }, 2000, function() {
			    $('#welcomeanisilabus').css('z-index','4');
			  });
			
		},19000);
	});


	$('.gotoEvaluasipage').click(function(){
		
		$('#welcomeanievaluasi').html('');
		$('#welcomeanievaluasi').flash(
        {
            swf:'ani_evaluasi.swf',
            width: 550,
            height: 480,
            wmode: 'transparent'
        });
        $('#welcomeanievaluasi').css('z-index','10');

		setTimeout(function() {
			$('#welcomeanievaluasi').fadeOut('slow',function(){
				$('#welcomeanievaluasi').html('');
			});
		},21000);
	});

	$('.gotoEbookpage').click(function(){
		$('#bookshelf').slickGoTo(0);
		//gotoPage((1810 + 870), 'sectionServices', clickOpacity);
		$('#welcomeaniebook').html('');
		$('#welcomeaniebook').flash(
        {
            swf:'aniebook.swf',
            width: 550,
            height: 480,
            wmode: 'transparent'
        });
        $('#welcomeaniebook').css('z-index','10');

		setTimeout(function() {
			$('#welcomeaniebook').css('z-index','4');
		},21000);
	});


	$('.gotoPresentasipage').click(function(){
		//$('#bookshelf').slickGoTo(0);
		//gotoPage((1810 + 870), 'sectionServices', clickOpacity);
		$('#welcomeanipresentasi').html('');
		$('#welcomeanipresentasi').flash(
        {
            swf:'ani_presentasi.swf',
            width: 550,
            height: 480,
            wmode: 'transparent'
        });
        $('#welcomeanipresentasi').css('z-index','10');

		setTimeout(function() {
			$('#welcomeanipresentasi').css('z-index','4');
		},21000);
	});
	

	$('#btnContact').click(function(){
		gotoPage((2720 + 1320), 'sectionContact', 1);
	});
	$('#btnContact2').click(function(){
		gotoPage((3570 + 1800), 'sectionContact2', 1);
	});

	function changetextLogo(texttoshow,duration){
		var logotoproccess = $('.logo');
		logotoproccess.hide();
		$(logotoproccess).text(texttoshow);
		setTimeout(function() {
			logotoproccess.fadeIn('slow');
		},duration);
	}

	$('.gotoVideopage').on("click", function (e) {
		changetextLogo('Video',1000);
		$('.logo').css('font-size','2.2em');
		Cufon.replace('.logo', {hover: true}); 
	}); // on

	$('.gotoEbookpage').on("click", function (e) {
		changetextLogo('Ebook',1000);
		$('.logo').css('font-size','2.2em');
		Cufon.replace('.logo', {hover: true}); 
	}); // on


	$('.gotoSilabuspage').on("click", function (e) {
		changetextLogo('Silabus & RPP',1000);
		$('.logo').css('font-size','2.2em');
		Cufon.replace('.logo', {hover: true}); 
		
	}); // on



	$('.gotoCdpage').on("click", function (e) {
		changetextLogo('Direktori Pembelajaran',1000);
		$('.logo').css('font-size','2.2em');
		Cufon.replace('.logo', {hover: true}); 
		
	}); // on



	$('.gotoPresentasipage').on("click", function (e) {
		changetextLogo('Lesson Creator',1000);
		$('.logo').css('font-size','2.2em');
		Cufon.replace('.logo', {hover: true}); 
		
	}); // on


	

	$('.rotateright').css({ rotate: '30deg' });

	$('.rotateleft').css({ rotate: '-30deg' });

	
	$( document ).on( "click", "a.addcatcancel", function() {
		$('#EbookAddForm').fadeIn();
		$('#CategoryAddForm').fadeOut();
		$('.categorynameinput').val('');
		
		$('#VideoAddForm').fadeIn();
		

	}); // ready
	
	$( document ).on( "click", "a.addcat", function() {
		$('#EbookAddForm').fadeOut();
		$('#VideoAddForm').fadeOut();
		$('#CategoryAddForm').fadeIn();
		$('#CategoryAddForm2').fadeIn();
		
	}); // ready




	
}); 

