/* Penggunaan fungsi nlbr dalam string. */

<form action="" method="post">
Input teks di sini :<br>
<textarea name="input" cols="40" rows="4"></textarea><br>
<input type="submit" name="Submit" value="Proses">
</form>
<?php
if (isset($_POST['Submit'])) {
$txt = $_POST['input'];
echo "<u>Tanpa nl2br() :</u> <br>$txt<br><br>";
echo "<u>Dengan nl2br :</u> <br>". nl2br ($txt);
}
?>