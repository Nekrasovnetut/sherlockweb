<? 	$pageTitle = "Главная 2";
	
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
			<li class="nav-item current"><a href="#">Забронировать</a></li> 
			
			<li class="nav-item"><a href="#">Квесты</a></li>
			<li class="nav-item"><a href="#">Карта</a></li>
		</ul>
	</nav>
	<section class="section collection collection--preview collection--layout-0" style="background-color: #26C0D5;">
		<header class="section-heading"><a href="collection.php">
			<h3> Путешествия (flex) </h3> 
			<p> Все 10 квестов </p>
		</a></header>
		<div class="collection-content aligner">
				<img class="collection-path" src="series-icons/layout-0-path-first.svg" onerror="this.onerror=null; this.src='series-icons/layout-0-path-first.png'" />
			
			<article class="collection-item">
				<h4 class="collection-item-heading"> Текила Бум </h4>
				<p>Проснувшись с больной головой в подвале бара постреди мексиканской пустыни, попытайтесь избежать встречи с грингос.</p>
				<a href="collection.php" class="btn btn-white">Записаться <i class="icon-arrow-right"></i></a>
				
				<div class="collection-item-icons">
					<img class="left-bottom" src="series-icons/icon-drink.svg" onerror="this.onerror=null; this.src='series-icons/icon-drink.png'" />
					<img class="left-top" src="series-icons/icon-cactus.svg" onerror="this.onerror=null; this.src='series-icons/icon-cactus.png'" />
					<img class="after-title" src="series-icons/icon-skull.svg" onerror="this.onerror=null; this.src='series-icons/icon-skull.png'" />
				</div>
			</article>
			
				<img class="collection-path" src="series-icons/layout-0-path-1.svg" onerror="this.onerror=null; this.src='series-icons/layout-0-path-1.png'" />
			
			<article class="collection-item">
				<h4 class="collection-item-heading"> Сибирский цирюльник </h4>
				<p>Проснувшись с больной головой в подвале бара постреди мексиканской пустыни, попытайтесь избежать встречи с грингос.</p>
				<a href="collection.php" class="btn btn-white">Записаться <i class="icon-arrow-right"></i></a>
				
				<div class="collection-item-icons">
					<img class="left-center" src="series-icons/icon-snake.svg" onerror="this.onerror=null; this.src='series-icons/icon-snake.png'" />
					<img class="right-bottom" src="series-icons/icon-cactus.svg" onerror="this.onerror=null; this.src='series-icons/icon-cactus.png'" />
					<img class="after-title" src="series-icons/icon-paper.svg" onerror="this.onerror=null; this.src='series-icons/icon-paper.png'" />
				</div>
			</article>
			
				<img class="collection-path" src="series-icons/layout-0-path-2.svg" onerror="this.onerror=null; this.src='series-icons/layout-0-path-2.png'" />
			
			<article class="collection-item">
				<h4 class="collection-item-heading"> Бермудский треугольник </h4>
				<p>Проснувшись с больной головой в подвале бара постреди мексиканской пустыни, попытайтесь избежать встречи с грингос.</p>
				<a href="collection.php" class="btn btn-white">Записаться <i class="icon-arrow-right"></i></a>
				
				<div class="collection-item-icons">
					<img class="left-center" src="series-icons/icon-fire-extinguisher.svg" onerror="this.onerror=null; this.src='series-icons/icon-extinguisher.png'" />
					<img class="right-bottom" src="series-icons/icon-cactus.svg" onerror="this.onerror=null; this.src='series-icons/icon-cactus.png'" />
					<img class="after-title" src="series-icons/icon-skull.svg" onerror="this.onerror=null; this.src='series-icons/icon-skull.png'" />
				</div>
			</article>
			
				<img class="collection-path" src="series-icons/layout-0-path-last.svg" onerror="this.onerror=null; this.src='series-icons/layout-0-path-first.png'" />
		</div>
	</section>
	<section class="section collection collection--preview collection--layout-1" style="background-color: #89CC32;">
		<header class="section-heading"><a href="collection.php">
			<h3> Сериалы (flex) </h3> 
			<p> Все 10 квестов </p>
		</a></header>
		
		<div class="collection-content aligner">
				<img class="collection-path" src="series-icons/layout-1-path-first.svg" onerror="this.onerror=null; this.src='series-icons/layout-1-path-first.png'" />
			
			
			
				<img class="collection-path" src="series-icons/layout-1-path-1.svg" onerror="this.onerror=null; this.src='series-icons/layout-1-path-1.png'" />
			
			<article class="collection-item">
				<h4 class="collection-item-heading"> Сибирский цирюльник </h4>
				<p>Проснувшись с больной головой в подвале бара постреди мексиканской пустыни, попытайтесь избежать встречи с грингос.</p>
				<a href="collection.php" class="btn btn-white">Записаться <i class="icon-arrow-right"></i></a>
				
				<div class="collection-item-icons">
					<img class="left-center" src="series-icons/icon-snake.svg" onerror="this.onerror=null; this.src='series-icons/icon-snake.png'" />
					<img class="right-bottom" src="series-icons/icon-cactus.svg" onerror="this.onerror=null; this.src='series-icons/icon-cactus.png'" />
					<img class="after-title" src="series-icons/icon-paper.svg" onerror="this.onerror=null; this.src='series-icons/icon-paper.png'" />
				</div>
			</article>
			
				<img class="collection-path" src="series-icons/layout-1-path-2.svg" onerror="this.onerror=null; this.src='series-icons/layout-1-path-2.png'" />
			
			<article class="collection-item">
				<h4 class="collection-item-heading"> Бермудский треугольник </h4>
				<p>Проснувшись с больной головой в подвале бара постреди мексиканской пустыни, попытайтесь избежать встречи с грингос.</p>
				<a href="collection.php" class="btn btn-white">Записаться <i class="icon-arrow-right"></i></a>
				
				<div class="collection-item-icons">
					<img class="left-center" src="series-icons/icon-fire-extinguisher.svg" onerror="this.onerror=null; this.src='series-icons/icon-extinguisher.png'" />
					<img class="right-bottom" src="series-icons/icon-cactus.svg" onerror="this.onerror=null; this.src='series-icons/icon-cactus.png'" />
					<img class="after-title" src="series-icons/icon-skull.svg" onerror="this.onerror=null; this.src='series-icons/icon-skull.png'" />
				</div>
			</article>
			
			<article class="collection-item">
				<h4 class="collection-item-heading"> Текила Бум </h4>
				<p>Проснувшись с больной головой в подвале бара постреди мексиканской пустыни, попытайтесь избежать встречи с грингос.</p>
				<a href="collection.php" class="btn btn-white">Записаться <i class="icon-arrow-right"></i></a>
				
				<div class="collection-item-icons">
					<img class="right-center" src="series-icons/icon-drink.svg" onerror="this.onerror=null; this.src='series-icons/icon-drink.png'" />
					<img class="left-center" src="series-icons/icon-cactus.svg" onerror="this.onerror=null; this.src='series-icons/icon-cactus.png'" />
					<img class="after-title" src="series-icons/icon-skull.svg" onerror="this.onerror=null; this.src='series-icons/icon-skull.png'" />
				</div>
			</article>
			
				<img class="collection-path" src="series-icons/layout-1-path-last.svg" onerror="this.onerror=null; this.src='series-icons/layout-1-path-first.png'" />
		</div>
	</section>
	<section class="section collection collection--preview collection--layout-1-2" style="background-color: #FF7D53;">
		<header class="section-heading"><a href="collection.php">
			<h3> Испытания (scale) </h3> 
			<p> Все 10 квестов </p>
		</a></header>
		
		<div class="collection-content aligner">
			
			<article class="collection-item layer">
				<h4 class="collection-item-heading"> Сибирский цирюльник </h4>
				<p>Проснувшись с больной головой в подвале бара постреди мексиканской пустыни, попытайтесь избежать встречи с грингос.</p>
				<a href="collection.php" class="btn btn-white">Записаться <i class="icon-arrow-right"></i></a>
				
				<div class="collection-item-icons">
					<img src="series-icons/icon-snake.svg" 
						 onerror="this.onerror=null; this.src='series-icons/icon-snake.png'" />
							
					<img src="series-icons/icon-cactus.svg" 
						 onerror="this.onerror=null; this.src='series-icons/icon-cactus.png'" />
							
					<img src="series-icons/icon-paper.svg" 
						 onerror="this.onerror=null; this.src='series-icons/icon-paper.png'" />
				</div>
			</article>
			
			<article class="collection-item layer">
				<h4 class="collection-item-heading"> Бермудский треугольник </h4>
				<p>Проснувшись с больной головой в подвале бара постреди мексиканской пустыни, попытайтесь избежать встречи с грингос.</p>
				<a href="collection.php" class="btn btn-white">Записаться <i class="icon-arrow-right"></i></a>
				
				<div class="collection-item-icons">
					<img src="series-icons/icon-fire-extinguisher.svg" 
						 onerror="this.onerror=null; this.src='series-icons/icon-extinguisher.png'" />
					<img src="series-icons/icon-cactus.svg" 
						 onerror="this.onerror=null; this.src='series-icons/icon-cactus.png'" />
					<img src="series-icons/icon-skull.svg" 
						 onerror="this.onerror=null; this.src='series-icons/icon-skull.png'" />
				</div>
			</article>
			
			<article class="collection-item layer">
				<h4 class="collection-item-heading"> Текила Бум </h4>
				<p>Проснувшись с больной головой в подвале бара постреди мексиканской пустыни, попытайтесь избежать встречи с грингос.</p>
				<a href="collection.php" class="btn btn-white">Записаться <i class="icon-arrow-right"></i></a>
				
				<div class="collection-item-icons">
					<img src="series-icons/icon-drink.svg" 
						 onerror="this.onerror=null; this.src='series-icons/icon-drink.png'" />
					<img src="series-icons/icon-cactus.svg" 
						 onerror="this.onerror=null; this.src='series-icons/icon-cactus.png'" />
					<img src="series-icons/icon-skull.svg" 
						 onerror="this.onerror=null; this.src='series-icons/icon-skull.png'" />
				</div>
			</article>
			
			<div class="collection-content-bg layer"></div>
			<div class="collection-content-stars layer"></div>
		</div>
	</section>
	<section class="section collection collection--preview collection--layout-1-2" style="background-color: #FFBC28;">
		<header class="section-heading"><a href="collection.php">
			<h3> Испытания (scale&nbsp;+&nbsp;parallax) </h3> 
			<p> Все 10 квестов </p>
		</a></header>
		
		<div class="collection-content aligner _parallax-test">
			
			<article class="collection-item layer" data-depth="0.10">
				<h4 class="collection-item-heading"> Сибирский цирюльник </h4>
				<p>Проснувшись с больной головой в подвале бара постреди мексиканской пустыни, попытайтесь избежать встречи с грингос.</p>
				<a href="collection.php" class="btn btn-white">Записаться <i class="icon-arrow-right"></i></a>
				
				<div class="collection-item-icons">
					<img src="series-icons/icon-snake.svg" 
						 onerror="this.onerror=null; this.src='series-icons/icon-snake.png'" />
							
					<img src="series-icons/icon-cactus.svg" 
						 onerror="this.onerror=null; this.src='series-icons/icon-cactus.png'" />
							
					<img src="series-icons/icon-paper.svg" 
						 onerror="this.onerror=null; this.src='series-icons/icon-paper.png'" />
				</div>
			</article>
			
			<article class="collection-item layer" data-depth="0.10">
				<h4 class="collection-item-heading"> Бермудский треугольник </h4>
				<p>Проснувшись с больной головой в подвале бара постреди мексиканской пустыни, попытайтесь избежать встречи с грингос.</p>
				<a href="collection.php" class="btn btn-white">Записаться <i class="icon-arrow-right"></i></a>
				
				<div class="collection-item-icons">
					<img src="series-icons/icon-fire-extinguisher.svg" 
						 onerror="this.onerror=null; this.src='series-icons/icon-extinguisher.png'" />
					<img src="series-icons/icon-cactus.svg" 
						 onerror="this.onerror=null; this.src='series-icons/icon-cactus.png'" />
					<img src="series-icons/icon-skull.svg" 
						 onerror="this.onerror=null; this.src='series-icons/icon-skull.png'" />
				</div>
			</article>
			
			<article class="collection-item layer" data-depth="0.10">
				<h4 class="collection-item-heading"> Текила Бум </h4>
				<p>Проснувшись с больной головой в подвале бара постреди мексиканской пустыни, попытайтесь избежать встречи с грингос.</p>
				<a href="collection.php" class="btn btn-white">Записаться <i class="icon-arrow-right"></i></a>
				
				<div class="collection-item-icons">
					<img src="series-icons/icon-drink.svg" 
						 onerror="this.onerror=null; this.src='series-icons/icon-drink.png'" />
					<img src="series-icons/icon-cactus.svg" 
						 onerror="this.onerror=null; this.src='series-icons/icon-cactus.png'" />
					<img src="series-icons/icon-skull.svg" 
						 onerror="this.onerror=null; this.src='series-icons/icon-skull.png'" />
				</div>
			</article>
			
			<div class="collection-content-bg layer" data-depth="0.20"></div>
			<div class="collection-content-stars layer" data-depth="0.50"></div>
		</div>
	</section>
	<section class="section">
		<header class="section-heading">
			<h4> Наши партнёры </h4> 
		</header>
		<ul class="centery centery--wider">
			<li class="centery-item">
				<a href="#"><img src="example-images/example-1.png" width="99" height="37" /></a>
			</li>
			<li class="centery-item">
				<a href="#"><img src="example-images/example-3.png" width="102" height="25" /></a>
			</li>
			<li class="centery-item">
				<a href="#"><img src="example-images/example-1.png" width="99" height="37" /></a>
			</li>
			<li class="centery-item">
				<a href="#"><img src="example-images/example-2.png" width="100" height="15" /></a>
			</li>
			<li class="centery-item">
				<a href="#"><img src="example-images/example-3.png" width="102" height="25" /></a>
			</li>
		</ul>
	</section>
</div>

<? include "includes/scripts.php" ?>
<? include "includes/footer.php" ?>