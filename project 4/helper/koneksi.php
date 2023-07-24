<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "datasiswabaru";

$conn = mysqli_connect($host, $user, $password, $db);

if (!$conn) {
    die ("Maaf kamu tidak terhubung dengan databse ".mysqli_connect_errno($conn) ."-" .mysqli_connect_error());
}

?>