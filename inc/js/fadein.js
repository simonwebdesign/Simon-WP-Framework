jQuery(document).ready(function(){
		jQuery(".home #header, .home .top-line, .home .postdate, .home .entry-title, .home .post, .home .bread-crumb, .home .meta, .home .navigation, .home #footer, .archive #header, .archive .top-line, .archive .postdate, .archive .entry-title, .archive .post, .archive .bread-crumb, .archive .meta, .archive .navigation, .archive #footer").each(function(i){
						var row = jQuery(this);
				setTimeout(function() {
												row.toggleClass('fadeIn');
								}, 100*i);
				
		});
});

