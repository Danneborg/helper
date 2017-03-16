<?php

class WorkerController {

    public function actionIndex() {
        echo 'WorkerController actionIndex';
        return true;
    }
    public function actionShow() {
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';
        return true;
    }
    public function actionFillview() {
        
    }
}
