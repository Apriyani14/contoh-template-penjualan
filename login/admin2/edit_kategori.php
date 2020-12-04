<?php
	include "koneksi.php";	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Input Data Kategori</title>
</head>
<body>
	<?php
		$kategori = mysqli_query($koneksi,"SELECT * FROM ka WHERE id_kategori='$_GET[id]'");

	?>
<center>
	<form action="" method="POST">
	<table border="0" cellpadding="3">
		<tr>
			<th colspan="3"><center>Input Data Kategori</center></th>
		</tr>
		<?php 
			while ($data = mysqli_fetch_array($kategori)) { 
		?>
	<tr>
			<td>Nama Kategori</td>
			<td>:</td>
			<td>
				<input type="hidden" name="id_kategori" value="<?php echo $data['id_kategori']?>">
				<input type="text" name="nama_kategori" value="<?php echo $data['nama_kategori']?>">
			</td>
		</tr>
		<tr>
			<td>Keterangan</td>
			<td>:</td>
			<td><textarea type="text" name="keterangan" ><?php echo $data['keterangan']?></textarea></td>
		</tr>
		<tr>
			<td colspan="3"><center><input type="submit" name="edit" value="UPDATE"></center></td>
		</tr>

	</table>
<?php } ?>
		</form>
			<?php
				if (isset($_POST['edit'])) {
					$query = mysqli_query($koneksi,"UPDATE ka set nama_kategori='$_POST[nama_kategori]',keterangan='$_POST[keterangan]' WHERE id_kategori='$_POST[id_kategori]'");
					echo "<script>alert('Data Berhasil Di Edit')
							window.location='kategori.php';
							</script>";
				}
			?>
</center>
</body>
</html>