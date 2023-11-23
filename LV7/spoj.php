<?php
    session_start();
    $serverName = "localhost";
    $username = "root";
    $password = "";
    $dbname = "skladiste";
    $conn = new mysqli($serverName, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("". $conn->connect_error);
    }
?>