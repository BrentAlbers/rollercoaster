<?php
	$title = $_POST['title'];
	$email = $_POST['email'];
	$name = $_POST['name'];
	$message = $_POST['message'];

	//echo $userName . ", " . $userEmail . ", " . $userPassword . ", " . $repeatPassword;

	file_put_contents('contact.txt', $name . ", " . $email . ", " . $title . ", " . $message, FILE_APPEND);

	header("Location: ../contactpagina.php?msg=Bericht opgeslagen");

?>