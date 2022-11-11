<?php

$mysql = new mysqli('localhost', 'a0737903_kausbokiy', 'Gruppa240304', 'a0737903_kausbokiy');

session_start();
	
if (!empty($_POST['pass']) and !empty($_POST['email'])) {
  $email = $_POST['email'];
  $pass = $_POST['pass'];

  $query = "SELECT * FROM users WHERE email='$email' AND pass='$pass'";
  $result = mysqli_query($mysql, $query);
  $user = mysqli_fetch_assoc($result);

  if (!empty($user)) {
    $_SESSION['name'] = $user['name']; 
    $_SESSION['surname'] = $user['surname']; 
    $_SESSION['email'] = $user['email']; 
    $_SESSION['pass'] = $user['pass']; 
    $_SESSION['id'] = $user['id']; 
    $_SESSION['admin'] = $user['admin']; 
    $_SESSION['date_reg'] = $user['date_reg']; 
    $_SESSION['auth'] = true;
    header("Location: index.php");
  } else {
    echo "Неверный логин или пароль!";
  }
}

?>