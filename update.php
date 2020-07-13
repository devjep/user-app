<?php
    session_start();
    include('class/User.php');
    include('class/ImageUpload.php');
    $user = new User(); 
    $imageUpload = new Image(); 

    $id =  $_REQUEST['id'];
    $firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
    $email = $_REQUEST['email'];    
    $image = $_FILES["fileToUpload"]["name"];

    if($image == '')
    {
        $image = $_REQUEST['oldImage'];
        $user->update($id,$firstname,$lastname,$email,$image);
        header("Location: index.php");
        $_SESSION['status'] = 'success';
        $_SESSION['message'] = 'Updated Successfully.';
    }
    else{
        $imageCheck = $imageUpload->uploadImage($image);
        if($imageCheck == true)
        {
            $user->update($id,$firstname,$lastname,$email,$image);
            header("Location: index.php");
            $_SESSION['status'] = 'success';
            $_SESSION['message'] = 'Updated Successfully.';
        }
        else{
            $_SESSION['status'] = 'error';
            $_SESSION['message'] = 'Image Upload Failed.';
            
        }
    }
    
    
?>    