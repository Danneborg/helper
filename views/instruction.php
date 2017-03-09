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

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h1>Добавление и редактирование инструкции</h1>
                </div>
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>
                        <form class="cf" method="post" action="instruction.php" enctype="multipart/form-data">
                            <div>
                                <input type="numberFind" id="input-name" placeholder="Номер">
                                <input type="submit" value="Найти" id="input-submit">
                            </div>
                            <div>
                                <input type="number" id="input-name" placeholder="Номер">
                                <input type="name" id="input-email" placeholder="Название">
                                <input type="dateExpire" id="input-subject" placeholder="Дата конца">
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
</html>