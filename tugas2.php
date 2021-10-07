<?php

//Nazla Khalisha, Sistem Informasi 2021 Back End

//nomor 1
$hari = ["Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu"];
var_dump($hari);

echo "<br>"; 

$bulan = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
var_dump($bulan);

//nomor 2
$jumlah = (count($bulan));
var_dump($jumlah);

echo "<br>";

//nomor 3
$hasil = $jumlah*18;
echo $hasil;

if ($hasil % 2 == 0){
    echo "merupakan angka genap" ;}

else {
    echo "merupakan angka ganjil" ;}