<? 	$pageTitle = "Главная";
	$pageClass = "page-collection-map-1";
	$collection1color = '#26C0D5';

	include "includes/header.php" ?>



<div class="page booking-final">
	
<header class="page-heading booking-final-heading">
	<h2>Квест забронирован</h2>	
	<p>Подробную информация о нём вы можете посмотреть его вы можете в своем <a href="#">личном кабинете</a></p>
</header>

<section class="printed">
	<img src="assets/images/logo.svg"
				 onerror="this.onerror=null;
				 this.src='assets/images/logo.png'" width="350" height="111" alt="Логотип Шерлок" />

	<h2>Бронирование квеста</h2>
</section>

<section class="section">
	
	
	
	<div class="quest-item booking-final-item">
			<div class="quest-item-img">
				<figure class="covermini">
					<div class="age">+18</div>
					<img src="example-images/example-cover-mini.png">
				</figure>
			</div>
			<div class="quest-item-content">

				<div class="quest-item-top">
					<h3 class="to-left quest-item-top-left booking-final-item-bigname">Сибирь: Старая лаборатория</h3>
					<div class="quest-item-top-right to-right">
						<div class="booking-final-item-day">21 Сентября 14:45</div>
						<div class="booking-final-item-price"> 2000 руб</div>
					</div>
				</div>

				<hr />

		

				<div class="quest-item-bottom booking-final-item-adress">
					<div class="quest-item-bottom-icon">
						<i class="icon-marker"></i>
					</div>
					<div class="quest-item-bottom-adress">			
							М. Кропоткинская Большой Афонасьевский пер 15 стр1 				
					</div>
				
				</div>
			</div>

		</div>
		
	<a href="javascript:window.print()" class="btn btn-outline btn-to-center btn-print booking-final-print">Распечатать</a>
	
</section>

</div>

<? include "includes/scripts.php" ?>
<? include "includes/footer.php" ?>