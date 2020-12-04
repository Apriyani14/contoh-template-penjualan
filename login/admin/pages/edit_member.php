<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Member</h1>
                </div>
                <!-- /.col-lg-12 -->'
             </div>

                <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Data Member
                        </div>
                        <?php
                            $member = mysqli_query($koneksi,"SELECT * FROM member WHERE id_member='$_GET[id]'");

                        ?>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <?php 
                                            while ($data = mysqli_fetch_array($member)) { 
                                            ?>
                                    <form action="" method="POST" role="form" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Masukan Nama Member</label>
                                            <input type="hidden" name="id_member" class="form-control" value="<?php echo $data['id_member'] ?>">
                                            <input type="text" name="nama_member" class="form-control" value="<?php echo $data['nama_member'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Masukan No HP</label>
                                            <input type="text" name="nohp" class="form-control" value="<?php echo $data['nohp'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Masukan Alamat</label>
                                            <textarea name="alamat" class="form-control">
                                                <?php echo $data['alamat'] ?>
                                                </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Masukan Email</label>
                                            <input type="email" name="email" class="form-control" value="<?php echo $data['email'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Masukan Jenis Kelamin</label>
                                            <select class="form-control" name="jenis_kelamin" class="form-control">
                                            <?php 
                                            if($data['jenis_kelamin']=="Laki-laki"){
                                             ?>
                                             <option value="Laki-laki" selected>Laki-laki</option>
                                             <option value="Perempuan" >Perempuan</option>
                                            
                                            <?php }else{ ?>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan" selected="">Perempuan
                                                    <?php } ?>
                                                </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Masukan Status</label>
                                            <select class="form-control" name="status" class="form-control">
                                            <?php 
                                            if($data['status']=="Aktif"){
                                             ?>
                                             <option value="Aktif" selected>Aktif</option>
                                             <option value="Tidak Aktif" >Tidak Aktif</option>
                                            
                                            <?php }else{ ?>
                                                <option value="Aktif">Aktif</option>
                                                <option value="Tidak Aktif" selected="">Tidak Aktif
                                                    <?php } ?>
                                                </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Masukan Foto</label>
                                            <img width="50px" src="../images/<?php echo $data['foto']?>" >
                                            <input type="file" name="foto" class="form-control" class="form-control">
                                        </div>
                                        
                                        <input type="submit" value="SIMPAN" class="btn btn-primary" name="tambah">
                                        <input type="reset" value="BATAL" class="btn btn-danger">
                                    </form>
                                <?php } ?>
                                </div>
                          
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <?php
                                if (isset($_POST['tambah'])) {
                                    $nama_foto      = $_FILES['foto']['name'];
                                    $lokasi_foto    = $_FILES['foto']['tmp_name'];
                                    $tipe_foto      = $_FILES['foto']['type'];
                                    if($lokasi_foto==""){
                                        $query = "UPDATE member 
                                        set nama_member='$_POST[nama_member]',
                                        nohp='$_POST[nohp]',
                                        alamat='$_POST[alamat]',
                                        email='$_POST[email]',
                                        jenis_kelamin='$_POST[jenis_kelamin]',
                                        status='$_POST[status]' WHERE id_member='$_POST[id_member]'";
                                        $proses = mysqli_query($koneksi,$query) or die (mysqli_error());
                                    }else{
                                        move_uploaded_file($lokasi_foto, "../images/$nama_foto");
                                        $query = "UPDATE member 
                                            set nama_member='$_POST[nama_member]',
                                            nohp='$_POST[nohp]',
                                            alamat='$_POST[alamat]',
                                            email='$_POST[email]',
                                            jenis_kelamin='$_POST[jenis_kelamin]',
                                            status='$_POST[status]',
                                            foto='$nama_foto' WHERE id_member='$_POST[id_member]'";
                                        $proses = mysqli_query($koneksi,$query) or die (mysqli_error());
                                    }
                                    echo "<script>alert('Data Berhasil Di UPDATE')
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