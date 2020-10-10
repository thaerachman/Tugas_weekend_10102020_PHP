<?php
echo "<h3>Latihan Weekend Tanggal 10 Oktober 2020 </h3>";

echo "7. Pak Andi memiliki sebuah mobil yang panjang jari-jari ban mobil tersebut sebesar 21 cm, <br>";
echo "Saat mobil tersebut berjalan, ban mobil tersebut berputar sebanyak 200 kali. Berapakah jarak yang ditempuh mobil tersebut ! <br>";

$jari_jari = 21;
$phi = 22/7;

$putaran = 200; 
$kelilingban = 2 * $phi * $jari_jari;
$jarak = ($putaran * $kelilingban)/100 ;

echo "Keliling Ban adalah : <b>", $kelilingban,"</b> <br>";
echo "sedangkan jarak tempuh setelah berputar $putaran kali adalah : <b>", $jarak," meter</b> <br><br>";





?>