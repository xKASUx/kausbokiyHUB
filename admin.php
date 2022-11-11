<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админ Панель</title>
</head>
<body>
<?php include ('./login.php'); ?>
<?php
	if (!empty($_SESSION['auth']) and $_SESSION['admin'] == 1) {
		echo '<h1>ЕС, БАБАБОЙ)</h1>';
	} else {
        echo 'У вас нет доступа к админ панеле :(';
    }
    ?>
</body>
</html>