

<?php include('layouts/head-script.php'); ?>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <?php include('layouts/header.php'); ?>
        <!-- right side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!--start-menu-sidebar -->
            <?php include('layouts/menu.php'); ?>
            <!--end-menu-sidebar -->
            <!-- Start Main content -->
            <section class="content">
                <!-- Small boxes (Stat box) -->
                <?php include('layouts/content-menu.php'); ?>
                <!-- /.row -->
                <div class="row">
                    <section class="col-lg-12 col-md-12">
                       <!--Start-Content-Pages-In-Here-->
<?php
if(isset($_GET['page']) && !empty($_GET['page']))
{
    $page = $_GET['page'];
    include('pages/'. $page . '.php');
}else
{
    echo "Page Not Font";
}


?>
                       <!--End-Content-Pages-->
                    </section>
                </div>
                <!-- Main row -->
      

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
<?php include('layouts/footer.php'); ?>


    </div>
    <!-- ./wrapper -->
<?php  include('layouts/footer-script.php'); ?>