<?
	$pageTitle = "Сертификат";
	include "includes/header.php";
?>
<div class="fixed-top">
	<header class="page-cover">
	<div class="page-cover-bg">
		<img src="example-images/cover-sertificte.jpg" alt="" />
	</div>
	<div class="page-cover-content">
	
	</div>
	</header>
</div>
<div class="js-ghost"></div>

<div class="content page">
	<!-- Certificate photo/description start -->
	<section class="section">
		<h2 class="description">
			<p>
				«Шерлок в подарок» — это сертификат на прохождение одной
				из игр в реальности, представленных на нашем сайте. Если вы задумались о действительно необычном подарке для родных
				и близких, Шерлок — то, что нужно.
			</p>
		</h2>
		<div class="certificate-photo"><img class="certificate-photo" src="assets/img/feedback_certificate/certificate.jpg" alt="" /></div>
		<div class="certificate-description">
			<div class="left">
				Сертификат активируется просто: его обладатель
				выбирает одну из игр на нашем сайте, бронирует удобную
				дату и время визита, а после приносит сертификат на игру.
				Карту игрок оставляет себе — она подарит возможность пользоваться скидками, бонусами и привилегиями от наших друзей и партнёров.
			</div>
			<div class="right">
				<div class="cost">Стоимость сертификата</div>
				<div class="price">4500 руб.</div>
			</div>
			<div class="clear"></div>
		</div>
	</section>
	<!-- Certificate photo/description end -->
	
	<!-- Form start -->
	<form class="form" method="get">
		<section class="section">
			<div class="form-description">
				<p>Вы можете забрать сертификат<br>одним из следующих способов:</p>
			</div>
			<div class="form-section">
				<div class="left">
					<input type="radio" name="price" id="type_1" value="4500" checked /><label for="type_1">Самовывоз</label>
				</div>
				<div class="right">
					<div class="price_active">0 руб.</div>
				</div>
				<div class="left mob">
					<div class="description">
						<ul>
							<li><span class="m">М</span> «Кропоткинская», <span class="br"></span>Б. Афанасьевский пер., д. 15, стр.1</li>
							<li><span class="m">М</span> «Кузнецкий Мост», <span class="br"></span>ул. Петровка, д. 17, стр. 2</li>
							<li><span class="m">М</span> «Проспект Мира», <span class="br"></span>ул. Гиляровского, д. 10, стр. 3</li>
						</ul>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="form-section">
				<div class="left">
					<input type="radio" name="price" id="type_2" value="4800" /><label for="type_2">Доставка курьером</label>
				</div>
				<div class="right">
					<div class="price">300 руб.</div>
				</div>
				<div class="left mob">
					<div class="description">
						<ul>
							<li>в пределах МКАД</li>
							<li>за пределы МКАД в радиусе</li>
						</ul>
					</div>
				</div>
				<div class="right mob">
					<div class="description">
						<p>
							Доставка осуществляется
							в течение 1-3  календарных дней
							с момента принятия заказа
						</p>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="form-section">
				<div class="left">
					<input type="radio" name="price" id="type_3" value="5000" /><label for="type_3">Доставка актёром</label>
				</div>
				<div class="right">
					<div class="price">500 руб.</div>
				</div>
				<div class="left mob">
					<div class="description">
						<ul>
							<li>в образе мексиканца</li>
							<li>в образе ученого</li>
							<li>в образе волшебника</li>
						</ul>
					</div>
				</div>
				<div class="right mob">
					<div class="description">
						<p>
							Доставка осуществляется
							в течение 1-3  календарных дней
							с момента принятия заказа
						</p>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="form-section">
				<div class="left">
					<input type="radio" name="price" id="type_4" value="14500" /><label for="type_4">VIP доставка </label>
				</div>
				<div class="right">
					<div class="price">10 000 руб.</div>
				</div>
				<div class="left mob">
					<div class="description">
						<p>
							Специально для вас и вашего адресата мы придумаем
							то, что вы себе даже и представить не можете
							(и мы пока тоже). Точная стоимость VIP-доставки определяется после понимания ваших желаний.
						</p>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</section>
		<section class="section form-bottom">
			<div class="centered">
				<div class="form-contacts">
					<p>Укажите свои имя и номер телефона<br>и мы обязательно вам перезвоним!</p>
				</div>
				<div class="left">
					<div class="var">Имя</div><input type="text" name="name" /><div class="clear"></div>
					<div class="var">Телефон</div><input type="text" name="phone" value="+7" /><div class="clear"></div>
					<div class="var">Адрес</div><input type="text" name="address[]" /><div class="clear"></div>
					<div class="var"></div><input type="text" name="address[]" /><div class="clear"></div>
				</div>
				<div class="right">
					<div class="description">
						<p>Стоимость с доставкой</p>
					</div>
					<div class="price">4500 руб.</div>
					<input type="submit" value="заказать" />
				</div>
				<div class="clear"></div>
			</div>
		</section>
	</form>
	<!-- Form end -->
</div>

<div id="certificate-success"  class="popup-content-message">
	<h3>Спасибо. Ваша заявка на сертификат принята. <br /> Скоро вам позвонят.</h3>
</div>

<? include "includes/scripts.php" ?>
<? include "includes/footer.php" ?>