<?php

include_once ROOT . '/models/Instruction.php';
include_once ROOT . '/models/Staff.php';

class WorkerController {

    public function actionIndex() {
        echo 'WorkerController actionIndex';
        return true;
    }

    public function actionAdd() {
        $staffMeta = array();
        $staffMeta["name"] = array_shift($_POST);
        $staffMeta["lastname"] = array_shift($_POST);
        $staffMeta["surname"] = array_shift($_POST);
        $staffMeta["birthyear"] = array_shift($_POST);
        $staffMeta["tabNum"] = array_shift($_POST);
        $staffMeta["proff"] = array_shift($_POST);
        $staffMeta["education"] = array_shift($_POST);
        $instr = array();
        if (count($_POST) > 1) {
            foreach ($_POST as $key => $NumInstr) {
                $instr[] = $NumInstr;
            }
        } else {
            $instr = array_shift($_POST);
        }
        Staff::addWorker($staffMeta, $instr);
//        $this->actionFill();
        return true;
    }

    public function actionList() {
        $staffList = array();
        $staffList = Staff::getAllStaff();

        require_once ROOT . "/views/staff/staffList.php";
        return true;
    }

    public function actionShow() {

        return true;
    }

    public function actionFill() {
        $arr = Instruction::getAllInstructions();
        include_once '/views/staff/add_co_worker.php';
        return true;
    }

}
