<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Detail Data Buku
            </div>
        <div class="card-body">
            <h5 class="card-title"><?= $buku['judul_buku']; ?></h5>
            <p class="card-text">
                <label for=""><b> Pengarang: </b></label>
                <?= $buku['pengarang']; ?></p>
            <p class="card-text">
                <label for=""><b> Penerbit: </b></label>
                <?= $buku['penerbit']; ?></p>
            <a href="<?= base_url();?>buku" class="btn btn-primary">kembali</a>
        </div>
        </div>
        </div>
    </div>
</div>