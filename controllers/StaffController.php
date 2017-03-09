<?php

include_once ROOT . '/models/Staff.php';

class StaffController {

    public function actionIndex() {

        $staffList = array();
        $staffList = Staff::getAllStaff();

        require_once ROOT . "/views/staff/staffList.php";
        return true;
    }

    public function actionView($id) {

        if ($id) {
            $staff = Staff::getStaffById($id);
            echo '<pre>';
            print_r($staff);
            echo '</pre>';
        }
        return true;
    }

}
