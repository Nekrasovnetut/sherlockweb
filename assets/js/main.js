// @codekit-prepend "lib/polyfill.sticky.js"
// @codekit-prepend "lib/jquery.royalslider.custom.min.js"
// @codekit-prepend "lib/velocity.min.js"
// @codekit-prepend "lib/parsley.js"
// @codekit-prepend "lib/iscroll.js"

// Мои модули:
// @codekit-prepend "modules/j-popup.js"
// @codekit-prepend "modules/j-tabs.js" 
// @codekit-append "modules/collection-height.js"
// @codekit-append "modules/sherlock-maps.js"
// @codekit-append "modules/j-imageFill.js"
// @codekit-append "modules/j-js-parsley-forms.js"

(function($){

	// !Слайдеры:

	// Слайдер с цитатами и описанием:

	textSliderHeight = $('.js-text-slider .rsContent').height();

	$('.js-text-slider').height(textSliderHeight).royalSlider({
		loop: true,
		autoHeight: true,
		autoPlay: {
    		enabled: true,
    		pauseOnHover: true,
    		delay: 5000
    	}
	});
	
	(IScrolling = function() {
		$('.overWrapper, .nav-days').each(function(i, el){
			if (el.iscroll) {
				el.iscroll_instance.refresh();
			} else {
				el.iscroll_instance = new IScroll(el, {
				    scrollbars: true,
				    scrollX: true,
				    scrollY: false,
					mouseWheel: true,
				    interactiveScrollbars: true,
				    scrollbars: 'custom',
					eventPassthrough: true
				});
				
				el.iscroll = "true";
			}
		});
	})(window, document); 
	
	$(document).ajaxStop(IScrolling);

	// Ссылки с картинками:

	$linksSlider = $('.js-links-slider');

	$linksSlider.royalSlider({
		imageScaleMode: 'fill',
		slidesSpacing: 0,
		globalCaption: true,
		arrowsNavAutoHide: false
	});

	if ($linksSlider.length) {
		$('.rsGCaption').wrap('<div class="rsGCaption-helper"></div>');
	}


	// !Шапка сайта:

	if ($('.header + .page')[0]) $('.header').addClass('is-visible');

	$(window).scroll(function (event) {
	    var scroll = $(window).scrollTop();

	    if (scroll > 0 && !$('.header + .page')[0]) {
		    $('.header').addClass('is-visible');
	    } else if (scroll <= 0 && !$('.header + .page')[0]) {
		    $('.header').removeClass('is-visible');
	    }
	});

	(ghost = function(){
		$ghost = $('.js-ghost');
		$ghost.height($ghost.prev().innerHeight() - 10);
	})();

	setTimeout(ghost, 100);

	$(window).resize(function(){
		$ghost.height($ghost.prev().innerHeight() - 10);
	});

	$('.header').on('click', '.header-nav-toggle', function(){
		$(this).toggleClass('is-active');
	});



	// !Страница квеста:

	$('.js-btn-toggly').on('click', function(){
		$target = $($(this).data('toggly-target'));
		targetHeight = ($target.data('toggly-height')) ? $target.data('toggly-height') : $target.innerHeight();

		if ($target.hasClass('is-opened')) {
			$target.velocity('reverse').removeClass('is-opened');
		} else {
			$target.velocity({ height: targetHeight }, {complete: function(){
				if ($target.data('toggly-is-map')){ startGoogleMap(); }
			}}).addClass('is-opened');
		}
	});

	// @temp Multiple backgrounds in IE8:

    if (window.PIE) {
        $('.collection-map-content-bg').each(function() {
            PIE.attach(this);
        });
    }
}(jQuery));