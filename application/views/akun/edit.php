<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <!-- https://getbootstrap.com/docs/4.1/components/card/ -->
            <div class="card">
                <div class="card-header">
                    Form Edit User
                </div>
                <div class="card-body">
                    <?php if (validation_errors()):?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors() ?>
                    </div>
                    <?php endif ?>
                </div>
                    <form action="" method="post">
                        <input type="hidden" name="id_user" value="<?= $user['id_user'];?>">
                        <!-- https://getbootstrap.com/docs/4.1/components/forms/ -->
                        <div class="form-group">
                            <label for="id_user">ID User</label>
                            <input type="text" 
                                class="form-control" 
                                id="id_user" 
                                name="id_user"
                                value="<? $user['id_user'];?>">
                        </div>
                        <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" 
                                    class="form-control" 
                                    id="username" 
                                    name="username"
                                    value="<? $user['username'];?>">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="text" 
                                class="form-control" 
                                id="password" 
                                name="password"
                                 value="<? $user['password'];?>">
                        </div>
                        <div class="form-group">
                           <label for="level">Level</label>
                           <input type="text" 
                                class="form-control" 
                                id="level" 
                                name="level"
                                value="<? $user['level'];?>">
                        </div>
                        <button type="submit" name="edit" class="btn btn-primary float-right">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
