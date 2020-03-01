<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Detail Data Pegawai
            </div>
        <div class="card-body">
            <h5 class="card-title"><?= $pegawai['nama_pegawai']; ?></h5>
            <p class="card-text">
                <label for=""><b> Alamat: </b></label>
                <?= $pegawai['alamat']; ?></p>
            <p class="card-text">
                <label for=""><b> No. Telepon: </b></label>
                <?= $pegawai['notelp']; ?></p>
            <a href="<?= base_url();?>pegawai" class="btn btn-primary">kembali</a>
        </div>
        </div>
        </div>
    </div>
</div>