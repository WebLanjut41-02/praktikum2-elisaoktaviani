<!DOCTYPE html>
<html>
<head>
	<title>Input Penghuni</title>
</head>
<body>
<center>
	<h1>Tambah Daftar Penghuni</h1>
	<form method="POST" enctype="multipart/form-data" action="<?php echo base_url()?>C_penghuni/create_penghuni">
		<table>
			<tr>
				<td>Nama Lengap</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Unit</td>
				<td>:</td>
				<td><input type="text" name="unit"></td>
			</tr>
			<tr>
				<td>No. KTP</td>
				<td>:</td>
				<td><input type="text" name="noktp"></td>
			</tr>
		</table><br>
		<input type="submit" name="submit" value="Simpan"><br>
	</form>
</center>
</body>
</html>