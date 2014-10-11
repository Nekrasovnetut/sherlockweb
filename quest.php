<? 	$pageTitle = "Квест";
	$pageClass = "page-collection-1";
	
	include "includes/header.php" ?>


<div class="page <?= $pageClass ?> quest">
	<header class="page-cover">
		<img src="example-images/example-cover.jpg" alt="" />
	</header>
	<section class="section">
		<article class="quest-article">
			
			<header class="quest-article-heading">
				<h2> Пещера Майя </h2>
				<div class="quest-article-heading-collection">
					<span class="label">Серия</span>
					<a href="collection.php" class="link"> Путешествия </a>
				</div>
			</header>
			
			<div class="quest-article-description">
				<p>Главным обвиняемым по делу о "серых" приватизационных схемах в Башкирии проходит Урал Рахимов, сын бывшего президента Башкирии Муртазы Рахимова. Еще одним фигурантом является глава совета директоров ИД "Собеседник" Левон Айрапетян, которого в СКР считают посредником в сделке с башкирским ТЭКом.17 сентября источник сообщил, что в деле "Башнефти" могут появиться новые фигуранты. По его словам, ключевым свидетелем проходит экс-сенатор от Башкирии Игорь Изместьев, отбывающий пожизненное заключение. Обвинения Рахимову, Айрапетяну и Евтушенкову были предъявлены на основании его показаний. миллиардер Владимир Евтушенков потерял 36% состояния. </p>
			</div>
		</article>
		<aside class="quest-aside">
			<a href="quest-winners.php" class="btn btn--big"> Лучшие игроки</a>
			<dl class="quest-info">
				<dt class="quest-info-label">
					<i class="icon-user"></i> 
					<span>Количество человек</span>
				</dt>
				<dd class="quest-info-content">2-4 человек</dd>
			</dl>
			<dl class="quest-info">
				<dt class="quest-info-label">
					<i class="icon-clock"></i> 
					<span>Время прохождения</span>
				</dt>
				<dd class="quest-info-content">60 минут</dd>
			</dl>
			<hr />
			<ul class="quest-contacts">
				<li> 906 456-34-34</li>
				<li>tequila@sherlockgame.com</li>
			</ul>
			<img src="assets/images/icons/18plus.svg" 
				 onerror="this.onerror=null; this.src='assets/images/icons/18plus.png'"
				 class="plus18" />
		</aside>
	</section>
	<section>
		<div class="quote">
			<img 	src="example-images/pic-quote.png" alt="Автор" class="quote-image"
					srcset="example-images/pic-quote.png 1x, example-images/pic-quote@2x.png 2x"  />
			<q class="quote-text">Этот квест завёл меня быстрее моего парня и я ещё долго 
буду вспоминать бесконечные минуты проведённые 
в пыльном сундуке под дерюжкой! <small class="quote-author">Ксения Собчак</small></q>
		</div>
	</section>
	<section class="section section-map">
	</section>
</div>

<? include "includes/scripts.php" ?>
<? include "includes/footer.php" ?>