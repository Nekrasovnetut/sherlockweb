<? 	$pageTitle = "Сертификат";

	include "includes/header.php" ?>

<div class="page page--splitter">


	<div class="aligner splitter">
		<div class="splitter-item">
			<form 	class="form js-form" style="max-width: 500px;"
					action="includes/response-ok.php"
					data-popup="certificate-success"
					data-parsley-validate>
				<p class="form-text">Закажите сертификат на одну игру с Шерлоком, им сможем
может воспользоваться любая команда, но только один раз
и только в том городе, в котором сертификат был приобретён. </p>
				<div class="form-message form-message--error is-hidden">
					<span class="exclamation form-message-icon">!</span>
					<p class="form-message-text">Поля, выделенные красным не&nbsp;заполнены или заполнены неверно</p>
				</div>
				<fieldset class="form-group">
					<div class="form-row">
						<div class="form-label">
							<label class="label" for="reg-user-name"> Имя </label>
						</div>
						<div class="form-item">
							<input id="reg-user-name" type="text" class="input" name="name" required />
						</div>
						<div class="form-item" style="border-left: 56px solid transparent; width: 150px">
							<span class="faded">Стоимость <br /> сертификата</spa>
						</div>
					</div>
					<div class="form-row">
						<div class="form-label">
							<label class="label" for="reg-user-phone"> Телефон </label>
						</div>
						<div class="form-item">
							<input id="reg-user-phone" type="tel" class="input" name="phone" value="+7" required data-parsley-minlength="12" />
						</div>
						<div class="form-item" style="border-left: 56px solid transparent; width: 150px">
							<h4>4000&nbsp;руб.</h4>
						</div>
					</div>
				</fieldset>
				<fieldset class="form-group">
					<button type="submit" class="btn btn-outline btn-to-center">Заказать <i class="icon-arrow-right"></i></button>
				</fieldset>
			</form>
		</div>
	</div>
</div>

<div id="certificate-success"  class="popup-content-message">
	<h3>Спасибо. Ваша заявка на сертификат принята. <br /> Скоро вам позвонят.</h3>
</div>

<? include "includes/scripts.php" ?>
<? include "includes/footer.php" ?>