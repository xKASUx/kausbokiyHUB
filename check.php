<?php 

$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING); // Удаляет все лишнее и записываем значение в переменную //$login
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$surname = filter_var(trim($_POST['surname']), FILTER_SANITIZE_STRING); 
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING); 
$date_reg = date('d-m-Y');

if(mb_strlen($email) < 3 || mb_strlen($email) > 90){
	echo "Недопустимая почта";
	exit();
}
else if(mb_strlen($name) < 3){
	echo "Недопустимая длина имени.";
	exit();
} // Проверяем длину имени 

$mysql = new mysqli('localhost', 'a0737903_kausbokiy', 'Gruppa240304', 'a0737903_kausbokiy');

$result1 = $mysql->query("SELECT * FROM `users` WHERE `email` = '$email'");
$user1 = $result1->fetch_assoc(); // Конвертируем в массив
if(!empty($user1)){
	echo "Данная почта уже используется!";
	exit();
}

$mysql->query("INSERT INTO `users` (`email`, `name`, `surname`, `pass`, `date_reg`)
	VALUES('$email', '$name', '$surname', '$pass', '$date_reg')");
$mysql->close();

header("Location: auth.php");

?>