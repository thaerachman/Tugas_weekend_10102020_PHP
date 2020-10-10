<?php
echo "<h3>Latihan Weekend Tanggal 10 Oktober 2020 </h3>";

echo "3. Sebuah Tabung memiliki jari-jari dan tinggi masing-masing 10cm dan 30cm, <br>";
echo "lalu tentukanlah berapa Volume dari tabung tersebut ! <br>";
$jari2 = 10;
$tinggi = 30;
$phi = 22/7;

$voltabung = $phi * pow($jari2,2) * $tinggi;

echo "jadi Volume dari tabung tersebut adalah : <b>", round($voltabung),"</b> <br><br>";

?>