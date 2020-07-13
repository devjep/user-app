<?php
    session_start();
    include('../../class/User.php');
    include('../../class/ImageUpload.php');
    $user = new User(); 
    $imageUpload = new Image(); 
    $firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
    $email = $_REQUEST['email'];
    $image = $_FILES["fileToUpload"]["name"];
    $checkEmail = $user->checkUserExist($email); 
    if($checkEmail == true)
    {
        echo 'Email Already Exist!';
    }
    else{
        $imageCheck = $imageUpload->uploadImage($image);
        if($imageCheck == true)
        {
            $user->create($firstname,$lastname,$email,$image);
            header("Location: ../../index.php");
            $_SESSION['status'] = 'success';
	        $_SESSION['message'] = 'Registered Successfully.';
        }
        else{
            $_SESSION['status'] = 'error';
	        $_SESSION['message'] = 'Image Upload Failed.';
           
        }
        
    }
 
    
?>



