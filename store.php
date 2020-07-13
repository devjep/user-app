<?php include('include/template/header.php');?>
<div class="container">
    <hr>
    <h1 class="text-success text-center">Create User </h1>
    <hr>
    <div class="card mx-auto p-2 border shadow">
        <div class="card-body">
            <form method="POST" action="Controller/UserController/create.php" enctype="multipart/form-data">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text">First Name</span>
                    </div>
                    <input type="text" name="firstname" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text">Last Name</span>
                    </div>
                    <input type="text" name="lastname" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text">Email</span>
                    </div>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <div>
                        <input type="file" name="fileToUpload" id="fileToUpload" onchange="loadFile(event)" accept="image/*"  >
                    </div>  
               </div>
               <div>
                 <img id="output" width="100">
               </div> 

               <input type="submit" class="btn btn-success btn-block mt-2" value="Register">
              
            </form>
        </div>
    </div>
</div>



<?php include('include/template/footer.php') ?>