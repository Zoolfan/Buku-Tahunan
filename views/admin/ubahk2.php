<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <?php foreach ($k2 as $k2) { ?>
                <form action="ubahk2" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                         <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Masukkan Nama" value="<?= $k2['nama']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="nick" name="nick" placeholder="Masukkan Nickname" value="<?= $k2['nick']; ?>">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Masukkan Alamat" value="<?= $k2['alamat']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="no_hp" name="no_hp" placeholder="Masukkan Nomor HP" value="<?= $k2['no_hp']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="quote" name="quote" placeholder="Masukkan Quote" value="<?= $k2['quote']; ?>">
                    </div>

                </form>
            <?php } ?>
        </div>
    </div>
</div>