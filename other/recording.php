<?php
	require_once '../php/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/recording.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400&display=swap" rel="stylesheet">
	<title>Запись</title>
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
			<div class="main-title"><p>Запись на диагностику</p></div>
			<div class="main-text"><p>В приоритете компании – обеспечение высокого качества работ, точность исполнения принятых на себя обязательств по согласованным с заказчиком срокам оказания услуг</p></div>
		</div>
	</div>

	<div class="record">
		<div class="width">
			<div class="title"><p>Устраним одну поломку автомобиля совершенно бесплатно</p></div>
			<div class="text"><p>при записи на компьютерную диагностику до 25 числа!</p></div>

			<form action="../php/recording.php" method="post">
				<p>Введите имя: </p>
				<input type="text" name="user" placeholder="Имя пользователя" required="required"> <br>
				<p>Введите телефон: </p>
				<input type="text" name="phone" placeholder="xxx-xxx-xxx" required="required"> <br>
				<button type="submit" class="rec">Записаться</button>
			</form>
		</div>
	</div>
</body>
</html>