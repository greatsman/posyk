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
                        <div class="form-group <?= form_error('username') ? 'has-error' : null; ?>">
                            <label for="">Username </label>
                            <input type="text" name="username" value="<?= set_value('username') ?>" class="form-control">
                            <?= form_error('username'); ?>
                        </div>
                        <div class="form-group <?= form_error('password') ? 'has-error' : null; ?>">
                            <label for="">Password</label>
                            <input type="password" name="password" value="<?= set_value('password') ?>" class="form-control">
                            <?= form_error('password'); ?>
                        </div>
                        <div class="form-group <?= form_error('passwordconf') ? 'has-error' : null; ?>">
                            <label for="">Password Confirmation</label>
                            <input type="password" name="passwordconf" value="<?= set_value('passwordconf') ?>" class="form-control">
                            <?= form_error('passwordconf'); ?>
                        </div>
                        <div class="form-group <?= form_error('name') ? 'has-error' : null; ?>">
                            <label for="">Nama</label>
                            <input type="text" name="name" value="<?= set_value('name') ?>" class="form-control">
                            <?= form_error('name'); ?>
                        </div>
                        <div class="form-group <?= form_error('address') ? 'has-error' : null; ?>">
                            <label for="">Alamat</label>
                            <textarea name="address" id="" cols="30" rows="10" class="form-control"><?= set_value('address') ?></textarea>
                            <?= form_error('address'); ?>
                        </div>
                        <div class="form-group <?= form_error('level') ? 'has-error' : null; ?>">
                            <label for="">Level</label>
                            <select name="level" class="form-control">
                                <option value="">--Pilih--</option>
                                <option value="1" <?= set_value('level') == 1 ? "selected" : null ?>>Admin</option>
                                <option value="2" <?= set_value('level') == 2 ? "selected" : null ?>>Kasir</option>
                            </select>
                            <?= form_error('level'); ?>
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