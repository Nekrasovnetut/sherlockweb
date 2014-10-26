<? 	$pageTitle = "Регистрация";

	include "includes/header.php" ?>

<div class="page page--splitter">

	<div class="aligner splitter">
		<div class="splitter-item">
			<form class="form" data-parsley-validate>
				<p class="faded form-text">Введите номер вашего купона </p>
				<div class="form-message form-message--error is-hidden">
					<span class="exclamation form-message-icon">!</span>
					<p class="form-message-text">Поля, выделенные красным не&nbsp;заполнены или заполнены неверно</p>
				</div>
				<fieldset class="form-group">
					<div class="form-row">
						<div class="form-label">
							<label class="label" for="coupon"> Номер&nbsp;купона </label>
						</div>
						<div class="form-item">
							<input id="coupon" type="text" style="text-transform: uppercase" class="input" name="coupon" required />
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

<? include "includes/scripts.php" ?>
<? include "includes/footer.php" ?>