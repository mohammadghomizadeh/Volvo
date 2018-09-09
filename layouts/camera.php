

 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>-->

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <?php
        $r = $db->select("content","`type` = 'slideshow'");
        foreach($r as $rew)
        {

        ?>
      <div class="item <?php echo $rew['title']; ?>">
        <img src="adminpanel/uploads/slideshow/<?php echo $rew['image']; ?>" alt="Los Angeles" style="width:100%;height:700px;">
      </div>
        <?php

        }
        ?>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

