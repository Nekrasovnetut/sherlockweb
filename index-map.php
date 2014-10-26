<? 	$pageTitle = "Главная";

	include "includes/header.php" ?>



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
			<li class="nav-item">
				<input id="uniqid-3" type="checkbox" class="checkbox-input" name="map-filter" value="0" checked/>
				<label class="checkbox" for="uniqid-3"> Путешествия</label>
			</li>
			<li class="nav-item">
				<input id="uniqid-4" type="checkbox" class="checkbox-input" name="map-filter" value="1" checked/>
				<label class="checkbox" for="uniqid-4"> Сериалы </label>
			</li>
			<li class="nav-item">
				<input id="uniqid-5" type="checkbox" class="checkbox-input" name="map-filter" value="43" checked/>
				<label class="checkbox" for="uniqid-5"> 43 </label>
			</li>
		</ul>
	</nav>
	<section>
		<!-- Google maps -->
		<div id="map-canvas" class="js-map" style="height: 700px; height: 85vh"></div>

		<script type="text/javascript"
				src="https://maps.googleapis.com/maps/api/js"></script>

		<script type="text/javascript">
			moscow = { lat: 55.75576, lng: 37.617671};

			function startGoogleMap() {
				var mapOptions = {
					center: moscow,
					zoom: 12,
					panControl: false,
					scrollwheel: false
				};

				map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
			}

			startGoogleMap();
		</script>
		<!-- /Google maps -->
	</section>
</div>

<? include "includes/scripts.php" ?>

<script type="text/javascript">
	(function($){
		// Иконки генерируются на серверах гугл
	    // Нужно только прописать координату, цвет и id коллекции для группировки:
	    placeMarker(map.getCenter(), '#26C0D5', 0);
	    placeMarker({lat: 55.76576, lng: 37.627671}, '#89CC32', 1);
	    placeMarker({lat: 55.73576, lng: 37.597671}, '#89CC32', 1);
	    placeMarker({lat: 55.76476, lng: 37.637671}, '#FF7D53', 43);
	    placeMarker({lat: 55.74576, lng: 37.537671}, '#FF7D53', 43);

	    // Фильтрация иконок на карте:
	    $('.nav').on('change', 'input[name="map-filter"]', function(){
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
	}(jQuery))
</script>

<? include "includes/footer.php" ?>