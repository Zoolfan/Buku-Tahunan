<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahData"><i class="fas fa-file-alt"></i> Tambah Data</a>
            <h4 class="m-0 font-weight-bold text-primary">Kelas 2</h4>
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
                        foreach ($k2 as $k2) { ?>
                            <tr>
                                <th><?= $a++; ?></th>
                                <td><?= $k2['nama']; ?></td>
                                <td><?= $k2['nick']; ?></td>
                                <td>
                                    <picture>
                                        <source srcset="" type="image/svg+xml">
                                        <img src="<?= ('agency/assets/img/') . $k2['img']; ?> tn.png" class="img-fluid img-thumbnail" alt="...">
                                    </picture>
                                </td>
                                <td><?= $k2['alamat']; ?></td>
                                <td><?= $k2['no_hp']; ?></td>
                                <td><?= $k2['quote']; ?></td>
                                <td>
                                    <a href="<?= ('ubahk2/') . $k2['id']; ?>" class="badge badge-info"><i class="fas fa-edit"></i> Ubah</a>
                                    <a href="<?= ('Akelas2/hapusk2/') . $k2['id']; ?>" onclick="return confirm('Kamu yakin akan menghapus data ?');" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a>
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

<div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="tambahDataLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahDataLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="akelas2/TambahData" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="nick" name="nick" placeholder="Masukkan Nickname">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Masukkan Alamat">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="no_hp" name="no_hp" placeholder="Masukkan Nomor HP">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="quote" name="quote" placeholder="Masukkan Quote">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-ban"></i> Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>