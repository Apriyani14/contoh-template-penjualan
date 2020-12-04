<div class="banner">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active">
						<div class="carousel-caption text-center">
							<h3>Men's Eyewear
								<span>Dapatkan Diskon 50%</span>
							</h3>
							<a href="?page=produk" class="btn btn-sm animated-button gibson-three mt-4">Beli Sekarang</a>
						</div>
					</div>
					<div class="carousel-item item2">
						<div class="carousel-caption text-center">
							<h3>Women's Eyewear
								<span>Kualitas Terbaik</span>
							</h3>
							<a href="?page=produk" class="btn btn-sm animated-button gibson-three mt-4">Beli Sekarang</a>

						</div>
					</div>
					
					
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<!--//banner -->
		</div>
	</div>
<!--//banner-sec-->
	<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container-fluid">
			<div class="inner-sec-shop px-lg-4 px-3">
				<h3 class="tittle-w3layouts my-lg-4 my-4">Kekinian</h3>
				<div class="row">
					<!-- /womens -->
					<?php
                        $barang = mysqli_query($koneksi,"SELECT * FROM tbl_barang a left join tbl_kategori b on a.id_kategori=b.id_kategori ORDER BY id_barang LIMIT 4");
                        $no=1;
                        while($data = mysqli_fetch_array($barang)) {
                        ?>
					<div class="col-md-3 product-men women_two">
						<div class="product-googles-info googles">
							<div class="men-pro-item">
								<div class="men-thumb-item">
									<img width="100px" src="<?= $base_url ?>/images/<?php echo $data['foto'] ?>" class="img-fluid" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="?page=detail_produk&id=<?php  echo $data['id_barang']  ?>" 
											class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<span class="product-new-top">New</span>
								</div>
								<div class="item-info-product">
									<div class="info-product-price">
										<div class="grid_meta">
											<div class="product_price">
												<h4>
													<a href="?page=detail_produk&id=<?php  echo $data['id_barang']  ?>"><?php echo $data['nama_barang'] ?></a>
												</h4>
												<div class="grid-price mt-2">
													<span class="money "><?php echo number_format($data['harga_jual']) ?></span>
												</div>
											</div>
											
										</div>
										
										<div class="googles single-item hvr-outline-out">
											<form action="#" method="post">
												<input type="hidden" name="cmd" value="_cart">
												<input type="hidden" name="add" value="1">
												<input type="hidden" name="googles_item" value="Farenheit">
												<input type="hidden" name="amount" value="575.00">
												<button type="submit" class="googles-cart pgoogles-cart">
													<i class="fas fa-cart-plus"></i>
												</button>

												
											</form>

										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
				<!-- //womens -->
				<!-- /mens -->
				
				<!--//row-->
				<!--/meddle-->
				<div class="row">
					<div class="col-md-12 middle-slider my-4">
						<div class="middle-text-info ">

							<h3 class="tittle-w3layouts two text-center my-lg-4 mt-3">Summer Flash sale</h3>
							<div class="simply-countdown-custom" id="simply-countdown-custom"></div>

						</div>
					</div>
				</div>
				<!--//meddle-->
				<!--/slide-->
				<div class="slider-img mid-sec">
					
				</div>
				<!-- /testimonials -->

				<div class="testimonials py-lg-4 py-3 mt-4">
					<div class="testimonials-inner py-lg-4 py-3">
						<h3 class="tittle-w3layouts text-center my-lg-4 my-4">Tesimonials</h3>
						<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
							
							<div class="carousel-inner" role="listbox">
								
								<div class="carousel-item active">
									<div class="testimonials_grid text-center">
										<h3>TESTIMONI</h3>
											<span>Customer</span>
										
									</div>
								</div>
								
								<?php 
								$barang = mysqli_query($koneksi,"SELECT * FROM testimoni ORDER BY id_testimoni DESC LIMIT 6");
								$no=1;
                       			while($data = mysqli_fetch_array($barang)) {
							 	?>
								<div class="carousel-item">
									<div class="testimonials_grid text-center">
										<h3><?php echo $data['nama_lengkap'] ?>
											<span>Customer</span>
										</h3>
										<label><?php echo $data['email'] ?></label>
										<p><?php echo $data['keterangan'] ?>
									</div>
								</div>
								<?php } ?>

								<a class="carousel-control-prev test" href="#carouselExampleControls" role="button" data-slide="prev">
									<span class="fas fa-long-arrow-alt-left"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next test" href="#carouselExampleControls" role="button" data-slide="next">
									<span class="fas fa-long-arrow-alt-right" aria-hidden="true"></span>
									<span class="sr-only">Next</span>

								</a>
							</div>
						</div>
					</div
				</div>
				<!-- //testimonials -->
				<div class="row galsses-grids pt-lg-5 pt-3">
					<div class="col-lg-6 galsses-grid-left">
						<figure class="effect-lexi">
							<img src="images/banner4.jpg" alt="" class="img-fluid">
							<figcaption>
								<h3>Editor's
									<span>Pick</span>
								</h3>
								<p> Express your style now.</p>
							</figcaption>
						</figure>
					</div>
					<div class="col-lg-6 galsses-grid-left">
						<figure class="effect-lexi">
							<img src="images/banner1.jpg" alt="" class="img-fluid">
							<figcaption>
								<h3>Editor's
									<span>Pick</span>
								</h3>
								<p>Express your style now.</p>
							</figcaption>
						</figure>
					</div>
				</div>
				<!-- /grids -->
				<div class="bottom-sub-grid-content py-lg-5 py-3">
					<div class="row">
						<div class="col-lg-4 bottom-sub-grid text-center">
							<div class="bt-icon">

								<span class="far fa-hand-paper"></span>
							</div>

							<h4 class="sub-tittle-w3layouts my-lg-4 my-3">Kualitas terbaik</h4>
							<p>Produk ini sangat mengutakan kekuatan bahan</p>
							<p>
								<a href="?page=produk" class="btn btn-sm animated-button gibson-three mt-4">Beli Sekarang</a>
							</p>
						</div>
						<!-- /.col-lg-4 -->
						<div class="col-lg-4 bottom-sub-grid text-center">
							<div class="bt-icon">
								<span class="fas fa-rocket"></span>
							</div>

							<h4 class="sub-tittle-w3layouts my-lg-4 my-3">Cepat Sampai</h4>
							<p>Kami akan selalu menjaga waktu pengiriman barang </p>
							<p>
								<a href="?page=produk" class="btn btn-sm animated-button gibson-three mt-4">Beli Sekarang</a>
							</p>
						</div>
						<!-- /.col-lg-4 -->
						<div class="col-lg-4 bottom-sub-grid text-center">
							<div class="bt-icon">
								<span class="far fa-sun"></span>
							</div>

							<h4 class="sub-tittle-w3layouts my-lg-4 my-3">Packing</h4>
							<p>Dalam packing barang kami akan melakukan dengan standar kami.</p>
							<p>
								<a href="?page=produk" class="btn btn-sm animated-button gibson-three mt-4">Beli Sekarang</a>
							</p>
						</div>
						<!-- /.col-lg-4 -->
					</div>
				</div>
				<!-- //grids -->
				<!-- /clients-sec -->
				<div class="testimonials p-lg-5 p-3 mt-4">
					<div class="row last-section">
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-gift"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>Genuine Product</h3>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
							</div>
						</div>
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-shield-alt"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>Secure Products</h3>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
							</div>
						</div>
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-dollar-sign"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>Cash on Delivery</h3>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
							</div>
						</div>
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-truck"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>Easy Delivery</h3>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
							</div>
						</div>
					</div>
				</div>
				<!-- //clients-sec -->
			</div>
		</div>
	</section>z
	