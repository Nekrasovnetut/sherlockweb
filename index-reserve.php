<? 	$pageTitle = "Главная - Резерв";

	include "includes/header.php" ?>

<div class="fixed-top"><header class="page-cover _sherlock-about">
	<div class="page-cover-bg">
		<img src="example-images/example-cover.png" alt="" />
	</div>
	<div class="page-cover-content">
		<a class="section-logo logo logo--big" href="index.php">
			<h1 class="is-hidden"> Шерлок &mdash; Квесты в реальности </h1>
			<img src="assets/images/logo-white.svg"
				 onerror="this.onerror=null;
				 this.src='assets/images/logo-white.png'" width="350" height="111" alt="Логотип Шерлок" />
		</a>

		<div class="description">
			<p> Шерлок — это квест в реальности. Разгадайте головоломки, <br />
				найдите тайники, воспользуйтесь подсказками, всеми доступными вещами, <br />
				добудьте ключи и откройте двери к победе! </p>
		</div>
	</div>
</header>
</div><div class="js-ghost" style="position: relative; z-index: -2;"></div>

<div class="page">
	<nav class="section-nav nav sticky" >
		<!-- @todo: Сделать второй элемент прилипающим -->
		<ul>
			<!-- На самом деле это не current, но это для того чтобы показать как будет выглядит: -->
			<li class="nav-item current"><a href="index-reserve.php">Забронировать</a></li>

			<li class="nav-item"><a href="index.php">Квесты</a></li>
			<li class="nav-item"><a href="index-map.php">Карта</a></li>
		</ul>
	</nav>
	<section class="section collection-schedule" style="background-color: #26C0D5;">
		<header class="section-heading"><a href="collection.php">
			<h3> Путешествия </h3>
		</a></header>
		<div class="collection-content aligner">
			<div class="schedule-overflow">
				<? include "includes/misc/schedule-reserve.php" ?>
			</div>
		</div>
	</section>
	<section class="section collection-schedule" style="background-color: #89CC32;">
		<header class="section-heading"><a href="collection.php">
			<h3> Сериалы </h3>
		</a></header>
		<div class="collection-content aligner">
			<div class="schedule-overflow">
				<? include "includes/misc/schedule-reserve.php" ?>
			</div>
		</div>
	</section>
</div>

<? include "includes/scripts.php" ?>
<? include "includes/footer.php" ?>