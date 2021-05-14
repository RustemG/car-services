<?php

	require_once 'connect.php';

	$user = $_POST['user'];
   $phone = $_POST['phone'];

   mysqli_query($connect, "INSERT INTO `request` (`user`, `phone`) VALUES ('$user', '$phone')");

   header('Location: ../index.php');
?>