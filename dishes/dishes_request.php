<?php
require_once "../shared/connection.php";

$select = "SELECT * FROM `dishes`";
$data = mysqli_query($connect, $select);
