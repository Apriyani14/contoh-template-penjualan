<?php
	include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Member</title>
</head>
<body>
	<h2>Data Member</h2>
		<a href="index.php"><< Kembali |</a>
		<a href="tambah_member.php">+ Tambah Data</a>

		<br></br>
		<?php
			$member = mysqli_query($koneksi,"SELECT * FROM member");
			$no=1;
		?>
		
		<table border="1" >
			<tr>
				<th>No</th>
				<th>Nama Member</th>
				<th>NoHp</th>
				<th>Alamat</th>
				<th>Email</th>
				<th>Jenis Kelamin</th>
				<th>Status</th>
				<th>Aksi</th>
			</tr>
		<?php while ($data = mysqli_fetch_array($member)) {
		?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $data['nama_member']?></td>
				<td><?php echo $data['nohp']?></td>
				<td><?php echo $data['alamat']?></td>
				<td><?php echo $data['email']?></td>
				<td><?php echo $data['jenis_kelamin']?></td>
				<td><?php echo $data['status']?></td>
				<td><a href="edit_member.php?id=<?php echo $data['id_member']  ?>">Edit</a>|<a href="hapus_member.php?id=<?php echo $data['id_member']  ?>">Hapus</a></td>
			</tr>
		<?php } ?>	
		</table>

</body>
</html>