<? 	$pageTitle = "Изменить данные &mdash; Личный кабинет";

	include "includes/header.php" ?>

<div class="page page--splitter">

	<div class="aligner splitter">
		<div class="splitter-item">
			<form class="form" data-parsley-validate>
				<p class="faded form-text">Изменение личных данных</p>
				<div class="form-message form-message--error is-hidden">
					<span class="exclamation form-message-icon">!</span>
					<p class="form-message-text">Поля, выделенные красным не&nbsp;заполнены или заполнены неверно</p>
				</div>
				<fieldset class="form-group">
					<div class="form-row">
						<div class="form-label">
							<label class="label" for="cabinet-user-name"> Имя </label>
						</div>
						<div class="form-item">
							<input id="cabinet-user-name" type="text" class="input" name="name" required value="Кирилл" />
						</div>
					</div>
					<div class="form-row">
						<div class="form-label">
							<label class="label" for="cabinet-user-surname"> Фамилия </label>
						</div>
						<div class="form-item">
							<input id="cabinet-user-surname" type="text" class="input" name="surname" required value="Ермошин" />
						</div>
					</div>
					<div class="form-row">
						<div class="form-label">
							<label class="label" for="cabinet-user-phone"> Телефон </label>
						</div>
						<div class="form-item">
							<input id="cabinet-user-phone" type="tel" class="input" name="phone" required data-parsley-minlength="12" value="+7 123 456 78 90" />
						</div>
					</div>
					<div class="form-row">
						<div class="form-label">
							<label class="label" for="login-user-name"> День рождения </label>
						</div>
						<div class="form-item">
							<div class="form-row" >
								<div class="form-item">
									<select name="birth-day" class="select" data-parsley-group="birth" required>
										<option value="" disabled></option>
										<? for ($i = 1; $i <= 30; $i++) { ?>
											<option value="<?= $i ?>"><?= $i ?></option>
										<? } ?>
										<option value="31" selected>31</option>
									</select>
								</div>
								<div class="form-item">
									<select name="birth-month" class="select" data-parsley-group="birth" required>
										<option value="" selected disabled></option>
										<option value="january">январь</option>
										<option value="february">февраль</option>
										<option value="march">март</option>
										<option value="april">апрель</option>
										<option value="may">май</option>
										<option value="june">июнь</option>
										<option value="july">июль</option>
										<option value="august">август</option>
										<option value="september">сентябрь</option>
										<option value="october" selected>октябрь</option>
										<option value="november">ноябрь</option>
										<option value="december">декабрь</option>
									</select>
								</div>
								<div class="form-item">
									<select name="birth-year" class="select" data-parsley-group="birth" required>
										<option value="" disabled></option>
										<? for ($i = 1950; $i <= (2014 - 18); $i++) { ?>
											<option value="<?= $i ?>"><?= $i ?></option>
										<? } ?>
										<option value="1991" selected>1991</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</fieldset>
				<fieldset class="form-group">
					<div class="form-row">
						<div class="form-label">
							<label class="label" for="cabinet-user-email"> E-mail </label>
						</div>
						<div class="form-item">
							<input id="cabinet-user-email" type="email" class="input" name="email" value="ermoshin@gmail.com" required />
							<ul class="messages">
								<li class="messages-info">Используется как логин</li>

								<!-- Показывать этот li при ответе от сервера, а так не показывать:
									<li class="messages-error">Такой e-mail уже используется</li>

									 и к input добавить класс parsley-error
								-->

							</ul>
						</div>
					</div>
					<div class="form-row">
						<div class="form-label">
							<label class="label" for="cabinet-user-pass"> Пароль </label>
						</div>
						<div class="form-item">
							<input id="cabinet-user-pass" type="password" class="input" name="password" placeholder="●●●●●●●●●" />
						</div>
					</div>
				</fieldset>
				<fieldset class="form-group">
					<button type="submit" class="btn btn-outline btn-to-center">Сохранить<i class="icon-arrow-right"></i></button>
				</fieldset>
			</form>
		</div>
	</div>
</div>

<? include "includes/scripts.php" ?>
<? include "includes/footer.php" ?>