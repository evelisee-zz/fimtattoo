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

	// $(".container .row ul li a.fancy").click( function(){
	// 	$(".fancybox-wrap .fancybox-title p").html('');
	// 	$(".fancybox-wrap .fancybox-title span:nth-of-type(3)").html("AAAA");
	// 	console.log("clicou!");

	// 	var tagsEl = $(this).parent().find(".tags");

	// 	console.log(tagsEl);

	// 	setTimeout(function(){
	// 		$(".fancybox-wrap .fancybox-title p").html(tagsEl);
	// 	}, 10);

    	
	// });


})