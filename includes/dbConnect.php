<?php

// $hostname = 'localhost';
// $dbuser = 'avioblmc_cso';
// $dbpassword = '2526pep/';
// $dbname = 'avioblmc_allied';

$hostname = 'localhost';
$dbuser = 'root';
$dbpassword ='';
$dbname = 'general';


$conn = new mysqli($hostname, $dbuser, $dbpassword, $dbname);

if($conn->connect_error){
    die('Database error: ' . $conn->error);
}

?>