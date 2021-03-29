/* Penggunaan fungsi implode untuk menggabungkan array menjadi
string. */

<?php
$buahan = array('mangga','jeruk','rambutan','apel','nanas');
$buah = implode(",", $buahan);
echo "Saya suka buah ". $buah;
// mangga,jeruk,rambutan,apel,nanas
?>
