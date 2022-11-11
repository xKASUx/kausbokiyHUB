<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-users.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Добавить нового пользователя</a>

				<h1>Таблица Users</h1>
				<p>Здесь <?php echo counting("users", "id");?> пользователей.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>АйДи</th>
			<th>Email</th>
			<th>Пароль</th>
			<th>Имя</th>
			<th>Фамилия</th>
			<th>Админка</th>
			<th>Дата регистрации</th>

				<th class="not">Редактировать</th>
				<th class="not">Удалить</th>
				</tr>
				</thead>

				<?php
				$users = getAll("users");
				if($users) foreach ($users as $userss):
					?>
					<tr>
		<td><?php echo $userss['id']?></td>
		<td><?php echo $userss['email']?></td>
		<td><?php echo $userss['pass']?></td>
		<td><?php echo $userss['name']?></td>
		<td><?php echo $userss['surname']?></td>
		<td><?php echo $userss['admin']?></td>
		<td><?php echo $userss['date_reg']?></td>


						<td><a href="edit-users.php?act=edit&id=<?php echo $userss['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $userss['id']?>&cat=users" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				