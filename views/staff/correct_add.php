<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap -->
        <link href="/template/css/bootstrap.min.css" rel="stylesheet">  
        <link href="/template/css/startpageStyle.css" rel="stylesheet">
        <title>Helper v0.0</title>

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-3">
                    <h1>Работник успешно добавлен</h1>
                </div>
                <div class="col-lg-10 col-lg-offset-3 row-bottom">
                    <h2>
                        <?php echo $meta['lastname'] . ' ' . $meta['name'] . ' '; ?>успешно добавлен в базу данных
                    </h2>
                </div>      
            </div>
            <div class="row">
                <div class="col-lg-10 col-lg-offset-3 row-bottom">
                    <a class="btn btn-default" href="/startpage">На главную</a>
                </div>
            </div>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="/template/style/js/bootstrap.min.js"></script>
    </body>
</html>
