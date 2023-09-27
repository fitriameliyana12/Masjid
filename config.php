<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
date_default_timezone_set('Asia/Jakarta');
session_start();

$koneksi = new mysqli("localhost", "root", "", "masjid");
$koneksi = mysqli_connect("localhost", "root", "", "masjid")or die("Gagal Koneksi ke Database!!");
if ($koneksi->connect_errno) {
    echo die("Failed to connect to MySQL: " . $conn->connect_error);
}
// 
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "masjid";

// $koneksi = mysqli_connect($servername,$username,$password,$dbname);

// if(!$koneksi) {
//     die("connection failed: ".mysqli_connect_error());
// }
?>