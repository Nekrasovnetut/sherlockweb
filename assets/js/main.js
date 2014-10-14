// @codekit-prepend "lib/polyfill.sticky.js"
// @codekit-prepend "lib/jquery.royalslider.custom.min.js"
// @codekit-prepend "lib/velocity.min.js"
// @codekit-prepend "lib/jquery.parallax.js"

(function($){
	
	$ghost = $('.js-ghost');
	$ghost.height($ghost.prev().innerHeight() - 10);
	
	$('.js-about-slider').royalSlider({
		loop: true, 
		autoPlay: {
    		enabled: true,
    		pauseOnHover: true,
    		delay: 5000
    	}
	});
	
	var $triangle = $('.header-nav-triangle'),
		$headerNav = $('.header-nav .to-right'),
		$navItemCurrent = $('.header .nav-item.current');
	
	$headerNav.on('mousemove', function(e){
		mouseX = e.clientX - 115;
		
		$triangle.css({
		   left: mouseX
		});
	})
	
	if ($navItemCurrent.length) {
		$navItemCurrentOffset = function(){
			return $navItemCurrent.position().left + ($navItemCurrent.innerWidth()/2) - 8;
		}
		
		document.onreadystatechange = function() {
		    if (document.readyState === 'complete') $triangle.css('left', $navItemCurrentOffset());
		};
		
		$headerNav.on('mouseleave', function(){
			$triangle.css({
			   left: $navItemCurrentOffset()
			});
		});
	}
	
	$("._parallax-test").parallax();
	
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
				translateY: 50
			}, {
				duration: 400,
				display: 'none',
				begin: function(){
					$('.tabs-content').height($($t[0].hash).innerHeight())
				},
				complete: function(){
					$tab.addClass('is-active');
					
					$($t[0].hash).velocity({translateY: -30}, 0).velocity({
						opacity: 1,
						translateY: 0
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
	
}(jQuery));