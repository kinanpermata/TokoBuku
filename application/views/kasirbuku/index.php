<div class="container">    
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
            <?php if (empty($buku)) : ?>
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
                </tr>
                <?php foreach ($buku as $bk) { ?>
                    <tr>
                        <td><?php echo $bk['id_buku']; ?></td>
                        <td><?php echo $bk['judul_buku']; ?></td>
                        <td><?php echo $bk['pengarang']; ?></td>
                        <td><?php echo $bk['penerbit']; ?></td>
                        <td><?php echo $bk['harga']; ?></td>
                        <td><?php echo $bk['stok']; ?></td>
                        <td><img src="<?= base_url() . 'uploads/buku/' . $bk['gambar'] ?>" style="max-width:100px; min-height:100px" /></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>