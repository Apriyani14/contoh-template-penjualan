<?php 	
        include "../koneksi.php";
            $tgl = date('d M Y'); 
            if(@$_GET['dari'] != "" and $_GET['sampai'] !=""){
            $squ = "where date(tanggal) between '$_GET[dari]' and '$_GET[sampai]'";
            $ket = "$_GET[dari] s/d $_GET[sampai]";     
            }else{
            $squ = "ORDER BY a.id_barang";
    }
 ?>
<body onload="javascrippt:print()">	
<table align="center">	
	<tr>
		<td><img src="../images/logo.png" width="100px"></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>
			<h3 align="center" style="margin: 0px";>PT. ABC SEJAHTERA SENTOSA</h3>
			<h5 align="center" style="margin: 0px";>Jl. Bypass KM 20 Padang Barat, Sumatera Barat</h5>
			<h4 align="center" style="margin-top:  0px";>Laporan Data Barang</h4>
            <h4 align="center" style="margin-top:  0px";><?php echo $ket; ?></h4>
		</td>                   
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td><img src="../images/logo2.jpg" width="100px"></td>
	</tr>
</table>
<br>	
<?php
                        $barang = mysqli_query($koneksi,"SELECT * FROM barang a left join ka b on a.id_kategori=b.id_kategori $squ");
                        $no=1;
                        ?>
<table width="100%" border="1" align="center">
                                <thead>
                                    <tr>
                                    <th>No</th>
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Nama Kategori</th>
                                        <th>Satuan</th>
                                        <th>Harga Beli</th>
                                        <th>Harga Jual</th>
                                        <th>Tanggal</th>
                                        <th>Stok</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                    <?php 
                                        $sql = mysqli_query($koneksi,"SELECT * FROM barang a left join ka b on a.id_kategori=b.id_kategori $squ");
                                        $cek = mysqli_num_rows($sql);
                                        if ($cek < 1) {
                                     ?>
                                     <tr>
                                         <td colspan="13" class="p-3">Data Tidak Ditemukan</td>
                                     </tr>
                                        <?php 
                                        }else{
                                            $no = 1;
                                            while ($data = mysqli_fetch_array($sql)){
                                                $sup = mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM barang a left join ka b on a.id_kategori=b.id_kategori $squ"));
                                            ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $data['kode_barang'] ?></td>
                                        <td><?php echo $data['nama_barang'] ?></td>
                                        <td><?php echo $data['id_kategori'] ?></td>
                                        <td><?php echo $data['satuan'] ?></td>
                                        <td><?php echo $data['harga_beli'] ?></td>
                                        <td><?php echo $data['harga_jual'] ?></td>
                                        <td><?php echo $data['tanggal'] ?></td>
                                        <td><?php echo $data['stok'] ?></td>
                                        
                                    </tr>
                                    <?php } 
                                }   ?>
                                    </tr>   
                                </tbody>
                            </table>
                            <table width="100%" border="0" align="center" cellpadding="3" cellspacing="0">
                    		<tr>
                    			<td width="63%">
                    				&nbsp;
                    			</td>
                    			<td width="37%">
                    				<div align="center">
                    					<?php 
                    						$tgl = date('d M Y');
                    						echo "Padang , $tgl";
                    					 ?>
                    					 <br>
                    					 <br>
                    					 <br>
                    					 Pimpinan
                    				</div>
                    			</td>
                    		</tr> 	
                     </table>
                 </body>