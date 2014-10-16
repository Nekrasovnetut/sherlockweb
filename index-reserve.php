<? 	$pageTitle = "Главная";
	
	include "includes/header.php" ?>

<section class="section _sherlock-about">
	<article>
		<header><a class="section-logo logo logo--big" href="index.php">
			<h1 class="is-hidden"> Шерлок &mdash; Квесты в реальности </h1>
			<img src="assets/images/logo.svg" 
				 onerror="this.onerror=null; 
				 this.src='assets/images/logo.png'" width="274" height="87" alt="Логотип Шерлок" />
		</a></header>
		
		<div class="royalSlider js-about-slider">
			<div class="rsContent">
				<div class="description">
					<p> Шерлок — это квест в реальности. Разгадайте головоломки, <br />
						найдите тайники, воспользуйтесь подсказками, всеми доступными вещами, <br />
						добудьте ключи и откройте двери к победе! </p>
				</div>
			</div>
			
			<div class="rsContent">
				<div class="quote">
					<img 	src="example-images/pic-quote.png" alt="Автор" class="quote-image"
							srcset="example-images/pic-quote.png 1x, example-images/pic-quote@2x.png 2x"  />
					<q class="quote-text">Этот квест завёл меня быстрее моего парня и я ещё долго 
		буду вспоминать бесконечные минуты проведённые 
		в пыльном сундуке под дерюжкой! <small class="quote-author">Ксения Собчак</small></q>
				</div>
			</div>
			
			<div class="rsContent">
				<div class="quote">
					<img 	src="example-images/al-capone.png" alt="Автор" class="quote-image"  />
					<q class="quote-text">Этот квест завёл меня быстрее моего парня и я ещё долго 
		буду вспоминать бесконечные минуты проведённые 
		в пыльном сундуке под дерюжкой! <small class="quote-author">Ксения Собчак</small></q>
				</div>
			</div>
		</div>
	</article>
</section><div class="js-ghost" style="position: relative; z-index: -2;"></div>

<div class="page">
	<nav class="section-nav nav sticky" >
		<!-- @todo: Сделать второй элемент прилипающим -->
		<ul>
			<!-- На самом деле это не current, но это для того чтобы показать как будет выглядит: -->
			<li class="nav-item current"><a href="index-reserve.php">Забронировать</a></li> 
			
			<li class="nav-item"><a href="index.php">Квесты</a></li>
			<li class="nav-item"><a href="index-map.php">Карта</a></li>
		</ul>
	</nav>
	<section class="section collection collection--schedule" style="background-color: #26C0D5;">
		<header class="section-heading"><a href="collection.php">
			<h3> Путешествия </h3> 
		</a></header>
		<div class="collection-content aligner">
			<div class="schedule-overflow">
				<? include "includes/misc/schedule-reserve.php" ?>
			</div>
		</div>
	</section>
	<section class="section collection collection--schedule" style="background-color: #89CC32;">
		<header class="section-heading"><a href="collection.php">
			<h3> Сериалы </h3> 
		</a></header>
		<div class="collection-content aligner">
			<div class="schedule-overflow">
				<? include "includes/misc/schedule-reserve.php" ?>
			</div>
		</div>
	</section>
</div>

<? include "includes/scripts.php" ?>
<? include "includes/footer.php" ?>