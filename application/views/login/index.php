<?=
form_open('login/proses_login');
?>
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 mx-auto">
            <!-- https://getbootstrap.com/docs/4.4/components/card/ -->
                    <div class="card">
                        <div class="card-header">
                            Login
                        </div>
                        <div class="card-body">
                            <form action="" method="POST">
                                <!-- https://getbootstrap.com/docs/4.4/components/forms/ -->
                                <div class="form" role="form" autocomplete="off" id="formLogin" novalidate="">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control form-cotrol-lg rounded-0" id="uname1" name="uname1" required>
                                    <div class="invalid-feedback">Username salah.</div>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control form-cotrol-lg rounded-0" id="pwd1" name="pwd1" required autocomplete="new-password">
                                    <div class="invalid-feedback">Password salah.</div>
                                </div>
                                <button type="submit" class="btn btn-primary float-right" id="btnLogin"> Login </button>
                                <a href="<?= base_url();?>login/signin" class="btn btn-primary">Sign In</a>
                            </form>
                        </div>
                    </div>
                    <div class="alert alert-info" role="alert">
                        <?php
                        if(isset($pesan))
                        {
                            echo $pesan;
                        }else{
                            echo "Masukkan Username dan Password anda";
                        }
                        ?>
                    </div>
                </div> <!-- col-md-6 ... -->
            </div>
        </div>
    </div>
</div> <!-- container -->

<?=
form_close();
?>