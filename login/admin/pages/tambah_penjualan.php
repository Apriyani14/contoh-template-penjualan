<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tambah Penjualan</h1>
                </div>
                <!-- /.col-lg-12 -->'
             </div>

                <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Data Penjualan
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="" method="POST" role="form" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Masukan Kode Barang</label><br>
                                            <select type="text"name="id_barang" class="form-control" onchange="changeValue(this.value)">
                                                <option value="">Pilih Kode</option>
                                                <?php 
                                                $result = mysqli_query($koneksi,"select * from barang");
                                                $jsArray = "var dtpgj = new Array ();\n";
                                                while ($row=mysqli_fetch_array($result)) {
                                                    echo'<option value="'. $row['id_barang'].'">'.$row['kode_barang'].'</option>';
                                                    $jsArray.="dtpgj ['".$row['id_barang']."']= {kode_barang :'".addslashes($row['kode_barang'])."',nama_barang :'".addslashes($row['nama_barang'])."',harga_jual :'".addslashes($row['harga_jual'])."'}\n";
                                                        }
                                                    ?>
                                            
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Masukan Nama Barang</label>
                                            <input type="text" name="nama_barang" id="nama_barang" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label>Masukan Harga Jual</label>
                                            <input type="text" name="harga_jual"  id="harga_jual" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label>Masukan Nama Member</label><br>
                                            <select name="id_member">
                                            <?php
                                            $query = mysqli_query($koneksi, "select * from member");

                                            while ($data = mysqli_fetch_assoc($query)) {
                                            echo "<option value=\"$data[id_member]\">$data[nama_member]</option>";
                                            }
                                            ?>  
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Masukan Jumlah Jual</label>
                                            <input type="text" name="jumlah_jual" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label>Masukan Tanggal</label>
                                            <input type="date" name="tanggal_jual" class="form-control" >
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
                                        $query = mysqli_query($koneksi,"INSERT INTO tbl_penjualan
                                            set id_penjualan='',
                                            id_barang='$_POST[id_barang]',
                                            id_member='$_POST[id_member]',
                                            jumlah_jual='$_POST[jumlah_jual]',
                                            tanggal_jual='$_POST[tanggal_jual]'");
                                        echo "<script>alert('Data Berhasil Di Simpan')
                                                window.location='?page=data_penjualan';
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
</div>

<script type="text/javascript">
    <?php echo $jsArray; ?>
    function changeValue (id_barang){
        document.getElementById('nama_barang').value = dtpgj[id_barang].nama_barang;
        document.getElementById('harga_jual').value = dtpgj[id_barang].harga_jual;
        document.getElementById('kode_barang').value = dtpgj[id_barang].kode_barang;
    }
</script>


Parse error: syntax error, unexpected end of file in C:\xampp\htdocs\login\admin\pages\tambah_penjualan.php on line 119