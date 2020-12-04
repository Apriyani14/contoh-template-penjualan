<?php
	mysqli_query($koneksi, "DELETE FROM ka WHERE id_kategori='$_GET[id]'");
	echo "<script>alert('Data Berhasil Di Hapus')
							window.location='?page=data_kategori';
							</script>";
?>

