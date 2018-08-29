
<div class="main-footer">
        <div class="main">
            <div class="content">
                <div class="section">
                    <div class="row">
                        
                        
                        <div class="col-md-4 footer-column">
                            <h5 class="footer-heading">گالری تصاویر</h5>
                            <hr class="short-footer">
                            <div class="row">
                                <div class="col-xs-3 col-sm-3 col-md-3">
                                    <div class="footer-thumbnail">
                                        <a href="#"><img src="./theme/img/images/autos/image5.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-xs-3 col-sm-3 col-md-3">
                                    <div class="footer-thumbnail">
                                        <a href="#"><img src="./theme/img/images/autos/image6.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-xs-3 col-sm-3 col-md-3">
                                    <div class="footer-thumbnail">
                                        <a href="#"><img src="./theme/img/images/autos/image13.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-xs-3 col-sm-3 col-md-3">
                                    <div class="footer-thumbnail">
                                        <a href="#"><img src="./theme/img/images/autos/image8.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-xs-3 col-sm-3 col-md-3">
                                    <div class="footer-thumbnail">
                                        <a href="#"><img src="./theme/img/images/autos/image9.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-xs-3 col-sm-3 col-md-3">
                                    <div class="footer-thumbnail">
                                        <a href="#"><img src="./theme/img/images/autos/image10.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-xs-3 col-sm-3 col-md-3">
                                    <div class="footer-thumbnail">
                                        <a href="#"><img src="./theme/img/images/autos/image11.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-xs-3 col-sm-3 col-md-3">
                                    <div class="footer-thumbnail">
                                        <a href="#"><img src="./theme/img/images/autos/image12.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 center-column">
                            <h5 class="footer-heading">تماس با ما</h5>
                            <hr class="short-footer">
                            <div class="footer-location">
                                <div class="location-fa"><i class="fa fa-location-arrow" aria-hidden="true"></i></div>
                                <div class="location-info">
                                    <?php

                                    $radd = $db->select("content","`type` = 'address'");
                                    foreach($radd as $roadd)
                                    {
                                    ?>
                                    <p> <?php echo $roadd['description'];  ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="footer-location">
                                <div class="location-fa"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                <div class="location-info">
                                    <?php
                                    $rtel = $db->select("content","`type` = 'telephone'");
                                    foreach($rtel as $rowtel)
                                    {
                                    ?>
                                    <p><?php echo $rowtel['description'];  ?></p>
                                    <?php } ?>
                                </div>
                                <div class="location-info">
                                    <?php

                                    $rph = $db->select("content","`type` = 'phone'");
                                    foreach($rph as $rowph)
                                    {
                                        ?>
                                        <p><?php echo $rowph['description'];  ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="footer-location">
                                <div class="location-fa"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                <div class="location-info">
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
                        <div class="col-md-5 footer-column">
                            <h5 class="footer-heading">درباره ما</h5>
                            <hr class="short-footer">
                            <p>
                            تعمیرگاه تخصصی ولوو با مدیریت مهندس اسماعیل حسنی  یکی از آن محدود تعمیرگاه ها می باشد که با تجربه و سابقه درخشان، ابزارهای مخصوص و با تکیه بر تجربه فنی نیروهای کارآمد خود اقدام به رفع مشکلات و سرویس دهی خودروها می نماید.
                            </p>

                            <div class="social-network">
                                <div class="social-items">
                                    <a href="#">
                                        <div class="icon-fa"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                    </a>
                                </div>
                                <div class="social-items">
                                    <a href="#">
                                        <div class="icon-fa"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                    </a>
                                </div>
                                <div class="social-items">
                                    <a href="#">
                                        <div class="icon-fa"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                    </a>
                                </div>
                                <div class="social-items">
                                    <a href="#">
                                        <div class="icon-fa"><i class="fa fa-telegram" aria-hidden="true"></i></div>
                                    </a>
                                </div>
                                <div class="social-items">
                                    <a href="#">
                                        <div class="icon-fa"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                    </a>
                                </div>
                                <div class="social-items">
                                    <a href="#">
                                        <div class="icon-fa"><i class="fa fa-google-plus" aria-hidden="true"></i></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bottom-footer">
        <div class="main">
            <div class="section">
                <div class="column-right">
                    <p>طراحی و برنامه نویسی سایت توسط شرکت آرشیتا وب </p>
                </div>
            </div>
        </div>
    </div>