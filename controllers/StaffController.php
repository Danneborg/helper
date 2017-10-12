<?php

include_once ROOT . '/models/Instruction.php';
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
            $instrList = array();
            $instrList = Staff::getInstructionById($id);
        }
        $arr = Instruction::getAllInstructions();
        require_once ROOT . "/views/staff/co_worker.php";
        return true;
    }

    public function actionUpdate() {
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';
        return true;
    }

    public function actionFill() {
        $arr = Instruction::getAllInstructions();
        include_once '/views/staff/add_co_worker.php';
        return true;
    }

    public function actionBox() {
        include_once '/views/checkBox.php';
        return true;
    }

    public function actionPrepare() {
        $staffMeta = $this->splitData();
        $instr = array();
        $i = 0;
        if (count($_POST) > 1) {
            foreach ($_POST as $key) {
                $instr[$i]['number'] = $key;
                $instr[$i]['name'] = Instruction::getInstructionNameByNumber($key);
                $i++;
            }
        } elseif (count($_POST == 1)) {
            $numInstr = array_shift($_POST);
            $instr[0]['number'] = $numInstr;
            $instr[0]['name'] = Instruction::getInstructionNameByNumber($numInstr);
        }
        require_once ROOT . "/views/staff/final_check.php";
        return true;
    }

    public function actionAdd() {
        $meta = $this->splitData();
        $instr = $_POST;
        if (Staff::addWorker($meta, $instr)) {
            require_once ROOT . "/views/staff/warnig_add.php";
        } else {
            require_once ROOT . "/views/staff/correct_add.php";
        }
        return true;
    }

    public function actionList() {
        $staffList = array();
        $staffList = Staff::getAllStaff();

        require_once ROOT . "/views/staff/staffList.php";
        return true;
    }

    private function splitData() {
        $staffMeta = array();
        $staffMeta["lastname"] = array_shift($_POST);
        $staffMeta["name"] = array_shift($_POST);
        $staffMeta["surname"] = array_shift($_POST);
        $staffMeta["birthyear"] = array_shift($_POST);
        $staffMeta["tabNum"] = array_shift($_POST);
        $staffMeta["proff"] = array_shift($_POST);
        $staffMeta["education"] = array_shift($_POST);
        return $staffMeta;
    }

}
