<?php 
function luas_segitiga($alas,$tinggi){

return $hasil = $alas*$tinggi/2;

}

function keliling($sisi1,$sisi2,$sisi3){

return  $hasil1 = $sisi1+$sisi2+$sisi3;

}


echo "Rumus Luas Segitiga : Alas X Tinggi / 2 <br> Rumus Keliling Segitiga Adalah SISI1+SISI2+SISI3";
echo "Alas : 12 M <br> Tinggi : 34 M";
Echo "<br>Luas Segitiga Adalah :";
echo luas_segitiga(12,34)."M<sup>2</sup><br>";
echo "<br><br> Sisi 1 = 12 M <br> Sisi 2 = 34 M <br> Sisi 3 = 32 M <br>";
Echo "Keliling Segitiga Adalah :";
echo "";
echo keliling(12,34,32)."M<sup>2</sup>";
?>