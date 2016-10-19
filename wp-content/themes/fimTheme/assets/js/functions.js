$(document).ready(function($){
	//tooltip
	$('[data-toggle="tooltip"]').tooltip();

	$('.grid').masonry({
	  // options
	  itemSelector: '.grid-item',
	  columnWidth: 40,
	});


	var $container = $('.masonry');
	$container.masonry({
	    itemSelector: '.item',
	    percentPosition: true,
	    gutter: 10,
	      masonry: {
		    columnWidth: '.item'
		  }
 	});

	$(".fancy").fancybox({
		autoSize: false,
    	openEffect	: 'elastic',
    	closeEffect	: 'elastic',
    	// content: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Carregando</span>',
    	'afterShow' : function () {
            $(".fancybox-title").html('<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>');
        },

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
		    $('.search-button').click(function(e){
		    	e.preventDefault();
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

		var conteudo = '';
		
		//Mostrando texto na Fancy box
			$(".container .item a.fancy").click( function(){
				// $('.fancybox-title').html('<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Carregando</span>');
				console.log('entrou');
				var titulo =  $(this).find('figcaption h2').html();
				var autor = $(this).find('figcaption p.author').html();
				var categorias = $(this).find('figcaption p.tags').html();

				console.log(titulo);
				
				conteudo = '<p><strong>' +titulo+  '</strong><br/><strong>' +autor+  '</strong><br/><strong>' +categorias+  '</strong><br/></p>';

				// $('.fancybox-title').html('<i class="fa fa-spinner fa-spin></i>');

				setTimeout(function(){
					$('.fancybox-title').html('');
					$('.fancybox-title').append(conteudo);
					$(conteudo).show('slow');
				}, 2000);

			});

	$(".search-button-active").click( function(e){
		e.preventDefault();

		var post_type = $(".item_search:checked").val();
		$("input[type=hidden]").val(post_type);

		$(this).parent().submit();
	});


	//Remove o link dos botoes na home
	$(".item a.fancy figcaption p button").prop("onclick", null);

	// Single
	$("body.single .gallery a").addClass("fancy");


	//.........
	// Footer
	//.........
		//Scroll top
			$('.top-scroll').click(function(){
				console.log('entrou');
				 $('html, body').animate({scrollTop:0}, 'slow');
			});

});

function goToPage(link){
	window.open(link, '_blank');
}

function goToSection(link){
	window.open(link, '_self');
}