<div class="container">
<?php if($this->session->flashdata('flash-data') ): ?>
<div class="row mt-4">
    <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data User <strong> berhasil </strong> <?= $this->session->flashdata('flash-data');?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div>
<?php endif; ?>
<div class="row mt-4">
    <div class="col-md-6">
        <a href="<?= base_url()?>akun/tambah" class="btn btn-primary"> Tambah Data </a>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-6">
        <form action="" method="post">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari Data User" name="keyword">
        <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="submit">Cari</button>
        </div>
        </div>    
        </form>
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-6">
        <h2> Daftar User </h2>

        <!-- alert -->
        <?php if(empty($user)):?>
            <div class="alert alert-danger" role="alert">
                Data User Tidak ditemukan
            </div>
        <?php endif; ?>

        <table class="table">
            <tr>
                <th>ID User</th>
                <th>Username</th>
                <th>Password</th>
                <th>Level</th>
                <th>Hapus</th>
                <th>Edit</th>
            </tr>
            <?php foreach ($user as $us) { ?>
            <tr>
                <td><?php echo $us['id_user']; ?></td>
                <td><?php echo $us['username']; ?></td>
                <td><?php echo $us['password']; ?></td>
                <td><?php echo $us['level']; ?></td>
                <td><a href="<?= base_url();?>akun/hapus/<?= $us['id_user'];?>" class="badge badge-danger float-right" onclick="return confirm('Yakin Data ini akan dihapus');">Hapus</a></td>
                <td><a href="<?= base_url();?>akun/edit/<?= $us['id_user'];?>"  class="badge badge-success float-right">Edit</a></td>
            </tr>
            <?php } ?>    
        </table>
        </div>
    </div>
</div>