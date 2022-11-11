<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$users = getById("users", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Добавить нового пользователя</legend>
						<input name="cat" type="hidden" value="users">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Email</label>
							<input class="form-control" type="text" name="email" value="<?=$users['email']?>" /><br>
							
							<label>Пароль</label>
							<input class="form-control" type="text" name="pass" value="<?=$users['pass']?>" /><br>
							
							<label>Имя</label>
							<input class="form-control" type="text" name="name" value="<?=$users['name']?>" /><br>
							
							<label>Фамилия</label>
							<input class="form-control" type="text" name="surname" value="<?=$users['surname']?>" /><br>
							
							<label>Админ</label>
							<input class="form-control" type="text" name="admin" value="<?=$users['admin']?>" /><br>
							
							<label>Дата регистрации</label>
							<input class="form-control" type="text" name="date_reg" value="<?=$users['date_reg']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				