(function($){
	popup = function(targetPopup) {
		var popup = this,
			targetContent = (document.getElementById(targetPopup)) ? $('#'+targetPopup).html() : targetPopup,
			popupView = '<div class="popup-bg"></div>'+
						 '<div class="popup">' +
							'<div class="popup-content">' +
								'<button class="btn-close"></button>'+
							'</div>'+
						'</div>';

		popup.hide = function() {
			document.documentElement.style.overflow = "";

			$popup.velocity({opacity: 0, translateY: 20},
							{ complete: function(){
								$(this).remove();

								$bg.velocity({opacity: 0},
									{ complete: function(){
										$(this).remove();
									}});
							}});
		}

		popup.show = function() {
			document.documentElement.style.overflow = "hidden";

			$('body').append(popupView);
			$('.popup-content').append(targetContent);

			$bg = $('.popup-bg');
			$popup = $('.popup');


			$bg	.velocity({opacity: 0}, { duration: 0, display: 'auto' })
				.velocity({opacity: .9});

			$popup.velocity({opacity: 0, translateY: -40 }, { duration: 0, display: 'auto' })
				  .velocity({opacity: 1, translateY: 0});

			// Close popup:
			$('.popup')
				.on('click', '.btn-close', popup.hide)
				.on('click', popup.hide )
				.on('click', '.popup-content', function(){ return false });
		}
	}

	$('.js-popup-btn').on('click', function(e){
		e.preventDefault();

		linkPopup = new popup($(this).data('popup'));

		linkPopup.show();
	});

}(jQuery));