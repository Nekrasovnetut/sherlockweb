<!DOCTYPE html>
<!--[if !IE]><!--> <html><!--<![endif]-->  
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
	<![endif]-->
</head><body ontouchstart="">

<header class="header">
	<a href="index.php" class="header-logo logo logo--sm">
		<img src="assets/images/logo-sm.svg" 
			 onerror="this.onerror=null; 
			 this.src='/assets/images/logo-sm.png'" width="70" height="14" />
	</a>
	<nav class="header-nav nav">
		<ul class="to-left">
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
			
			<li class="nav-item nav-item-btn dropdown"> 
				<span class="dropdown-toggle">
					<i class="icon-key"></i> Вход
				</span>
				<div class="dropdown-block dropdown-block--right _login-dropdown">
					<form class="form" action="">
						<div class="form-item">
							<label class="label _login-label" for="login-user-name"> <i class="icon-user"></i> Логин </label>
							<input id="login-user-name" type="text" class="input" name="user" placeholder="sexyboy2000" />
						</div>
						<div class="form-item">
							<label class="label _login-label" for="login-user-pass"> <i class="icon-lock"></i> Пароль </label>
							<input id="login-user-pass" type="password" class="input" name="user" placeholder="●●●●●●●●●" />
						</div>
						<div class="form-row">
							<div class="form-item to-left">
								<label class="label">
									<input type="checkbox" class="checkbox" name="remember" value="true" /> 
									Запомнить меня
								</label>
							</div>
							<div class="form-item to-right">
								<a href="#" class="label"> Я не помню пароль </a>
							</div>
						</div>
						<div class="form-row">
							<div class="form-item to-left">
								<button class="btn-link" type="submit" value="signup"> Зарегистрироваться </button>
							</div>
							<div class="form-item to-right">
								<button class="btn" type="submit" value="login"> Войти </button>
							</div>
						</div>
					</form>
				</div>
			</li>
		</ul>
	</nav>
</header>