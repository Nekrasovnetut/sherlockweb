<? 	$pageTitle = "Личный кабинет";

	include "includes/header.php" ?>

<div class="page">
	<div class="page-cover">
		<div class="page-cover-content">
			<header class="page-cover-heading">
				<h2> Глеб Белг </h2>
				<ul class="info">
					<li>14.04.1996</li>
					<li>konstantinopolsky@gmail.com </li>
					<li>+7 903 567 67 66</li>
				</ul>
				<a href="user-change.php" class="btn-link">изменить данные</a>
			</header>
		</div>
	</div>
	<section class="section"><div class="aligner">
		<div class="section-heading">
			<h4 class="accent">Забронированные квесты</h4>
		</div>
		<div class="overWrapper">
			<table class="table-standart">
				<thead>
					<tr>
						<th>Название</th>
						<th>Дата</th>
						<th>Время</th>
						<th>Стоимость</th>
						<th width="95px">Статус</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Гуси завоёвывают Константинополь</td>
						<td>23.10.2014</td>
						<td>12:00</td>
						<td>3500 Р</td>
						<td>Не оплачен</td>
						<td><button class="btn btn-outline js-popup-btn" data-popup="book-success-1">Снять бронь</button></td>
					</tr>
					<tr>
						<td>Текила Бум</td>
						<td>21.12.2014</td>
						<td>12:00</td>
						<td>3500 Р</td>
						<td>Оплачен</td>
						<td></td>
					</tr>
					<tr>
						<td>Текила Бум</td>
						<td>06.12.2014</td>
						<td>12:00</td>
						<td>3500 Р</td>
						<td>Оплачен</td>
						<td></td>
					</tr>
					<tr>
						<td>Пещера Майя</td>
						<td>03.12.2014</td>
						<td>12:00</td>
						<td>3500 Р</td>
						<td>Не оплачен</td>
						<td><button class="btn btn-outline js-popup-btn" data-popup="book-success-2">Снять бронь</button></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div></section>

	<div id="book-success-1" class="popup-content-message">
		<h3>Бронь на игру <br /> &laquo;Гуси завоёвывают Константинополь&raquo; <br /> снята.</h3>
	</div>

	<div id="book-success-2" class="popup-content-message">
		<h3>Бронь на игру <br /> &laquo;Пещера мая&raquo; <br /> снята.</h3>
	</div>

	<section class="section collection-map collection-user">
		<header class="section-heading"><a href="collection-list.php">
			<h4 class="accent"> Пройденные квесты </h4>
		</a></header>

		<div class="aligner">


			<? for($i = 0; $i <= 5; $i++) { ?>

			<article class="collection-map-item collection-<?= $i ?>">
				<header class="collection-map-item-heading">
					<h4> Текила Бум </h4>
					<p>Серия <a href="collection-list.php" class="accent">&laquo;Путешествия&raquo;</a></p>
				</header>

				<section class="collection-map-item-content">
					<dl class="iconInfo">
						<dt class="iconInfo-icon">
							<i class="icon-user"></i>
						</dt>
						<dt class="iconInfo-content">
							Константинопольский, Усть&#8209;Засольский, Берия, Виноградов
						</dt>
					</dl>

					<dl class="iconInfo">
						<dt class="iconInfo-icon">
							<i class="icon-clock"></i>
						</dt>
						<dt class="iconInfo-content">
							34:40
						</dt>
					</dl>
				</section>

				<a href="quest.php" class="btn btn-outline">фото <i class="icon-arrow-right"></i></a>
				<span class="collection-map-item-date">23.10.2014</span>

				<div class="collection-map-item-icons">
					<img src="series-icons/icon-snake-full.svg"
						 onerror="this.onerror=null; this.src='series-icons/icon-snake-full.png'" />
					<img src="series-icons/icon-drink.svg"
						 onerror="this.onerror=null; this.src='series-icons/icon-drink.png'" />
					<img src="series-icons/icon-skull.svg"
						 onerror="this.onerror=null; this.src='series-icons/icon-skull.png'" />
				</div>

				<? } ?>

		<? for($i = 1; $i <= 6; $i++) { ?>
			</article>
		<? } ?>
		</div>


		<div class="aligner">

			<article class="collection-map-item collection-0">
				<header class="collection-map-item-heading">
					<h4> Текила Бум </h4>
					<p>Серия <a href="collection-list.php" class="accent">&laquo;Путешествия&raquo;</a></p>
				</header>

				<section class="collection-map-item-content">
					<dl class="iconInfo">
						<dt class="iconInfo-icon">
							<i class="icon-user"></i>
						</dt>
						<dt class="iconInfo-content">
							Константинопольский, Усть&#8209;Засольский, Берия, Виноградов
						</dt>
					</dl>

					<dl class="iconInfo">
						<dt class="iconInfo-icon">
							<i class="icon-clock"></i>
						</dt>
						<dt class="iconInfo-content">
							34:40
						</dt>
					</dl>
				</section>

				<a href="quest.php" class="btn btn-outline">фото <i class="icon-arrow-right"></i></a>
				<span class="collection-map-item-date">23.10.2014</span>

				<div class="collection-map-item-icons">
					<img src="series-icons/icon-snake-full.svg"
						 onerror="this.onerror=null; this.src='series-icons/icon-snake-full.png'" />
					<img src="series-icons/icon-drink.svg"
						 onerror="this.onerror=null; this.src='series-icons/icon-drink.png'" />
					<img src="series-icons/icon-skull.svg"
						 onerror="this.onerror=null; this.src='series-icons/icon-skull.png'" />
				</div>

			</article>
		</div>
	</section>
</div>

<? include "includes/scripts.php" ?>
<? include "includes/footer.php" ?>