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
                        <a href="" onclick="showForm()" class="btn btn-sm btn-success float-right">
                            <i clas="fa fa-plus"></i>
                            Add Slider
                        </a>
                    </h1>
                    <hr>
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-sm table-bordered table-hover">
                                <thead class="table-dark">
                                    <th>S.N</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </thead>
                                <!-- <tbody id="slider-content">
                                    <tr>
                                        <td>1</td>
                                        <td>Title</td>
                                        <td>Active</td>
                                        <td>No image</td>
                                        <td>
                                            <a href="" class="btn-link">Edit</a>
                                            <a href="" class="btn-link">Delete</a>
                                        </td>
                                    </tr>
                                </tbody> -->
                            </table>
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