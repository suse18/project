<?php
session_start();
error_reporting(0);

$servername= "localhost";
$username = "root";
$password = "";
$dbname = "login";


try {
   
   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();exit;
    }


?>