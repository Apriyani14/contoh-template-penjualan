<!DOCTYPE html>
<html>
<head>
	<title>Laporan Barang</title>
</head>
<body>
 
	<center> 
 
		
 
		<br/><br/><br/>
 
		<form method="get">
			<label>PILIH TANGGAL</label>
			<input type="date" name="tanggal">
			<input type="submit" value="FILTER">
		</form>
 
		<br/> <br/>
 
		<table border="1">
		<tr>
            <th>No</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Nama Kategori</th>
            <th>Satuan</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
            <th>Tanggal</th>
            <th>Stok</th>
            <th>Aksi</th>
            </tr>
			<?php 
			$no = 1;
 
			if(isset($_GET['tanggal'])){
				$tgl = $_GET['tanggal'];
				$sql = mysqli_query($koneksi,"select * from barang where tanggal='$tgl'");
			}else{
				$sql = mysqli_query($koneksi,"select * from barang");
			}
			
			while($data = mysqli_fetch_array($sql)){
			?>
			<tr class="odd gradeX">
        		<td><?php echo $no++ ?></td>
                <td><?php echo $data['kode_barang'] ?></td>
                <td><?php echo $data['nama_barang'] ?></td>
                <td><?php echo $data['id_kategori'] ?></td>
                <td><?php echo $data['satuan'] ?></td>
                <td><?php echo $data['harga_beli'] ?></td>
                <td><?php echo $data['harga_jual'] ?></td>
                <td><?php echo $data['tanggal'] ?></td>
                <td><?php echo $data['stok'] ?></td>
                </tr>
			<?php 
			}
			?>
		</table>
 
	</center>
</body>
</html>