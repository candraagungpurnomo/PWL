/* Penggunaan fungsi strstr, strchr dan strrchr untuk mengambil
sebagian string berdasarkan pola (karakter) tertentu. */

<?php
$file = "test.this.txt";
$ext1 = strstr($file, ".");
$ext2 = strchr($file, ".");
$ext3 = strrchr($file, ".");
echo $ext1. "<br>"; //.this.txt
echo $ext2. "<br>"; //.this.txt
echo $ext3; //.txt
?>