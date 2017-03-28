<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->   
        <!-- Bootstrap -->
        <link href="/template/css/style.css" rel="stylesheet">  
        <link href="/template/css/bootstrap.min.css" rel="stylesheet">  
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <title>Сотрудники</title>
    </head>

    <body>
        <div class="logo"></div>
        <h1 class="bg-success">Редактирование <?php echo $staff['surname'] . ' ' . $staff['name'] ?></h1>
        <div class="row col-lg-12">

            <div class="col-lg-4 col-lg-offset-1">
                <div class="login-block">
                    <form method="post" action="/staff/update" id = "update" >
                        <input type="text" value= "<?php echo $staff['surname'] ?>" placeholder="" id="surname" />
                        <input type="text" value="<?php echo $staff['name'] ?>" id="username" />
                        <input type="text" value="<?php echo $staff['lastname'] ?>" id="lastname" />
                        <input type="text" value="<?php echo $staff['tabNumber'] ?>" id="tabNum" />
                        <input type="text" value="<?php echo $staff['profession'] ?>" id="proff" />
                        <input type="submit" value="Обновить" />
                    </form>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="login-block">
                    <?php for ($i = 0; $i < count($instrList); $i++) { ?>
                    <input type="text" value= "<?php echo $instrList[$i]['instrNum'] ?>" readonly/>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="login-block">
                    <?php for ($i = 0; $i < count($instrList); $i++) { ?>
                        <input type="text" value= "<?php echo $instrList[$i]['skill'] ?>" name="<?php echo $instrList[$i]['instrNum']; ?>" form="update" />
                    <?php } ?>
                </div>
            </div>
        </div>
</html>
<!--Разобраться с дублированием информации в базах данных,допилить обновление данных сотрудника и добавление к нему новых инструкций--!>