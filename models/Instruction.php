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

    public static function getAllInstructions() {
        $db = Db::getConnection();
        $result = $db->query("SELECT `number`, `name` FROM `Instructions` "
                . "WHERE 1 ORDER BY 'number' ASC");
        $i = 0;
        $instrList = array();
        while ($row = $result->fetch()) {
            $instrList[$i]['number'] = $row["number"];
            $instrList[$i]['name'] = $row["name"];
            $i++;
        }
        return $instrList;
    }
    /*
     * Получение инструкции по
     */
    public static function getInstructionNameByNumber($number) {
        $db = Db::getConnection();
        $result = $db->query("SELECT `name` FROM `Instructions` WHERE number = '$number' ");
        $i = 0;
        $nameList = array();
        while ($row = $result->fetch()) {
            $nameList[$i]['name'] = $row["name"];
            $i++;
        }
        $name = $nameList[0]['name'];
        return $name;
    }

}
