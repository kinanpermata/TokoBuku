<div class="row mt-3">
    <div class="col-md-6">
        <h2>Tabel Relasi</h2>

        <table class="table">
            <tr>
                <th>ID Transaksi</th>
                <th>ID Pembeli</th>
                <th>ID Pegawai</th>
                <th>ID Buku</th>
                <th>Harga</th>
            </tr>
            <?php foreach ($transaksi as $trk) { ?>
            <tr>
                <td><?php echo $trk['id_transaksi']; ?></td>
                <td><?php echo $trk['id_pembeli']; ?></td>
                <td><?php echo $trk['id_pegawai']; ?></td>
                <td><?php echo $trk['id_buku']; ?></td>
                <td><?php echo $trk['harga']; ?></td>
            </tr>
            <?php } ?>    
        </table>
    </div>
</div>
</div>