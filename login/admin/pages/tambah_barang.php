<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tambah Barang</h1>
                </div>
                <!-- /.col-lg-12 -->'
             </div>

                <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Data Barang
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="" method="POST" role="form">
                                        <div class="form-group">
                                            <label>Masukan Nama Barang</label>
                                            <input name="nama_barang" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label>Masukan Nama Kategori</label><br>
                                            <select name="nama_kategori">
                                            <?php
                                            $query = mysqli_query($koneksi, "select * from ka");

                                            while ($data = mysqli_fetch_assoc($query)) {
                                            echo "<option value=\"$data[id_kategori]\">$data[nama_kategori]</option>";
                                            }
                                            ?>  
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Masukan Harga Beli</label>
                                            <input name="harga_beli" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label>Masukan Harga Jual</label>
                                            <input name="harga_jual" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label>Masukan Tanggal</label>
                                            <input type="date" name="tanggal" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label>Masukan Stok</label>
                                            <input name="stok" class="form-control" >
                                        </div>
                                        <br>
                                        <input type="submit" value="SIMPAN" class="btn btn-primary" name="tambah">
                                        <input type="reset" value="BATAL" class="btn btn-warning">
                                    </form>
                                </div>
                          
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <?php
                                if (isset($_POST['tambah'])) {
                                $query = mysqli_query($koneksi,"INSERT INTO barang set id_barang='',
                                kode_barang='$_POST[kode_barang]',
                                nama_barang='$_POST[nama_barang]',
                                id_kategori='$_POST[id_kategori]',
                                satuan='$_POST[satuan]',
                                harga_beli='$_POST[harga_beli]',
                                harga_jual='$_POST[harga_jual]',
                                tanggal='$_POST[tanggal]',
                                stok='$_POST[stok]'");
                                echo "<script>alert('Data Berhasil Di TAMBAH')
                                    window.location='?page=data_barang';
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