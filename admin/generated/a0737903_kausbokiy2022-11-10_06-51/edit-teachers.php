<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$teachers = getById("teachers", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Добавить нового преподавателя</legend>
						<input name="cat" type="hidden" value="teachers">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>ФИО</label>
							<input class="form-control" type="text" name="fio" value="<?=$teachers['fio']?>" /><br>
							
							<label>Должность</label>
							<input class="form-control" type="text" name="role" value="<?=$teachers['role']?>" /><br>
							
							<label>С/П</label>
							<input class="form-control" type="text" name="SP" value="<?=$teachers['SP']?>" /><br>
							
							<label>Дети</label>
							<input class="form-control" type="text" name="childs" value="<?=$teachers['childs']?>" /><br>
							
							<label>З/П</label>
							<input class="form-control" type="text" name="salary" value="<?=$teachers['salary']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				