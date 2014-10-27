<? 	$pageTitle = "Личный кабинет";

	include "includes/header.php" ?>

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

<div class="page">
	<section class="section"><div class="aligner">
		<div class="section-heading">
			<h4 class="accent">Забронированные квесты</h4>
		</div>

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
					<td><button class="btn btn-outline js-popup-btn" data-popup="book-success">Снять бронь</button></td>
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
					<td><button class="btn btn-outline js-popup-btn" data-popup="book-success">Снять бронь</button></td>
				</tr>
			</tbody>
		</table>
	</div></section>

	<div id="book-success">
		<h3>Письмо с новым паролем отправлено вам на  e-mail.</h3>
	</div>

	<section class="section collection-map collection-user">
		<header class="section-heading"><a href="collection-list.php">
			<h4 class="accent"> Пройденные квесты </h4>
		</a></header>

		<? for($i = 1; $i <= 2; $i++) { ?>

		<div class="aligner">
			<div class="collection-map-content-bg"></div>
			<div class="collection-map-content-stars"></div>

			<article class="collection-map-item collection-0">
				<h4 class="collection-map-item-heading"> <span>Текила Бум</span> </h4>

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

				<a href="quest.php" class="btn btn-outline">фото <i class="icon-arrow-right"></i></a>

				<div class="collection-map-item-icons">
					<img src="series-icons/icon-snake-full.svg"
						 onerror="this.onerror=null; this.src='series-icons/icon-snake-full.png'" />
					<img src="series-icons/icon-drink.svg"
						 onerror="this.onerror=null; this.src='series-icons/icon-drink.png'" />
					<img src="series-icons/icon-skull.svg"
						 onerror="this.onerror=null; this.src='series-icons/icon-skull.png'" />
				</div>
			</article>

			<article class="collection-map-item collection-1">
				<h4 class="collection-map-item-heading"> <span>Сибирский цирюльник</span> </h4>

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

				<a href="quest.php" class="btn btn-outline">Фото <i class="icon-arrow-right"></i></a>

				<div class="collection-map-item-icons">
					<img src="series-icons/icon-bat.svg"
						 onerror="this.onerror=null; this.src='series-icons/icon-bat.png'" />

					<img src="series-icons/icon-pyramid.svg"
						 onerror="this.onerror=null; this.src='series-icons/icon-pyramid.png'" />

					<img src="series-icons/icon-mask.svg"
						 onerror="this.onerror=null; this.src='series-icons/icon-mask.png'" />
				</div>
			</article>

			<article class="collection-map-item collection-2">
				<h4 class="collection-map-item-heading"> <span>Бермудский треугольник</span> </h4>

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

				<a href="quest.php" class="btn btn-outline">Фото <i class="icon-arrow-right"></i></a>

				<div class="collection-map-item-icons">
					<img src="series-icons/icon-doors.svg"
						 onerror="this.onerror=null; this.src='series-icons/icon-doors.png'" />
					<img src="series-icons/icon-cactus.svg"
						 onerror="this.onerror=null; this.src='series-icons/icon-cactus.png'" />
					<img src="series-icons/icon-torch.svg"
						 onerror="this.onerror=null; this.src='series-icons/icon-torch.png'" />
				</div>
			</article>

			<article class="collection-map-item collection-0">
				<h4 class="collection-map-item-heading"> <span>Бермудский треугольник</span> </h4>

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

				<a href="quest.php" class="btn btn-outline">Фото <i class="icon-arrow-right"></i></a>

				<div class="collection-map-item-icons">
					<img src="series-icons/icon-doors.svg"
						 onerror="this.onerror=null; this.src='series-icons/icon-doors.png'" />
					<img src="series-icons/icon-cactus.svg"
						 onerror="this.onerror=null; this.src='series-icons/icon-cactus.png'" />
					<img src="series-icons/icon-torch.svg"
						 onerror="this.onerror=null; this.src='series-icons/icon-torch.png'" />
				</div>
			</article>

			<article class="collection-map-item collection-1">
				<h4 class="collection-map-item-heading"> <span>Бермудский треугольник</span> </h4>

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

				<a href="quest.php" class="btn btn-outline">Фото <i class="icon-arrow-right"></i></a>

				<div class="collection-map-item-icons">
					<img src="series-icons/icon-doors.svg"
						 onerror="this.onerror=null; this.src='series-icons/icon-doors.png'" />
					<img src="series-icons/icon-cactus.svg"
						 onerror="this.onerror=null; this.src='series-icons/icon-cactus.png'" />
					<img src="series-icons/icon-torch.svg"
						 onerror="this.onerror=null; this.src='series-icons/icon-torch.png'" />
				</div>
			</article>

			<article class="collection-map-item collection-2">
				<h4 class="collection-map-item-heading"> <span>Бермудский треугольник</span> </h4>

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

				<a href="quest.php" class="btn btn-outline">Фото <i class="icon-arrow-right"></i></a>

				<div class="collection-map-item-icons">
					<img src="series-icons/icon-doors.svg"
						 onerror="this.onerror=null; this.src='series-icons/icon-doors.png'" />
					<img src="series-icons/icon-cactus.svg"
						 onerror="this.onerror=null; this.src='series-icons/icon-cactus.png'" />
					<img src="series-icons/icon-torch.svg"
						 onerror="this.onerror=null; this.src='series-icons/icon-torch.png'" />
				</div>
			</article>
		</div> <? } ?>

		<div class="aligner">
			<div class="collection-map-content-bg"></div>
			<div class="collection-map-content-stars"></div>

			<article class="collection-map-item collection-0">
				<h4 class="collection-map-item-heading"> <span>Текила Бум</span> </h4>

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

				<a href="quest.php" class="btn btn-outline">фото <i class="icon-arrow-right"></i></a>

				<div class="collection-map-item-icons">
					<img src="series-icons/icon-snake-full.svg"
						 onerror="this.onerror=null; this.src='series-icons/icon-snake-full.png'" />
					<img src="series-icons/icon-drink.svg"
						 onerror="this.onerror=null; this.src='series-icons/icon-drink.png'" />
					<img src="series-icons/icon-skull.svg"
						 onerror="this.onerror=null; this.src='series-icons/icon-skull.png'" />
				</div>
			</article>

			<article class="collection-map-item collection-2">
				<h4 class="collection-map-item-heading"> <span>Бермудский треугольник</span> </h4>

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

				<a href="quest.php" class="btn btn-outline">Фото <i class="icon-arrow-right"></i></a>

				<div class="collection-map-item-icons">
					<img src="series-icons/icon-doors.svg"
						 onerror="this.onerror=null; this.src='series-icons/icon-doors.png'" />
					<img src="series-icons/icon-cactus.svg"
						 onerror="this.onerror=null; this.src='series-icons/icon-cactus.png'" />
					<img src="series-icons/icon-torch.svg"
						 onerror="this.onerror=null; this.src='series-icons/icon-torch.png'" />
				</div>
			</article>
		</div>
	</section>
</div>

<? include "includes/scripts.php" ?>
<? include "includes/footer.php" ?>