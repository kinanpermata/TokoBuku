<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <!-- https://getbootstrap.com/docs/4.1/components/card/ -->
            <div class="card">
                <div class="card-header">
                    Form Edit Pegawai
                </div>
                <div class="card-body">
                    <?php if (validation_errors()):?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors() ?>
                    </div>
                    <?php endif ?>
                </div>
                    <form action="" method="post">
                        <input type="hidden" name="id_pegawai" value="<?= $pegawai['id_pegawai'];?>">
                        <!-- https://getbootstrap.com/docs/4.1/components/forms/ -->
                        <div class="form-group">
                            <label for="id_pegawai">ID Pegawai</label>
                            <input type="id_pegawai" 
                                class="form-control" 
                                id="id_pegawai" 
                                name="id_pegawai"
                                value="<? $pegawai['id_pegawai'];?>">
                        </div>
                        <div class="form-group">
                                <label for="nama_pegawai">Nama</label>
                                <input type="text" 
                                    class="form-control" 
                                    id="nama_pegawai" 
                                    name="nama_pegawai"
                                    value="<? $pegawai['nama_pegawai'];?>">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" 
                                class="form-control" 
                                id="alamat" 
                                name="alamat"
                                 value="<? $pegawai['alamat'];?>">
                        </div>
                        <div class="form-group">
                           <label for="notelp">No. Telepon</label>
                           <input type="text" 
                                class="form-control" 
                                id="notelp" 
                                name="notelp"
                                value="<? $pegawai['notelp'];?>">
                        </div>
                        <button type="submit" name="edit" class="btn btn-primary float-right">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
