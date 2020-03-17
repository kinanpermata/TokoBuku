<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <!-- https://getbootstrap.com/docs/4.4/components/card/ -->
            <div class="card">
                <div class="card-header">
                    Form Edit Data Kategori Buku
                </div>
                <div class="card-body">
                    <!-- untuk menampilkan pesan error -->
                    <?php if (validation_errors()):?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                        <?php endif; ?>
                        <form action="" method="post">
                            <input type="hidden" name="id_kategori" value="<?= $kategori['id_kategori'];?>">
                            <!-- https://getbootstrap.com/docs/4.4/components/forms/ -->
                            <div class="form-group">
                                <label for="id_kategori">ID Kategori Buku</label>
                                <input type="text" class="form-control" id="id_kategori" name="id_kategori" value="<?= $kategori['id_kategori'];?>">
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
                                <label for="judul_buku">Judul Buku</label>
                                <select class="form-control" id="judul_buku" name="judul_buku">
                                    <?php foreach ($buku as $bk) : ?>
                                        <option value="<?= $bk['judul_buku'] ?>" selected><?= $bk['judul_buku'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kategori">Kategori Buku</label>
                                <input type="text" class="form-control" id="kategori" name="kategori" value="<?= $kategori['kategori'];?>">
                            </div>
                            <button type="submit" name="edit" class="btn btn-primary float-right"> Edit </button>
                        </form>
                    </div>
                </div>
        </div>
    </div>
</div>