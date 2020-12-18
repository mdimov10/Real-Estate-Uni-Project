;(function($, window, document, undefined) {
	var $win = $(window);
	var $doc = $(document);

	$doc.ready(function() {
		// Wow js init
		new WOW().init();

		// Product change image by radios
		$('.product-image').slick({
			arrows: false,
			dots: false,
			infinite: false,
			fade: true,
			speed: 0
		})

		$('.product-image').slick('slickGoTo', $('.product-colors input:checked').parent().data('slide-to'));

		$('.product-colors input').on('click', function(event) {
			var value = $(this).parent().data('slide-to');

			$('.product-image').slick('slickGoTo', value);
		});

		var maxSliderPrice = 1000000;

		function formatNumber(num) {
          return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
        }

        var formattedMaxSliderPrice = formatNumber(maxSliderPrice);

		// Custom Slider Range Jquery UI
		$( "#slider-range" ).slider({
	    	range: true,
	    	animate: true,
	    	min: 100,
	    	max: 1000000,
	    	values: [ 100, maxSliderPrice],
	    	create: function( event, ui ) {
	    		// console.log($(this).values[0]);
	    		$( "#slider-range" ).find('.ui-slider-handle').first().attr('data-price', $( "#slider-range" ).slider( "values", 0 ) + "лв.");
	    		$( "#slider-range" ).find('.ui-slider-handle').last().attr('data-price', $( "#slider-range" ).slider( "values", 1 ) + "лв.");
	    	},
	    	slide: function( event, ui ) {
	    		$(this).find('.ui-slider-handle').first().attr('data-price', ui.values[ 0 ]);
	    		$(this).find('.ui-slider-handle').last().attr('data-price', ui.values[ 1 ]);

	    		$( "#price_min" ).val($( "#slider-range" ).slider( "values", 0 ));
     			$( "#price_max" ).val($( "#slider-range" ).slider( "values", 1 ));
	      	}
	    });

		// Set initial value
	    $( "#price-min" ).val($( "#slider-range" ).slider( "values", 0 ));
     	$( "#price-max" ).val($( "#slider-range" ).slider( "values", 1 ));


		// Disable page scroll when navigation is opened on mobile
		$('#navbarSupportedContent').on('show.bs.collapse', function () {
			$('html').addClass('no-scroll')
		})

		$('#navbarSupportedContent').on('hidden.bs.collapse', function () {
			$('html').removeClass('no-scroll')
		})

		// Sidebar toggle on desktop and mobile
		if (matchMedia) {
			const mq = window.matchMedia("(max-width: 767px)");
			mq.addListener(WidthChange);
			WidthChange(mq);
		}

	    function WidthChange(mq) {
			if (mq.matches) {
	        	$('#collapseAll').collapse('hide');
			} else {
	        	$('#collapseAll').collapse('show');
			}
	    }
	});
})(jQuery, window, document);

