<?php 
require_once "../config/config.php";
require_once "includes/isLoggedIn.php";
require_once "includes/header.php";
?>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php require_once "includes/sidebar.php";?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">


        <!-- Creating the top menu bar -->
               <?php require_once "includes/top-menu.php" ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <?php flash(); ?>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Blank Page</h1>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php include_once "includes/copy.php"?> 

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

   <?php include_once "includes/footer.php"?>