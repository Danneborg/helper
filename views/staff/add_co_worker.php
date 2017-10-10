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
        <title>Добавление сотрудника</title>
    </head>
    <body>
        <header class="row col-lg-4 col-lg-offset-4">
            <h1 id="h1add">Добавление нового сотрудника</h1>
        </header>
        <div class="row col-lg-12 col-lg-offset-0">  
            <div class="login-block col-lg-2 col-lg-offset-0">
                <form method="post" action="/staff/prepare" id = "add">
                    <input type="text" name = "lastname" placeholder="Фамилия" required />
                    <input type="text" name = "name" placeholder="Имя" required />
                    <input type="text"  name = "surname" placeholder="Отчество" required />
                    <input type="text"  name = "birthyear" placeholder="Год рождения" required/>
                    <input type="text"  name = "tabNum" placeholder="Табельный номер, пять цифр" required pattern="[0-9]{5}"/>
                    <input type="text"  name = "proff" placeholder="Профессия" required />
                    <input type="text"  name = "education" placeholder="Образование" required /> 
                    <input type="submit" value="Добавить"   />
                </form>  
            </div>
            <!--!!!!!!!!!!!!!!!!!!Первый стоблец!!!!!!!!!!!!!!!!!!!!!-->
            <div class="login-block col-lg-2 col-lg-offset-1">
                <?php for ($i = 0; $i < count($arr) / 3; $i++) { ?>
                    <div class="margins">
                        <font size = 2>
                        <input type="checkbox" class="checkbox" 
                               id="<?php echo $i ?>" 
                               name ="<?php echo $arr[$i]['number'] ?>" 
                               value ="<?php echo $arr[$i]['number'] ?>" 
                               form="add"/>
                        <label for="<?php echo $i ?>"><?php echo $arr[$i]['number'] . " " . $arr[$i]['name'] ?></label>
                        </font>
                    </div>
                <?php } ?>
            </div>
            <!--!!!!!!!!!!!!!!!!!!Второй стоблец!!!!!!!!!!!!!!!!!!!!!-->
            <div class="login-block col-lg-2 col-lg-offset-1">
                <font size = 2>
                <?php for ($i = (count($arr) / 3) + 1; $i < count($arr) - (count($arr) / 3); $i++) { ?>
                    <div class="margins">
                        <input type="checkbox" class="checkbox" 
                               id="<?php echo $i ?>" 
                               name ="<?php echo $arr[$i]['number'] ?>" 
                               value ="<?php echo $arr[$i]['number'] ?>" 
                               form="add" />
                        <label for="<?php echo $i ?>"><?php echo $arr[$i]['number'] . " " . $arr[$i]['name'] ?></label>
                        <!--<input type="text" name="<?php echo $arr[$i]['number']; ?>" form="add" />-->
                    </div>
                <?php } ?>
                </font>
            </div>
            <!--!!!!!!!!!!!!!!!!!!Третий стоблец!!!!!!!!!!!!!!!!!!!!!-->
            <div class="login-block col-lg-2 col-lg-offset-1">
                <font size = 2>
                <?php for ($i = (count($arr) - (count($arr) / 3)) + 1; $i < count($arr); $i++) { ?>
                    <div class="margins">
                        <input type="checkbox" class="checkbox" 
                               id="<?php echo $i ?>" 
                               name ="<?php echo $arr[$i]['number'] ?>" 
                               value ="<?php echo $arr[$i]['number'] ?>" 
                               form="add" />
                        <label for="<?php echo $i ?>"><?php echo $arr[$i]['number'] . " " . $arr[$i]['name'] ?></label>
                        <!--<input type="text" name="<?php echo $arr[$i]['number']; ?>" form="add" />-->
                    </div>
                <?php } ?>
                </font>
            </div>
        </div>
        <div class="navbar-fixed-bottom row-fluid col-lg-6 col-lg-offset-2">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-default" href="/startpage">На главную</a>
                </div>
            </div>
        </div>
        <script src="/template/js/bootstrap.js"></script>
    </body>
</html>