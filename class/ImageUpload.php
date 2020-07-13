<?php

class Image{
    public function uploadImage($image){
        $target_dir = "../../assests/img/upload/";
        $target_file = $target_dir . basename($image);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            return true;
        }    
        return false;

    }
}


?>