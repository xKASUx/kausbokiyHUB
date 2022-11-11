<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Профиль</title>
</head>
<body>
    <?php include ('./login.php'); ?>
    <?php include ('./header.php'); ?>

    <?php
        $name =  $_SESSION['name']; 
        $surname = $_SESSION['surname']; 
        $email = $_SESSION['email']; 
        $pass = $_SESSION['pass']; 
        $id = $_SESSION['id']; 
        $admin = $_SESSION['admin']; 
        $date_reg = $_SESSION['date_reg']; 
    ?>
    
    <section class="vh-100" style="background-color: #f4f5f7;">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col col-lg-6 mb-4 mb-lg-0 ">
            <div class="card mb-3" style="border-radius: .5rem;">
              <div class="row g-0">
                <div class="col-md-4 gradient-custom text-center text-dark"
                  style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                  <img src="./img/logo-profile.png"
                    alt="Avatar" class="img-fluid my-5" style="width: 120px;" />
                  <?php echo '<h5>'.$name.' '.$surname.'</h5>'; ?>
                  <?php
	                if (!empty($_SESSION['auth']) and $_SESSION['admin'] == 1) {
		              echo '<p>Администратор</p>';
	                } else {
                        echo '<p>Пользователь</p>';
                    }
                  ?>
                  <i class="far fa-edit mb-5"></i>
                </div>
                <div class="col-md-8">
                  <div class="card-body p-4">
                    <h6>Информация</h6>
                    <hr class="mt-0 mb-4">
                    <div class="row pt-1">
                      <div class="col-6 mb-3">
                        <h6>Email</h6>
                        <?php echo '<p class="text-muted">'.$email.'</p>'; ?>
                      </div>
                      <div class="col-6 mb-3">
                        <h6>Уникальный номер</h6>
                        <?php echo '<p class="text-muted" type="password" id="btn" >'.$id.'</p>'; ?>
                      </div>
                    </div>
                    <h6>Дополнительно</h6>
                    <hr class="mt-0 mb-4">
                    <div class="row pt-1">
                      <div class="col-6 mb-3">
                        <h6>Дата регистрации</h6>
                        <?php echo '<p class="text-muted">'.$date_reg.'</p>'; ?>
                      </div>
                      <div class="col-6 mb-3">
                        <?php echo '<a href="./logout.php" style="text-decoration:none; color:orange;"><h6>Дезертироваться</h6></a>'; ?>
                      </div>
                    </div>
                    <div class="d-flex justify-content-start">
                      <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                      <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                      <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php include ('./footer.php'); ?>
</body>
</html>