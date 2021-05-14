<?php
	require_once 'php/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400&display=swap" rel="stylesheet">
	<title>Главная страница</title>
</head>
<body>
	<header>
		<div class="width">
			<div class="link">
				<a href="index.php">Главная</a>
				<a href="other/services.php">Услуги и стоимость</a>
				<a href="other/recording.php">Запись</a>
				<a href="other/contacts.php">Контакты</a>
			</div>
		</div>
	</header>

	<div class="info">
		<div class="width">
			<div class="main-title"><p>Автосервис в Казани</p></div>
			<div class="main-text"><p>Замена масел, шиномонтаж, полная компьютерная диагностика автомобиля. Гарантия на любые виды работ до 2-х лет. Скидки постоянным клиентам до 70%.</p></div>
			<div class="record"><a href="other/recording.php">Запись на диагностику</a></div>
		</div>
	</div>

	<div class="serv">
		<div class="width">
			<div class="title"><p>Популярные услуги</p></div>
			<div class="text"><p>Основное направление компании – техническое обслуживание и оказание полного спектрасервисных услуг для легковых автомобилей иностранного и отечественного производства</p></div>

			<div class="services">
				<?php 
					$services = mysqli_query($connect, "SELECT * FROM `services`");
					$services = mysqli_fetch_all($services);
					foreach ($services as $service) {
						if ($service[5] == 'popular') {
						?>
						<div class="service">
							<div class="name"><p><?= $service[2] ?></p></div>
							<div class="description"><p><?= $service[3] ?></p></div>
							<div class="price"><p>от <?= $service[4] ?> руб.</p></div>
							<div class="details"><a href="other/recording.php">Узнать подробнее</a></div>
						</div>
						<?php
						}
					}
				?>
			</div> 
		</div>
	</div>

	<div class="advan">
		<div class="width">
			<div class="title"><p>Наши преимущества</p></div>
			<div class="text"><p>Почему тысячи клиентов выбирают наш сервис?</p></div>

			<div class="advantages">
				<?php 
					$advantages = mysqli_query($connect, "SELECT * FROM `advantages`");
					$advantages = mysqli_fetch_all($advantages);
					foreach ($advantages as $advantage) {
						?>
						<div class="advantage">
							<div class="name"><p><?= $advantage[2] ?></p></div>
							<div class="description"><p><?= $advantage[3] ?></p></div>
						</div>
						<?php
					}
				?>
			</div> 
		</div>
	</div>

	<div class="about">
		<div class="width">
			<div class="title"><p>О нашем сервисе</p></div>
			<div class="text"><p>Лучиший сервис в Казани. Качественный ремонт автомобилей</p></div>
			<div class="about-info">
				<div class="image"><img src="image/about.jpg" alt="" width="470px"></div>
				<div class="ab-fo">
					<p>Станция технического обслуживания «CAR SERV» организована 2000 году, для оказания услуг по обслуживанию и ремонту автомобилей. Первая очередь станции состояла из автомойки и отдела по торговле запасными частями для автомобилей отечественного производства.</p>
					<p>В 2002 году была запущена сама станция по ремонту автомобилей в составе: 5 подъемников для ремонта автомобилей, стенд регулировки передней подвески автомобиля (развал-схождение), шиномонтаж и пост диагностики двигателей автомобиля. Постоянно в составе автосервиса работает профессиональный автоэлектрик-диагност. За короткий срок наша компания достигла определённого уровня в своей области. В 2006 году компания приобрела оборудование итальянской фирмы EMMETEC для ремонта и диагностики рулевого управления автомобилей с гидроусилителем руля (ГУР), что явилось изюминкой СТО «CAR SERV» на Казанском рынке автосервисных услуг.</p>
				</div>
			</div>
		</div>
	</div>

</body>
</html>