<html>

<head>

    <title>Tugas 04</title>

</head>

<body>

    <h1><center>Rumus - Rumus</center></h1>    

<form action="tugas04-2.php" method="POST">

<center><table border = "2"></center>

<pre>

    <td>Nilai 1</td>

    <td><input name="A" type="text" id="nA" size="20" border="2" value=""/><br/></td>

    </tr>

    <tr>

    <td>Nilai 2</td>

    <td><input name="B" type="text" id="nB" size="20" value=""/></td>

    </tr>

</pre>

<tr><td height="43" colspan="4" align="center" border="2" bordercolor="silver">

    <input type="radio" name="p" value="Segitiga">Segitiga

     <br>

    <input type="radio" name="p" value="Persegi Panjang">Persegi Panjang

</td></tr>

<tr><td height="43" colspan="4" align="center">

<input type="submit" value="Hitung" />

<input type="reset" value="Batal" />

</body>

</html>

Script tugas04-2.php :
<html>

<head>

    <title>Hasil Hitung Rumus</title>

</head>

<br>HASIL HITUNG RUMUS</br>

<?php

if($_POST){

    $rad = $_POST['p']; 

if (($rad == "Persegi Panjang") && (!empty($rad))) {

    $nA = $_POST['A'];

    $nB = $_POST['B'];

function add($nA, $nB) {

    $luas = $nA * $nB;

return $luas;

}

echo "<br>Nilai a adalah = $nA, </br>";

echo "Nilai b adalah = $nB, </br>";

echo "Rumus yang dipilih adalah = ".$rad;

$luas = add($nA, $nB);

echo "<br>Hasil perhitungan rumus = $luas</br>";

}

if (($rad == "Segitiga") && (!empty($rad))){

    $alas = $_POST['A'];

    $tinggi = $_POST['B'];

    $hasil = ($alas * $tinggi)/2 ;

echo "<br><br>Alas = " .$alas;

echo "</br> Tinggi = " .$tinggi;

echo "</br> Jadi (Alas*Tinggi)/2 adalah".$hasil;

echo "<br/>Rumus Yang dipilih =".$rad;

}

}

?>

</td></tr></pre>

</head>

</table></form>