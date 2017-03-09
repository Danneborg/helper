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
