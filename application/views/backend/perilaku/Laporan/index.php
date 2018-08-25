<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>
        Data <?= $title; ?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url("backend/"); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Data</li>
        <li class="active"><?= $title; ?></li>
    </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-xs-12">
        <div class="box-header with-border">
                <h3 class="box-title"><a href="<?= base_url('backend/cetak_perilaku'); ?>" target="_blank" class="btn btn-primary pull-right"> <i class="glyphicon glyphicon-print"></i> Cetak</a></h3>
        </div>
        <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID JABATAN</th>
                            <th>NAMA JABATAN</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            foreach($data as $r) {
                        ?>
                            <tr>
                                <td><?= $r->id_jabatan; ?></td>
                                <td><?= $r->nama_jabatan; ?></td>
                            </tr>
                        <?php
                            }
                        ?>
                    </tbody>

                </table>
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
