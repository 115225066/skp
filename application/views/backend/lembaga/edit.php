<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>
        Ubah <?= $title; ?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url("backend/"); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Data</li>
        <li class="active">Ubah <?= $title; ?></li>
    </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-xs-12">
        <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
                <form method="post" action="<?=base_url("backend/edit_lembaga"); ?>" enctype="multipart/form-data" class="form-horizontal">
                    <?php foreach($data as $r) { ?>

                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">
                                Nama lembaga
                            </label>
                            <div class="col-sm-8">
                                <input name="nama_lembaga" placeholder="Masukan Nama lembaga" class="form-control" type="text" value="<?= $r->nama_lembaga; ?>">
                            </div>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">
                                Alamat Lembaga
                            </label>
                            <div class="col-sm-8">
                                <input name="alamat_lembaga" placeholder="Masukan Alamat Lembaga" class="form-control" type="text" value="<?= $r->alamat_lembaga; ?>" >
                            </div>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">
                                Email Lembaga
                            </label>
                            <div class="col-sm-8">
                                <input name="email_lembaga" placeholder="Masukan Email lembaga" class="form-control" type="text" value="<?= $r->email_lembaga; ?>" >
                            </div>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">
                                Nomor Telp
                            </label>
                            <div class="col-sm-8">
                                <input name="no_telp" placeholder="Masukan Telp lembaga" class="form-control" type="text" value="<?= $r->no_telp; ?>" >
                            </div>
                            <span class="help-block"></span>
                        </div>
                    <?php
                        }
                    ?>

                    <div class="divider"></div>
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-6 text-right">
                            <button class="btn btn-primary" type="submit" name="submit">Save</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
