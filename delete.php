<?php
     session_start();
     include('class/User.php');
     $user = new User(); 

     $id =  $_REQUEST['id'];
     $data = $user->delete($id); 

     header("Location: index.php");
     $_SESSION['status'] = 'success';
     $_SESSION['message'] = 'Deleted Successfully.';
     
?>