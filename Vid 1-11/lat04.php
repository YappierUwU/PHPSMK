<?php 

$a = 5;
$b = 3;
// OPERATOR ARITMATIKA
$c = $a + $b;

echo $c. '<br>';

$c = $a - $b;
echo $c.'<br>';

$c = $a * $b;
echo $c.'<br>';

$c = $a / $b;
echo floor($c). '<br>';


$c = $a % $b;
echo $c. '<br>';

// OPERATOR LOGIKA

$c = $a < $b;
echo $c. '<br>';
$c = $a > $b;
echo $c. '<br>';
$c = $a == $b;
echo $c. '<br>';
$c = $a != $b;
echo $c. '<br>';
echo '<br>';

// INCREMENT

$a++;
echo $a.'<br>';
echo '<br>';

// OPERATOR STRING 


$kata ='Sura';
$kota = 'Baya';

$hasil = $kata.$kota;

$hasil .='KOTA PAHLAWAN';
echo $hasil;
