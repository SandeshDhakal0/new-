<?php
     session_start();
     require_once "conn.php";
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title> 
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h4 class="text-ceneter">Table Design</h4>
            </div>
        </div>
    </div>
    <hr>
    <?php
        //
        if(isset($_SESSION['error'])){  
            echo "<p class='text-danger'>".$_SESSION['error']."</p>";
        }
    ?>

    <div class="row">
        <div class="col-12">
            <table class="table table-bordered table-sm">
                <thead class="table-dark">
                    <th>S.N.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php
                   $sql = "SELECT * FROM users ORDER BY id DESC";
                   $query = mysqli_query($conn, $sql);

                   if(mysqli_num_rows($query) > 0){
                    //data
                    $user_lists = mysqli_fetch_all($query, MYSQLI_ASSOC);
                   }

                    foreach($user_lists as $i => $value){
                        ?>
                    <tr>
                        <td><?php echo $i+1;?></td>
                        <td><?php echo $value['name'];?></td>
                        <td><?php echo $value['email'];?></td>
                        <td><?php echo $value['gender'];?></td>
                        <td><?php echo $value['address'];?></td>
                        <td>
                            <a href="delete.php?id=<?php echo $value['id']?>">
                                Delete
                            </a>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="edit.php?id=<?php echo $value['id']?>">
                                Edit
                            </a>
                        </td>
                    </tr>
                    <?php 
                    }
                    ?>
                </tbody>
            </table>
        </div>
        </div>

</body>
</html>