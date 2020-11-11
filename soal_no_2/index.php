<?php
echo 'Soal no 2 A <br><br>';

$date = '2020-05-01';
$hari = substr($date,8,2);
$bulan = substr($date,5,2);
$tahun = substr($date,2,2);

echo $bulan,'-',$tahun,'-',$hari;

echo '<br><br>';

echo 'Soal no 2 B <br><br>';

//$date = '2020-05-01';
$dateBaru = date("m-y-d", strtotime($date));

echo $dateBaru;

echo '<br><br>';

echo 'Soal no 2 C <br><br>';
//$date = '2020-05-01';
$bulan = substr($date,5,2);

$month = date('m', strtotime('+6 month', strtotime($date)));
echo $month;

echo '<br><br>';

echo 'Soal no 2 D <br><br>';
$dari = new DateTime('1998-08-19');
$sampai   = new DateTime('2020-05-01');
echo $dari->diff($sampai)->y;