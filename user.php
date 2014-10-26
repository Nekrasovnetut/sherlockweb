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
		<h4>Забронированные квесты</h4>

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
					<td><button class="btn btn-outline">Снять бронь</button></td>
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
					<td><button class="btn btn-outline">Снять бронь</button></td>
				</tr>
			</tbody>
		</table>
	</div></section>
	<section class="section-color collection-map collection-repeat">
		<header class="section-heading">
			<h3>Пройденные квесты</h3>
		</header>
		<div class="aligner">

		</div>
	</section>
</div>

<? include "includes/scripts.php" ?>
<? include "includes/footer.php" ?>