<section class="content-header">
    <h1>
        User
        <small>Pengguna</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User</li>
    </ol>
</section>

<!-- Main Content -->
<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Add User</h3>
            <div class="pull-right">
                <a href="<?= site_url('user') ?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i>
                    Kembali
                </a>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form action="" method="post">
                        <?= validation_errors() ?>
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" name="username" value="<?= set_value('username') ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Password Confirmation</label>
                            <input type="password" name="passwordconf" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="name" value="<?= set_value('name') ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <textarea name="address" id="" cols="30" rows="10" class="form-control">

                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Level</label>
                            <select name="level" class="form-control">
                                <option value="">--Pilih--</option>
                                <option value="1">Admin</option>
                                <option value="w">Kasir</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-flat">
                                <i class="fa fa-paper-plane"></i>
                                Simpan
                            </button>
                            <button type="reset" class="btn btn-flat"> Reset </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>