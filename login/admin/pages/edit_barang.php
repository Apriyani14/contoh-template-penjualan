<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Barang</h1>
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
                        
                            <?php
                            $barang = mysqli_query($koneksi,"SELECT * FROM barang WHERE id_barang='$_GET[id]'");
                            ?>
                            <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="" method="POST" role="form" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <?php 
                                            while ($data = mysqli_fetch_array($barang)) { 
                                            ?>
                                            <label>Masukan Nama Barang</label>
                                            <input type="hidden" class="form-control" name="id_barang" value="<?php echo $data['id_barang']?>">
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
                                            <label>Masukan Satuan</label>
                                            <input name="satuan" class="form-control" >
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
                                        <div class="form-group">
                                            <label>Masukan Deskripsi</label>
                                            <input name="stok" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label>Masukan Foto</label>
                                            <img width="50px" src="../images/<?php echo $data['foto']?>" >
                                            <input type="file" name="foto" class="form-control" class="form-control">
                                        </div>
                                        <?php } ?>

                                        <br>
                                        <input type="submit" value="SIMPAN" class="btn btn-primary" name="simpan">
                                        <input type="reset" value="BATAL" class="btn btn-warning">
                                    </form>
                                </div>
                          </div>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <?php
                                if (isset($_POST['edit'])) {
                                        $query = mysqli_query($koneksi,"UPDATE barang set nama_barang='$_POST[nama_barang]',
                                            harga_beli='$_POST[harga_beli]',
                                            harga_jual='$_POST[harga_jual]',
                                            tanggal='$_POST[tanggal]',
                                            stok='$_POST[stok]'
                                            WHERE id_barang='$_POST[id_barang]'");
                                        echo "<script>alert('Data Berhasil Di UPDATE')
                                                window.location='?page=data_barang';
                                                </script>";
                                    }
                                ?>
                            
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