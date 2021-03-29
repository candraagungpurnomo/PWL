<!DOCTYPE html>
<html>
<title>Latihan minggu 4</title>
<head>
    <style>
        *{
            font-family: arial;
        }
        .submit{
            background-color: darkorange;
            border-radius: 5px 5px;
            width: 70px;
            height: 30px;
        }
        
        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 14px;
        }

        .tabel th{
            color: white;
            background-color: black;
        }
        

        
    </style>
</head>
<body>
    <center>
    <table style="height:50%">
    <form action="" method="post">
         <tr>
            <td><label for="nim">Nim</label></td>
            <td><input type="text"  name="nim" size=30 ></td><br>
         </tr>

         <tr>
            <td>Program Studi</td>
            <td><select name="program_studi">
                 <option value="Pilih Data">Pilih Data</option>
                 <option value="Teknik Informatika S1">A11</option>
                <option value="Sistem Informasi S1">A12</option>
                <option value="Teknik Informatika D3">A22</option>
            </td>
                </select>
        </tr>

        <tr>
           <td><label for="tugas">Nilai Tugas</label></td>
           <td><input type="number"  name="tugas" min="0" max="100" placeholder="      Isian angka maks 100" size=30 value="<?=isset($_POST['tugas']) ? $_POST['tugas'] : ''?>"/></td><br>
        </tr>
        <tr>
            <td><label for="uts">Nilai UTS</label></td>
            <td><input type="number"  name="uts"  min="0" max="100" placeholder="      Isian angka maks 100" size=30 value="<?=isset($_POST['uts']) ? $_POST['uts'] : ''?>"/></td><br>
        </tr>
        <tr>
            <td><label for="uas">Nilai UAS</label></td>
            <td><input type="number"  name="uas"  min="0" max="100" placeholder="      Isian angka maks 100" size=30 value="<?=isset($_POST['uas']) ? $_POST['uas'] : ''?>"/></td><br>
        </tr>
         
         <tr>
            <td>Catatan Khusus :</td>
            <td name="catatan"><?php 
			$program = array('Kehadiran >=70%<br>', 'Interaktif dikelas<br>', 'Tidak terlambat mengumpulkan tugas');
			foreach ($program as $catatan) {
				$checked = isset($_POST['catatan_' . $catatan]) ? ' checked="checked"' : '';
				echo '<table class="checkbox">
						<input type="checkbox" name="catatan_' . $catatan . '"' . $checked . '>' . $catatan . 
					'</table>';
			}
			?>
            </td>
                
         </tr>   
         
         <tr>
            <td></td>
            
            <td><input type="submit" name="submit" value="SIMPAN" class="submit"></td>
            
         </tr>
    </table>
    
   
    <br>
    <table style="width:50%" class="tabel">
    <tr>
        <th>Program <BR>Studi </th>
        <th>NIM</th>
        <th>NILAI Akhir</th>
        <th>STATUS</th>
        <th>Catatan Khusus</th>
    </tr>
    <br>
    <tr>
    <td>
    <?php
    if (isset($_POST['submit'])){
        $ps = $_POST['program_studi'];
        echo "$ps";
    }
   
    ?>
    </td>
    <td><?php
    if (isset($_POST['submit'])){
        $nim = $_POST['nim'];
        echo "$nim";
    }
    ?>
    </td>
    <td style="text-align:center"><?php
    if (isset($_POST['submit'])){
        $akhir = $_POST['tugas']*0.40+$_POST['uts']*0.30+$_POST['uas']*0.30;
        if ($akhir <=100 && $akhir >=85) {
            $akhir="Lulus";
            echo "A";
        }
        if ($akhir <=84 && $akhir >=70) {
            $akhir="Lulus";
            echo "B";
        }
        if ($akhir <=69 && $akhir >=60) {
            $akhir="Lulus";
            echo "C";
        }
        if ($akhir <=59 && $akhir >=50) {
            $akhir="Tidak Lulus";
            echo "D";
        }
        if ($akhir <=50  && $akhir >=0){
            $akhir="Tidak Lulus";
            echo "E";
        }
     
    }
    ?>
    </td>
    <td style="text-align:center"><?php
    if (isset($_POST['submit'])) {
        echo $akhir;
    }
    ?>
    </td>
    <td>
    <?php
    if (isset($_POST['submit'])) {
        $list_catatan = array();
	foreach ($program as $catatan) {
		if ( isset($_POST['catatan_' . $catatan]) )
		{
			$list_catatan[] = $catatan;
		}
	}

	echo '<li>catatan: ' . ($list_catatan ? join($list_catatan, ', ') : '-') . '</li>';
	echo '</ul>';
        }
    
    ?>
  
    </td>
    </tr>
    </table>  
    </center>

    </form>
</body>
</html>