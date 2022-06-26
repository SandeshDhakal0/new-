<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    
    <div class="container">
        <div class="row mt-5">
            <div class="offset-2 col-8">
                <h4 class="text-center">Login</h4>
                <hr>
                <?php
                    if(isset($_SESSION['error'])){
                        echo "<p class='text-danger'>".$_SESSION['error']."</p>";
                        unset($_SESSION['error']);
                    }
                ?>
                <!--Form Begins -->
                <form class ="form" action="login-process.php" method = "post">
                    <div class="form-group row mb-3">
                        <label for="" class="col-sm-12 col-md-3">Email: </label>
                        <div class="col-sm-12 col-md-9">
                            <input type="email" class="form-control form-control-sm" name="email" required placeholder="Enter your email...">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="" class="col-sm-12 col-md-3">Password: </label>
                        <div class="col-sm-12 col-md-9">
                            <input type="password" class="form-control form-control-sm" name="name" required placeholder="Enter your password...">
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                    <div class="offset-md-3 col-sm-12 col-md-9">
                        <button class="btn btn-sm btn-danger" type="reset">
                            Cancel
                        </button>
                        <button class="btn btn-sm btn-danger" type="submit">
                            Submit
                        </button>
                    </div>
                 </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>