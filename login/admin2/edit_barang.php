<?php
	include "koneksi.php";	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Input Data Barang</title>
</head>
<body>
	<?php
		$member = mysqli_query($koneksi,"SELECT * FROM member WHERE id_member='$_GET[id]'");

	?>
<center>
	<form action="" method="POST">
	<table border="0" cellpadding="3">
		<tr>
			<th colspan="3"><center>Input Data Barang</center></th>
		</tr>
		<?php 
			while ($data = mysqli_fetch_array($member)) { 
		?>
	<tr>
			<td>Nama Barang</td>
			<td>:</td>
			<td>
				<input type="hidden" name="id_barang" value="<?php echo $data['id_barang']?>">
				<input type="text" name="nama_barasng" value="<?php echo $data['nama_barang']?>">
			</td>
		</tr>
		<tr>
			<td>Harga Beli</td>
			<td>:</td>
			<td>
				<input type="text" name="harga_beli" value="<?php echo $data['harga_beli']?>">
			</td>
		</tr>
		<tr>
			<td>Harga Jual</td>
			<td>:</td>
			<td>
				<input type="text" name="harga_jual" value="<?php echo $data['harga_jual']?>">
			</td>
		</tr>
		<tr>
			<td>Tanggal</td>
			<td>:</td>
			<td>
				<input type="text" name="tanggal" value="<?php echo $data['tanggal']?>">
			</td>
		</tr>
		<tr>
			<td>Stok</td>
			<td>:</td>
			<td>
				<input type="text" name="stok" value="<?php echo $data['stok']?>">
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
					$query = mysqli_query($koneksi,"UPDATE barang set nama_barang='$_POST[nama_barang]',
						harga_beli='$_POST[harga_beli]',
						harga_jual='$_POST[harga_jual]',
						tanggal='$_POST[tanggal]',
						stok='$_POST[stok]'
						WHERE id_barang='$_POST[id_barang]'");
					echo "<script>alert('Data Berhasil Di UPDATE')
							window.location='barang.php';
							</script>";
				}
			?>
</center>
</body>
</html>