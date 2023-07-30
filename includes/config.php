<?php
ob_start(); // Turns on output buffering
session_start(); // By default session will last when browser close

date_default_timezone_set("Asia/Kuala_Lumpur");

try{

    $con = new PDO("mysql:dbname=netflix;host=localhost", "root", "");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    echo "PDO connection successful! <br/>";

}catch(PDOException $e){
    exit("Connection failed: " . $e->getMessage());
}

?>