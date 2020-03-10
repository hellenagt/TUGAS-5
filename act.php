<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	body {background-color: #B0E0E6; 
	font-family: calibri }
</style>
<body>
	<h1><CENTER>BIODATA DIRI</CENTER></h1>
<?php
if (empty($_POST['nim']).empty($_POST['nl']).empty($_POST['tmpt']).empty($_POST['tgl']).empty($_POST['jk']).empty($_POST['ag']).empty($_POST['tlp']).empty($_POST['email']).empty($_POST['hbby']).empty($_POST['pkrja'])){
	header("location:kosong3.php");
} else {
echo "<br>";
echo "<center>NIM : ".$_POST['nim']."<br>";
echo "Nama Lengkap : ".$_POST['nl']."<br>";
echo "Tempat Lahir : ".$_POST['tmpt']."<br>";
echo "Tanggal Lahir : ".$_POST['tgl']."<br>";
echo "Jenis Kelamin : ".$_POST['jk']."<br>";
echo "Agama : ".$_POST['ag']."<br>";
echo "No. Telepon : ".$_POST['tlp']."<br>";
echo "Email : ".$_POST['email']."<br>";
echo "Hobby : ".$_POST['hbby']."<br>";
echo "Pekerjaan : ".$_POST['pkrja']."<br>";
}
?>
</body>
</html>


