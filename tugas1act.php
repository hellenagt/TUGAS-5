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
<?php
if (empty($_POST['nama']).empty($_POST['email'])){
	header("location:tugas1kosong.php");

} else{
echo "<center>";
date_default_timezone_set("Asia/Jakarta"); 
echo date("D, m-F-Y, g:i a")."<br>";
echo "<br>";
echo "Nama : ".$_POST['nama']."<br>";
echo "Email : ".$_POST['email']."<br>";
echo "<br>";
echo "<br>";
echo "Tunggu beberapa saat untuk mengisi form biodata!";}

?>
<meta http-equiv="refresh" content="2; url=http://localhost/tugasweb5/tugas3.php">
</body>
</html>