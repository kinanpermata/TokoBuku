<div class="container">
<?php if($this->session->flashdata('flash-data') ): ?>
<div class="row mt-4">
    <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Pembeli <strong> berhasil </strong> <?= $this->session->flashdata('flash-data');?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div>
<?php endif; ?>
<div class="row mt-4">
    <div class="col-md-6">
        <a href="<?= base_url()?>pembeli/tambah" class="btn btn-primary"> Tambah Data </a>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-6">
        <form action="" method="post">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari Data Pembeli" name="keyword">
        <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="submit">Cari</button>
        </div>
        </div>    
        </form>
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-6">
        <h2> Daftar Pembeli </h2>

        <!-- alert -->
        <?php if(empty($pembeli)):?>
            <div class="alert alert-danger" role="alert">
                Data Pembeli Tidak ditemukan
            </div>
        <?php endif; ?>

        <ul class="list-group">
            <?php foreach($pembeli as $pbl):?>
                <li class="list-group-item">
                    <?= $pbl['nama_pembeli'];?>
                    <a href="<?= base_url();?>pembeli/hapus/<?= $pbl['id_pembeli'];?>"
                    class= "badge badge-danger float-right"
                    onclick="return confirm('Yakin Data ini akan dihapus');">Hapus</a>
                    <a href="<?= base_url();?>pembeli/edit/<?= $pbl['id_pembeli'];?>"
                    class="badge badge-success float-right">Edit</a>
                    <a href="<?= base_url();?>pembeli/detail/<?= $pbl['id_pembeli'];?>"
                    class="badge badge-primary float-right">Detail</a>
                </li>
            <?php endforeach; ?>
        </ul>
        </div>
    </div>
</div>