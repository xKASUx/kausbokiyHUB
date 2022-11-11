<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-teachers.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Добавить нового работника</a>

				<h1>Работики</h1>
				<p>В таблице <?php echo counting("teachers", "id");?> работников.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>АйДи</th>
			<th>ФИО</th>
			<th>Должность</th>
			<th>С/П</th>
			<th>Дети</th>
			<th>З/П</th>

				<th class="not">Редактировать</th>
				<th class="not">Удалить</th>
				</tr>
				</thead>

				<?php
				$teachers = getAll("teachers");
				if($teachers) foreach ($teachers as $teacherss):
					?>
					<tr>
		<td><?php echo $teacherss['id']?></td>
		<td><?php echo $teacherss['fio']?></td>
		<td><?php echo $teacherss['role']?></td>
		<td><?php echo $teacherss['SP']?></td>
		<td><?php echo $teacherss['childs']?></td>
		<td><?php echo $teacherss['salary']?></td>


						<td><a href="edit-teachers.php?act=edit&id=<?php echo $teacherss['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $teacherss['id']?>&cat=teachers" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				