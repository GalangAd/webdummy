<?php
$host = 'localhost';
$dbname = 'db_caas';
$user = 'root';
$pass = '';

$mysqli = mysqli_connect($host, $dbname, $user, $pass);
if (!$mysqli){
    die("Koneksi Gagal" . mysqli_connect_error());
}
echo "Berhasil";
?>