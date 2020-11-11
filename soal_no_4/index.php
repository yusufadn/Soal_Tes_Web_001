<?php
echo 'Soal no 4 <br><br>';

$kalimat = 'AKU SUKA MAKAN NASI PADANG';
$newKata = array();
$kata = explode(" ",$kalimat);
$jum = count($kata);
$gabung = '';
for($i=0; $i<$jum; $i++)
{
    $gabung = $gabung.' '.$kata[$i];
    $newKata[] = $gabung;
}
$gabung = '';
for($i=$jum-1; $i>=0; $i--)
{
    $gabung = $gabung.' '.$kata[$i];
    $newKata[] = $gabung;
}  
print_r($newKata);

