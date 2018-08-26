<?php

if(isset($_POST['submit'])){
    include('config/db.php');
    $ctime = $date->date("Y-m-d", false, false);
    $servicetitle = $_POST['servicetitle'] ;
    $servicedescription = $_POST['editor1'];
    $serviceimg =  $_FILES['serviceicon']['name'];
    $uploaddir = 'uploads/services/';
    $uploadfile = $uploaddir . basename($_FILES['serviceicon']['name']);
    move_uploaded_file($_FILES['serviceicon']['tmp_name'], $uploadfile);
    $r = $db->insert("content",array(
                    "title" => $servicetitle,
                    "description" => $servicedescription ,
                    "image" => $serviceimg ,
                     "sort" => 1 ,
                     "type" => services ,
                      "create_at" => $ctime));
    if($r)
    {
        ?>
        <script>
        window.location.replace("index.php?page=services&action=list");
        </script>
        <?php
    }
}else{
    echo "not submit keyed";
}