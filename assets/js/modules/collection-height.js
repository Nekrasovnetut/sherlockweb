(function($){
	(updateCollectionHeight = function() {
		$('.collection-user .aligner').each(function(){
			$el = $(this);

			$el.height(function(){
				var $first = $el.find('.collection-map-item').first(),
					$last = $el.find('.collection-map-item').last();

				return $last.offset().top - $first.offset().top + $last.height() + 100;
			})
		});
	})();

	setTimeout(updateCollectionHeight, 200);

	$(window).on('resize', updateCollectionHeight);

}(jQuery));