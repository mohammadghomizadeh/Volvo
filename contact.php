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
            <?php include('./layouts/top-header.php'); ?>
            <!-- END MAIN HEADER -->
        </div>
        

       <!--Start-main-Contact-Us-->
       <div class="main">
            <div class="section">
                <div class="section-title">
                    <h2>GET IN TOUCH</h2>
                    <hr class="short">
                    <p>At Autochoice we are here to help you, please contact us on the following form and one of our experts will contact you to answer your questions. Please be sure to correctly place your contact information and the time at which you wish to be contacted.</p>
                </div>
                <div class="row">
                  
                  <div class="col-md-4">
                    <div class="sidebar">
                      <div class="address-box">
                        <div class="icon-circle"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                         <div class="address-info">
                          <h5>Address</h5>
                          <p>1415 Woodlawn Ave. Buffalo New York, USA 10451.</p>
                         </div>
                      </div>
                        
                      <div class="address-box">
                        <div class="icon-circle"><i class="fa fa-phone" aria-hidden="true"></i></div>
                         <div class="address-info">
                          <h5>Phone</h5>
                          <p>212-869-3323</p>
                         </div>
                      </div>
                     
                      <div class="address-box">
                        <div class="icon-circle"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                        <div class="address-info">
                          <h5>Email</h5>
                          <p>support@industrial.com</p>
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
                                            <input id="form_name" type="text" name="name" class="form-control customize" placeholder="Name" required="required" data-error="Firstname is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input id="form_email" type="email" name="email" class="form-control customize" placeholder="Email address" required="required" data-error="Valid email is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input id="form_phone" type="tel" name="phone" class="form-control customize" placeholder="Please enter your phone">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea id="form_message" name="message" class="form-control customize" placeholder="Your message" rows="6" required="required" data-error="Please,leave us a message."></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <p><input type="submit" class="btn btn-warning" value="Send message"></p>
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