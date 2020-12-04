<?php
	mysqli_query($koneksi, "DELETE FROM tbl_penjualan WHERE id_penjualan='$_GET[id]'");
	echo "<script>alert('Data Berhasil Di Hapus')
							window.location='?page=data_penjualan';
							</script>";
?>

