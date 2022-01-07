<html>
<head>
    <title>Form Registrasi</title>
</head>
    <h1>Form Registrasi</h1>
<form action="dataregistrasi.php" method="POST">
    <br>Isi data dibawah ini :</br>
<table border="0" width="500">
    <tr><td>Nama</td>
<td> </td>
<td><input type="text"name="name" size="22"placeholder="Masukan Nama"></td> 
</tr>
    <tr><td>Alamat</td>
<td> </td>
<td><textarea name="addr" rows="5" cols="45"placeholder="Masukan Alamat"></textarea></td>
</tr>
    <tr><td>Tempat Lahir</td>
<td> </td>
<td><input type="text"name="pob" size="22"placeholder="Masukan Tempat Lahir"></td>
</tr>
    <tr><td>Tanggal Lahir</td>
<td> </td>
<td><input type="text"name="dob" size="22"placeholder="Masukan Tanggal Lahir"></td>
</tr>
    <tr><td>Jenis Kelamin</td>
<td> </td>
    <td><input type="radio"name="gender" value="Laki-Laki">Laki-Laki <input type="radio"name="gender" value="Perempuan">Perempuan</td>
    <tr><td>Pendidikan</td>
<td> </td>
    <td><select name="edu">
<option value="-Pilih-"">
<option value="SMP">SMP</option>
<option value="SMA">SMA</option>
<option value="SMK">SMK</option>
<option value="D1">D1</option>
<option value="D2">D2</option>
<option value="D3">D3</option>
<option value="D4">D1</option>
<option value="S1">S1</option>
<option value="S2">S2</option>
</select>
<tr><td><input type="submit" value="Submit">   <input type="reset" value="Cancel"></td></tr>
</body>
</html>
Script dataregistrasi.php :
<html>
<head>
            <title>TUGAS 06</title>
</head>
<body >
<tr>
    <h1>Data Registrasi<h1></td>
</tr>
<table width="500" border="2">
<?php
error_reporting(0);
$name=$_POST['name'];
$addr=$_POST['addr'];
$pob=$_POST['pob'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$edu=$_POST['edu'];
?>
    <td>Nama</td><td><?php echo $name; ?></td>
</tr>
    <td>Alamat</td><td><?php echo $addr; ?></td>
</tr>
    <td>Tempat Lahir</td><td><?php echo $pob; ?></td>
</tr>
    <td>Tanggal Lahir</td><td><?php echo $dob; ?></td>
</tr>
    <td>Jenis Kelamin</td><td><?php echo $gender; ?></td></tr>
    <td>Pendidikan</td><td><?php echo $edu; ?></td>
</table>
</h1>
<a href="formregistrasi.php">Back to Home</a>
</body>
</html> 