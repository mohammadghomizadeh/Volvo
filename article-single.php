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
                            <h1>مقاله</h1>

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
                    <div class="col-md-3">
                        <div class="sidebar">
                            <div class="sidebar-section">
                                <div class="search-box">
                                    <form class="search-container">
                                        <div class="form-group" style="display:inline;">
                                            <div class="input-group">
                                                <input type="text" placeholder="Seach items" class="form-control">
                                                <span class="input-group-addon"><i class="fa fa-search" aria-hidden="true"></i></span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="sidebar-section">
                                <div class="recent-posts">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#">
                                                <img class="media-object" src="./theme/img/images/blog/thumbs.jpg" alt="...">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="media-heading">Best vehicles design on the market</h5>
                                            <p>Octuber 11, 2017</p>
                                            <p> By John Doe</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#">
                                                <img class="media-object" src="./theme/img/images/blog/thumbs-2.jpg" alt="...">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="media-heading">The most anticipated cars</h5>
                                            <p>Octuber 11, 2017</p>
                                            <p>By John Doe</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#">
                                                <img class="media-object" src="./theme/img/images/blog/thumbs-3.jpg" alt="...">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="media-heading">The best sports cars</h5>
                                            <p>Octuber 11, 2017</p>
                                            <p>By John Doe</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#">
                                                <img class="media-object" src="./theme/img/images/blog/thumbs-4.jpg" alt="...">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="media-heading">Cars you should buy for 2018</h5>
                                            <p>Octuber 11, 2017</p>
                                            <p>By John Doe</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#">
                                                <img class="media-object" src="./theme/img/images/blog/thumbs-5.jpg" alt="...">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="media-heading">Meet the best car of the year</h5>
                                            <p>Octuber 11, 2017</p>
                                            <p>By John Doe</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  <div class="col-md-9">
                      <?php
                      $id = $_GET['id'];
                      $res = $db->run("SELECT * FROM `content` WHERE `id` = '$id'");
                      foreach ($res as $col){
                      ?>
                      <div class="post-content">
                          <div class="post-photo"><img src="adminpanel/uploads/articles/<?php echo $col['image']; ?>"
                                                       alt=""></div>
                          <div class="post-author"><h6><?php echo $col['create_at']; ?></h6></div>
                          <div class="post-title"><h1><?php echo $col['title']; ?></h1></div>
                          <div class="post-content">
                              <p><?php echo $col['description']; ?></p>



                          </div>
                      </div>
                  </div>
                    <?php
                    }
                    ?>
                </div>
                
                <div class="comments">
                <div id="disqus_thread"></div>
                    <script>

                    /**
                    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                    /*
                    var disqus_config = function () {
                    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                    };
                    */
                    (function() { // DON'T EDIT BELOW THIS LINE
                    var d = document, s = d.createElement('script');
                    s.src = './theme/js/embed.js';
                    s.setAttribute('data-timestamp', +new Date());
                    (d.head || d.body).appendChild(s);
                    })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
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