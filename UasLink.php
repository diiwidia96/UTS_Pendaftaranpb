<html>
<body bgcolor="#0099FF"
<?php
echo"<b>PENDAFTARAN PELANGGAN BARU</b><br>";
?>

<?php
echo"<b>PENDAFTARAN PELANGGAN BARU</b><br>";
?>

<?php
if(isset($_POST['send']))
{
echo"Nama Lengkap		:".$_POST["name"]."<br>";
echo"Jenis Kelamin 		:".$_POST["LP"]."<br>";
echo"Email				:".$_POST["mail"]."<br>";
}
?>

<?php
echo"<b>Data Alamat Pengiriman</b><br>";
?>

<?php
if(isset($_POST['send']))
{
echo"Nama Negara		:".$_POST["negara"]."<br>";
echo"Kota				:".$_POST["kota"]."<br>";
echo"Alamat				:".$_POST["address"]."<br>";
echo"Kode Post			:".$_POST["kode"]."<br>";
}
?>

<?php
if(isset($_POST['send']))
{
echo"No.Telepon			:".$_POST["telf"]."<br>";
echo"No.Handphone		:".$_POST["no"]."<br>";
echo"No.Faksimal		:".$_POST["fax"]."<br>";
}
?>

<form action="UasWidia.php" method="post">
<td>
<input type="submit" name="home" value="Home"

