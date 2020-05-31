<section class="content-header">
    <h1>
        Form
        <small>Supplier</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Supplier</li>
    </ol>
</section>
<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><?= ucfirst($page) ?> Suplier</h3>
            <div class="pull-right">
                <a href="<?= site_url('supplier') ?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i>
                    Kembali
                </a>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form action="<?= site_url('supplier/process') ?>" method="post">
                        <div class="form-group">
                            <label for="">Name </label>
                            <input type="hidden" name="supplier_id" value="<?= $row->supplier_id; ?>">
                            <input type="text" name="name" value="<?= $row->name; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Phone </label>
                            <input type="number" name="phone" value="<?= $row->phone; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Address </label>
                            <input type="text" name="address" value="<?= $row->address; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Description </label>
                            <textarea name="description" class="form-control"><?= $row->description; ?></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="<?= $page ?>" class="btn btn-success btn-flat">
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