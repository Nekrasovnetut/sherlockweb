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
</div><div class="js-ghost"></div>

<div class="page">
	<nav class="section-nav nav sticky" >
		<ul>
			<li class="nav-item current"><a href="index-reserve.php"><i class="icon-clock"></i> Забронировать</a></li>

			<li class="nav-item"><a href="index.php"><i class="icon-quest"></i> Квесты</a></li>
			<li class="nav-item"><a href="index-map.php"><i class="icon-marker"></i> Карта</a></li>
		</ul>
	</nav>
	<div class="collection-0"> <!-- @todo <- fix this -->
	<nav class="tabs nav-days">
		<ul>
			<li class="nav-item nav-item-heading js-date-switch"><span>1</span> Cентября</li>

			<? for ($i = 1; $i <= 31; $i++) { ?>
				<li class="tabs-item nav-item <?= ($i == 1) ? "is-active" : "" ?> ">
					<a href="#day-<?= $i ?>" data-date="<?= $i ?> Сентября"> <?= $i ?> </a>
				</li>
			<? } ?>
		</ul>
	</nav></div>
	<div class="tabs-content" style="background-color: #26C0D5;">

		<? for ($i = 1; $i <= 31; $i++) { ?>
			<div id="day-<?= $i ?>" class="tabs-content-item <?= ($i == 1) ? "is-active" : "" ?> ">
				<section class="section collection-schedule" style="background-color: #26C0D5;">
					<header class="section-heading"><a href="collection-list.php">
						<h3> Путешествия </h3>
					</a></header>
					<div class="collection-content aligner">
						<div class="schedule-overflow">
							<? include "includes/misc/schedule-reserve.php" ?>
						</div>
					</div>
				</section>
				<section class="section collection-schedule" style="background-color: #89CC32;">
					<header class="section-heading"><a href="collection-list.php">
						<h3> Сериалы </h3>
					</a></header>
					<div class="collection-content aligner">
						<div class="schedule-overflow">
							<? include "includes/misc/schedule-reserve.php" ?>
						</div>
					</div>
				</section>
			</div>
		<? } ?>
	</div>
</div>

<? include "includes/scripts.php" ?>

<script type="text/javascript">
	$('.nav-days').on('click', '.nav-item a', function(){
		date = $(this).data('date').split(" ");

		$('.js-date-switch').html('<span>'+date[0]+'</span> '+date[1]);
	});
</script>

<? include "includes/footer.php" ?>