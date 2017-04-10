<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Инструкции</title>
        <!-- Bootstrap -->
        <link href="/template/css/bootstrap.min.css" rel="stylesheet">
        <link href="/template/css/style.css" rel="stylesheet">
        <link href="/template/css/startpageStyle.css" rel="stylesheet">

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h1>Добавление и редактирование инструкции</h1>
                </div>
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>
                        <form class="cf" method="post" action="/instructions/find" enctype="multipart/form-data">
                            <div>
                                <input type="text" name="findInstr" placeholder="Номер">
                                <input type="submit" value="Найти" id="input-submit">
                            </div>
                        </form>
                        <form class="cf" method="post" action="/instructions/addinstruction" enctype="multipart/form-data">
                            <div>
                                <input type="text" name="number" placeholder="Номер">
                                <input type="text" name="nameInstr" placeholder="Название">
                                <input type="text" name="dateExpire" placeholder="Дата конца">
                                <input name="filename" type="file" id="input-message" placeholder="Имя файла">
                            </div>
                            <input type="submit" value="Добавить" id="input-submit">
                        </form>
                    </h2>
                </div>
            </div>
        </div>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="/template/js/bootstrap.min.js"></script>
    </body>
    <footer>
        <div class="navbar-fixed-bottom row-fluid col-lg-6 col-lg-offset-2">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-default" href="/startpage">На главную</a>
                </div>
            </div>
        </div>
    </footer>
</html>