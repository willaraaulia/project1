<?php

$server = "localhost";	// ini IP server databasenya, localhost jika di local PC
$username = "root";	// Username database, defaultnya root
$password = "";		// password database, defaultnya kosong
$database = "db_android";	// Nama database, sesuaikan dengan nama database anda


$conn = mysqli_connect($server,$username,$password, $database) or die("Koneksi gagal ".mysqli_connect_errno(). PHP_EOL);




?>