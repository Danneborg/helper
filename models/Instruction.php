<?php

class Instruction {

    public static function addInstruction($params) {
        $data = $params;
        if ($data) {
            $db = Db::getConnection();
            $result = "INSERT INTO `Instructions`(`number`, `name`, `dateexpire`, `filename`) VALUES ('$data[0]','$data[1]','$data[2]','$data[3]')";
            $db->query($result);
        }
    }

}
