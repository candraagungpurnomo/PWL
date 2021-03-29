/* Penggunaan fungsi chr untuk menampilkan 256 karakter ASCII. */

<?php
echo "Menampilkan bilangan ASCII";
for ($i=1; $i<=256; $i++) {
echo "<br>$i.\t". chr($i);
}
?>