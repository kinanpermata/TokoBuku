<div class="container">
<?php if($this->session->flashdata('flash-data') ): ?>
<div class="row mt-4">
    <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Pegawai <strong> berhasil </strong> <?= $this->session->flashdata('flash-data');?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div>
<?php endif; ?>
<div class="row mt-4">
    <div class="col-md-6">
        <a href="<?= base_url()?>pegawai/tambah" class="btn btn-primary"> Tambah Data </a>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-6">
        <form action="" method="post">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari Data Pegawai" name="keyword">
        <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="submit">Cari</button>
        </div>
        </div>    
        </form>
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-6">
        <h2> Daftar Pegawai </h2>

        <!-- alert -->
        <?php if(empty($pegawai)):?>
            <div class="alert alert-danger" role="alert">
                Data Pegawai Tidak ditemukan
            </div>
        <?php endif; ?>

        <table class="table">
            <tr>
                <th>ID Pegawai</th>
                <th>Nama Pegawai</th>
                <th>Alamat</th>
                <th>No. Telepon</th>
                <th>Hapus</th>
                <th>Edit</th>
            </tr>
            <?php foreach ($pegawai as $pgw) { ?>
            <tr>
                <td><?php echo $pgw['id_pegawai']; ?></td>
                <td><?php echo $pgw['nama_pegawai']; ?></td>
                <td><?php echo $pgw['alamat']; ?></td>
                <td><?php echo $pgw['notelp']; ?></td>
                <td><a href="<?= base_url();?>pegawai/hapus/<?= $pgw['id_pegawai'];?>" class="badge badge-danger float-right" onclick="return confirm('Yakin Data ini akan dihapus');">Hapus</a></td>
                <td><a href="<?= base_url();?>pegawai/edit/<?= $pgw['id_pegawai'];?>"  class="badge badge-success float-right">Edit</a></td>
            </tr>
            <?php } ?>    
        </table>
        </div>
    </div>
</div>