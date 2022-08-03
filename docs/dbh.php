<?php

$serverName = "localhost";
$dbUserName = "root";
$bdPassword = "";
$dbName = "loginSystem";

$conn = mysqli_connect($serverName, $dbUserName, $bdPassword);

if (!conn) {
    die('Could not connect: ' . mysqli_connect_error($conn));
}



