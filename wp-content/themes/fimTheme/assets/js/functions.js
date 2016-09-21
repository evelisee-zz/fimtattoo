$(document).ready(function($){
	//tooltip
	$('[data-toggle="tooltip"]').tooltip();

	$('.grid').masonry({
	  // options
	  itemSelector: '.grid-item',
	  columnWidth: 40,
	});

	$(".fancy").fancybox({
		autoSize: false,
    	openEffect	: 'elastic',
    	closeEffect	: 'elastic',

    	helpers : {
    		title : {
    			type : 'inside'
    		}
    	}
    });

})