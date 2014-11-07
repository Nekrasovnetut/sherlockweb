(function($){
	var $cover = $('.page-cover'),
		$coverImage = $('img.js-imageFill');

	imageFill = function() {
		if ($cover.height() > $coverImage.height() || $cover.width() < $coverImage.width()) {
			$coverImage.css({
				width: 'auto',
				height: '100%'
			});
		} else {
			$coverImage.css({
				width: '100%',
				height: 'auto'
			});
		}


	};

	$($coverImage[0]).on('load', imageFill);
	$(window).resize(imageFill);

}(jQuery));