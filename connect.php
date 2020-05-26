<?php
$host="localhost";
$user="root";
$pass="";
$dbname="library";

$db = new mysqli($host, $user, $pass, $dbname);

if($db->connect_error){
    die('Connection failed: '. $db->connect_error);
}



?>