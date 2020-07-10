<?php
     include('../../class/User.php');
     $id =  $_REQUEST['id'];
     $user = new User(); 
     $data = $user->delete($id); 
?>