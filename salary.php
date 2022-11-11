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
    <?php include ('./salarybd.php'); ?>
    <div class="row justify-content-center">
        <div class="col-md-6 text-center mb-5 mt-5">
            <h2 class="heading-section">Зарплаты</h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="table-wrap">
                    <table class="table table-bordered table-white table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ФИО</th>
                                <th>Должность</th>
                                <th>С/П</th>
                                <th>Дети</th>
                                <th>З/П</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($salary as $data): ?>
                                    <tr>
                                        <th scope="row"><?php echo $data['id'];?></th>
                                        <td><?php echo $data['fio'];?></td>
                                        <td><?php echo $data['role'];?></td>
                                        <td><?php echo $data['SP'];?></td>
                                        <td><?php echo $data['childs'];?></td>
                                        <td><?php echo $data['salary'];?></td>
                                    </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <?php include ('./footer.php'); ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>