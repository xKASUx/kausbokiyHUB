<?php
		include("includes/connect.php");

		$cat = $_POST['cat'];
		$cat_get = $_GET['cat'];
		$act = $_POST['act'];
		$act_get = $_GET['act'];
		$id = $_POST['id'];
		$id_get = $_GET['id'];

		
				if($cat == "isps1322" || $cat_get == "isps1322") {
					$dayofweek = addslashes(htmlentities($_POST["dayofweek"], ENT_QUOTES));
$subject = addslashes(htmlentities($_POST["subject"], ENT_QUOTES));
$teacher = addslashes(htmlentities($_POST["teacher"], ENT_QUOTES));
$office = addslashes(htmlentities($_POST["office"], ENT_QUOTES));
$time = addslashes(htmlentities($_POST["time"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `isps1322` (  `dayofweek` , `subject` , `teacher` , `office` , `time` ) VALUES ( '".$dayofweek."' , '".$subject."' , '".$teacher."' , '".$office."' , '".$time."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `isps1322` SET  `dayofweek` =  '".$dayofweek."' , `subject` =  '".$subject."' , `teacher` =  '".$teacher."' , `office` =  '".$office."' , `time` =  '".$time."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `isps1322` WHERE id = '".$id_get."' ");
					}
					header("location:"."isps1322.php");
				}
				
				if($cat == "users" || $cat_get == "users") {
					$email = addslashes(htmlentities($_POST["email"], ENT_QUOTES));
$pass = addslashes(htmlentities($_POST["pass"], ENT_QUOTES));
$name = addslashes(htmlentities($_POST["name"], ENT_QUOTES));
$surname = addslashes(htmlentities($_POST["surname"], ENT_QUOTES));
$admin = addslashes(htmlentities($_POST["admin"], ENT_QUOTES));
$date_reg = addslashes(htmlentities($_POST["date_reg"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `users` (  `email` , `pass` , `name` , `surname` , `admin` , `date_reg` ) VALUES ( '".$email."' , '".$pass."' , '".$name."' , '".$surname."' , '".$admin."' , '".$date_reg."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `users` SET  `email` =  '".$email."' , `pass` =  '".$pass."' , `name` =  '".$name."' , `surname` =  '".$surname."' , `admin` =  '".$admin."' , `date_reg` =  '".$date_reg."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `users` WHERE id = '".$id_get."' ");
					}
					header("location:"."users.php");
				}
				?>