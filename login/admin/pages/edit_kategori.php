<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Kategori</h1>
                </div>
                <!-- /.col-lg-12 -->'
             </div>

                <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Data Kategori
                        </div>
                        <div class="panel-body">
                            <?php
                                        $kategori = mysqli_query($koneksi,"SELECT * FROM ka WHERE id_kategori='$_GET[id]'");

                                        ?>
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="" method="POST" role="form">
                                        <div class="form-group">
                                            <?php 
                                            while ($data = mysqli_fetch_array($kategori)) { 
                                            ?>
                                            <label>Masukan Nama Kategori</label>
                                            <input type="hidden" class="form-control" name="id_kategori" value="<?php echo $data['id_kategori']?>">
                                            <input type="text" class="form-control" name="nama_kategori" value="<?php echo $data['nama_kategori']?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <textarea type="text" name="keterangan" class="form-control"><?php echo $data['keterangan']?></textarea>
<?php } ?>
                                        <br>
                                        <input type="submit" value="EDIT" class="btn btn-primary" name="edit">
                                        <input type="reset" value="BATAL" class="btn btn-warning">
                                    </form>
                                     
                                </div>
                          
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <?php
                if (isset($_POST['edit'])) {
                    $query = mysqli_query($koneksi,"UPDATE ka 
                        set nama_kategori='$_POST[nama_kategori]',
                        keterangan='$_POST[keterangan]' 
                        WHERE id_kategori='$_POST[id_kategori]'");
                    echo "<script>alert('Data Berhasil Di Edit')
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