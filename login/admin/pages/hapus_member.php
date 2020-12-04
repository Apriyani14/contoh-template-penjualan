	<?php
		mysqli_query($koneksi, "DELETE FROM member WHERE id_member='$_GET[id]'");
		echo "<script>alert('Data Berhasil Di Hapus')
								window.location='?page=data_member';
								</script>";
	?>

