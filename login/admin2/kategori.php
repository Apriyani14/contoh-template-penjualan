<?php
	include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Kategori</title>
</head>
<body>
	<h2>Data Kategori</h2>
		<a href="index.php"><< Kembali |</a>
		<a href="tambah_kategori.php">+ Tambah Data</a>
		<br>
		<?php
			$kategori = mysqli_query($koneksi,"SELECT * FROM ka");
			$no=1;
		?>
		<table border="1" >
			<tr>
				<th>No</th>
				<th>Nama Kategori</th>
				<th>Keterangan</th>
				<th>Aksi</th>
			</tr>
		<?php while ($data = mysqli_fetch_array($kategori)) {
		?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $data['nama_kategori']?></td>
				<td><?php echo $data['keterangan']?></td>
				<td><a href="edit_kategori.php?id=<?php echo $data['id_kategori']  ?>">Edit</a>|<a href="hapus_kategori.php?id=<?php echo $data['id_kategori']  ?>">Hapus</a></td>
			</tr>
		<?php } ?>	
		</table>

</body>
</html>