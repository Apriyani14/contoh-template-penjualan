<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tambah Member</h1>
                </div>
                <!-- /.col-lg-12 -->'
             </div>

                <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Data Member
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="" method="POST" role="form" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Masukan Nama Member</label>
                                            <input type="text" name="nama_member" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label>Masukan No HP</label>
                                            <input type="text" name="nohp" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label>Masukan Alamat</label>
                                            <textarea name="alamat"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Masukan Email</label>
                                            <input type="email" name="email" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label>Masukan Jenis Kelamin</label>
                                            <select class="form-control" name="jenis_kelamin">
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Masukan Status</label>
                                            <select class="form-control" name="status">
                                                <option value="Aktif">Aktif</option>
                                                <option value="Tidak Aktif">Tidak Aktif</option>
                                            </select>
                                        </div>
                                        <div class="form-control">
                                            <label>Masukan Foto</label>
                                            <input type="file" name="foto" class="form-control">
                                        </div>
                                        
                                        <br>
                                        <input type="submit" value="SIMPAN" class="btn btn-primary" name="tambah">
                                        <input type="reset" value="BATAL" class="btn btn-danger">
                                    </form>
                                </div>
                          
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <?php
                                if (isset($_POST['tambah'])) {
                                    $nama_foto      = $_FILES['foto']['name'];
                                    $lokasi_foto    = $_FILES['foto']['tmp_name'];
                                    $tipe_foto      = $_FILES['foto']['type'];
                                    if($lokasi_foto==""){
                                        $query = "INSERT INTO member 
                                        set nama_member='$_POST[nama_member]',
                                        nohp='$_POST[nohp]',
                                        alamat='$_POST[alamat]',
                                        email='$_POST[email]',
                                        jenis_kelamin='$_POST[jenis_kelamin]',
                                        status='$_POST[status]'";
                                    }else{
                                        move_uploaded_file($lokasi_foto, "../images/$nama_foto");
                                        $query = "INSERT INTO member 
                                            set nama_member='$_POST[nama_member]',
                                            nohp='$_POST[nohp]',
                                            alamat='$_POST[alamat]',
                                            email='$_POST[email]',
                                            jenis_kelamin='$_POST[jenis_kelamin]',
                                            status='$_POST[status]',
                                            foto='$nama_foto'";
                                        $proses = mysqli_query($koneksi,$query) or die (mysqli_error());
                                    }
                                    echo "<script>alert('Data Berhasil Di TAMBAH')
                                        window.location='?page=data_member';
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