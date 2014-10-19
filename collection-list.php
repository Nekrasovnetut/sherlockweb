<? 	$pageTitle = "Путешествия";
	$pageClass = "collection-0";

	include "includes/header.php" ?>

<div class="fixed-top"><header class="page-cover">
	<div class="page-cover-bg">
		<img src="example-images/example-cover.jpg" alt="" />
	</div>
	<div class="page-cover-content">

	</div>
</header></div><div class="js-ghost"></div>

<div class="page <?= $pageClass ?> collection-list">
	<section class="section">
		<div class="collection-list-item">
			<div class="collection-list-item-img to-left">
				<figure class="covermini">
					<span class="covermini-age">+18</span>
					<img src="example-images/example-cover-mini.png">
				</figure>
			</div>
			<div class="collection-list-item-content to-right">

				<div class="collection-list-item-content-top mcf">
					<h3 class="to-left">Текила бум</h3>
					<div class="collection-list-item-content-top-info to-right"><? include "includes/quest-preview.php" ?></div>
				</div>

				<hr />

				<div class="collection-list-item-content-middle">
					<p>
					Судья Люк Фонтен принял решение на основании позиции прокуратуры Лиона, которая ранее дала согласие на выдачу Кузнецова. Возражения адвокатов бывшего министра, настаивавших на политических мотивах преследования их клиента, были отвергнуты. Вместе с тем решение суда сопровождается рядом оговорок. Как сообщили судебные источники, Кузнецова нельзя будет привлечь в качестве наказания к принудительному труду.
					</p>
				</div>

				<div class="collection-list-item-content-bottom">
					<div class="to-left">
						<i class="icon-user"></i>
					</div>
					<div class="to-left">
						<ul>
							<li>М. Кропоткинская</li>
							<li>Большой Афонасьевский пер 15 стр1 </li>
						</ul>
					</div>
					<a href="btn" class="btn to-right">Записаться</a>
				</div>
			</div>

		</div>
	</section>



</div>



<? include "includes/scripts.php" ?>
<? include "includes/footer.php" ?>