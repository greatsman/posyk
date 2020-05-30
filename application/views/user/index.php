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
            <h3 class="box-title">data Users</h3>
            <div class="pull-right">
                <a href="<?= site_url('user/add') ?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-user-plus"></i>
                    Tambah
                </a>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Username</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Level</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($rows->result() as $row) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $row->username; ?></td>
                            <td><?= $row->name; ?></td>
                            <td><?= $row->address; ?></td>
                            <td><?= $row->level == 1 ? 'Admin' : 'Kasir'; ?></td>
                            <td>
                                <a href="<?= site_url('user/edit/' . $row->user_id) ?>" class="btn btn-primary btn-xs">
                                    <i class="fa fa-pencil"></i> Edit
                                </a>
                                <form action="<?= site_url('user/del') ?>" method="post">
                                    <button onclick="return confirm('Apakah anda yakin ?')" class="btn btn-danger btn-xs">
                                        <input type="hidden" name='user_id' value="<?= $row->user_id; ?>">
                                        <i class="fa fa-trash"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix">
            <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">»</a></li>
            </ul>
        </div>
    </div>
</section>