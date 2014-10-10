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

<? include "includes/scripts.php" ?>
<? include "includes/footer.php" ?>