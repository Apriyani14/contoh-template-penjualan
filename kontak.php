<!-- top Products -->
	<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container">
			<h3 class="tittle-w3layouts text-center my-lg-4 my-4">Contact</h3>
			<div class="inner_sec">
				<p class="sub text-center mb-lg-5 mb-3">We love you are.</p>
				<div class="address row">

					<div class="col-lg-4 address-grid">
						<div class="row address-info">
							<div class="col-md-3 address-left text-center">
								<i class="far fa-map"></i>
							</div>
							<div class="col-md-9 address-right text-left">
								<h6>Alamat</h6>
								<p> Simp Haru, Padang, Sumatera Barat, Indonesia

								</p>
							</div>
						</div>

					</div>
					<div class="col-lg-4 address-grid">
						<div class="row address-info">
							<div class="col-md-3 address-left text-center">
								<i class="far fa-envelope"></i>
							</div>
							<div class="col-md-9 address-right text-left">
								<h6>Email</h6>
								<p>Email:
									<a href="mailto:bajuhits @gmail.com"> bajuhits@gmail.com</a>

								</p>
							</div>

						</div>
					</div>
					<div class="col-lg-4 address-grid">
						<div class="row address-info">
							<div class="col-md-3 address-left text-center">
								<i class="fas fa-mobile-alt"></i>
							</div>
							<div class="col-md-9 address-right text-left">
								<h6>Phone</h6>
								<p><a href="tel:+62 813 7212 0950">+62 813 7212 0950</a></p>

							</div>

						</div>
					</div>
				</div>
				<div class="contact_grid_right">
					<form action="" method="post">
						<div class="row contact_left_grid">
							<div class="col-md-6 con-left">
								<div class="form-group">
									<label class="my-2">Nama Lengkap</label>
									<input class="form-control" type="text" name="nama_lengkap" placeholder="Nama Lengkap" required="">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input class="form-control" type="email" name="email" placeholder="example@example.com" required="">
								</div>
								<div class="form-group">
									<label class="my-2">NO HP</label>
									<input class="form-control" type="text" name="nohp" placeholder="0821xxx" required="">
								</div>
							</div>
							<div class="col-md-6 con-right">
								<div class="form-group">
									<label>Pesan / Masukan</label>
									<textarea name="keterangan" id="textarea" class="form-control" placeholder="" required=""></textarea>
								</div>
								<input type="submit" value="SIMPAN" class="btn btn-primary" name="simpan">
							</div>
							
						</div>
					</form>
					<?php
									if (isset($_POST['simpan'])) {
										$query = mysqli_query($koneksi,"INSERT INTO testimoni
											set id_testimoni='',
											nama_lengkap='$_POST[nama_lengkap]',
											email='$_POST[email]',
											nohp='$_POST[nohp]',
											keterangan='$_POST[keterangan]'");
										echo "<script>alert('Data Berhasil Di Simpan')
												window.location='?page=kontak';
												</script>";
									}
								?>
				</div>
			</div>
		</div>
	</section>
	<div class="contact-map">

		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7978.549034830609!2d100.37416262412478!3d-0.945990497239671!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b91367fb4e4d%3A0xcedb4b363b345e2c!2sSimpang%20Haru%2C%20Kec.%20Padang%20Tim.%2C%20Kota%20Padang%2C%20Sumatera%20Barat!5e0!3m2!1sid!2sid!4v1606963459430!5m2!1sid!2sid" width="100%" height="500px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>