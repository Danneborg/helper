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

    public static function getInstructionById($id) {
        $db = Db::getConnection();
        $tabNum = $id;
        $result = $db->query("SELECT instrNum, skill FROM StaffInstr WHERE tabNum='$tabNum'");
        $instrList = array();
        $i = 0;
        if (!empty($result)) {
            while ($row = $result->fetch()) {
                $instrList[$i]['instrNum'] = $row['instrNum'];
                $instrList[$i]['skill'] = $row['skill'];
                $i++;
            }
            return $instrList;
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
        $error = false;
        $res = $db->query("SELECT `tabNumber` FROM `Staff` WHERE tabNumber = '$tabNum' ");
        $row_cnt = $res->fetch(PDO::FETCH_ASSOC);
        if (!$row_cnt) {
            $resultStaff = "INSERT INTO `Staff`(`tabNumber` , `surname` , `name` , `lastname` , `profession` , `education` , `birthyear`) "
                    . "VALUES ('$tabNum' , '$surname' , '$name' , '$lastname' , '$proff' , '$education' , '$birthyear' )";
            if ($db->query($resultStaff)) {
                
            } else {
                $errors = true;
            };
        } else {
            $errors = true;
        }
        if (count($instr) > 1) {
            foreach ($instr as $key => $val) {
                $resultStaffInstr = "INSERT INTO `StaffInstr` (`tabNum`, `instrNum`, `skill`) VALUES ('$tabNum', '$key', '$val')";
                if ($db->query($resultStaffInstr)) {
                    
                } else {
                    $errors = true;
                };
            }
        } elseif (count($instr) == 1) {
            $resultStaffInstr = "INSERT INTO `StaffInstr`(`tabNum` , `instrNum`) VALUES (`$tabNum`, '$instr')";
            if ($db->query($resultStaffInstr)) {
                
            } else {
                $errors = true;
            };
        }
        return $error;
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
