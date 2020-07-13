<?php 
    include('include/template/header.php');
    include('class/User.php');
    $id =  $_REQUEST['id'];
    $user = new User(); 
    $data = $user->getSingleUser($id); 
    
?>
<div class="container">
    <hr>
    <h1 class="text-success text-center">Update User </h1>
    <hr>
    
    <div class="card mx-auto p-2 border shadow">
        <div class="card-body">
            <form method="POST" action="update.php" enctype="multipart/form-data">
                <input type="hidden" name="oldImage" value="<?php echo $data['image']?>">
                <input type="hidden" name="id" value="<?php echo $data['id']?>">

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text">First Name</span>
                    </div>
                    <input type="text" name="firstname" value="<?php echo $data['firstname']?>" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text">Last Name</span>
                    </div>
                    <input type="text" name="lastname" value="<?php echo $data['lastname']?>"  class="form-control">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text">Email</span>
                    </div>
                    <input type="email" name="email" value="<?php echo $data['email']?>" class="form-control" >
                </div>
                <div class="input-group mb-3">
                    <div>
                        <input type="file" name="fileToUpload" id="fileToUpload" onchange="loadFile(event)" accept="image/*"  >
                    </div>  
               </div>
               <div>
                 <img src="assests/img/upload/<?php echo $data['image']?>" id="output" width="100">
               </div> 

               <input type="submit" class="btn btn-success btn-block mt-2" value="Update">
              
            </form>
        </div>
    </div>
</div>







<?php include('include/template/footer.php') ?>