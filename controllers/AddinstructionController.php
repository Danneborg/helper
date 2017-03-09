<?php

class AddinstructionController {

    public function actionIndex() {
        $number = $_POST['number'];
        $name = $_POST['nameInstr'];
        $date = $_POST['dateExpire'];
        if (!empty($_POST['filename'])) {
            $file = $_POST['filename'];
        } else {
            $file = "Имя файла не указано!";
        }

        echo $number . " " . $name . " " . $date . " " . $file;
        return true;
    }

}
