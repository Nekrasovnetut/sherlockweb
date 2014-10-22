<? 	$pageTitle = "Квест";
	$pageClass = "collection-0";
	$collection0 = '#26C0D5';

	include "includes/header.php" ?>


<div class="fixed-top">
	<header class="page-cover">
	<div class="page-cover-bg">
		<img src="example-images/example-cover.jpg" alt="" />
	</div>
	<div class="page-cover-content">

	</div>
	</header>
</div>

<div class="js-ghost"></div>
<div class="page <?= $pageClass ?> quest">
	<section class="section">
		<article class="quest-article">

			<header class="quest-article-heading">
				<h2> Пещера Майя </h2>
				<div class="quest-article-heading-collection">
					<span class="label">Серия</span>
					<a href="collection-list.php" class="link"> Путешествия </a>
				</div>
			</header>

			<div class="quest-article-description">
				<p>Главным обвиняемым по делу о "серых" приватизационных схемах в Башкирии проходит Урал Рахимов, сын бывшего президента Башкирии Муртазы Рахимова. Еще одним фигурантом является глава совета директоров ИД "Собеседник" Левон Айрапетян, которого в СКР считают посредником в сделке с башкирским ТЭКом.17 сентября источник сообщил, что в деле "Башнефти" могут появиться новые фигуранты. По его словам, ключевым свидетелем проходит экс-сенатор от Башкирии Игорь Изместьев, отбывающий пожизненное заключение. Обвинения Рахимову, Айрапетяну и Евтушенкову были предъявлены на основании его показаний. миллиардер Владимир Евтушенков потерял 36% состояния. </p>
			</div>
		</article>
		<aside class="quest-aside">
			<a href="quest-winners.php" class="btn btn--big"> Лучшие игроки</a>
				<? 	include "includes/quest-preview.php" ?>
			<hr />
			<ul class="quest-contacts">
				<li> 906 456-34-34</li>
				<li>tequila@sherlockgame.com</li>
			</ul>
			<div class="age age--circle"> 18+ </div>
		</aside>
	</section>
	<section>
		<div class="quote">
			<img 	src="example-images/pic-quote.png" alt="Автор" class="quote-image"
					srcset="example-images/pic-quote.png 1x, example-images/pic-quote@2x.png 2x"  />
			<q class="quote-text">Этот квест завёл меня быстрее моего парня и я ещё долго
буду вспоминать бесконечные минуты проведённые
в пыльном сундуке под дерюжкой! <small class="quote-author">Ксения Собчак</small></q>
		</div>
	</section>
	<section class="section-map">
		<p>м. Кропоткинская, Большой Афанасьевский пер., 15, стр. 1 </p>
		<button class="btn-simple js-btn-toggly" data-toggly-target=".js-map"> На карте </button>
	</section>

	<!-- Google maps -->
		<div id="map-canvas" class="js-map" data-toggly-height="400" data-toggly-is-map="true"></div>

		<script type="text/javascript"
		    	src="https://maps.googleapis.com/maps/api/js"></script>

		<script type="text/javascript">
		// !!! Функция обязательно должна называться startGoogleMap() иначе она не вызовется при открытии карты
		moscow = { lat: 55.75576, lng: 37.617671};

		function startGoogleMap() {
			var mapOptions = {
				center: moscow,
				zoom: 14,
				panControl: false,
				scrollwheel: false
			};

			map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

			// Иконки генерируются на серверах гугл
			// Нужно только прописать координату, цвет и id коллекции для группировки:
			placeMarker(map.getCenter(), '<?= $collection0 ?>', 0);
		}
		</script>
    <!-- /Google maps -->

    <section class="section">
	    <header class="schedule-heading">
		    <h4>Записаться</h4>
		    <ul class="schedule-heading-month tabs">
			    <li class="tabs-item is-active"><a href="#september-2014">Сентябрь 2014</a></li>
			    <li class="tabs-item"><a href="#october-2014">Октябрь 2014</a></li>
			    <li class="tabs-item"><a href="#november-2014">Ноябрь 2014</a></li>
			    <li class="tabs-item"><a href="#december-2014">Декабрь 2014</a></li>
		    </ul>
	    </header>
		<div class="schedule-overflow tabs-content">
			<!-- Открытая вкладка: -->
			<div id="september-2014" class="tabs-content-item is-active">
				<? include "includes/misc/schedule.php" ?>
			</div>
			<!-- Другие вкладки: -->
			<div id="october-2014" class="tabs-content-item"><? include "includes/misc/schedule.php" ?></div>
			<div id="november-2014" class="tabs-content-item"><? include "includes/misc/schedule.php" ?></div>
			<div id="december-2014" class="tabs-content-item"><? include "includes/misc/schedule.php" ?></div>
		</div>
    </section>
    <section>
	    <div class="royalSlider js-links-slider">
			<a href="quest.php?quest=1"><img class="rsImg" src="example-images/slide-1.jpg" alt="Летучий Голландец" /></a>
			<a href="quest.php?quest=2"><img class="rsImg" src="example-images/slide-2.jpg" alt="Диплодоки в ловушке" /></a>
			<a href="quest.php?quest=3"><img class="rsImg" src="example-images/example-cover.png" alt="Пещера Майя" /></a>
		</div>
    </section>
</div>

<? include "includes/scripts.php" ?>

<? include "includes/footer.php" ?>
