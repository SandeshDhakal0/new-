<?php 
require_once "../config/config.php";
require_once "includes/isLoggedIn.php";
require_once "includes/header.php";
?>

    <div id="wrapper">

        <?php require_once "includes/sidebar.php";?>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

               <?php require_once "includes/top-menu.php" ?>

                <div class="container-fluid">

                    <?php flash(); ?>
                    <h1 class="h3 mb-4 text-gray-800">
                        Slider Page
                        <a href="javascript:;" id="slider-add" class="btn btn-sm btn-success float-right">
                            <i clas="fa fa-plus"></i>
                            <span id="showForm">Add Slider</span>
                        </a>
                    </h1>
                    <hr>
                    <div class="row" id="slider_table">
                        <div class="col-12">
                            <table class="table table-sm table-bordered table-hover">
                                <thead class="table-dark">
                                    <th>S.N</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </thead>
                                <tbody id="slider_content">

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row d-none" id="slider_form">
                        <div class="col-12">
                            <form method="post" enctype="multipart/form-data" action="process/slider.php">
                                <div class="form-group row mb-3">
                                    <label for="" class="col-sm-3">Title:</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="Title" required placeholder="Enter Slider title" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="" class="col-sm-3">Status:</label>
                                    <div class="col-sm-9">
                                        <select name="status" id="status" required class="form-control form-control-sm">
                                            <option value="active" >Active</option>
                                            <option value="inactive" >In-Active</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="" class="col-sm-3">Image:</label>
                                    <div class="col-sm-9">
                                       <input type="file" name="image" accept="image/*">
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <div class="offset-sm-3 col-sm-9">
                                       <button type="submit" class="btn btn-sm btn-success">
                                        Create Slider
                                       </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <?php include_once "includes/copy.php"?> 

        </div>

    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

   <?php include_once "includes/footer.php"?>
