<?php 
// $koneksi = new mysqli ("127.0.0.1", "root", "", "db_perpustakaan");

// definisikan koneksi ke database
$server = "127.0.0.1";
$username = "root";
$password = "";
$database = "db_perpustakaan";

// Koneksi dan memilih database di server
$koneksi = mysqli_connect($server,$username,$password,$database) or die("Koneksi gagal");
// mysqli_select_db($database) or die("Database tidak bisa dibuka");

?>