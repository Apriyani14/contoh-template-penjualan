<?php
	include "koneksi.php";	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Input Data Kategori</title>
</head>
<body>
<center>
	<form action="" method="POST">
	<table border="0" cellpadding="3">
		<tr>
			<th colspan="3"><center>Input Data Kategori</center></th>
		</tr>
		<tr>
			<td>Nama Kategori</td>
			<td>:</td>
			<td>
				<input type="text" name="nama_kategori" >
			</td>
		</tr>
		<tr>
			<td>Keterangan</td>
			<td>:</td>
			<td><textarea type="text" name="keterangan"></textarea></td>
		</tr>
		<tr>
			<td colspan="3"><center><input type="submit" name="edit" value="Tambah"></center></td>
		</tr>

	</table>
		</form>
			<?php
				if (isset($_POST['edit'])) {
					$query = mysqli_query($koneksi,"INSERT INTO ka set id_kategori='',
						nama_kategori='$_POST[nama_kategori]',
						keterangan='$_POST[keterangan]'");
					echo "<script>alert('Data Berhasil Di Simpan')
							window.location='kategori.php';
							</script>";
				}
			?>
</center>
</body>
</html>