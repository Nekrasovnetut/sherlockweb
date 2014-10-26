<? 	$pageTitle = "Квест забронирован";
	$pageClass = "page-collection-map-1";
	$collection1color = '#26C0D5';

	include "includes/header.php" ?>




<div class="page booking-final">
	
<header class="page-heading booking-final-heading">
	<h2>Квест забронирован</h2>	
	<p>Подробную информация о нём вы можете посмотреть его вы можете в своем <a href="#">личном кабинете</a></p>
</header>
<section class="section section-non-printed">
	
	<div class="quest-item booking-final-item">
			<div class="quest-item-img">
				<figure class="covermini">
					<div class="age">+18</div>
					<img src="example-images/example-cover-mini.png">
				</figure>
			</div>
			<div class="quest-item-content">

				<div class="quest-item-top">
					<h3 class="quest-item-top-left booking-final-item-bigname">Сибирь: Старая лаборатория</h3>
					<div class="quest-item-top-right">
						<div class="booking-final-item-day">21 Сентября 14:45</div>
						<div class="booking-final-item-price"> 2000 руб</div>
					</div>
				</div>

				<hr />

		

				<div class="quest-item-bottom booking-final-item-adress">
					<div class="quest-item-bottom-left">
						<div class="quest-item-bottom-icon">
						<i class="icon-marker"></i>
						</div>
						<div class="quest-item-bottom-adress">			
						<ul>
							<li>М. Кропоткинская</li>
							<li>Большой Афонасьевский пер 15 стр1 </li>
						</ul>
						</div>
					</div>
				
				</div>
			</div>

		</div>
		
	<a href="javascript:window.print()" class="btn btn-outline btn-to-center btn-print booking-final-print">Распечатать</a>
	
</section>

</div>

<!-- Ниже идет версия для печати -->

<section class="printed printed-list">
	<img src="assets/images/logo.svg" onerror="this.onerror=null; this.src='assets/images/logo.png'" width="150" alt="Логотип Шерлок" />

	<h2>Бронирование квеста</h2>
	<p>21 сентября, 14:45</p>
	<p>2000 руб</p>
	<p>м. Кропоткинская, Большой Афанасьевский пер., 15, стр. 1</p>
	<div class="age age--circle">+18</div>
	<h3>Желаем хорошей игры</h3>
	<ul>
		<li>sherlockgame.ru</li>
		<li>8 923 456-56-12</li>
	</ul>
	<p class="printed-footer">&copy Шерлок. Все права защищены. 2014</p>
</section>

<!-- Конец версии для печати -->

<? include "includes/scripts.php" ?>
<? include "includes/footer.php" ?>