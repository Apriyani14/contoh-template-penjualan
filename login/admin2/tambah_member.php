<?php
	include "koneksi.php";	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Input Data Member</title>
</head>
<body>
<center>
	<form action="" method="POST">
	<table border="0" cellpadding="3">
		<tr>
			<th colspan="3"><center>Input Data Member</center></th>
		</tr>
		<tr>
			<td>Nama Member</td>
			<td>:</td>
			<td>
				
				<input type="text" name="nama_member" >
			</td>
		</tr>
		<tr>
			<td>NO HP</td>
			<td>:</td>
			<td>
				
				<input type="text" name="nohp" >
			</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><textarea type="text" name="alamat"></textarea></td>
		</tr>
		<!-- <tr>
			<td>Tanggal</td>
			<td>:</td>
			<td>
				
				<input type="date" name="tanggal" >
			</td>
		</tr> -->
		<tr>
			<td>Email</td>
			<td>:</td>
			<td>
				
				<input type="text" name="email" >
			</td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>
				<select name="jenis_kelamin"> 
				<option>-Jenis Kelamin-</option>
				<option value="laki">Laki-Laki</option>
				<option value="perempuan">Perempuan</option>
		</select>
			</td>
		</tr>
		<tr>
			<td>Status</td>
			<td>:</td>
			<td>
				<select name="status"> 
				<option>-Status-</option>
				<option value="aktif">Aktif</option>
				<option value="tidak_aktif">Tidak Aktif</option>
		</select>
			</td>
		</tr>
		
		<tr>
			<td colspan="3"><center><input type="submit" name="tambah" value="TAMBAH"></center></td>
		</tr>

	</table>
		</form>
			<?php
				if (isset($_POST['tambah'])) {
					$query = mysqli_query($koneksi,"INSERT INTO member set id_member='',
						nama_member='$_POST[nama_member]',
						nohp='$_POST[nohp]',
						alamat='$_POST[alamat]',
						-- tanggal='$_POST[tanggal]',
						email='$_POST[email]',
						jenis_kelamin='$_POST[jenis_kelamin]',
						tanggal='$_POST[tanggal]'");
					echo "<script>alert('Data Berhasil Di TAMBAH')
							window.location='member.php';
							</script>";
				}
			?>
</center>
</body>
</html>