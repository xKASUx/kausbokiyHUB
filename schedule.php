<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./css/schedule.css">
    <title>KausBokiy Team</title>
</head>
<body>
    <?php include ('./header.php'); ?>
    <?php include ('./schedulebd.php');?>
<section class="timeline_area section_padding_130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-lg-6">
                <!-- Section Heading-->
                <div class="section_heading text-center mb-3">
                    <h6 style='margin-top:20px;'>Аэрокосмический колледж</h6>
                    <h1>Расписание на неделю</h1>
                    <div class="line"></div>
                </div>
            </div>
        </div>
        <h3 class="text-center">ИСПС-13-22</h3>
        <div class="row">
            <div class="col-12">
                <!-- Timeline Area-->
                <div class="apland-timeline-area">
                    <!-- Single Timeline Content-->
                    <div class="single-timeline-area">
                        <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                            <p>Понедельник</p>
                        </div>
                        <div class="row" style="padding-bottom:20px; border-bottom: 3px solid #ebebeb">
                            <?php foreach ($isps1322m as $data): ?>
                                <div class="col-12 col-md-5 col-lg-3">
                                    <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                        <div class="timeline-text">
                                            <h6><?php echo $data['time'];?></h6>
                                            <h7 class="mb-2"><?php echo $data['subject'];?></h7>
                                            <p class="mb-2"><?php echo $data['office'];?></p>
                                            <p><?php echo $data['teacher'];?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="single-timeline-area">
                        <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                            <p>Вторник</p>
                        </div>
                        <div class="row" style="padding-bottom:20px; border-bottom: 3px solid #ebebeb">
                            <?php foreach ($isps1322t as $data): ?>
                                <div class="col-12 col-md-5 col-lg-3">
                                    <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                        <div class="timeline-text">
                                            <h6><?php echo $data['time'];?></h6>
                                            <h7 class="mb-2"><?php echo $data['subject'];?></h7>
                                            <p class="mb-2"><?php echo $data['office'];?></p>
                                            <p><?php echo $data['teacher'];?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="single-timeline-area">
                        <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                            <p>Среда</p>
                        </div>
                        <div class="row" style="padding-bottom:20px; border-bottom: 3px solid #ebebeb">
                            <?php foreach ($isps1322w as $data): ?>
                                <div class="col-12 col-md-5 col-lg-3">
                                    <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                        <div class="timeline-text">
                                            <h6><?php echo $data['time'];?></h6>
                                            <h7 class="mb-2"><?php echo $data['subject'];?></h7>
                                            <p class="mb-2"><?php echo $data['office'];?></p>
                                            <p><?php echo $data['teacher'];?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="single-timeline-area">
                        <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                            <p>Четверг</p>
                        </div>
                        <div class="row" style="padding-bottom:20px; border-bottom: 3px solid #ebebeb">
                            <?php foreach ($isps1322th as $data): ?>
                                <div class="col-12 col-md-5 col-lg-3">
                                    <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                        <div class="timeline-text">
                                            <h6><?php echo $data['time'];?></h6>
                                            <h7 class="mb-2"><?php echo $data['subject'];?></h7>
                                            <p class="mb-2"><?php echo $data['office'];?></p>
                                            <p><?php echo $data['teacher'];?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="single-timeline-area">
                        <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                            <p>Пятница</p>
                        </div>
                        <div class="row" style="padding-bottom:20px; border-bottom: 3px solid #ebebeb">
                            <?php foreach ($isps1322f as $data): ?>
                                <div class="col-12 col-md-5 col-lg-3">
                                    <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                        <div class="timeline-text">
                                            <h6><?php echo $data['time'];?></h6>
                                            <h7 class="mb-2"><?php echo $data['subject'];?></h7>
                                            <p class="mb-2"><?php echo $data['office'];?></p>
                                            <p><?php echo $data['teacher'];?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="single-timeline-area">
                        <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                            <p>Суббота</p>
                        </div>
                        <div class="row">
                            <?php foreach ($isps1322s as $data): ?>
                                <div class="col-12 col-md-5 col-lg-3">
                                    <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                        <div class="timeline-text">
                                            <h6><?php echo $data['time'];?></h6>
                                            <h7 class="mb-2"><?php echo $data['subject'];?></h7>
                                            <p class="mb-2"><?php echo $data['office'];?></p>
                                            <p><?php echo $data['teacher'];?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
    <?php include ('./footer.php'); ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>