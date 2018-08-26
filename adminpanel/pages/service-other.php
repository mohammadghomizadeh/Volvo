<?php
    include('config/db.php');
if(isset($_POST['submitother']))
{
    try{
        $servicetitle = $_POST['servicetitle'];
        $description = $_POST['editor1'];
        $db->run("UPDATE `content` SET `title` = '$servicetitle' ,  `description` = '$description' WHERE `type` = 'service'");
?>                     
        <script>
        window.location.replace("index.php?page=services&action=other");
        </script>
<?php
    }
    catch(Exception $e){
        echo 'خطا : با پشتیبانی تماس بگیرید  ', $e->getMessage();
    }


}
elseif(isset($_POST['submitpercent']))
{

    try
    {
        $happy = $_POST['happycustomer'];
        $db->run("UPDATE `content` SET `description` = '$happy' WHERE `link` = 'happycustomer'");
        $doit = $_POST['doit'];
        $db->run("UPDATE `content` SET `description` = '$doit' WHERE `link` = 'doit'");
        $doing = $_POST['doing'];
        $db->run("UPDATE `content` SET `description` = '$doing' WHERE `link` = 'doing'");
        $rate = $_POST['rate'];
        $db->run("UPDATE `content` SET `description` = '$rate' WHERE `link` = 'rate'");
?>                     
            <script>
            window.location.replace("index.php?page=services&action=other");
            </script>
<?php
    }
    catch (Exception $e){
        echo 'خطا : با پشتیبانی تماس بگیرید  ', $e->getMessage();
    }
}
