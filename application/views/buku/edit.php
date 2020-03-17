<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <!-- https://getbootstrap.com/docs/4.1/components/card/ -->
            <div class="card">
                <div class="card-header">
                    Form Edit Buku
                </div>
                <div class="card-body">
                    <?php if (validation_errors()):?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors() ?>
                    </div>
                    <?php endif ?>
                </div>
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id_buku" value="<?= $buku['id_buku'];?>">
                        <!-- https://getbootstrap.com/docs/4.1/components/forms/ -->
                        <div class="form-group">
                            <label for="id_buku">ID Buku</label>
                            <input type="text" 
                                class="form-control" 
                                id="id_buku" 
                                name="id_buku"
                                value="<? $buku['id_buku'];?>">
                        </div>
                        <div class="form-group">
                                <label for="judul_buku">Judul</label>
                                <input type="text" 
                                    class="form-control" 
                                    id="judul_buku" 
                                    name="judul_buku"
                                    value="<? $buku['judul_buku'];?>">
                        </div>
                        <div class="form-group">
                            <label for="pengarang">Pengarang</label>
                            <input type="text" 
                                class="form-control" 
                                id="pengarang" 
                                name="pengarang"
                                value="<? $buku['pengarang'];?>">
                        </div>
                        <div class="form-group">
                           <label for="penerbit">Penerbit</label>
                           <input type="text" 
                                class="form-control" 
                                id="penerbit" 
                                name="penerbit"
                                value="<? $buku['penerbit'];?>">
                        </div>
                        <div class="form-group">
                           <label for="harga">Harga</label>
                           <input type="number" 
                                class="form-control" 
                                id="harga" 
                                name="harga"
                                value="<? $buku['harga'];?>">
                        </div>
                        <div class="form-group">
                           <label for="stok">Stok</label>
                           <input type="number" 
                                class="form-control" 
                                id="stok" 
                                name="stok"
                                value="<? $buku['stok'];?>">
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="file" 
                                class="form-control" 
                                id="gambar" 
                                name="gambar"
                                value="<? $buku['gambar'];?>">
                        </div>
                        <button type="submit" name="edit" class="btn btn-primary float-right">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
