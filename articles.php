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
                            <h1>مقالات</h1>
                            <div class="page-map"><p>خانه &nbsp;/&nbsp; مقالات سایت</p></div>
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

                  <div class="col-md-12">

                      <?php

                      function substrwords($text, $maxchar, $end='...') {
                          if (strlen($text) > $maxchar || $text == '') {
                              $words = preg_split('/\s/', $text);
                              $output = '';
                              $i      = 0;
                              while (1) {
                                  $length = strlen($output)+strlen($words[$i]);
                                  if ($length > $maxchar) {
                                      break;
                                  }
                                  else {
                                      $output .= " " . $words[$i];
                                      ++$i;
                                  }
                              }
                              $output .= $end;
                          }
                          else {
                              $output = $text;
                          }
                          return $output;
                      }

                      $rph = $db->select("content","`type` = 'articles'");
                      foreach($rph as $row){
                            ?>
                            <div class="post-preview">
                                <div class="photo-preview">
                                    <img width="330" height="186" src="adminpanel/uploads/articles/<?php echo  $row['image']; ?>" alt="<?php echo  $row['title']; ?>">
                                </div>
                                <div class="post-details">
                                    <h5 class="post-title"><?php echo  $row['title']; ?></h5>
                                    <p class="post-text">
                                        <?php echo  substrwords($row['description'],800); ?>
                                    </p>
                                    <p class="author">تاریخ : <?php echo  $row['create_at']; ?></p>
                                    <p>
                                        <a href="article-single.php?id=<?php echo  $row['id']; ?>" class="btn btn-warning">ادامه مطلب</a>
                                    </p>
                                </div>
                            </div>
                          <div class="clearfix"></div>
                          <hr class="line-post">
                            <?php
                        }
                      ?>



                      <!--<div class="span-pagination">
                        <nav aria-label="Page navigation">
                          <div class="pagination">
                              <a href="#">Prev</a>
                              <a  class="active" href="#">1</a>
                              <a href="#">2</a>
                              <a href="#">3</a>
                              <a href="#">4</a>
                              <a href="#">5</a>
                              <a href="#">Next</a>
                          </div>
                        </nav>
                      </div>-->
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