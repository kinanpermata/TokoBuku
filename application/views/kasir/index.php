<div class="container">
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
                <th>Nama Pembeli</th>
                <th>Judul</th>
                <th>Harga</th>
            </tr>
            <?php foreach ($transaksi as $trk) { ?>
            <tr>
                <td><?php echo $trk['id_transaksi']; ?></td>
                <td><?php echo $trk['nama_pembeli']; ?></td>
                <td><?php echo $trk['judul_buku']; ?></td>
                <td><?php echo $trk['harga']; ?></td>
            </tr>
            <?php } ?>    
        </table>
    </div>
</div>
</div>