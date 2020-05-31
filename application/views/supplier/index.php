<section class="content-header">
    <h1>
        Data
        <small>Supplier</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Supplier</li>
    </ol>
</section>

<!-- Main Content -->
<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Data Supplier</h3>
            <div class="pull-right">
                <a href="<?= site_url('supplier/add') ?>" class="btn btn-primary btn-flat">
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
                        <th>Nama</th>
                        <th>Telepon</th>
                        <th>Alamat</th>
                        <th>Deskripsi</th>
                        <th>Aksi</>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($rows->result() as $row) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $row->name; ?></td>
                            <td><?= $row->phone; ?></td>
                            <td><?= $row->address; ?></td>
                            <td><?= $row->description; ?></td>
                            <td>
                                <a href="<?= site_url('supplier/delete/' . $row->supplier_id) ?>" onclick="return confirm('Apakah anda yakin ?')" class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash"></i> Delete
                                </a>
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