<!DOCTYPE html>
<html>
<head>
	<title>Input Paket</title>
</head>
<body>
<center>
	<form method="POST" action="<?php echo base_url()?>C_paket/index">
		<table>
			<tr>
				<td>Tanggal Datang</td>
				<td>:</td>
				<td><input type="date" name="tanggaldatang"></td></td>
			</tr>
			<tr>
				<td>Penghuni</td>
				<td>:</td>
				<td><input type="text" name="penghuni"></td>
					</select>
				</td>
			</tr>
			<tr>
				<td>Nama Karyawan</td>
				<td>:</td>
				<td><input type="text" name="karyawan"></td>
			</tr>
			<tr>
				<td>Isi Paket</td>
				<td>:</td>
				<td><input type="text" name="isi"></td>
			</tr>
			<tr>
				<td>Tanggal Ambil</td>
				<td>:</td>
				<td><input type="text" name="tanggalambil"></td>
			</tr>
		</table>
		<input type="submit" name="submit" value="Masuk"><br>
	</form><br>

</center>
</body>
</html>