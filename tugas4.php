<?php

function perhitunganSederhana(int $angkatan, int $semester){
$hasil = $angkatan*$semester;

if ($hasil%3 == 0){
    echo "HABIS DIBAGI 3";
}else {
    echo "TIDAK HABIS DIBAGI 3";
}
return $hasil;
}

$angkatan = 2021;
$semester = 1;

perhitunganSederhana($angkatan, $semester);