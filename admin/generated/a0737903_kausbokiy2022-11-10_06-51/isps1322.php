<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-isps1322.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Добавить новый предмет</a>

				<h1>Расписание</h1>
				<p>В таблице <?php echo counting("isps1322", "id");?> предметов.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>АйДи</th>
			<th>День недели</th>
			<th>Предмет</th>
			<th>Преподаватель</th>
			<th>Кабинет</th>
			<th>Время</th>

				<th class="not">Редактировать</th>
				<th class="not">Удалить</th>
				</tr>
				</thead>

				<?php
				$isps1322 = getAll("isps1322");
				if($isps1322) foreach ($isps1322 as $isps1322s):
					?>
					<tr>
		<td><?php echo $isps1322s['id']?></td>
		<td><?php echo $isps1322s['dayofweek']?></td>
		<td><?php echo $isps1322s['subject']?></td>
		<td><?php echo $isps1322s['teacher']?></td>
		<td><?php echo $isps1322s['office']?></td>
		<td><?php echo $isps1322s['time']?></td>


						<td><a href="edit-isps1322.php?act=edit&id=<?php echo $isps1322s['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $isps1322s['id']?>&cat=isps1322" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				