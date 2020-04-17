<?php
$server="localhost";
$username="root";
$password=" ";
$database="materi_web2";
$koneksi= mysqli_connect("$server","$password","$database")
if (!$koneksi) {
    die ("gagal, databse tidak ditmeukan".mysqli_connect_error());

}
?>
