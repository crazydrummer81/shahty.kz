$( document ).ready(function() {
	console.log('PIZDA');
	
	$(".m2map-overlay").addClass('m2map-maximized');
	
	$(".m2map-overlay").click(function() {
		console.log("MAX");
		if($(this).hasClass('m2map-maximized')) {
			$(this).animate({ width:"50px", height:"50px", borderTopRightRadius:"15px" },"easein",
				function() {
					$(this).removeClass('m2map-maximized');
					$(this).addClass('m2map-minimized');
					$(this).text('');
				});
		} else {
			$(this).animate({ width:"100%", height:"100%", borderTopRightRadius:0 },"easein",
				function() {
					if ($(this).hasClass('m2map-minimized')) {
						$(this).removeClass('m2map-minimized');
						$(this).addClass('m2map-maximized');
					}
				});
		};
	});
 });