<? 	$pageTitle = "Квест";
	$pageClass = "page-collection-1";
	$collection1color = '#26C0D5';
	
	include "includes/header.php" ?>


<div class="page <?= $pageClass ?> quest">
	<header class="page-cover">
		<img src="example-images/example-cover.jpg" alt="" />
	</header>
	<section class="section">
		<article class="quest-article">
			
			<header class="quest-article-heading">
				<h2> Пещера Майя </h2>
				<div class="quest-article-heading-collection">
					<span class="label">Серия</span>
					<a href="collection.php" class="link"> Путешествия </a>
				</div>
			</header>
			
			<div class="quest-article-description">
				<p>Главным обвиняемым по делу о "серых" приватизационных схемах в Башкирии проходит Урал Рахимов, сын бывшего президента Башкирии Муртазы Рахимова. Еще одним фигурантом является глава совета директоров ИД "Собеседник" Левон Айрапетян, которого в СКР считают посредником в сделке с башкирским ТЭКом.17 сентября источник сообщил, что в деле "Башнефти" могут появиться новые фигуранты. По его словам, ключевым свидетелем проходит экс-сенатор от Башкирии Игорь Изместьев, отбывающий пожизненное заключение. Обвинения Рахимову, Айрапетяну и Евтушенкову были предъявлены на основании его показаний. миллиардер Владимир Евтушенков потерял 36% состояния. </p>
			</div>
		</article>
		<aside class="quest-aside">
			<a href="quest-winners.php" class="btn btn--big"> Лучшие игроки</a>
			<dl class="quest-info">
				<dt class="quest-info-label">
					<i class="icon-user"></i> 
					<span>Количество <br /> человек</span>
				</dt>
				<dd class="quest-info-content">2-4 человек</dd>
			</dl>
			<dl class="quest-info">
				<dt class="quest-info-label">
					<i class="icon-clock"></i> 
					<span>Время <br /> прохождения</span>
				</dt>
				<dd class="quest-info-content">60 минут</dd>
			</dl>
			<hr />
			<ul class="quest-contacts">
				<li> 906 456-34-34</li>
				<li>tequila@sherlockgame.com</li>
			</ul>
			<img src="assets/images/icons/18plus.svg" 
				 onerror="this.onerror=null; this.src='assets/images/icons/18plus.png'"
				 class="plus18" />
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
	    
		function startGoogleMap() {
			var mapOptions = {
				center: { lat: -34.397, lng: 150.644},
				zoom: 8,
				panControl: false,
				scrollwheel: false
			};
			
			// Иконки генерируются на серверах гугл!
			
			var sherlockMarkerPath = 'M47.7,23.6 C47.7,10.6 37.1,0 24.1,0 C11.1,0 0.5,10.6 0.5,23.6 L0.5,25 C1.4,47.3 24.1,66.7 24.1,66.7 C24.1,66.7 46.7,47.3 47.7,25 L47.7,23.6 L47.7,23.6 Z',
				sherlockLogoPath = 'M33.6,17.7 L30.3,17.7 C30.2,17.7 30.1,17.8 30.1,17.9 L30.1,28.8 C30.1,28.9 30.1,29 30,29.1 C29.6,29.5 27.6,31.5 27.6,31.5 L26.9,32.2 C26.8,32.3 26.7,32.3 26.6,32.2 C26.4,32 26.2,31.8 26.1,31.7 C26,31.6 25.9,31.4 25.9,31.2 L25.9,17.8 C25.9,17.6 25.8,17.6 25.7,17.6 L22.4,17.6 C22.3,17.6 22.2,17.7 22.2,17.8 L22.2,28.8 C22.2,28.9 22.2,28.9 22.1,29 C20.7,30.4 19,32.1 18.9,32.2 C18.8,32.3 18.7,32.3 18.6,32.2 C18.4,32 18.2,31.8 18.1,31.7 C18,31.6 17.9,31.4 17.9,31.2 L17.9,20.2 C17.9,20 17.8,19.9 17.7,19.7 C17.6,19.6 15.8,17.8 15.2,17.2 C15.1,17.1 15,17.1 14.8,17.2 L12.5,19.4 C12.4,19.5 12.4,19.7 12.5,19.8 C12.9,20.2 13.8,21.1 13.9,21.2 C14,21.3 14.1,21.5 14.1,21.7 L14.1,32.7 C14.1,32.9 14.2,33 14.3,33.2 C14.4,33.3 16.2,35.1 16.8,35.7 C16.9,35.8 17.1,35.8 17.2,35.7 L21.9,31 C22,30.9 22.1,31 22.1,31.1 L22.1,32.8 C22.1,33 22.2,33.1 22.3,33.3 C22.4,33.4 24.2,35.2 24.8,35.8 C24.9,35.9 25.1,35.9 25.2,35.8 L30,31.1 C30.1,31.1 30.1,31.1 30.1,31.2 L30.1,35.4 C30.1,35.6 30.2,35.6 30.3,35.6 L33.6,35.6 C33.7,35.6 33.8,35.5 33.8,35.4 L33.8,18 C33.8,17.7 33.8,17.7 33.6,17.7 L33.6,17.7 Z';
			

			var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
			    
		    placeMarker = function(pos, markerColor){
			    var sherlockMarker = {
					path: sherlockMarkerPath,
					fillColor: markerColor,
					fillOpacity: 1,
					strokeWeight: 0,
					scale: 1,
					anchor: new google.maps.Point(23, 67) 
				}, sherlockLogo = {
					path: sherlockLogoPath,
					fillColor: 'white',
					fillOpacity: 1,
					strokeWeight: 0,
					scale: 1,
	 				anchor: new google.maps.Point(23, 67)
				}
				
				var marker = new google.maps.Marker({
					    position: pos,
					    icon: sherlockMarker,
					    map: map }), 
					markerLogo = new google.maps.Marker({
					    position: pos,
					    icon: sherlockLogo,
					    map: map
					});
		    }
		    
		    // Нужно только прописать координату и цвет:
		    placeMarker(map.getCenter(), '<?= $collection1color ?>');
		    placeMarker({lat: -34.497, lng: 150.844}, '#89CC32');
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
			<div id="september-2014" class="tabs-content-item is-active"><? include "includes/misc/schedule.php" ?></div>
			<div id="october-2014" class="tabs-content-item"><? include "includes/misc/schedule.php" ?></div>
			<div id="november-2014" class="tabs-content-item"><? include "includes/misc/schedule.php" ?></div>
			<div id="december-2014" class="tabs-content-item"><? include "includes/misc/schedule.php" ?></div>
		</div>
    </section>
</div>

<? include "includes/scripts.php" ?>
<? include "includes/footer.php" ?>