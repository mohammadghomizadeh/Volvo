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


            <div class="pages-header">
                <div class="section-heading">
                    <div class="section">
                        <div class="span-title">
                            <h1>درباره شرکت</h1>
                            <div class="page-map"><p>خانه &nbsp;/&nbsp; درباره ما</p></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- END MAIN HEADER -->
        </div>
        

       <!--Start-main-about-->
       <div class="main">
            <div class="section">
                <div class="row">
                  <div class="col-md-6">
                    <div class="about-slider">
                        <?php
                        $result = $db->select("content","`type` = 'aboutus'");
                        foreach($result as $row)
                        {
                            ?>
                        <img src="adminpanel/uploads/<?php echo $row['image']; ?>" alt="" width="500" height="400">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="about-front">
<?php
                                echo $row['description'];
                            }
                        ?>
                        
                      <div class="signature"><img src="./theme/img/master/signature.png" alt=""></div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        
        
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