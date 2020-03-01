<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <!-- https://getbootstrap.com/docs/4.1/components/card/ -->
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Pembeli
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
                                <label for="id_pembeli">ID Pembeli</label>
                                <input type="number" class="form-control" id="id_pembeli" name="id_pembeli">
                            </div>
                            <div class="form-group">
                                <label for="nama_pembeli">Nama</label>
                                <input type="text" class="form-control" id="nama_pembeli" name="nama_pembeli">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat">
                            </div>
                            <div class="form-group">
                                <label for="notelp">No. Telepon</label>
                                <input type="number" class="form-control" id="notelp" name="notelp">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>