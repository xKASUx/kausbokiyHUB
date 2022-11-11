<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$isps1322 = getById("isps1322", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Добавить новй предмет</legend>
						<input name="cat" type="hidden" value="isps1322">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>АйДи</label>
							<input class="form-control" type="text" name="id" value="<?=$isps1322['id']?>" /><br>
							
							<label>День недели</label>
							<input class="form-control" type="text" name="dayofweek" value="<?=$isps1322['dayofweek']?>" /><br>
							
							<label>Предмет</label>
							<input class="form-control" type="text" name="subject" value="<?=$isps1322['subject']?>" /><br>
							
							<label>Преподаватель</label>
							<input class="form-control" type="text" name="teacher" value="<?=$isps1322['teacher']?>" /><br>
							
							<label>Кабинет</label>
							<input class="form-control" type="text" name="office" value="<?=$isps1322['office']?>" /><br>
							
							<label>Время</label>
							<input class="form-control" type="text" name="time" value="<?=$isps1322['time']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				