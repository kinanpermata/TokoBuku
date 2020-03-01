
<div class="container">
    <?php if($this->session->flashdata('flash-data')); ?>
    <div class="row mt-4">
        <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Transaksi <strong> berhasil </strong> <?= $this->session->flashdata('flash-data'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <a href="<?= base_url();?>transaksi/tambah" class="btn btn-primary">Tambah Data</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Data Transaksi" name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- mt-3 artinya margin top 3 -->
<div class="row mt-3">
    <div class="col-md-6">
        <h2>Daftar Transaksi</h2>

        <!-- alert -->
        <?php if(empty($transaksi)):?>
            <div class="alert alert-danger" role="alert">
                Data Transaksi tidak ditemukan
            </div>
        <?php endif; ?>

        <table class="table">
            <tr>
                <th>ID Transaksi</th>
                <th>ID Pembeli</th>
                <th>ID Pegawai</th>
                <th>ID Buku</th>
                <th>Harga</th>
                <th>Edit</th>
                <th>Hapus</th>
            </tr>
            <?php foreach ($transaksi as $trk) { ?>
            <tr>
                <td><?php echo $trk['id_transaksi']; ?></td>
                <td><?php echo $trk['id_pembeli']; ?></td>
                <td><?php echo $trk['id_pegawai']; ?></td>
                <td><?php echo $trk['id_buku']; ?></td>
                <td><?php echo $trk['harga']; ?></td>
                <td><a href="<?= base_url();?>transaksi/hapus/<?= $trk['id_transaksi'];?>" class="badge badge-danger float-right" onclick="return confirm('Yakin Data ini akan dihapus');">Hapus</a></td>
                <td><a href="<?= base_url();?>transaksi/edit/<?= $trk['id_transaksi'];?>" class="badge badge-success float-right">Edit</a></td>
            </tr>
            <?php } ?>    
        </table>
    </div>
</div>
</div>