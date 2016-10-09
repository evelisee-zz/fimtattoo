$(document).ready(function($){
	//tooltip
	$('[data-toggle="tooltip"]').tooltip();

	$('.grid').masonry({
	  // options
	  itemSelector: '.grid-item',
	  columnWidth: 40,
	});

 	var container = document.querySelector('#masonry');
	var masonry = new Masonry(container, {
	    // columnWidth: 20,
	    itemSelector: '.item',
	    percentPosition: true,
	    gutter: 10,
	      masonry: {
		    // use outer width of grid-sizer for columnWidth
		    columnWidth: '.item'
		  }
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

    //......................
    // HOME
    //......................
	    //search box
		    $('.search-button').click(function(){
		    	$(this).hide();
		    	$('.search-button-active').show();
		    	$('.holder-hidden').show("slide");
		    });

	    //Clicando fora do botão e conteudo esconde div
			$(document).mouseup(function (e){
				var button = $('.search-button-active');
				var container = $('.search');

				if (!button.is(e.target) && container.has(e.target).length === 0){
					$('.holder-hidden').hide('slide');
					$('.search-button-active').hide();
					$('.search-button').show();
					// container.removeClass('activated');
				}
			});

		//Mostrando texto na Fancy box
			$(".container .row .item a.fancy").click( function(){
				// $('.fancybox-title').html('');
				var titulo =  $(this).find('figcaption h2').html();
				var autor = $(this).find('figcaption p.author').html();
				var categorias = $(this).find('figcaption p.tags').html();

				console.log(titulo);
				var conteudo = '';
				var conteudo = '<p><strong>' +titulo+  '</strong><br/><strong>' +autor+  '</strong><br/><strong>' +categorias+  '</strong><br/></p>';

				setTimeout(function(){
					$('.fancybox-title').html('');
					$('.fancybox-title').append(conteudo);
					$(conteudo).show('slow');
				}, 10);

			})
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