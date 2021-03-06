<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <!-- https://getbootstrap.com/docs/4.4/components/card/ -->
            <div class="card">
                <div class="card-header">
                    Form Edit Data Transaksi
                </div>
                <div class="card-body">
                <!-- untuk menampilkan pesan error -->
                <?php if (validation_errors()):?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
                <?php endif; ?>
                    <form action="" method="post">
                        <input type="hidden" name="id_transaksi" value="<?= $transaksi['id_transaksi'];?>">
                        <!-- https://getbootstrap.com/docs/4.4/components/forms/ -->
                        <div class="form-group">
                            <label for="id_transaksi">ID Transaksi</label>
                            <input type="text" class="form-control" id="id_transaksi" name="id_transaksi" value="<?= $transaksi['id_transaksi'];?>">
                        </div>
                        <div class="form-group">
                            <label for="id_pembeli">ID Pembeli</label>
                            <select class="form-control" id="id_pembeli" name="id_pembeli">
                                <?php foreach ($pembeli as $pbl) : ?>
                                    <option value="<?= $pbl['id_pembeli'] ?>" selected><?= $pbl['id_pembeli'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="id_buku">ID Buku</label>
                            <select class="form-control" id="id_buku" name="id_buku">
                                <?php foreach ($buku as $bk) : ?>
                                    <option value="<?= $bk['id_buku'] ?>" selected><?= $bk['id_buku'] ?></option>
                                    <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama_pembeli">Nama Pembeli</label>
                            <select class="form-control" id="nama_pembeli" name="nama_pembeli">
                                <?php foreach ($pembeli as $pbl) : ?>
                                    <option value="<?= $pbl['nama_pembeli'] ?>" selected><?= $pbl['nama_pembeli'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="judul_buku">Judul Buku</label>
                            <select class="form-control" id="judul_buku" name="judul_buku">
                                <?php foreach ($buku as $bk) : ?>
                                    <option value="<?= $bk['judul_buku'] ?>" selected><?= $bk['judul_buku'] ?></option>
                                    <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <select class="form-control" id="harga" name="harga">
                                <?php foreach ($buku as $bk) : ?>
                                    <option value="<?= $bk['harga'] ?>" selected><?= $bk['harga'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" name="edit" class="btn btn-primary float-right"> Edit </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>