<?php
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "25 kilometers"; // String
$d = "kilometers 25"; // String
$e = "hello"; // String
$f = true;    // Boolean
$g = NULL;    // NULL

$var_dump($a, $b, $c, $d, $e, $f, $g);

$a = (int) $a;
$b = (int) $b;
$c = (int) $c;
$d = (int) $d;
$e = (int) $e;
$f = (int) $f;
$g = (int) $g;

$var_dump($a, $b, $c, $d, $e, $f, $g);

// Apa fungsi var_dump?
/*
var_dump() adalah fungsi PHP yang digunakan untuk menampilkan informasi tentang variabel, termasuk tipe data dan nilai. 
Ini sangat berguna untuk debugging karena memberikan detail lengkap tentang variabel yang sedang diperiksa.
*/
?>