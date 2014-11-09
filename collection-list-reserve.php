<? 	$pageTitle = "Путешествия";
	$pageClass = "collection-0";

	include "includes/header.php" ?>

<div class="fixed-top">

	<header class="page-cover">
	<div class="page-cover-bg">
		<img  class="js-imageFill" src="example-images/example-cover.jpg" alt="" />
	</div>
	<div class="page-cover-content">

	</div>
	</header>




</div><div class="js-ghost"></div>


<div class="page <?= $pageClass ?> collection-list">

	<section class="collection-list-description">

					<img src="series-icons/icon-snake.svg"
						 onerror="this.onerror=null; this.src='series-icons/icon-snake.png'" />

					<img src="series-icons/icon-cactus.svg"
						 onerror="this.onerror=null; this.src='series-icons/icon-cactus.png'" />

					<img src="series-icons/icon-paper.svg"
						 onerror="this.onerror=null; this.src='series-icons/icon-paper.png'" />

					<img src="series-icons/icon-fire-extinguisher.svg"
						 onerror="this.onerror=null; this.src='series-icons/icon-extinguisher.png'" />

					<img src="series-icons/icon-cactus.svg"
						 onerror="this.onerror=null; this.src='series-icons/icon-cactus.png'" />
		<div class="collection-list-description-center">
				<h5>Серия</h5>
			<h4>"Путешествия"</h4>
			<p>Судья Люк Фонтен принял решение на основании позиции прокуратуры Лиона, которая ранее дала согласие на выдачу Кузнецова. Возражения адвокатов бывшего министра, настаивавших на политических мотивах преследования их клиента, были отвергнуты. Вместе с тем решение суда сопровождается рядом оговорок. Как сообщили судебные источники, Кузнецова нельзя будет привлечь в качестве наказания к принудительному труду.</p>

			<nav class="collection-list-other">

			<span>Другие серии:</span>

			<ul>
				<li>
				<a href="#">Сериалы</a>
				</li>
				<li>
				<a href="#">Книги</a>
				</li>
				<li>
				<a href="#">Ужасы</a>
				</li>
			</ul>

			</nav>

		</div>

		

	</section>

	<nav class="section-nav nav sticky collection-list-bottomborder" >
		<ul>
			<li class="nav-item"><a href="index-reserve.php"><i class="icon-clock"></i> Забронировать</a></li>

			<li class="nav-item current"><a href="index.php"><i class="icon-quest"></i> Квесты</a></li>
			<li class="nav-item"><a href="index-map.php"><i class="icon-marker"></i> Карта</a></li>
		</ul>
	</nav>
	
	

	<nav class="tabs nav-days">
		<ul>
			<li class="nav-item nav-item-heading js-date-switch"><span>1</span> Cентября</li>

			<? for ($i = 1; $i <= 31; $i++) { ?>
				<li class="tabs-item nav-item <?= ($i == 1) ? "is-active" : "" ?> ">
					<a href="#day-<?= $i ?>" data-date="<?= $i ?> Сентября"> <?= $i ?> </a>
				</li>
			<? } ?>
		</ul>
	</nav>
	<div class="tabs-content" style="background-color: #26C0D5;">

		<? for ($i = 1; $i <= 31; $i++) { ?>
			<div id="day-<?= $i ?>" class="tabs-content-item <?= ($i == 1) ? "is-active" : "" ?> ">

				<section class="section collection-schedule" style="background-color: #26C0D5;">
					<header class="section-heading"><a href="collection-list.php">
						<h3> Сериалы </h3>
					</a></header>
					<div class="collection-content aligner">
						<div class="overWrapper">
							<? include "includes/misc/schedule-reserve.php" ?>
						</div>
					</div>
				</section>
			</div>
		<? } ?>
	</div>







</div>



<? include "includes/scripts.php" ?>
<? include "includes/footer.php" ?>