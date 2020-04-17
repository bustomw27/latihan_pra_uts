<?php
$server="localhost";
$username="root";
$password="";
$database="materi_web2";
//membuat koneksi
$koneksi = mysqli_connect("$server","$password","$database");
if (!$koneksi) {
	die ("Gagal, Database tidak ditemukan" . mysqli_connect_error());
}
?>