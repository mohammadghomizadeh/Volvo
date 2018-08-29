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
                            <h1>خدمات ما</h1>
                            <div class="page-map"><p>خانه &nbsp;/&nbsp; خدمات ما</p></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- END MAIN HEADER -->
        </div>
        

       <!--Start-main-service-->
      
       <div class="main">
            <div class="section">
                <div class="row">
                      <div class="col-md-4">
                          <div class="service-box">
                              <div class="service-icon"><img src="./theme/img/master/icons/engine-2.png" alt=""></div>
                              <h3>تعمیر و تنظیم موتور</h3>
                              <p>ما طیف گسترده ای از خدمات را به صاحبان خودرو در شهروز سرویس ارائه می دهیم. متخصصان ما می دانند چگونه طیف وسیعی از خدمات خودرو را اداره کنند.</p>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="service-box">
                              <div class="service-icon"><img src="./theme/img/master/icons/car-repair.png" alt=""></div>
                              <h3>تعمیرگاه ماشین</h3>
                              <p>ما طیف گسترده ای از خدمات اتومبیل را به صاحبان خودروهای بنز، بی ام و، تویوتا، کیا، هیوندای واقع در ایران ارائه می دهیم.</p>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="service-box">
                              <div class="service-icon"><img src="./theme/img/master/icons/engine-alarms.png" alt=""></div>
                              <h3>هشدار دهنده موتور</h3>
                              <p>برخی اخطارها نیز وجود دارند که با وجود آن‌ها هنوز قادر به ادامه‌ی رانندگی بدون مشکل حاد هستید اما پیشنهاد می‌شود در زمانی مقتضی خودرو را برای رفع موارد اعلام شده به مرکز خدمات‌رسانی برده یا خودتان با انجام اقدامات مناسب اخطار اعلام شده را برطرف نمایید.</p>
                          </div>
                      </div>                      
                      <div class="col-md-4">
                          <div class="service-box below">
                              <div class="service-icon"><img src="./theme/img/master/icons/lights.png" alt=""></div>
                              <h3>ELECTRIC SYSTEM</h3>
                              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="service-box below">
                              <div class="service-icon"><img src="./theme/img/master/icons/mechanic.png" alt=""></div>
                              <h3>MECHANICAL ASSISTANCE</h3>
                              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="service-box below">
                              <div class="service-icon"><img src="./theme/img/master/icons/radiator.png" alt=""></div>
                              <h3>RADIATOR REPAIR</h3>
                              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
                          </div>
                      </div>
                </div>
            </div>
        </div>
        
        
        <div class="main counter-parallax">
            <div class="section">
                <div class="row">
                  <div class="col-sm-3 col-md-3">
                      <?php
                      $rph = $db->select("content","`link` = 'doing'");
                      foreach($rph as $rowph){
                        ?>
                      <circle-counter>
                          <div class="counter-icon">
                            <i class="fa fa-car" aria-hidden="true"></i>
                          </div>
                          <span class="counter circle"><?php echo $rowph['description']; ?></span>
                          <h4><?php echo $rowph['title']; ?></h4>
                      </circle-counter>
                      <?php
                      }
                      ?>

                    </div>
                  <div class="col-sm-3 col-md-3">
                      <?php
                      $rph = $db->select("content","`link` = 'doit'");
                      foreach($rph as $rowph){
                      ?>
                      <circle-counter>
                          <div class="counter-icon">
                            <i class="fa fa-flag-checkered" aria-hidden="true"></i>
                          </div>
                          <span class="counter circle"><?php echo $rowph['description']; ?></span>
                          <h4><?php echo $rowph['title']; ?></h4>
                      </circle-counter>
                      <?php } ?>
                    </div>
                  <div class="col-sm-3 col-md-3">
                      <?php
                      $rph = $db->select("content","`link` = 'rate'");
                      foreach($rph as $rowph){
                      ?>
                      <circle-counter>
                          <div class="counter-icon">
                            <i class="fa fa-trophy" aria-hidden="true"></i>
                          </div>
                          <span class="counter circle"><?php echo $rowph['description']; ?></span>
                          <h4><?php echo $rowph['title']; ?></h4>
                      </circle-counter>
                      <?php } ?>
                    </div>
                  <div class="col-sm-3 col-md-3">
                      <?php
                      $rph = $db->select("content","`link` = 'happycustomer'");
                      foreach($rph as $rowph){
                      ?>
                      <circle-counter>
                          <div class="counter-icon">
                            <i class="fa fa-smile-o" aria-hidden="true"></i>
                          </div>
                          <span class="counter circle"><?php echo $rowph['description']; ?></span>
                          <h4><?php echo $rowph['title']; ?></h4>
                      </circle-counter>
                      <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="main">
            <div class="section">
                <div class="row">
                  <div class="col-md-6"><div class="inspection-car"><img src="./theme/img/images/autos/image25.png" alt=""></div></div>
                  <div class="col-md-6">
                    <div class="inspection-information">
                        <h3>خدمات تعمیرگاه ولوو :</h3>
                        <p>
                            تعمیر موتور
                            تعمیر گیربکس اتومات
                            تعمیر ایربگ ( کیسه هوای جانبی و پرده ای ) خودروهای ولوو
                            تعمیر کمربند ( سه نقطه ای به همراه پیش کشنده ) ولوو
                            تعمیر قفل درب ها
                            تعمیر ایرادات برقی و تمام سیستم های صوتی و ناوبری خودروهای ولوو
                            تعمیرات سیستم های ترمز و پایداری ABS – EBD – EBA – DSTC – ترمز دستی الکترونیکی خودروهای ولوو
                            تعمیر سیستم های کروز کنترل هوشمند، تنظیم کننده آینه های جانبی، گرمکن صندلی ها، کنترل کشش و پایداری دینامیکی، کنترل سرعت در سراشیبی، پارک اتوماتیک، تهویه ۴ گانه، سقف پانوراما و …

                        </p>
                    </div> 
                  </div>
                </div>
            </div>
        </div>
        
        <hr>
        
        <div class="main">
            <div class="section">
                <div class="row">
                    <div class="col-xs-4 col-md-2">
                        <div class="inspection-items">
                            <div class="inspection-icon"><img src="./theme/img/master/icons/engine.png" alt=""></div>
                            <div class="inspection-name">
                                <h6>موتور</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4 col-md-2">
                        <div class="inspection-items">
                            <div class="inspection-icon"><img src="./theme/img/master/icons/dashboard.png" alt=""></div>
                            <div class="inspection-name">
                                <h6>داشبورد</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4 col-md-2">
                        <div class="inspection-items">
                            <div class="inspection-icon"><img src="./theme/img/master/icons/battery.png" alt=""></div>
                            <div class="inspection-name">
                                <h6>باطری</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4 col-md-2">
                        <div class="inspection-items">
                            <div class="inspection-icon"><img src="./theme/img/master/icons/termperture.png" alt=""></div>
                            <div class="inspection-name">
                                <h6>ترموستات</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4 col-md-2">
                        <div class="inspection-items">
                            <div class="inspection-icon"><img src="./theme/img/master/icons/breaks.png" alt=""></div>
                            <div class="inspection-name">
                                <h6>ترمز</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4 col-md-2">
                        <div class="inspection-items">
                            <div class="inspection-icon"><img src="./theme/img/master/icons/transmition.png" alt=""></div>
                            <div class="inspection-name">
                                <h6>گیربکس</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        
       <!--End-main-service-->


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