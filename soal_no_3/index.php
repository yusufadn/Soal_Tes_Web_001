<?php
echo 'Soal no 3 A <br>';

$a = array(20,10,100,30,15,5);
sort($a);
print_r($a);

echo '<br><br>';

$b = array(20,10,100,30,15,5);
rsort($b);
print_r($b);

echo '<br><br>';

echo 'Soal no 3 B <br>';
$c = array(20,10,100,30,15,5);
$c[6] = 180;
print_r($c);

echo '<br><br>';

echo 'Soal no 3 C <br>';
$d = array(20,10,100,30,15,5);
unset($d[3]);
print_r($d);
