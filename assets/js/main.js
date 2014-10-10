// @codekit-prepend "lib/polyfill.sticky.js"
// @codekit-prepend "lib/jquery.royalslider.custom.min.js"
// -codekit-prepend "lib/velocity.min.js"
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
	
}(jQuery));