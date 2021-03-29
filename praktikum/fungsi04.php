/* Passing by value dalam fungsi. */

<?php
function tambah_string ($str) {
$str = $str . ", Semarang";
return $str;
}
//
$str = "Universitas Dian Nuswantoro";
echo "\$str = $str<br>";
echo tambah_string ($str). "<br>";
echo "\$str = $str<br>";
?>