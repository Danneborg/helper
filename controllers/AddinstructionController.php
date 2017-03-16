<?php

include_once ROOT . '/models/Instruction.php';
include_once ROOT . '/models/UploadFile.php';

class AddinstructionController {

    public function actionIndex() {

        $number = $_POST['number'];
        $name = $_POST['nameInstr'];
        $date = $_POST['dateExpire'];
        $array = array();
        if (!empty($_FILES['filename']['name'])) {
            $file = $_FILES['filename']['name'];
            $array[0] = $number;
            $array[1] = $name;
            $array[2] = $date;
            $array[3] = $file;
            UploadFile::uploadFiles();
            Instruction::addInstruction($array);
        } else {
            $file = "Не указано имя!";
            $array[0] = $number;
            $array[1] = $name;
            $array[2] = $date;
            $array[3] = $file;
            Instruction::addInstruction($array);
        }
        include_once '/views/instruction.php';
        return true;
    }

}
