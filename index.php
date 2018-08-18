<!DOCTYPE html>
<html lang="fa-IR" class="no-js">
<head>
    <?php include('./layouts/head-script.php'); ?>
</head>

<body>

    <!-- LOADER -->
    <div id="loader-wrapper">
        <div id="loader"></div>
    </div>
    <!-- LOADER -->

    <!-- MAIN CONTAINER -->
    <div class="wrapper">
        <!-- MAIN HEADER -->
        <div class="main-header">
            <!-- MAIN NAVBAR -->
            <?php include('./layouts/menu.php'); ?>
            <!-- END MAIN NAVBAR -->
            <?php 
                include('./layouts/camera.php');
            ?>
            <!-- END MAIN HEADER -->
        </div>
        <div class="main">
            <div class="section">
                <div class="row">
                <!--Start-Service-->
                    <?php include('./layouts/services.php'); ?>
                <!--End-Service-->
                </div>
            </div>
        </div>

       <!--Start-main-about-->
    <?php include('./layouts/main-about.php'); ?>
       <!--End-main-about-->


    </div>
    <!-- END MAIN CONTAINER -->
<!--Start-Footer-->
   <?php include('./layouts/footer.php'); ?>

    <a href="#0" class="cd-top">Top</a>
    <!-- ==============================================
    SCRIPTS
   =============================================== -->
   <?php include('./layouts/footer-script.php');  ?>


</body>
</html>