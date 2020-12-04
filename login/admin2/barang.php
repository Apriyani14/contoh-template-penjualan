<?php
	include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Barang</title>
</head>
<body>
	<h2>Data Barang</h2>
		<a href="index.php"><< Kembali |</a>
		<a href="tambah_barang.php">+ Tambah Data</a>

		<br>
		<?php
			$barang = mysqli_query($koneksi,"SELECT * FROM barang a left join ka b on a.id_kategori=b.id_kategori");
			$no=1;
		?>
		<table border="1" >
			<tr>
				<th>No</th>
				<th>Kode Barang</th>
				<th>Nama Barang</th>
				<th>Id Kategori</th>
				<th>Harga Beli</th>
				<th>Harga Jual</th>
				<th>Tanggal</th>
				<th>Stok</th>
				<th>Aksi</th>
			</tr>
		<?php while ($data = mysqli_fetch_array($barang)) {
		?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $data['kode_barang']?></td>
				<td><?php echo $data['nama_barang']?></td>
				<td><?php echo $data['nama_kategori']?></td>
				<td><?php echo $data['harga_beli']?></td>
				<td><?php echo $data['harga_jual']?></td>
				<td><?php echo $data['tanggal']?></td>
				<td><?php echo $data['stok']?></td>
				<td><a href="edit_barang.php?id=<?php echo $data['id_barang']  ?>">Edit</a>|<a href="hapus_barang.php?id=<?php echo $data['id_barang']  ?>">Hapus</a></td>
			</tr>
		<?php } ?>	
		</table>

</body>
</html>