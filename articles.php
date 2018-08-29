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
                                        <?php echo  substr($row['description'],0,200); ?>
                                    </p>
                                    <p class="author">تاریخ : <?php echo  $row['create_at']; ?></p>
                                    <p>
                                        <button type="submit" class="btn btn-warning">ادامه مطلب</button>
                                    </p>
                                </div>
                            </div>
                            <hr class="line-post">
                            <?php
                        }
                      ?>
                      <div class="post-preview">
                        <div class="photo-preview"><img src="./theme/img/images/blog/post-preview-2.jpg" alt=""></div>
                         <div class="post-details">
                            <h5 class="post-title">The most anticipated cars on 2018</h5>
                             <p class="post-text">
                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
                             </p>
                             <p class="author">By John Doe on November 29, 2017 10:47 AM</p>
                             <p><button type="button" class="btn btn-warning">Read More</button></p>
                         </div>
                      </div>
                      <hr class="line-post">
                      <div class="post-preview">
                        <div class="photo-preview"><img src="./theme/img/images/blog/post-preview-3.jpg" alt=""></div>
                         <div class="post-details">
                            <h5 class="post-title">Cars you should buy for 2018</h5>
                             <p class="post-text">
                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
                             </p>
                             <p class="author">By John Doe on November 29, 2017 10:47 AM</p>
                             <p><button type="button" class="btn btn-warning">Read More</button></p>
                         </div>
                      </div>
                      <hr class="line-post">
                      <div class="post-preview">
                        <div class="photo-preview"><img src="./theme/img/images/blog/post-preview-4.jpg" alt=""></div>
                         <div class="post-details">
                            <h5 class="post-title">Meet the best car of the year</h5>
                             <p class="post-text">
                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
                             </p>
                             <p class="author">By John Doe on November 29, 2017 10:47 AM</p>
                             <p><button type="button" class="btn btn-warning">Read More</button></p>
                         </div>
                      </div>
                      <hr class="line-post">
                      <div class="post-preview">
                        <div class="photo-preview"><img src="./theme/img/images/blog/post-preview-5.jpg" alt=""></div>
                         <div class="post-details">
                            <h5 class="post-title">The best sports cars of 2017</h5>
                             <p class="post-text">
                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
                             </p>
                             <p class="author">By John Doe on November 29, 2017 10:47 AM</p>
                             <p><button type="button" class="btn btn-warning">Read More</button></p>
                         </div>
                      </div>
                      <hr class="line-post">
                      <div class="post-preview">
                        <div class="photo-preview"><img src="./theme/img/images/blog/post-preview-6.jpg" alt=""></div>
                         <div class="post-details">
                            <h5 class="post-title">The best rated sports cars</h5>
                             <p class="post-text">
                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
                             </p>
                             <p class="author">By John Doe on November 29, 2017 10:47 AM</p>
                             <p><button type="button" class="btn btn-warning">Read More</button></p>
                         </div>
                      </div>
                      <div class="span-pagination">
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