<?php
include "tes.php";
$sql=mysqli_query ($koneksi, "select a_name1 from table_1 ");
$data=mysqli_fetch_array ($sql);
$namapanggilan=$data ['a_name1'];
echo "Nama di database(original) = " .$namapanggilan."<br>";
echo "Nama dalam huruf besar = " .strtoupper $namapanggilan."<br>";
echo "Nama dalam huruf kecil = " .strtolower $namapanggilan."<br>";
echo "huruf kecil di awal besar = " .ucwords $namapanggilan."<br>";
?>
