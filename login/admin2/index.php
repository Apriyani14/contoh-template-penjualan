<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Administrator</title>
</head>
<body>
		<h2>Menu Utama</h2>
		<div>
			<ul>
				<?php if($_SESSION['level']=='Admin') {
				?>
				<li><a href="kategori.php">Data Kategori</a></li>
				<li><a href="barang.php">Data Barang</a></li>
				<li><a href="member.php">Data Member</a></li>
			<?php } ?>
			<?php if($_SESSION['level']=='Pimpinan') {
			 ?>
				<li><a href="#">Data Penjualan</a></li>
			</ul>
			<?php } ?><br></br>
			<ul>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</div>

</body>
</html>