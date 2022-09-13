<?php

include_once(__DIR__ . '/model/apps.php');

echo $_SERVER['REQUEST_METHOD'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$name = trim($_POST['name']);
	$phone = trim($_POST['phone']);

	if ($name === '' || $phone === '') {
		echo 'заполни все строки';
	} else {
		addApp($name, $phone);
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<form action="index.php" method="POST">
		<label for="name">NAME</label>
		<input id=name name="name" />
		<label for="phone">PHONE</label>
		<input id="phone" name="phone" />
		<input type="submit" value="SEND">

	</form>
</body>

</html>