<? 	$pageTitle = "Регистрация";

	include "includes/header.php" ?>

<div class="page page--splitter">
	<div class="aligner splitter">
		<div class="splitter-item">
			<form class="form" data-parsley-validate>
				<h4>Войдите</h4>
				<div class="form-message form-message--error is-hidden">
					<span class="exclamation form-message-icon">!</span>
					<p class="form-message-text">Поля, выделенные красным не&nbsp;заполнены или заполнены неверно</p>
				</div>
				<fieldset class="form-group">
					<div class="form-row">
						<div class="form-label">
							<label class="label" for="reg-user-email"> E-mail </label>
						</div>
						<div class="form-item">
							<input id="reg-user-email" type="email" class="input" name="email" required />
						</div>
					</div>
					<div class="form-row">
						<div class="form-label">
							<label class="label" for="reg-user-pass"> Пароль </label>
						</div>
						<div class="form-item">
							<input id="reg-user-pass" type="password" class="input" name="password" placeholder="●●●●●●●●●" required />
						</div>
					</div>
				</fieldset>

				<div class="form-row">
					<div class="form-item to-right">
						<a href="#" class="link-small"> Я не помню пароль </a>
					</div>
				</div>

				<div class="form-row">
					<div class="form-item">
						<input id="uniqid-2" type="checkbox" name="remember" value="true" class="checkbox-input" />
						<label class="checkbox" for="uniqid-2">Запомнить меня</label>
					</div>
					<div class="form-item to-right">
						<button class="btn btn-outline" type="submit" value="login"> Войти </button>
					</div>
				</div>
			</form>
		</div>

		<div class="splitter-item">
			<form class="form" data-parsley-validate>
				<h4>Зарегистрируйтесь</h4>
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
					</div>
					<div class="form-row">
						<div class="form-label">
							<label class="label" for="reg-user-surname"> Фамилия </label>
						</div>
						<div class="form-item">
							<input id="reg-user-surname" type="text" class="input" name="surname" required />
						</div>
					</div>
					<div class="form-row">
						<div class="form-label">
							<label class="label" for="reg-user-phone"> Телефон </label>
						</div>
						<div class="form-item">
							<input id="reg-user-phone" type="tel" class="input" name="phone" value="+7" required data-parsley-minlength="12" />
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
										<option value="" selected disabled></option>
										<? for ($i = 1; $i <= 31; $i++) { ?>
											<option value="<?= $i ?>"><?= $i ?></option>
										<? } ?>
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
										<option value="october">октябрь</option>
										<option value="november">ноябрь</option>
										<option value="december">декабрь</option>
									</select>
								</div>
								<div class="form-item">
									<select name="birth-year" class="select" data-parsley-group="birth" required>
										<option value="" selected disabled></option>
										<? for ($i = 1950; $i <= (2014 - 18); $i++) { ?>
											<option value="<?= $i ?>"><?= $i ?></option>
										<? } ?>
									</select>
								</div>
							</div>
						</div>
					</div>
				</fieldset>
				<fieldset class="form-group">
					<div class="form-row">
						<div class="form-label">
							<label class="label" for="reg-user-email"> E-mail </label>
						</div>
						<div class="form-item">
							<input id="reg-user-email" type="email" class="input" name="email" required />
						</div>
					</div>
					<div class="form-row">
						<div class="form-label">
							<label class="label" for="reg-user-pass"> Пароль </label>
						</div>
						<div class="form-item">
							<input id="reg-user-pass" type="password" class="input" name="password" placeholder="●●●●●●●●●" required />
						</div>
					</div>
				</fieldset>
				<fieldset class="form-group">
					<button type="submit" class="btn btn-outline btn-to-center">Зарегистрироваться <i class="icon-arrow-right"></i></button>
				</fieldset>
			</form>
		</div>
	</div>
</div>

<? include "includes/scripts.php" ?>
<? include "includes/footer.php" ?>