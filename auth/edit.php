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
                <h4 class="text-center">Register User</h4>
                <hr> 

                <?php
                     require_once "conn.php";
                     if(isset($_GET,$_GET['id']) && !empty($_GET['id'])){
                        $id = (int)$_GET['id'];
                        $sql = "SELECT * FROM users WHERE id = $id";
                        $query = mysqli_query($conn, $sql);
                        if($query){
                            $user_info = mysqli_fetch_assoc($query);
                        } else {
                            //notify
                            header("location: list.php");
                            exit;
                        } else {
                            //
                            header("location: list.php");
                            exit;
                     }
                ?>

                <!--Form Begins -->
                <form class="form" action="update.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="user_id" value='<?php echo $user_info['id']?>'>    
                <div class="form-group row mb-3">
                        <label for="" class="col-sm-12 col-md-3">Name: </label>
                        <div class="col-sm-12 col-md-9">
                            <input type="text" class="form-control form-control-sm" name="name" required placeholder="Enter your full name...">
                        </div>
                    </div>

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
                        <label for="" class="col-sm-12 col-md-3">Gender: </label>
                        <div class="col-sm-12 col-md-9">
                            <label for="male">
                            <input type="radio" name="gender" value="Male" id="male">Male
                            </label>

                            <label for="female">
                            <input type="radio" name="gender" value="Female" id="female">Female
                            </label>

                            <label for="other">
                            <input type="radio" name="gender" value="Other" id="other">Other
                            </label>
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="" class="col-sm-12 col-md-3">Address: </label>
                        <div class="col-sm-12 col-md-9">
                            <select name="address" id="address" class="form-control form-control-sm">
                                <option value="" selected disabled>---Select Any One---</option>
                                <option value="Kathmandu">Kathmandu</option>
                                <option value="Bhaktapur">Bhaktapur</option>
                                <option value="Lalitpur">Lalitpur</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="" class="col-sm-12 col-md-3">Date of Birth: </label> 
                        <div class="col-sm-12 col-md-9">
                            <input type="date" class="form-control form-control-sm" name="dob">
                    </div> 
                </div>

                    <div class="form-group row mb-3">
                        <label for="" class="col-sm-12 col-md-3">Image: </label> 
                        <div class="col-sm-12 col-md-9">
                        <input type="file" name="image" accept="image/*"> 
                    </div> 
                </div>
                    <div class="form-group row mla-3">
                        <label for="" class="col-sm-12 col-md-3">About: </label>
                        <div class="col-sm-12 col-md-9">
                        <textarea name="about" id="about" class="form-control form-control-sm" rows="5"
                        style="resize: none;"></textarea> 
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