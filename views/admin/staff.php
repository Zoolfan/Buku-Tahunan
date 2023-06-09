<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Guru dan Staff</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $a = 1;
                        foreach ($staff as $s) { ?>
                            <tr>
                                <th><?= $a++; ?></th>
                                <td><?= $s['Nama']; ?></td>
                                <td><?= $s['jabatan']; ?></td>
                                <td>
                                    <picture>
                                        <source srcset="" type="image/svg+xml">
                                        <img src="<?= ('agency/assets/img/') . $s['tn']; ?>" class="img-fluid img-thumbnail" alt="...">
                                    </picture>
                                </td>
                                <td>
                                    <a href="Staff/hapusStaff" class="badge badge-info"><i class="fas fa-edit"></i> Ubah</a>
                                    <a href="<?= ('Staff/hapusStaff/') . $s['id']; ?>" onclick="return confirm('Kamu yakin akan menghapus data ?');" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a>
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