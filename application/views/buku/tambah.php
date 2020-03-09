<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <!-- https://getbootstrap.com/docs/4.1/components/card/ -->
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Buku
                </div>
                <div class="card-body">
                    <?php if (validation_errors()):?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors() ?>
                    </div>
                    <?php endif ?>
                </div>
                    <form action="" method="post">
                        <!-- https://getbootstrap.com/docs/4.1/components/forms/ -->
                            <div class="form-group">
                                <label for="id_buku">ID Buku</label>
                                <input type="text" class="form-control" id="id_buku" name="id_buku">
                            </div>
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" class="form-control" id="judul_buku" name="judul_buku">
                            </div>
                            <div class="form-group">
                                <label for="penulis">Penulis</label>
                                <input type="text" class="form-control" id="pengarang" name="pengarang">
                            </div>
                            <div class="form-group">
                                <label for="penerbit">Penerbit</label>
                                <input type="text" class="form-control" id="penerbit" name="penerbit">
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="int" class="form-control" id="harga" name="harga">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>