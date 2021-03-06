(function($){
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
}(jQuery));