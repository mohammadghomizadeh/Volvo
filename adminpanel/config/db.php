<?php
include('class.db.php');
include('jdatetime.class.php');
$HOST = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DATABASE = "esi-volvo";
$db = new db("mysql:host=$HOST;dbname=$DATABASE", $USERNAME, $PASSWORD);
$date = new jDateTime(true, true, 'Asia/Tehran');
$db -> exec("SET CHARACTER SET utf8");
?>