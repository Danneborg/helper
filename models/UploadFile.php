<?php

class UploadFile {

    public static function uploadFiles() {

        if (is_uploaded_file($_FILES["filename"]["tmp_name"])) {
            $uploadfile = ROOT . "/uploads/" . $_FILES['filename']['name'];
            move_uploaded_file($_FILES['filename']['tmp_name'], $uploadfile);
        } else {
            echo("Ошибка загрузки файла");
        }
    }

}
