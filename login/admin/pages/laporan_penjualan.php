<?php
    $tgl = date('d M Y'); 
    if(@$_POST['dari'] != "" and $_POST['sampai'] !=""){
        $squ = "where date(tanggal) between '$_POST[dari]' and '$_POST[sampai]'";
    }else{
        $squ = "ORDER BY a.id_barang";
    }
    
    
 ?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Laporan Penjualan</h1>
                </div>
                <!-- /.col-lg-12 -->
            
                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <label>Pilih Tanggal</label>
                        <form action="" method="POST">
                            <div class="panel-heading">
                            <label>Dari</label>
                            <input class="form-control" type="date" name="dari">
                            </div>
                            <div class="panel-heading">
                            <label>Sampai</label>
                            <input class="form-control" type="date" name="sampai">
                            </div>
                        <br>
                        <button type="submit" name="cari" class="btn btn-danger">Cari</button>
                        <a class="btn btn-warning" target="_blank" href="cetak_laporan_penjualan.php?dari=<?php echo $_POST['dari']; ?>&sampai=<?php echo $_POST['sampai']; ?>">
                            <li class="fa fa-print"> Cetak Laporan</li>
                        </a>
                        </div>
                        </form>
                        <!-- /.panel-heading -->
                        <?php
                        $member = mysqli_query($koneksi,"SELECT * FROM tbl_penjualan a join member b on a.id_member=b.id_member join barang c on a.id_barang=c.id_barang $squ");
                        $no=1;
                        ?>
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Nama Member</th>
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Jumlah Jual</th>
                                        <th>Harga Jual</th>
                                        <th>Total Harga</th>
                                    </tr>

                                </thead>
                                <tbody>
                                <?php 
                                        $sql = mysqli_query($koneksi,"SELECT * FROM tbl_penjualan a join member b on a.id_member=b.id_member join barang c on a.id_barang=c.id_barang $squ");
                                        $cek = mysqli_num_rows($sql);
                                        if ($cek < 1) {
                                     ?>
                                     <tr>
                                         <td colspan="13" class="p-3">Data Tidak Ditemukan</td>
                                     </tr>
                                        <?php 
                                        }else{
                                            $no = 1;$total_penjualan = 0;
                                            while($data = mysqli_fetch_array($member)) { 
                                                $total_harga = $data['jumlah_jual'] * $data['harga_jual'];
                                                $total_penjualan += $total_harga;
                                                $sup = mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM tbl_penjualan a join member b on a.id_member=b.id_member join barang c on a.id_barang=c.id_barang $squ"));
                                                
                                            ?>      
                                    <tr class="odd gradeX">
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $data['tanggal']; ?></td>
                                        <td><?php echo $data['nama_member']; ?></td>
                                        <td><?php echo $data['kode_barang']; ?></td>
                                        <td><?php echo $data['nama_barang']; ?></td>
                                        <td><?php echo $data['jumlah_jual']; ?></td>
                                        <td>Rp .<?php echo number_format($data['harga_jual']); ?></td>
                                        <td>Rp .<?php echo number_format($total_harga); ?></td>
                                    </tr>
                                    
                                    <?php } 
                                         } ?>
                                </tbody>
                                
                                <tr>
                                    <td colspan="7" align="center">Total Penjualan</td>
                                    <td>Rp .<?php echo number_format($total_penjualan); ?></td>
                                </tr>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
</div>