		<!-- banner -->
		<div class="banner_inner">
			<div class="services-breadcrumb">
				<div class="inner_breadcrumb">

					<ul class="short">
						<li>
							<a href="?page=home">Home</a>
							<i>|</i>
						</li>
						<li>Produk</li>
					</ul>
				</div>
			</div>

		</div>
		<!--//banner -->
		<!--/shop-->
		<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
			<div class="container-fluid">
				<div class="inner-sec-shop px-lg-4 px-3">
					<h3 class="tittle-w3layouts my-lg-4 mt-3">Brands & Product's</h3>
					<div class="row">
						<!-- product left -->
						<div class="side-bar col-lg-3">
							
							<!-- deals -->
							<div class="deal-leftmk left-side">
								<h3 class="agileits-sear-head">Special Price</h3>
								<?php
                        			$barang = mysqli_query($koneksi,"SELECT * FROM barang a left join ka b on a.id_kategori=b.id_kategori ORDER BY harga_jual ASC LIMIT 5");
                        			$no=1;
                        			while($data = mysqli_fetch_array($barang)) {
                        			?>
								<div class="special-sec1">
									<div class="img-deals">
										<img src="images/<?php echo $data['foto'] ?>" alt="">
									</div>
									<div class="img-deal1">
										<h3><?php echo $data['nama_barang'] ?></h3>
										<a href="?page=detail_produk"><?php echo number_format($data['harga_jual']) ?></a>
									</div>
									<div class="clearfix"></div>
								</div>
								<?php } ?>
							</div>
							<!-- //deals -->
						</div>
						<!-- //product left -->
						<!--/product right-->
						<div class="left-ads-display col-lg-9">
							<div class="wrapper_top_shop">
								<div class="row">
									<!-- /womens -->
									<?php
                        			$barang = mysqli_query($koneksi,"SELECT * FROM barang a left join ka b on a.id_kategori=b.id_kategori ORDER BY id_barang");
                        			$no=1;
                        			while($data = mysqli_fetch_array($barang)) {
                        			?>
									<div class="col-md-3 product-men women_two shop-gd">
										<div class="product-googles-info googles">
											<div class="men-pro-item">
												<div class="men-thumb-item">
													<img src="images/<?php echo $data['foto'] ?>" class="img-fluid" alt="">
													<div class="men-cart-pro">
														<div class="inner-men-cart-pro">
															<a href="<?= $base_url ?>/detail_produk['nama_barang']" class="link-product-add-cart">Selengkapnya</a>
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
														</div>
														<div class="clearfix"></div>
													</div>
												</div>
											</div>
										</div>
										<?php } ?>
									</div>
							</div>
						</div>
						<!--//product right-->
					</div>				
				</div>
			</div>
		</section>