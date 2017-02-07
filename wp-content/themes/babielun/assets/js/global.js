


	jQuery(function($){

	$('ul.nav li.dropdown').hover(function() {
	  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
	}, function() {
	  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
	});

	// back to top
	$("#totop").hide();
	$(function () {
		var wh = $(window).height();
		var whtml = $(document).height();
		$(window).scroll(function () {
			if ($(this).scrollTop() > whtml/10) {
					$('#totop').fadeIn();
				} else {
					$('#totop').fadeOut();
				}
			});
		$('#totop').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
			});
	});
	// end back to top
	}); 

	jQuery(document).ready(function() {

            jQuery(".owl-carousel-lastest-product").owlCarousel({
                //dotsContainer: '#customDots',
                loop:true,
                margin:10,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                        dots :false,
                        nav:false
                    },
                    600:{
                        items:1,
                        dots :false,
                        nav:false
                    },
                    1000:{
                        items:1,
                        dots :false,
                        nav:false,
                        loop:false
                    }
                }
              });

            owl = jQuery('.owl-carousel-lastest-product').owlCarousel();
            jQuery(".prev-bs").click(function () {
                owl.trigger('prev.owl.carousel');
            });

            jQuery(".next-bs").click(function () {
                owl.trigger('next.owl.carousel');
            });

            jQuery(".owl-carousel-lastest-post").owlCarousel({
                //dotsContainer: '#customDots',
                loop:true,
                margin:10,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                        dots :false,
                        nav:false
                    },
                    600:{
                        items:1,
                        dots :false,
                        nav:false
                    },
                    1000:{
                        items:1,
                        dots :true,
                        nav:false,
                        loop:false
                    }
                }
              });

            owl2 = jQuery('.owl-carousel-lastest-post').owlCarousel();
            jQuery(".prev-bs-2").click(function () {
                owl2.trigger('prev.owl.carousel');
            });

            jQuery(".next-bs-2").click(function () {
                owl2.trigger('next.owl.carousel');
            });
            
        });