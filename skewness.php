<?php 
	$x = $_POST['x'];
	$mo = $_POST['mo'];
    $sigmafi = $_POST['sigmafi'];
    $xix2 = $_POST['xix2'];
    $n = $_POST['n'];
    $s2 = $sigmafi * pow($xix2,2) / $n;
	$deviasi = sqrt($s2);
	$skewness = ($x - $mo) / $deviasi;
?>

<!DOCTYPE html>
<hmtl>
    <head>
        <title>SKEWNESS</title>
    </head>
    <body>
       <h3>Rumus Menghitung Skewness Data Berkelompok > 30</h3>
        <form method="POST">
            <table>
                <tr>
                    <td>Rata-Rata</td>
                    <td>=</td>
                    <td><input type="text" name="x" value="<?php echo $x;?>"/><br/></td>
                </tr>
                <tr>
                    <td>Jumlah Frekuensi</td>
                    <td>=</td>
                    <td><input type="text" name="sigmafi" value="<?php echo $sigmafi;?>"/><br/></td>
                </tr>
                <tr>
					<td>Jumlah (Xi-Rata)<sup>2</sup></td>
                    <td>=</td>
                    <td><input type="text" name="xix2" value="<?php echo $xix2;?>"/><br/></td>
                </tr>
                <tr>
                    <td>Banyak Data</td>
                    <td>=</td>
                    <td><input type="text" name="n" value="<?php echo $n;?>"/><br/></td>
                </tr>
                <tr>
                    <td>Modus</td>
                    <td>=</td>
                    <td><input type="text" name="mo" value="<?php echo $mo;?>"/><br/></td>
                </tr>
            </table>
            <input type="submit" name="submit" value="SUBMIT"/><br/><br/>
            <?php
                echo "Skewness = ".$skewness;
            ?>
        </form>
    </body>
</hmtl>
