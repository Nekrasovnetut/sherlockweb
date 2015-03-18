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

					<img src="series-icons/icon-black.svg"
						 onerror="this.onerror=null; this.src='series-icons/icon-snake.png'" />

					<img src="series-icons/icon-black.svg"
						 onerror="this.onerror=null; this.src='series-icons/icon-cactus.png'" />

					<img src="series-icons/icon-black.svg"
						 onerror="this.onerror=null; this.src='series-icons/icon-paper.png'" />

					<img src="series-icons/icon-black.svg"
						 onerror="this.onerror=null; this.src='series-icons/icon-extinguisher.png'" />

					<img src="series-icons/icon-black.svg"
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

	<section class="section">

		<div class="collection-list-item quest-item">
			<div class="quest-item-img">
				<figure class="covermini">
					<div class="age">+18</div>
					<img src="example-images/example-cover.jpg">
				</figure>
			</div>
			<div class="quest-item-content">

				<div class="quest-item-top mcf">
					<h3 class="quest-item-top-left to-left">Сибирь: Старая лаборатория</h3>
					<div class="quest-item-top-right"><? include "includes/quest-preview.php" ?></div>
				</div>

				<hr />

				<div class="quest-item-middle">
					<p>
					Судья Люк Фонтен принял решение на основании позиции прокуратуры Лиона, которая ранее дала согласие на выдачу Кузнецова. Возражения адвокатов бывшего министра, настаивавших на политических мотивах преследования их клиента, были отвергнуты. Вместе с тем решение суда сопровождается рядом оговорок. Как сообщили судебные источники, Кузнецова нельзя.
					</p>
				</div>

				<div class="quest-item-bottom">

					<dl class="iconInfo">
						<dt class="iconInfo-icon">
							<i class="icon-marker"></i>
						</dt>
						<dt class="iconInfo-content">
							<span class="accent">
								<ul>
									<li>М. Кропоткинская</li>
									<li>Большой Афонасьевский пер 15 стр1 </li>
								</ul>
							</span>
						</dt>
					</dl>

				</div>
			</div>



		</div>


	</section>



</div>



<? include "includes/scripts.php" ?>
<? include "includes/footer.php" ?>