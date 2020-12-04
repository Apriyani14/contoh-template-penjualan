<?php
	include "koneksi.php";	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Input Data Member</title>
</head>
<body>
	<?php
		$member = mysqli_query($koneksi,"SELECT * FROM member WHERE id_member='$_GET[id]'");

	?>
<center>
	<form action="" method="POST">
	<table border="0" cellpadding="3">
		<tr>
			<th colspan="3"><center>Input Data Member</center></th>
		</tr>
		<?php 
			while ($data = mysqli_fetch_array($member)) { 
		?>
	<tr>
			<td>Nama Member</td>
			<td>:</td>
			<td>
				<input type="hidden" name="id_member" value="<?php echo $data['id_member']?>">
				<input type="text" name="nama_member" value="<?php echo $data['nama_member']?>">
			</td>
		</tr>
		<tr>
			<td>No Hp</td>
			<td>:</td>
			<td>
				<input type="text" name="nohp" value="<?php echo $data['nohp']?>">
			</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>
				<input type="text" name="alamat" value="<?php echo $data['alamat']?>">
			</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td>
				<input type="text" name="email" value="<?php echo $data['email']?>">
			</td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>
				<select name="jeniskelamin"> 
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
			<td colspan="3"><center><input type="submit" name="edit" value="UPDATE"></center></td>
		</tr>

	</table>
<?php } ?>
		</form>
			<?php
				if (isset($_POST['edit'])) {
					$query = mysqli_query($koneksi,"UPDATE member set nama_member='$_POST[nama_member]',
						nohp='$_POST[nohp]',
						alamat='$_POST[alamat]',
						email='$_POST[email]',
						jeniskelamin='$_POST[jeniskelamin]'
						WHERE id_member='$_POST[id_member]'");
					echo "<script>alert('Data Berhasil Di UPDATE')
							window.location='member.php';
							</script>";
				}
			?>
</center>
</body>
</html>