<!DOCTYPE html>
<html>
<head>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="js/jquery-3.4.1.js"></script>
    <script src="datepicker/js/bootstrap-datepicker.js"></script>
    <link rel="stylesheet" href="datepicker/css/datepicker.css">
</head>
<body>
<div class="container">
    <br>
    <h4>Pencarian Data Berdasarkan Tanggal</h4>

    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">

        <div class="form-group">
            <label>Tanggal Awal</label>
            <div class="input-group date">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
                <input id="tgl_mulai" placeholder="masukkan tanggal Awal" type="date" class="form-control datepicker" name="tgl_awal"  value="<?php if (isset($_POST['tgl_awal'])) echo $_POST['tgl_awal'];?>" >
            </div>
        </div>
        <div class="form-group">
            <label>Tanggal Akhir</label>
            <div class="input-group date">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
                <input id="tgl_akhir" placeholder="masukkan tanggal Akhir" type="date" class="form-control datepicker" name="tgl_akhir" value="<?php if (isset($_POST['tgl_akhir'])) echo $_POST['tgl_akhir'];?>">
            </div>
        </div>
        <button type="submit" name="cari" class="btn btn-danger">Cari</button>
        <a class="btn btn-warning" target="_blank" href="cetak_laporan_barang.php?status=<?php echo $_POST['']; ?>"><li class="fa fa-print"> Cetak Laporan</li></a>
        </form>

        <script type="text/javascript">
            $(function(){
                $(".datepicker").datepicker({
                    format: 'dd-mm-yyyy',
                    autoclose: true,
                    todayHighlight: false,
                });
                $("#tgl_mulai").on('changeDate', function(selected) {
                    var startDate = new Date(selected.date.valueOf());
                    $("#tgl_akhir").datepicker('setStartDate', startDate);
                    if($("#tgl_mulai").val() > $("#tgl_akhir").val()){
                        $("#tgl_akhir").val($("#tgl_mulai").val());
                    }
                });
            });
        </script>
    
    </form>

    <table class="table table-bordered table-hover">
        <br>
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
        <?php
        if (isset($_POST['tgl_awal'])&& isset($_POST['tgl_akhir'])) {

            $tgl_awal=date('Y-m-d', strtotime($_POST["tgl_awal"]));
            $tgl_akhir=date('Y-m-d', strtotime($_POST["tgl_akhir"]));


            $sql="select * from barang where tanggal between '".$tgl_awal."' and '".$tgl_akhir."' order by id_barang asc";

        }else {
            $sql="select * from barang order by id_barang asc";
        }

        $hasil=mysqli_query($koneksi,$sql);
        $no=0;
        while ($data = mysqli_fetch_array($hasil)) {
            $no++;
            ?>
            <tbody>
            <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $data['kode_barang'] ?></td>
            <td><?php echo $data['nama_barang'] ?></td>
            <td><?php echo $data['id_kategori'] ?></td>
            <td><?php echo $data['satuan'] ?></td>
            <td><?php echo $data['harga_beli'] ?></td>
            <td><?php echo $data['harga_jual'] ?></td>
            <td><?php echo date('d-m-Y', strtotime($data["tanggal"]));   ?></td>
            <td><?php echo $data['stok'] ?></td>
            </tr>
            </tbody>
            <?php
        }
        ?>
    </table>
</div>
</body>
</html>