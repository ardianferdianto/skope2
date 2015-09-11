
					$(document).ready(function() {
						$(".nano").nanoScroller();
			
						$('#features').wowBook({
							 height : 550
							,width  : 950
							,centeredWhenClosed : true
							,hardcovers : true
							,turnPageDuration : 1000
							,numberedPages : [1,-2]
							,controls : {
									zoomIn    : '#zoomin',
									zoomOut   : '#zoomout',
									next      : '#next',
									back      : '#back',
									first     : '#first',
									last      : '#last',
									slideShow : '#slideshow',
									flipSound : '#flipsound'
								}
						}).css({'display':'none', 'margin':'auto'}).fadeIn(1000);
			
						$("#cover").click(function(){
							$.wowBook("#features").advance();
						});
			
			
					});