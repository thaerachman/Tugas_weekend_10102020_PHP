<?php
echo "<h3>Latihan Weekend Tanggal 10 Oktober 2020 </h3>";

echo "6. Sebuah roda sepeda yang berbentuk lingkaran memiliki diameter sebesar 14 cm, <br>";
echo "Maka luas dan keliling roda tersebut adalah! <br>";

$diameter = 14;
$phi = 22/7;
$luasroda =(1/4) * $phi * pow($diameter,2);
$kelilingroda = $phi * $diameter;
echo "jadi Luas dari roda tersebut adalah : <b>", $luasroda,"</b> <br>";
echo "sedangkan keliling dari roda tersebut adalah : <b>", $kelilingroda,"</b> <br><br>";

?>