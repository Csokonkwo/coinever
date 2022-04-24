<?php

// $hostname = 'localhost';
// $dbuser = 'coleqiul_cso';
// $dbpassword ='filling../';
// $dbname = 'coleqiul_digitrust';

$hostname = 'localhost';
$dbuser = 'root';
$dbpassword ='';
$dbname = 'general';

$conn = new mysqli($hostname, $dbuser, $dbpassword, $dbname);

if($conn->connect_error){
    die('Database error: ' . $conn->error);
}

?>