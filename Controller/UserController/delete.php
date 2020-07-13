<?php
     session_start();
     include('../../class/User.php');
     $id =  $_REQUEST['id'];
     $user = new User(); 
     $data = $user->delete($id); 
     header("Location: ../../index.php");
     $_SESSION['status'] = 'success';
	$_SESSION['message'] = 'Deleted Successfully.';
?>