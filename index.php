<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>KausBokiy Team</title>
</head>
<body>
    <?php include ('./header.php'); ?>
    
    <main>
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item" style="background: #000;">
              <img src="./img/kc.jpg" alt="Каус" width="100%" height="400px" style="opacity: 0.6;">
              <div class="container">
                <div class="carousel-caption active">
                   <h1>Побеждай.</h1>
                   <p>А это телеграмм Кирилла.</p>
                   <p><a class="btn btn-lg btn-primary" href="https://t.me/yalisoff">Не писать</a></p>
                </div>
              </div>
            </div>
            <div class="carousel-item active" style="background: #000;">
              <img src="./img/ip.jpg" alt="127.0.0.1" width="100%" height="400px" style="opacity: 0.6;">
              <div class="container">
                <div class="carousel-caption">
                  <h1>Пробуй.</h1>
                  <p>Этот текст мы придумали за 2 секунды.</p>
                  <p><a class="btn btn-lg btn-primary" href="http://m.24-ip.ru/">m.24-ip.ru</a></p>
                </div>
              </div>
            </div>
            <div class="carousel-item" style="background: #000;">
              <img src="./img/ac.jpg" alt="Бокий" width="100%" height="400px" style="opacity: 0.6;">
              <div class="container">
                <div class="carousel-caption active">
                  <h1>Влавствуй.</h1>
                  <p>Это телеграмм Андрея.</p>
                  <p><a class="btn btn-lg btn-primary" href="https://t.me/kausandrey">Не писать</a></p>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      
      
        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->
      
        <div class="container marketing mt-5">
          <div class="row featurette align-items-center">
            <div class="col-md-7">
              <h2 class="featurette-heading fw-normal lh-1">Каус Андрей Александрович <span class="text-muted">Front-End Developer</span></h2>
              <p class="lead">Тайм-менеджмент спасет нас от неминуемой гибели. Четкое расписание - это наш конек. Не уверен, что оно верное... Но попробовать стоит!<br><br>Кирилл, пойдем поедим пельменей?</p>
            </div>
            <div class="col-md-5">
                <img src="./img/kaus.jpg" class="shadow mb-4 rounded imgme" alt="Каус">
            </div>
          </div>

          <hr class="featurette-divider">
      
          <div class="row featurette align-items-center">
            <div class="col-md-7 order-md-2">
              <h2 class="featurette-heading fw-normal lh-1">Бокий Кирилл Максимович <span class="text-muted">Back-End Developer</span></h2>
              <p class="lead">Андрей, полностью согласен насчет пельменей.<br><br>О да, карлики любят чужое золото. Иногда меня поражает собственная выдержка не залезть в чужой карман.<br>Самые быстрые и качественные выплаты... но не всегда надежные.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img src="./img/bokiy.jpg" class="shadow mt-4 rounded imgme" alt="Бокий">
            </div>
          </div>
      
        </div>
      </main>
    
    
    <?php include ('./footer.php'); ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>