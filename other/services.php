<?php
	require_once '../php/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/services.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400&display=swap" rel="stylesheet">
	<title>Услуги</title>
</head>
<body>
	<header>
		<div class="width">
			<div class="link">
				<a href="../index.php">Главная</a>
				<a href="services.php">Услуги и стоимость</a>
				<a href="recording.php">Запись</a>
				<a href="contacts.php">Контакты</a>
			</div>
		</div>
	</header>

	<div class="info">
		<div class="width">
			<div class="main-title"><p>Стоимость услуг Car Serv</p></div>
			<div class="main-text"><p>В приоритете компании – обеспечение высокого качества работ, точность исполнения принятых на себя обязательств по согласованным с заказчиком срокам оказания услуг</p></div>
		</div>
	</div>

	<div class="serv">
		<div class="width">
			<div class="title"><p>Что мы предлагаем</p></div>
			<div class="text"><p>Здесь вы найдете все услуги нашего автосервиса и их стоимость</p></div>

			<div class="services">
				<?php 
					$services = mysqli_query($connect, "SELECT * FROM `services`");
					$services = mysqli_fetch_all($services);
					foreach ($services as $service) {
						?>
						<div class="service">
							<div class="name"><p><?= $service[2] ?></p></div>
							<div class="description"><p><?= $service[3] ?></p></div>
							<div class="price"><p>от <?= $service[4] ?> руб.</p></div>
						</div>
						<?php
					}
				?>
			</div> 
		</div>
	</div>

</body>
</html>