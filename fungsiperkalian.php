<?php
//pembuatan fungsi
function perkalian($angka1, $angka2)
{
$a= $angka1;
$b= $angka2;
$hasil= $a*$b;
return $hasil;
}
//pemanggilan fungsi
$hasil=perkalian(10,3);
echo "Perkalian 10 x 3 adalah $hasil";
echo "<br />";
echo "Perkalian 15 x 5 adalah ".perkalian(15,5);
?>