<?php
$servername = "localhost";
$username = "caster";
$password = "TheCasterPl0t";

try {
    $conn = new PDO("mysql:host=$servername;dbname=storeapp", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
//closing connectionsss
//$conn = null;
?>