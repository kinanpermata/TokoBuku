<div class="container">
    <?php if($this->session->flashdata('flash-data') ): ?>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Buku <strong> berhasil </strong> <?= $this->session->flashdata('flash-data');?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <div class="row mt-4">
            <div class="col-md-6">
                <a href="<?= base_url();?>buku/tambah" class="btn btn-primary"> Tambah Data </a>
            </div>
        </div>
        
        <div class="row mt-4">
            <div class="col-md-6">
                <form action="" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari Data Buku" name="keyword">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit">Cari</button>
                        </div>
                    </div>    
                </form>
            </div>
        </div>
        
        <div class="row mt-3">
            <div class="col-md-6">
                <h2> Daftar Buku </h2>
                
                <!-- alert -->
                <?php if(empty($buku)):?>
                    <div class="alert alert-danger" role="alert">
                        Data Buku Tidak ditemukan
                    </div>
                    <?php endif; ?>
                    
                    <table class="table">
                        <tr>
                            <th>ID Buku</th>
                            <th>Judul Buku</th>
                            <th>Pengarang</th>
                            <th>Penerbit</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Gambar Buku</th>
                            <th>Hapus</th>
                            <th>Edit</th>
                        </tr>
                        <?php foreach ($buku as $bk) { ?>
                            <tr>
                                <td><?php echo $bk['id_buku']; ?></td>
                                <td><?php echo $bk['judul_buku']; ?></td>
                                <td><?php echo $bk['pengarang']; ?></td>
                                <td><?php echo $bk['penerbit']; ?></td>
                                <td><?php echo $bk['harga']; ?></td>
                                <td><?php echo $bk['stok']; ?></td>
                                
                                <td><a href="<?= base_url();?>buku/hapus/<?= $bk['id_buku'];?>" class="badge badge-danger float-right" onclick="return confirm('Yakin Data ini akan dihapus');">Hapus</a></td>
                                <td><a href="<?= base_url();?>buku/edit/<?= $bk['id_buku'];?>"  class="badge badge-success float-right">Edit</a></td>
                            </tr>
                            <?php } ?>
                        </table>
            </div>
        </div>
</div>