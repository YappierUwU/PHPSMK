<?php 
// array dimensi

$nama = array("joni","tejo", "budi", "siti", 100, 2.5);

var_dump($nama);
echo '<br>';

echo $nama[5];

echo '<br>';

// for ($i=0; $i < 6; $i++) {
//     echo $i;
//     echo $nama[$i].'<br>';
// }

foreach ($nama as $key) {
    echo $key.'<br>';
}
// array asosiatif
// $nama = array (
//     "joni" => "surabaya",
//     "budi" => "malang raya",
//     "joni" => "jakarta",
//     "joni" => "sidoarjo"
// );


$nama["joni"] = "surabaya";
$nama["budi"] = "malang raya";
$nama["tejo"] = "jakarta";
$nama["siti"] = "sidoarjo";

var_dump($nama);

echo '<br>';

// echo $nama['budi'];

foreach ($nama as $key => $value) {
    echo $key." => ".$value;

    echo '<br>';
}
