<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <!-- https://getbootstrap.com/docs/4.1/components/card/ -->
            <div class="card">
                <div class="card-header">
                    Form Edit Pembeli
                </div>
                <div class="card-body">
                    <?php if (validation_errors()):?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors() ?>
                    </div>
                    <?php endif ?>
                </div>
                    <form action="" method="post">
                        <input type="hidden" name="id_pembeli" value="<?= $pembeli['id_pembeli'];?>">
                        <!-- https://getbootstrap.com/docs/4.1/components/forms/ -->
                        <div class="form-group">
                            <label for="id_pembeli">ID Pembeli</label>
                            <input type="id_pembeli" 
                                class="form-control" 
                                id="id_pembeli" 
                                name="id_pembeli"
                                value="<? $pembeli['id_pembeli'];?>">
                        </div>
                        <div class="form-group">
                                <label for="nama_pembeli">Nama</label>
                                <input type="text" 
                                    class="form-control" 
                                    id="nama_pembeli" 
                                    name="nama_pembeli"
                                    value="<? $pembeli['nama_pembeli'];?>">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" 
                                class="form-control" 
                                id="alamat" 
                                name="alamat"
                                 value="<? $pembeli['alamat'];?>">
                        </div>
                        <div class="form-group">
                           <label for="notelp">No. Telepon</label>
                           <input type="text" 
                                class="form-control" 
                                id="notelp" 
                                name="notelp"
                                value="<? $pembeli['notelp'];?>">
                        </div>
                        <button type="submit" name="edit" class="btn btn-primary float-right">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>