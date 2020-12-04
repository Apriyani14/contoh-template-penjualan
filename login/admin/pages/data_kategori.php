<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tabel Data Kategori</h1>
                </div>
                <!-- /.col-lg-12 -->
            
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="btn btn-primary" href="?page=tambah_kategori">Tambah Data</a>
                        </div>
                        <!-- /.panel-heading -->
                        <?php
                            $kategori = mysqli_query($koneksi,"SELECT * FROM ka");
                            $no=1;
                        ?>
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kategori</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <?php while($data = mysqli_fetch_array($kategori)) { ?>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $data['nama_kategori'] ?></td>
                                        <td><?php echo $data['keterangan'] ?></td>
                                        <td class="center">
                                            <a class="fa  fa-pencil" href="?page=edit_kategori&id=<?php  echo $data['id_kategori']  ?>"></a>
                                            
                                            <a class="fa fa-trash-o" href="?page=hapus_kategori&id=<?php echo $data['id_kategori']  ?>"></a></td>
                                    </tr>
                                    
                                </tbody>
                                <?php } ?>
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

