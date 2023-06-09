<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Kelas 1</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Nick</th>
                            <th>Image</th>
                            <th>Alamat</th>
                            <th>No Hp</th>
                            <th>Quote</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $a = 1;
                        foreach ($k1 as $k1) { ?>
                            <tr>
                                <th><?= $a++; ?></th>
                                <td><?= $k1['nama']; ?></td>
                                <td><?= $k1['nick']; ?></td>
                                <td>
                                    <picture>
                                        <source srcset="" type="image/svg+xml">
                                        <img src="<?= ('agency/assets/img/') . $k1['img']; ?> tn.png" class="img-fluid img-thumbnail" alt="...">
                                    </picture>
                                </td>
                                <td><?= $k1['alamat']; ?></td>
                                <td><?= $k1['no_hp']; ?></td>
                                <td><?= $k1['quote']; ?></td>
                                <td>
                                    <a href="Staff/hapusStaff" class="badge badge-info"><i class="fas fa-edit"></i> Ubah</a>
                                    <a href="<?= ('Akelas1/hapusK1/') . $k1['id']; ?>" onclick="return confirm('Kamu yakin akan menghapus data ?');" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->