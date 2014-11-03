<? 	$pageTitle = "Регистрация";

	include "includes/header.php" ?>

<div class="page page--splitter">

	<div class="aligner splitter">
		<div class="splitter-item">
			<form class="form js-form"
				  action="includes/response-error.php"
				  data-popup="lost-success"
				  data-parsley-validate>
				<p class="faded form-text">Введите свой e-mail, на который
мы отправим вам новый пароль </p>
				<div class="form-message form-message--error is-hidden">
					<span class="exclamation form-message-icon">!</span>
					<p class="form-message-text">Поля, выделенные красным не&nbsp;заполнены или заполнены неверно</p>
				</div>
				<fieldset class="form-group">
					<div class="form-row">
						<div class="form-label">
							<label class="label" for="lost-user-email"> E-mail </label>
						</div>
						<div class="form-item">
							<input id="lost-user-email" type="email" class="input" name="email" required />
						</div>
					</div>
				</fieldset>
				<fieldset class="form-group">
					<button type="submit" class="btn btn-outline btn-to-center">Отправить <i class="icon-arrow-right"></i></button>
				</fieldset>
			</form>
		</div>
	</div>
</div>

<div id="lost-success" class="popup-content-message">
	<h3>Письмо с новым паролем отправлено вам на  e-mail.</h3>
</div>


<? include "includes/scripts.php" ?>
<? include "includes/footer.php" ?>