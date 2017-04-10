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

        <link href="/template/css/bootstrap.min.css" rel="stylesheet">  
        <link href="/template/css/workerlist.css" rel="stylesheet">
        <title>Сотрудники</title>
        <script type="text/javascript" src="/template/js/showOrHide.js"></script>
    </head>
    <body>
        <div class="row col-lg-3 col-lg-offset-1">
            <?php for ($i = 0; $i < 10; $i++) { ?>
            <input type = 'checkbox' id = 'bloggood<?php echo $i?>;' onchange = 'showOrHide("bloggood<?php echo $i?>", "cat<?php echo $i?>");'/>Показать содержимое категории <?php echo $i?>
            <br />
            <div id = 'cat<?php echo $i?>' style = 'display: none;'><input type="text"></div>
            <?php } ?>
        </div>
        <div class="row col-lg-3 col-lg-offset-1">
            <input type="checkbox" class="checkbox" id="bloggood2" onchange = 'showOrHide("bloggood2", "cat2");'/>
            <label for="checkbox"></label>
            <div id = 'cat2' style = 'display: none;'><input type="text"></div>
        </div>
    </body>