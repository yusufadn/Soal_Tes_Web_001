<?php
echo 'Soal no 5  A<br><br>';

$buah = array(
    array( "NAMA" => "JERUK", "HARGA" => 5000, "RASA" => "ASAM"),
    array( "NAMA" => "MANGGA", "HARGA" => 20000, "RASA" => "MANIS"),
    array( "NAMA" => "APEL", "HARGA" => 5000, "RASA" => "MANIS"),
    array( "NAMA" => "DURIAN", "HARGA" => 50000, "RASA" => "MANIS"),
    array( "NAMA" => "DUKU", "HARGA" => 10000, "RASA" => "ASAM"),
    array( "NAMA" => "NANAS", "HARGA" => 5000, "RASA" => "ASAM")
    );

$buah[6] = array('NAMA' => 'PISANG', 'HARGA' => 5000, 'RASA' => 'MANIS'); 
rsort($buah);
print_r($buah);

echo '<br><br>';

echo 'Soal no 5  B<br><br>';
foreach($buah as $b)
{
    if (strpos($b['NAMA'], 'K') == true) {
        echo $b['NAMA'],'<br>';
    }
}

echo '<br><br>';

echo 'Soal no 5  C<br><br>';
foreach($buah as $b)
{
    if ($b['HARGA'] < 10000 && $b['RASA'] == 'MANIS') {
        echo $b['NAMA'],'<br>';
    }
}
