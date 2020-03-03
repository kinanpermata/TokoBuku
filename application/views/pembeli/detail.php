<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Detail Data Pembeli
            </div>
        <div class="card-body">
            <h5 class="card-title"><?= $pembeli['nama_pembeli']; ?></h5>
            <p class="card-text">
                <label for=""><b> ID Pembeli: </b></label>
                <?= $pembeli['id_pembeli']; ?></p>
            <p class="card-text">
                <label for=""><b> Alamat: </b></label>
                <?= $pembeli['alamat']; ?></p>
            <p class="card-text">
                <label for=""><b> No. Telepon: </b></label>
                <?= $pembeli['notelp']; ?></p>
            <a href="<?= base_url();?>pembeli" class="btn btn-primary">Kembali</a>
        </div>
        </div>
        </div>
    </div>
</div>