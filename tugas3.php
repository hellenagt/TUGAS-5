<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
</head>
<style type="text/css">
	body {background-color: #B0E0E6; 
	font-family: calibri }
</style>
<body>
<h1><center>BIODATA PRIBADI</center></h1>
<br>
	<form method="POST" action="act.php">
		<table width="400" align = "center" cellpadding="2" cellspacing="2">
			<tr>
				<td width="130">NIM</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td width="130">Nama Lengkap</td>
				<td><input type="text" name="nl"></td>
			</tr>
			<tr>
				<td width="130">Tempat Lahir</td>
				<td><input type="text" name="tmpt"></td>
			</tr>
			<tr>
				<td width="130">Tanggal Lahir</td>
				<td><input type="text" name="tgl"></td>
			</tr>
			<tr>
				<td width="130">Jenis Kelamin</td>
				<td><input type="radio" name="jk" value="Laki-Laki"> laki-laki
					<input type="radio" name="jk" value="Perempuan"> perempuan</td>
			</tr>
			<tr>
				<td width="130">Agama</td>
				<td>
				<select name="ag">
				<option value="Islam"> Islam </option>
				<option value="Kristen"> Kristen </option>
				<option value="Katolik"> Katolik </option>
				<option value="Hindu"> Hindu </option>
				<option value="Budha"> Budha </option>
				</select>
				</td>
			</tr>
			<tr>
				<td width="130">Alamat</td>
				<td><input type="text" name="almt"></td>
			</tr>
			<tr>
				<td width="130">No. Telepon</td>
				<td><input type="text" name="tlp"></td>
			</tr>
			<tr>
				<td width="130">Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			</tr>
			<tr>
				<td width="130">Hobby</td>
				<td><input type="text" name="hbby"></td>
			</tr>
			<tr>
				<td width="130">Pekerjaan</td>
				<td><input type="text" name="pkrja"></td>
			</tr>
			<tr>
				<td align="center" colspan="3">
					<br>
					<input type="submit" name="btnlogin" value="Input">
					<input type="reset" name="reset" value="Reset">
				</td>
			</tr>
		</table>
	</form>

</body>
</html>