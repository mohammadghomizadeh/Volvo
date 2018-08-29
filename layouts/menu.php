 <div class="main-navbar">
                <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
                    <div class="top-header">
                        <div class="container content-top">
                            
                            <div class="leftside">
                                <div class="header-items">
                                    <a href="#">
                                        <p><i class="fa fa-facebook" aria-hidden="true"></i></p>
                                    </a>
                                </div>
                                <div class="header-items">
                                    <a href="#">
                                        <p><i class="fa fa-twitter" aria-hidden="true"></i></p>
                                    </a>
                                </div>
                                <div class="header-items">
                                    <a href="#">
                                        <p><i class="fa fa-instagram" aria-hidden="true"></i></p>
                                    </a>
                                </div>
                                <div class="header-items no-margin">
                                    <a href="#">
                                        <p><i class="fa fa-telegram" aria-hidden="true"></i></p>
                                    </a>
                                </div>
                                <div class="header-items no-margin">
                                    <a href="#">
                                        <p><i class="fa fa-linkedin" aria-hidden="true"></i></p>
                                    </a>
                                </div>
                                <div class="header-items no-margin">
                                    <a href="#">
                                        <p><i class="fa fa-google-plus" aria-hidden="true"></i></p>
                                    </a>
                                </div>
                            </div>
                            <div class="rightside">
                            <div class="header-items">
                                <?php

                                $rtel = $db->select("content","`type` = 'telephone'");
                                foreach($rtel as $rowtel)
                                {
                                ?>
                                    <p><i class="fa fa-phone" aria-hidden="true"></i>&nbsp; تلفن تماس : <?php echo $rowtel['description'];  ?></p>
                                <?php } ?>
                                </div>
                                <div class="header-items">
                                    <?php
                                    $rem = $db->select("content","`type` = 'email'");
                                    foreach($rem as $rowem)
                                    {
                                    ?>
                                    <p><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp; پست الکترونیکی : <?php echo $rowem['description'];  ?></p>
                                    <?php } ?>
                                </div>

                                <div class="header-items">
                                     <?php
                                     $radd = $db->select("content","`type` = 'address'");
                                     foreach($radd as $roadd)
                                     {
                                         ?>
                                    <p><i class="fa fa-location-arrow" aria-hidden="true"></i>&nbsp; آدرس : <?php echo $roadd['description'];  ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--<hr class="top">-->
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                  </button>
                            <a class="navbar-brand" href="http://themesquality.com/templates/autochoice/theme5">
                                <div class="logo-brand"><img src="./theme/img/master/logo.png" alt=""></div>
                            </a>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">

                                <!--<li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SHOP <span class="caret-drop"></span></a>
                                    <ul class="dropdown-menu">
                                        <li class="divider-top"></li>
                                        <li><a href="grid-left-sidebar.html">Grid Left Sidebar</a></li>
                                        <li class="divider"></li>
                                        <li><a href="grid-right-sidebar.html">Grid Right Sidebar</a></li>
                                        <li class="divider"></li>
                                        <li><a href="car-details.html">Car Details</a></li>
                                    </ul>
                                </li>-->
                                <li><a href="contact.php">تماس با ما </a></li>
                                <li><a href="about.php">درباره ما </a></li>
                                <li><a href="articles.php">مقالات </a></li>
                                <li><a href="service.php">خدمات </a></li>
                                <li><a href="index.php">صفحه اصلی</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
</div>