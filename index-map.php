<? 	$pageTitle = "Главная";

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
			<li class="nav-item"><a href="index-reserve.php"><i class="icon-clock"></i> Забронировать</a></li>

			<li class="nav-item"><a href="index.php"><i class="icon-quest"></i> Квесты</a></li>
			<li class="nav-item current"><a href="index-map.php"><i class="icon-marker"></i> Карта</a></li>
		</ul>
	</nav>
	<nav class="section-nav nav" >
		<ul>
			<li class="nav-item"><label class="checkbox"><input type="checkbox" name="map-filter" value="0" checked /> Путешествия </label></li>
			<li class="nav-item"><label class="checkbox"><input type="checkbox" name="map-filter" value="1" checked /> Сериалы </label></li>
			<li class="nav-item"><label class="checkbox"><input type="checkbox" name="map-filter" value="43" checked /> 43 </label></li>
		</ul>
	</nav>
	<section>
		<!-- Google maps -->
		<div id="map-canvas" class="js-map" style="height: 700px; height: 85vh"></div>

		<script type="text/javascript"
    		src="https://maps.googleapis.com/maps/api/js"></script>

	    <script type="text/javascript">
		    // !!! Функция обязательно должна называться startGoogleMap() иначе она не вызовется при открытии карты

			function startGoogleMap() {
				var mapOptions = {
					center: { lat: 55.75576, lng: 37.617671},
					zoom: 12,
					panControl: false,
					scrollwheel: false
				};

				// Иконки генерируются на серверах гугл!

				var sherlockMarkerPath = 'M47.7,23.6 C47.7,10.6 37.1,0 24.1,0 C11.1,0 0.5,10.6 0.5,23.6 L0.5,25 C1.4,47.3 24.1,66.7 24.1,66.7 C24.1,66.7 46.7,47.3 47.7,25 L47.7,23.6 L47.7,23.6 Z',
					sherlockLogoPath = 'M33.6,17.7 L30.3,17.7 C30.2,17.7 30.1,17.8 30.1,17.9 L30.1,28.8 C30.1,28.9 30.1,29 30,29.1 C29.6,29.5 27.6,31.5 27.6,31.5 L26.9,32.2 C26.8,32.3 26.7,32.3 26.6,32.2 C26.4,32 26.2,31.8 26.1,31.7 C26,31.6 25.9,31.4 25.9,31.2 L25.9,17.8 C25.9,17.6 25.8,17.6 25.7,17.6 L22.4,17.6 C22.3,17.6 22.2,17.7 22.2,17.8 L22.2,28.8 C22.2,28.9 22.2,28.9 22.1,29 C20.7,30.4 19,32.1 18.9,32.2 C18.8,32.3 18.7,32.3 18.6,32.2 C18.4,32 18.2,31.8 18.1,31.7 C18,31.6 17.9,31.4 17.9,31.2 L17.9,20.2 C17.9,20 17.8,19.9 17.7,19.7 C17.6,19.6 15.8,17.8 15.2,17.2 C15.1,17.1 15,17.1 14.8,17.2 L12.5,19.4 C12.4,19.5 12.4,19.7 12.5,19.8 C12.9,20.2 13.8,21.1 13.9,21.2 C14,21.3 14.1,21.5 14.1,21.7 L14.1,32.7 C14.1,32.9 14.2,33 14.3,33.2 C14.4,33.3 16.2,35.1 16.8,35.7 C16.9,35.8 17.1,35.8 17.2,35.7 L21.9,31 C22,30.9 22.1,31 22.1,31.1 L22.1,32.8 C22.1,33 22.2,33.1 22.3,33.3 C22.4,33.4 24.2,35.2 24.8,35.8 C24.9,35.9 25.1,35.9 25.2,35.8 L30,31.1 C30.1,31.1 30.1,31.1 30.1,31.2 L30.1,35.4 C30.1,35.6 30.2,35.6 30.3,35.6 L33.6,35.6 C33.7,35.6 33.8,35.5 33.8,35.4 L33.8,18 C33.8,17.7 33.8,17.7 33.6,17.7 L33.6,17.7 Z';


				var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

				markers = {};

			    placeMarker = function(pos, markerColor, id){
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

					var markerShape = new google.maps.Marker({
						    position: pos,
						    icon: sherlockMarker,
						    map: map }),
						markerLogo = new google.maps.Marker({
						    position: pos,
						    icon: sherlockLogo,
						    map: map
						});

					if (markers[id.toString()]) {
						markers[id.toString()].push([markerShape, markerLogo]);
					} else {
						markers[id.toString()] = [[markerShape, markerLogo]];
					}
			    }

			    // Нужно только прописать координату, цвет и id:
			    placeMarker(map.getCenter(), '#26C0D5', 0);
			    placeMarker({lat: 55.76576, lng: 37.627671}, '#89CC32', 1);
			    placeMarker({lat: 55.73576, lng: 37.597671}, '#89CC32', 1);
			    placeMarker({lat: 55.76476, lng: 37.637671}, '#FF7D53', 43);
			    placeMarker({lat: 55.74576, lng: 37.537671}, '#FF7D53', 43);
			}

			startGoogleMap();
	    </script>
	    <!-- /Google maps -->
	</section>
</div>

<? include "includes/scripts.php" ?>

<script type="text/javascript">
	$('.page').on('change', 'input[name="map-filter"]', function(){
		var id = this.value,
			markersObj = markers[id];

		if (this.checked) {
			$.each(markersObj, function(i, v){
				v[0].setVisible(true);
				v[1].setVisible(true);
			});
		} else {
			$.each(markersObj, function(i, v){
				v[0].setVisible(false);
				v[1].setVisible(false);
			});
		}
	});
</script>

<? include "includes/footer.php" ?>