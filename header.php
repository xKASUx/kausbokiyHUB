<?php include ('./login.php'); ?>
<header class="p-3 text-bg-dark">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="./index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
              <img src="./img/logo.png" alt="Каус Бокий Тим" height="50px">
            </a>
    
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li><a href="./index.php" class="nav-link px-2 text-white">Главная</a></li>
              <li><a href="/schedule.php" class="nav-link px-2 text-white">Расписание</a></li>
              <li><a href="./salary.php" class="nav-link px-2 text-white">Данные</a></li>
              <li><a href="./about.php" class="nav-link px-2 text-white">О нас</a></li>
              <?php
	            if (!empty($_SESSION['auth']) and $_SESSION['admin'] == 1) {
		              echo '<li><a href="./admin/generated/a0737903_kausbokiy2022-11-10_06-51/home.php" class="nav-link px-2 text-white">Админ Панель</a></li>';
	            } else {
              }
             ?>
            </ul>
    
            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
              <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Найти..." aria-label="Search">
            </form>
            <div class="text-end">
            <?php
	            if (!empty($_SESSION['auth'])) {
		              echo '<a href="./profile.php"><img src="./img/profile.png" alt="Profile" height="45px"></a>';
	            } else {
                  echo '<a href="./auth.php"><button type="button" class="btn btn-outline-light me-2">Вход</button></a><a href="./reg.php"><button type="button" class="btn btn-warning">Регистрация</button></a>';
              }
            ?>
            </div>
          </div>
        </div>
      </header>