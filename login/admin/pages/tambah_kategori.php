<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tambah Kategori</h1>
                </div>
                <!-- /.col-lg-12 -->'
             </div>

                <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Data Kategori
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="" method="POST" role="form">
                                        <div class="form-group">
                                            <label>Masukan Nama Kategori</label>
                                            <input name="nama_kategori" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <textarea name="keterangan" class="form-control"></textarea>
                                        <br>
                                        <input type="submit" value="SIMPAN" class="btn btn-primary" name="simpan">
                                        <input type="reset" value="BATAL" class="btn btn-warning">
                                    </form>
                                </div>
                          
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <?php
									if (isset($_POST['simpan'])) {
										$query = mysqli_query($koneksi,"INSERT INTO ka
											set id_kategori='',
											nama_kategori='$_POST[nama_kategori]',
											keterangan='$_POST[keterangan]'");
										echo "<script>alert('Data Berhasil Di Simpan')
												window.location='?page=data_kategori';
												</script>";
									}
								?>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
</div>