<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <!-- Bootstrap -->
        <link href="/template/css/bootstrap.min.css" rel="stylesheet">  
        <link href="/template/css/style.css" rel="stylesheet">
        <title>Сотрудники</title>
    </head>

    <body>
        <h1></h1>
        <?php foreach ($staffList as $staffItem): ?>
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <input type="text" value="<?php echo $staffItem['surname'] ?>" placeholder="<?php echo $staffItem['surname'] ?>" readonly="">
                        <input type="text" value="<?php echo $staffItem['name'] ?>" readonly="">
                        <input type="text" value="<?php echo $staffItem['lastname'] ?>" readonly="">
                        <input type="text" value="<?php echo $staffItem['tabNumber'] ?>" readonly="">
                        <input type="text" value="<?php echo $staffItem['profession'] ?>" readonly="">
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
</html>
