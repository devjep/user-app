<?php
    include('../../class/User.php');
    $user = new User(); 
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
        $user->create($firstname,$lastname,$email,$image);
         header("Location: index.php");
    }


 
    
?>



