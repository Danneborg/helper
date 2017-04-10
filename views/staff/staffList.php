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
        <div class="row col-lg-10 col-lg-offset-1">
            <?php foreach ($staffList as $staffItem): ?>
                <div class="row">
                    <a class="btn btn-success" href="/staff/<?php echo $staffItem['tabNumber']; ?>"><?php echo $staffItem['lastname'] . "." . $staffItem['name'][0] . "." . $staffItem['surname'] . "."; ?></a>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="navbar-fixed-bottom row-fluid col-lg-6 col-lg-offset-2">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-default" href="/startpage">На главную</a>
                </div>
            </div>
        </div>
    </body>
</html>
