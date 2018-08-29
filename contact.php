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
                            <h1>ارتباط با ما</h1>
                            <div class="page-map"><p>خانه &nbsp;/&nbsp; تماس با ما</p></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- END MAIN HEADER -->
        </div>
        

       <!--Start-main-Contact-Us-->
       <div class="main">
            <div class="section">
                <div class="section-title">
                    <h2>تماس با ما</h2>
                    <hr class="short">
                    <p>لطفا نظرات پیشنهادات و پیامهای خود را برای ما ارسال کنید</p>
                </div>
                <div class="row">
                  
                  <div class="col-md-4">
                    <div class="sidebar">
                      <div class="address-box">
                        <div class="icon-circle"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                         <div class="address-info">
                          <h5>آدرس</h5>

                             <?php

                             $radd = $db->select("content","`type` = 'address'");
                             foreach($radd as $roadd)
                             {
                                 ?>
                                 <p> <?php echo $roadd['description'];  ?></p>
                             <?php } ?>
                         </div>
                      </div>
                        
                      <div class="address-box">
                        <div class="icon-circle"><i class="fa fa-phone" aria-hidden="true"></i></div>
                         <div class="address-info">
                          <h5>تلفن</h5>
                             <?php
                             $rtel = $db->select("content","`type` = 'telephone'");
                             foreach($rtel as $rowtel)
                             {
                                 ?>
                                 <p><?php echo $rowtel['description'];  ?></p>
                             <?php } ?>
                         </div>
                      </div>
                        <div class="address-box">
                            <div class="icon-circle"><i class="fa fa-phone" aria-hidden="true"></i></div>
                            <div class="address-info">
                                <h5>همراه</h5>
                                <?php

                                $rph = $db->select("content","`type` = 'phone'");
                                foreach($rph as $rowph)
                                {
                                    ?>
                                    <p><?php echo $rowph['description'];  ?></p>
                                <?php } ?>
                            </div>
                        </div>
                     
                      <div class="address-box">
                        <div class="icon-circle"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                        <div class="address-info">
                          <h5>پست الکترونیکی</h5>
                            <?php
                            $rem = $db->select("content","`type` = 'email'");
                            foreach($rem as $rowem)
                            {
                                ?>
                                <p><?php echo $rowem['description'];  ?></p>
                            <?php }?>
                         </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="span-contact">
                      <form id="contact-form" method="post" action="http://themesquality.com/templates/autochoice/theme5/contact.php">
                            <div class="messages"></div>
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input id="form_name" type="text" name="name" class="form-control customize" placeholder="نام و نام خانوادگی" required="required" data-error="Firstname is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input id="form_email" type="email" name="email" class="form-control customize" placeholder="پست الکترونیکی" required="required" data-error="Valid email is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input id="form_phone" type="tel" name="phone" class="form-control customize" placeholder="تلفن همراه">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea id="form_message" name="message" class="form-control customize" placeholder="متن پیام" rows="6" required="required" data-error="Please,leave us a message."></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <p><input type="submit" class="btn btn-warning" value="ارسال پیام"></p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="maps">
            <div id="map"></div>
            <script>
                      function initMap() {
                    // Styles a map in night mode.
                    var map = new google.maps.Map(document.getElementById('map'), {
                      center: {lat: 40.674, lng: -73.945},
                      zoom: 12,
                      styles: [
                                {
                                    "featureType": "administrative",
                                    "elementType": "labels.text.fill",
                                    "stylers": [
                                        {
                                            "color": "#444444"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "landscape",
                                    "elementType": "all",
                                    "stylers": [
                                        {
                                            "color": "#f2f2f2"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "poi",
                                    "elementType": "all",
                                    "stylers": [
                                        {
                                            "visibility": "off"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "road",
                                    "elementType": "all",
                                    "stylers": [
                                        {
                                            "saturation": -100
                                        },
                                        {
                                            "lightness": 45
                                        }
                                    ]
                                },
                                {
                                    "featureType": "road.highway",
                                    "elementType": "all",
                                    "stylers": [
                                        {
                                            "visibility": "simplified"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "road.arterial",
                                    "elementType": "labels.icon",
                                    "stylers": [
                                        {
                                            "visibility": "off"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "transit",
                                    "elementType": "all",
                                    "stylers": [
                                        {
                                            "visibility": "off"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "water",
                                    "elementType": "all",
                                    "stylers": [
                                        {
                                            "color": "#da1212"
                                        },
                                        {
                                            "visibility": "on"
                                        }
                                    ]
                                }
                            ]
                        });
                  }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKEb1AlchTdpu9dLzLVo8I8BNxYPlEldY&amp;callback=initMap" async defer></script>
        </div>  
    
           
    </div>
       <!--End-main-Contact-Us-->


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