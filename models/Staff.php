<?php

class Staff {

    public static function getStaffById($id) {
        $tabNum = $id;
        if ($tabNum) {

            $db = Db::getConnection();
            $result = $db->query("SELECT * from Staff WHERE tabNumber= " . $tabNum);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $Co_worker = $result->fetch();
            return $Co_worker;
        }
    }

    public static function addWorker($meta, $instr) {
        $db = Db::getConnection();
        $name = $meta['name'];
        $lastname = $meta['lastname'];
        $surname = $meta['surname'];
        $birthyear = $meta['birthyear'];
        $tabNum = $meta['tabNum'];
        $proff = $meta['proff'];
        $education = $meta['education'];
        $resultStaff = "INSERT INTO `Staff`(`tabNumber` , `surname` , `name` , `lastname` , `profession` , `education` , `birthyear`) "
                . "VALUES ('$tabNum' , '$surname' , '$name' , '$lastname' , '$proff' , '$education' , '$birthyear' )";
        $db->query($resultStaff);
        if (count($instr) > 1) {
            foreach ($instr as $val => $key) {
                $resultStaffInstr = "INSERT INTO `StaffInstr`(`id` , `tabNum` , `instrNum`) VALUES ( NULL , $tabNum , '$key')";       
                $db->query($resultStaffInstr);
            }
        
        } elseif (count($instr) == 1) {
            $resultStaffInstr = "INSERT INTO `StaffInstr`(`id` , `tabNum` , `instrNum` ) VALUES (NULL, $tabNum , '$instr')"; 
            $db->query($resultStaffInstr);
        }
    }

    public static function getAllStaff() {

        $db = Db::getConnection();

        $staffList = array();

        $result = $db->query("SELECT tabNumber ,surname ,name ,lastname ,profession "
                . "FROM Staff "
                . "ORDER BY tabNumber DESC ");

        $i = 0;
        while ($row = $result->fetch()) {
            $staffList[$i]['tabNumber'] = $row["tabNumber"];
            $staffList[$i]['surname'] = $row["surname"];
            $staffList[$i]['name'] = $row["name"];
            $staffList[$i]['lastname'] = $row["lastname"];
            $staffList[$i]['profession'] = $row["profession"];
            $i++;
        }
        return $staffList;
    }

}
