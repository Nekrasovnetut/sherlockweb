<!DOCTYPE html>
<!--[if !IE]><!--> <html class="not-ie"> <!--<![endif]-->
<!--[if IE 8]>  <html class="ie8 lt-ie9"> <![endif]-->
<!--[if IE 9]> <html class="ie9"> <![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title> <?= $pageTitle ?> &mdash; Шерлок </title>

	<meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/style.css" />
	<link rel="stylesheet" href="assets/fonts/bliss-pro-font/font.css" />

	<!--[if lt IE 9]>
		<script src="assets/js/lib/html5shiv-printshiv.min.js"></script>
		<script src="assets/js/lib/jquery-1.11.1.min.js"></script>
		<script src="assets/js/lib/selectivizr.min.js"></script>
		<script src="assets/js/lib/PIE_IE678.js"></script>
	<![endif]-->

	<script>
		// Проверка на поддержку SVG:
		if (document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#BasicStructure", "1.1"))
			document.documentElement.className += " svg";
		else
			document.documentElement.className += " no-svg";
	</script>
</head><body ontouchstart="">

<header class="header">
	<a href="index.php" class="header-logo logo logo--sm">
		<img src="assets/images/logo-sm.svg"
			 onerror="this.onerror=null;
			 this.src='/assets/images/logo-sm.png'" width="70" height="14" />
	</a>

	<button class="header-nav-toggle btn-simple on-mobile"> <i class="icon-burger"> <b></b> <b></b> <b></b> <b></b> </i> </button>

	<nav class="header-nav nav">
		<ul class="to-left">
			<li class="nav-item dropdown on-mobile">
				<a href="login-register.php"><i class="icon-key"></i> Вход</a>
			</li>
			<li class="nav-item dropdown">
				<span class="dropdown-toggle"><i class="icon-star"></i> Москва</span>
				<div class="dropdown-block">
					<ul>
						<li><a href="?city=paris" class="btn-simple"><i class="icon-circle"></i> Париж</span></a> </li>
						<li><a href="?city=paris" class="btn-simple"><i class="icon-city-perm"></i> Пермь</span></a> </li>
					</ul>
				</div>
			</li>
		</ul>
		<ul class="to-right">
			<? 	function currentPage($page) {
					$self =  preg_replace('/\\.[^.\\s]{3,4}$/', '', basename($_SERVER['PHP_SELF']));

					return ($self == "$page") ? 'current' : '';
				}
			?>

			<li class="nav-item <?= currentPage("about") ?>"><a href="about.php">О проекте</a></li>

			<li class="nav-item <?= currentPage("sertificat") ?>"><a href="#">Сертификат</a></li>
			<li class="nav-item  <?= currentPage("contacts") ?>"><a href="#">Контакты</a></li>

			<div class="header-nav-triangle"></div>

			<li class="nav-item dropdown on-desktop">
				<span class="dropdown-toggle">
					<i class="icon-key"></i> Вход
				</span>
				<div class="dropdown-block dropdown-block--right _login-dropdown">
					<form class="form" action="">
						<div class="form-row">
							<div class="form-label">
								<label class="label" for="dropdown-login-user-email"><i class="icon-user"></i> Логин </label>
							</div>
							<div class="form-item">
								<input id="dropdown-login-user-email" type="email" class="input" name="email" placeholder="e-mail" />
							</div>
						</div>
						<div class="form-row">
							<div class="form-label">
								<label class="label" for="dropdown-login-user-pass"><i class="icon-lock"></i> Пароль </label>
							</div>
							<div class="form-item">
								<input id="dropdown-login-user-pass" type="password" class="input" name="password" placeholder="●●●●●●●●●" />
							</div>
						</div>
						<div class="form-row">
							<div class="form-item to-left">
								<input id="remember-me2" type="checkbox" name="remember" value="true" class="checkbox-input" />
								<label class="checkbox" for="remember-me2">Запомнить меня</label>
							</div>
							<div class="form-item to-right">
								<a href="#" class="label"> Я не помню пароль </a>
							</div>
						</div>
						<div class="form-row">
							<div class="form-item to-left">
								<a href="register.php" class="btn-link"> Зарегистрироваться </a>
							</div>
							<div class="form-item to-right">
								<button class="btn btn-white" type="submit" value="login"> Войти </button>
							</div>
						</div>
					</form>
				</div>
			</li>
		</ul>
	</nav>
</header><div class="header-ghost"></div>