<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->   
        <!-- Bootstrap --> 
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href="/template/css/workerlist.css" rel="stylesheet">
        <link href="/template/css/bootstrap.min.css" rel="stylesheet">  
        <title>Окончательная проверка</title>
    </head>

    <body>
        <div class="logo"></div>
        <h1 class="bg-success text-center">Добавление <?php echo $staffMeta['surname'] . ' ' . $staffMeta['name'] ?></h1>
        <div class="row">
            <div class="col-lg-4 col-lg-offset-0">
                <div class="login-block">
                    <form method="post" action="/staff/update" id = "update" >
                        <input type="text" value= "<?php echo $staffMeta['name'] ?>" id="username" />
                        <input type="text" value= "<?php echo $staffMeta['lastname'] ?>" id="lastname" />
                        <input type="text" value= "<?php echo $staffMeta['surname'] ?>" id="surname" />
                        <input type="text" value= "<?php echo $staffMeta['tabNum'] ?>" id="tabNum" />
                        <input type="text" value= "<?php echo $staffMeta['proff'] ?>" id="proff" />
                        <input type="text" value= "<?php echo $staffMeta['education'] ?>" id="proff" />
                        <input type="submit" value="Добавить" />
                    </form>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="login-block">
                    <?php for ($i = 0; $i < count($instr); $i++) { ?>
                        <input type="text" value= "<?php echo $instr[$i]['number'] . " " . $instr[$i]['name']; ?>" readonly/>
                    <?php } ?>
                </div>
            </div>
            <div class="row col-lg-1">
                <div class="login-block">
                    <?php for ($i = 0; $i < count($instr); $i++) { ?>
                        <input type="text" value= "" name="<?php echo $instr[$i]['number'] . " " . $instr[$i]['name']; ?>" form="update" />
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="navbar-fixed-bottom row-fluid col-lg-6 col-lg-offset-2">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-default btn-block" href="/startpage">На главную</a>
                </div>
            </div>
        </div>
    </body>
</html>
