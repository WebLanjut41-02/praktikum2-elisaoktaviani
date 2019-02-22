<!DOCTYPE html>
<html>
<head>
	<title>Update Paket</title>
</head>
<body>
<center>
	<h1>Mengubah Status Paket</h1>
	<form method="POST" action="<?php echo base_url()?>C_update/updatepaket">
		<table>
			<tr>
				<td>Isi Paket</td>
				<td>:</td>
				<td><?php echo $isi; ?></td>
			</tr>
			<tr>
				<td>Tanggal Datang</td>
				<td>:</td>
				<td><?php echo $tanggaldatang; ?></td>
			</tr>
			<tr>
				<td>Penghuni</td>
				<td>:</td>
				<td><?php echo $penghuni ?></td>
			</tr>
			<tr>
				<td>Karyawan</td>
				<td>:</td>
				<td><?php echo $Karyawan;?></td>
			</tr>
			<tr>
				<td>Tanggal Dikembalikan</td>
				<td>:</td>
				<td><?php echo $tanggalkembali;?></td>
			</tr>
		</table>
		<br><tr>
		<input type="submit" name="ubah" value="ubah"><br>
	</form><br>
</center>
</body>
</html>