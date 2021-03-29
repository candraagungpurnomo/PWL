/* Penggunaan fungsi substr untuk memotong string */

<form action="" method="post">
NIM Anda :
<input type="text" name="txtnim"><br>
<input type="submit" name="Submit" value="Proses">
</form>
<?php
if (isset($_POST['Submit'])) {
$nim = $_POST['txtnim'];
$a = substr ($nim, 2, 2);
switch($a) {
case '11' : $jurusan = "Teknik Informatika";
break;
case '22' : $jurusan = "Sistem Informasi";
break;
case '33' : $jurusan = "Sistem Komputer";
break;
case '44' : $jurusan = "Komputerisasi Akuntansi";
break;
default : $jurusan = "Salah jurusan";
}
echo "Nim Anda : $nim<br>";
echo "Jurusan Anda : $jurusan";
}
?>