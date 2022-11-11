<?php include ('../../../login.php'); ?>
<?php
	if (!empty($_SESSION['auth']) and $_SESSION['admin'] == 1) {
		include "includes/header.php";
		echo '
		<table class="table table-striped">
		<tr>
		<th class="not">Таблицы</th>
		<th class="not">Записи</th>
		</tr>
		
				<tr>
					<td><a href="isps1322.php">Isps1322</a></td>
					<td><?=counting("isps1322", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="teachers.php">Teachers</a></td>
					<td><?=counting("teachers", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="users.php">Users</a></td>
					<td><?=counting("users", "id")?></td>
				</tr>
				</table>
		';
		include "includes/footer.php";
	} else {
        echo 'У вас нет доступа к админ панеле :(';
    }
?>