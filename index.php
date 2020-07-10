<?php 
    include('include/template/header.php');
    include('class/User.php');
    $users = new User(); 
    $data = $users->getAllUser(); 
    
?>


<div class="container">
    <hr>
    <h1 class="text-success text-center">PHP CRUD OOP </h1>
    <hr>
    <div><button class="btn btn-primary mb-2">Add User</button></div>
        <table class="table e table-bordered table-striped text-center" id="customerTable">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data as $value): ?>
                    <tr>
                        <td><img src="assests/img/upload/<?php echo $value['image']?>" alt="" width="50"></td>
                        <td><?php echo $value['firstname']?></td>
                        <td><?php echo $value['lastname']?></td>
                        <td><?php echo $value['email']?></td>
                        <td>
                            <a href="show.php?id=<?=$value['id']?>" class="btn btn-info btn-sm">INFO</a>
                            <a href="" class="btn btn-success btn-sm">EDIT</a>
                            <a href="" class="btn btn-danger btn-sm">DELETE</a>
                        </td>
                    </tr>
                   
                <?php endforeach ?>
            </tbody>
        
        </table>
    
</div>


<?php include('include/template/footer.php') ?>