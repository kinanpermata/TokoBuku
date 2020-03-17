<div class="container">
    <?php if($this->session->flashdata('flash-data') ): ?>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Kategori Buku <strong> berhasil </strong> <?= $this->session->flashdata('flash-data');?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <div class="row mt-4">
            <div class="col-md-6">
                <a href="<?= base_url();?>kategori/tambah" class="btn btn-primary">Tambah Data</a>
            </div>
        </div>
        
        <div class="row mt-3">
            <div class="col-md-6">
                <form action="" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari Data Kategori" name="keyword">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit">Cari</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- mt-3 artinya margin top 3 -->
        <div class="row mt-3">
            <div class="col-md-6">
                <h2>Daftar Kategori Buku</h2>
                
                <!-- alert -->
                <?php if(empty($kategori)):?>
                    <div class="alert alert-danger" role="alert">
                        Data Kategori Buku tidak ditemukan
                    </div>
                    <?php endif; ?>
                    
                    <table class="table">
                        <tr>
                            <th>ID Kategori</th>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Hapus</th>
                            <th>Edit</th>
                        </tr>
                        <?php foreach ($kategori as $ktg) { ?>
                            <tr>
                                <td><?php echo $ktg['id_kategori']; ?></td>
                                <td><?php echo $ktg['judul_buku']; ?></td>
                                <td><?php echo $ktg['kategori']; ?></td>
                                <td><a href="<?= base_url();?>kategori/hapus/<?= $ktg['id_kategori'];?>" class="badge badge-danger float-right" onclick="return confirm('Yakin Data ini akan dihapus');">Hapus</a></td>
                                <td><a href="<?= base_url();?>kategori/edit/<?= $ktg['id_kategori'];?>"  class="badge badge-success float-right">Edit</a></td>
                            </tr>
                        <?php } ?>    
                    </table>
            </div>
        </div>
</div>