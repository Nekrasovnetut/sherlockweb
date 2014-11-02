(function($){
	$('.js-form').on('submit', function(e){
		e.preventDefault();

		var $form = $(this);
		formAction = $form.attr('action');
		formData = $form.serialize();
	});

	$.listen('parsley:form:validate', function (ParsleyForm) {
		$form = ParsleyForm.$element;

		if (ParsleyForm.isValid()) {
			$form.find('.form-message').addClass('is-hidden');

			if ($form.hasClass('js-form')) {
				$.ajax({
				    url: formAction,
				    data: formData,
				    type: 'post',
				    error: function(){
					    formPopup = new popup('<h3> Ошибка! Попробуйте снова. </h3>');
						formPopup.show();
				    },
				    success: function(){
						formPopup = new popup($form.data('popup'));
						formPopup.show();
					}
				});
			}
		} else {
			$form.find('.form-message').removeClass('is-hidden');
		}
    });
}(jQuery));