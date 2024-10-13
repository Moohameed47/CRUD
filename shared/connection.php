<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "restaurant";

try {
    $connect = mysqli_connect($host, $user, $password, $dbname);
    echo "Connect";
} catch (Throwable $th) {
    echo "Error: " . $th->getMessage() . "";
}
