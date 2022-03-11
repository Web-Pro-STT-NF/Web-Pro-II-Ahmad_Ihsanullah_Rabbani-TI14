<?php 

//membuat variable
//$namavariable = nilaiVariable

$name = "Ahmad Ihsanullah Rabbani";
$age = 18;
$weight = 59.3;

// menampilkan variable
echo "Name " . $name;
echo "<br>Umur $age";
echo "<br>Berat $weight";

//manampilkan variable sistem

echo "<br> Document Root : " . $_SERVER['DOCUMENT_ROOT'];
echo "<br> Nama File : " . $_SERVER['PHP_SELF'];

//membuat vaariable contstant
//define("nama variable", isi variable)
define("PHI", 3.14);
$r = 10;
$luas = PHI * $r;
echo "<br>Luas Lingkaran : $luas cm";