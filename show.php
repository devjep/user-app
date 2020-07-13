<?php 
    include('include/template/header.php');
    include('class/User.php');
    $id =  $_REQUEST['id'];
    $user = new User(); 
    $data = $user->getSingleUser($id); 
    
?>


<div class="container">
    <hr>
    <h1 class="text-success text-center">USER PROFILE</h1>
    <hr>
    <div class="card">
        <div class="card-body">
            <img src="assests/img/upload/<?php echo $data['image']?>" class="rounded" width="100"><br>    
            <label for="">Name: <?php echo $data['firstname'].' '; echo $data['lastname'];?></label><br>
            <label for="">Email: <?php echo $data['email'];?></label>
        </div>
    </div>
</div>


<?php include('include/template/footer.php') ?>