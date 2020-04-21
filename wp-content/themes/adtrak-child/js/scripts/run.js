// binds $ to jquery, requires you to write strict code. Will fail validation if it doesn't match requirements.
(function($) {
    "use strict";

	// add all of your code within here, not above or below
	$(function() {

		// --------------------------------------------------------------------------------------------------
		// Animate inview
		// --------------------------------------------------------------------------------------------------

		$.fn.visible = function(partial) {
    
			var $t            = $(this),
				$w            = $(window),
				viewTop       = $w.scrollTop(),
				viewBottom    = viewTop + $w.height(),
				_top          = $t.offset().top,
				_bottom       = _top + $t.height(),
				compareTop    = partial === true ? _bottom : _top,
				compareBottom = partial === true ? _top : _bottom;
		  
		  return ((compareBottom <= viewBottom) && (compareTop >= viewTop));
	  
		};

		
		$(window).scroll(function(event) {
  
			$(".animate").each(function(i, el) {
			  var el = $(el);
			  if (el.visible(true)) {
				el.addClass("inview"); 
			  } 
			});
			
		});

		// --------------------------------------------------------------------------------------------------
		// FAQs Accordion
		// --------------------------------------------------------------------------------------------------

		if ($(window).width() < 1000) {

			$('.faq__question').click(function(e) {
				e.preventDefault();

				var open = $(this).parent().find('.faq__answer');
				var rotated = $(this).parent().find('.fa-caret-right');

				$('.faq__answer').not(open).slideUp();
				$(this).parent().find('.faq__answer').slideToggle({duration: 400, start: function() {

					if($(this).parent().find('i.fa-caret-right').hasClass('fa-rotate-90')) {
						$(this).parent().find('i.fa-caret-right').removeClass('fa-rotate-90');
					} else {
						$(this).parent().find('i.fa-caret-right').addClass('fa-rotate-90');
					}
					$('.fa-caret-right').not(rotated).removeClass('fa-rotate-90');
				}});
			});

		}


		// --------------------------------------------------------------------------------------------------
		// Back to top
		// --------------------------------------------------------------------------------------------------
		$("#back-top").hide();
		$(function () {
			$(window).scroll(function () {
				if ($(this).scrollTop() > 300) {
					$('#back-top').fadeIn();
				} else {
					$('#back-top').fadeOut();
				}
			});
		});
		$("#back-top").click(function() {
			$("html, body").animate({
			scrollTop: $("header").offset().top
			}, 750);
		});


		// --------------------------------------------------------------------------------------------------
		// Toggle Location Numbers
		// --------------------------------------------------------------------------------------------------
		$('.js-toggle-location-numbers').click(function(){
			$('.location-numbers').toggleClass('location-numbers--visible');
		});


		// --------------------------------------------------------------------------------------------------
		// Mobile Menu
		// --------------------------------------------------------------------------------------------------
		// Copy primary and secondary menus to .mob-nav element
		var mobNav = document.querySelector('.mob-nav .scroll-container');

		var copyPrimaryMenu = document.querySelector('#navigation .menu-primary').cloneNode(true);
		mobNav.appendChild(copyPrimaryMenu);

		if($('#menu-secondary-menu').length) {
			var copySecondaryMenu = document.querySelector('#menu-secondary-menu').cloneNode(true);
			mobNav.appendChild(copySecondaryMenu);
		}

		// Add Close Icon element
		$( "<div class='mob-nav-close'><i class='fa fa-times'></i></div>" ).insertAfter( ".mob-nav .scroll-container" );

		// Add dropdown arrow to links with sub-menus
	    $( "<span class='sub-arrow'><i class='fa fa-angle-down'></i></span>" ).insertAfter( ".mob-nav .menu-item-has-children > a" );

	    // Show sub-menu when dropdown arrow is clicked
	    $('.sub-arrow').click(function() {
	    	$(this).toggleClass('active');
	    	$(this).prev('a').toggleClass('active');
	    	$(this).next('.sub-menu').slideToggle();
	    	$(this).children().toggleClass('fa-angle-down').toggleClass('fa-angle-up');
	    });

	    // Add underlay element after mobile nav
	    $( "<div class='mob-nav-underlay'></div>" ).insertAfter( ".mob-nav" );

	    // Show underlay and fix the body scroll when menu button is clicked
	    $('.menu-btn').click(function() {
	    	$('.mob-nav,.mob-nav-underlay').addClass('mob-nav--active');
	    	$('body').addClass('fixed');
	    });

	    // Hide menu when close icon or underlay is clicked
	    $('.mob-nav-underlay,.mob-nav-close').click(function() {
	    	$('.mob-nav,.mob-nav-underlay').removeClass('mob-nav--active');
	    	$('body').removeClass('fixed');
	    });

        // --------------------------------------------------------------------------------------------------
		// Ninja Forms event tracking | https://www.chrisains.com/seo/tracking-ninja-form-submissions-with-google-analytics-jquery/
		// --------------------------------------------------------------------------------------------------
        jQuery( document ).on( 'nfFormReady', function() {
        	nfRadio.channel('forms').on('submit:response', function(form) {
                gtag('event', 'conversion', {'event_category': form.data.settings.title,'event_action': 'Send Form','event_label': 'Successful '+form.data.settings.title+' Enquiry'});
        		console.log(form.data.settings.title + ' successfully submitted');
        	});
        });

	});

}(jQuery));