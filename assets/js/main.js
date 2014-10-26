// @codekit-prepend "lib/polyfill.sticky.js"
// @codekit-prepend "lib/jquery.royalslider.custom.min.js"
// @codekit-prepend "lib/velocity.min.js"
// @codekit-prepend "lib/parsley.js"

(function($){

	textSliderHeight = $('.js-text-slider .rsContent').height();

	$('.js-text-slider').height(textSliderHeight).royalSlider({
		loop: true,
		autoPlay: {
    		enabled: true,
    		pauseOnHover: true,
    		delay: 5000
    	}
	});

	$ghost = $('.js-ghost');
	$ghost.height($ghost.prev().innerHeight() - 10);

	$(window).resize(function(){
		$ghost.height($ghost.prev().innerHeight() - 10);
	});

	$('.header').on('click', '.header-nav-toggle', function(){
		$(this).toggleClass('is-active');
	});

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

	if ($('.header-ghost + .page')[0]) $('.header').addClass('is-visible');

	$(window).scroll(function (event) {
	    var scroll = $(window).scrollTop();

	    if (scroll > 0 && !$('.header-ghost + .page')[0]) {
		    $('.header').addClass('is-visible');
	    } else if (scroll <= 0 && !$('.header-ghost + .page')[0]) {
		    $('.header').removeClass('is-visible');
	    }
	});

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

	$('.tabs').on('click', '.tabs-item a', function(e){
		var $t = $(this),
			$tab = $(this).parent('.tabs-item');

		e.preventDefault();

		if (!$tab.hasClass('is-active')) {
			$(this).removeClass('is-active');
			$('.tabs-item.is-active').removeClass('is-active');


			$('.tabs-content-item.is-active').velocity({
				opacity: 0,
				translateX: 50
			}, {
				duration: 400,
				display: 'none',
				begin: function(){
					$('.tabs-content').height($($t[0].hash).innerHeight())
				},
				complete: function(){
					$tab.addClass('is-active');

					$($t[0].hash).velocity({translateX: -30}, 0).velocity({
						opacity: 1,
						translateX: 0
					}, {
						duration: 400,
						display: 'block',
						complete: function(){
							$(this).addClass('is-active');
						}
					});
				}
			});

		}
	});

	// Google map code:

	var sherlockMarkerPath = 'M47.7,23.6 C47.7,10.6 37.1,0 24.1,0 C11.1,0 0.5,10.6 0.5,23.6 L0.5,25 C1.4,47.3 24.1,66.7 24.1,66.7 C24.1,66.7 46.7,47.3 47.7,25 L47.7,23.6 L47.7,23.6 Z',
		sherlockLogoPath = 'M33.6,17.7 L30.3,17.7 C30.2,17.7 30.1,17.8 30.1,17.9 L30.1,28.8 C30.1,28.9 30.1,29 30,29.1 C29.6,29.5 27.6,31.5 27.6,31.5 L26.9,32.2 C26.8,32.3 26.7,32.3 26.6,32.2 C26.4,32 26.2,31.8 26.1,31.7 C26,31.6 25.9,31.4 25.9,31.2 L25.9,17.8 C25.9,17.6 25.8,17.6 25.7,17.6 L22.4,17.6 C22.3,17.6 22.2,17.7 22.2,17.8 L22.2,28.8 C22.2,28.9 22.2,28.9 22.1,29 C20.7,30.4 19,32.1 18.9,32.2 C18.8,32.3 18.7,32.3 18.6,32.2 C18.4,32 18.2,31.8 18.1,31.7 C18,31.6 17.9,31.4 17.9,31.2 L17.9,20.2 C17.9,20 17.8,19.9 17.7,19.7 C17.6,19.6 15.8,17.8 15.2,17.2 C15.1,17.1 15,17.1 14.8,17.2 L12.5,19.4 C12.4,19.5 12.4,19.7 12.5,19.8 C12.9,20.2 13.8,21.1 13.9,21.2 C14,21.3 14.1,21.5 14.1,21.7 L14.1,32.7 C14.1,32.9 14.2,33 14.3,33.2 C14.4,33.3 16.2,35.1 16.8,35.7 C16.9,35.8 17.1,35.8 17.2,35.7 L21.9,31 C22,30.9 22.1,31 22.1,31.1 L22.1,32.8 C22.1,33 22.2,33.1 22.3,33.3 C22.4,33.4 24.2,35.2 24.8,35.8 C24.9,35.9 25.1,35.9 25.2,35.8 L30,31.1 C30.1,31.1 30.1,31.1 30.1,31.2 L30.1,35.4 C30.1,35.6 30.2,35.6 30.3,35.6 L33.6,35.6 C33.7,35.6 33.8,35.5 33.8,35.4 L33.8,18 C33.8,17.7 33.8,17.7 33.6,17.7 L33.6,17.7 Z';

	markers = {};

    placeMarker = function(pos, markerColor, id){
	    var sherlockMarker = {
			path: sherlockMarkerPath,
			fillColor: markerColor,
			fillOpacity: 1,
			strokeWeight: 0,
			scale: 1,
			anchor: new google.maps.Point(23, 67)
		}, sherlockLogo = {
			path: sherlockLogoPath,
			fillColor: 'white',
			fillOpacity: 1,
			strokeWeight: 0,
			scale: 1,
				anchor: new google.maps.Point(23, 67)
		}

		var markerShape = new google.maps.Marker({
			    position: pos,
			    icon: sherlockMarker,
			    map: map }),
			markerLogo = new google.maps.Marker({
			    position: pos,
			    icon: sherlockLogo,
			    map: map
			});

		if (markers[id.toString()]) {
			markers[id.toString()].push([markerShape, markerLogo]);
		} else {
			markers[id.toString()] = [[markerShape, markerLogo]];
		}
    }

    $.listen('parsley:form:validate', function (ParsleyForm) {
		if (ParsleyForm.isValid()) {
			ParsleyForm.$element.find('.form-message').addClass('is-hidden');
		} else {
			ParsleyForm.$element.find('.form-message').removeClass('is-hidden');
		}
    });

    if (window.PIE) {
        $('.collection-map-content-bg').each(function() {
            PIE.attach(this);
        });
    }

	updateCollectionHeight = function() {
		$('.collection-user .aligner').each(function(){
			$el = $(this);

			$el.height(function(){
				var $first = $el.find('.collection-map-item').first(),
					$last = $el.find('.collection-map-item').last();

				return $last.offset().top - $first.offset().top + $last.height() + 50;
			})
		});
	}; updateCollectionHeight();

	$(window).on('resize', function(){
		updateCollectionHeight();
	});

//	updateCollectionHeight();

}(jQuery));