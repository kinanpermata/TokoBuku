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
            </tr>
            <?php foreach ($kategori as $ktg) { ?>
            <tr>
                <td><?php echo $ktg['id_kategori']; ?></td>
                <td><?php echo $ktg['judul_buku']; ?></td>
                <td><?php echo $ktg['kategori']; ?></td>
                </tr>
            <?php } ?>    
        </table>
    </div>
</div>
</div>