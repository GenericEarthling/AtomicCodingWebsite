<?php

$db_username = 'sharontender';
$db_password = 'RaT3oTu~42';
$db_name = 'LifeHappens';
$db_host = 'localhost'; 

// declare global variables here


//connect to MySql						
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);						
if ($mysqli->connect_error) {
    die('FROM Config.php ERROR: ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}


?>