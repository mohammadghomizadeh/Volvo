<?php
if(isset($_POST['submit'])){
    include('adminpanel/config/db.php');
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $RESULT  = $db->select("user","`type` = 'admin'");
    foreach($RESULT as $row)
    {
        $username = $row['username'];
        $password = $row['password'];
    }
    if($user == $username)
    {
        if($pass == $password){
        session_start();
        $_SESSION['login'] = "login";
            ?>
            <script>
                window.location.replace("adminpanel/");
                
            </script>
            <?php


        }else
        {
            ?>
            <script>
                window.location.replace("login.php?err=passwordfail");
            </script>
            <?php
        }
    }else
    {
        ?>
        <script>
            window.location.replace("login.php?err=usernamefail");
        </script>
        <?php
    }
}
