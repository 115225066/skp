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
                <h3 class="box-title"><a href="<?= base_url('backend/tambah_perilaku'); ?>" class="btn btn-primary pull-right">Tambah Perilaku</a></h3>
        </div>
        <div class="box">
            <!-- /.box-header -->
            
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ORIENTASI PELAYANAN</th>
                            <th>INTEGRITAS</th>
                            <th>KOMITMEN</th>
                            <th>DISIPIN</th>
                            <th>KERJASAMA</th>
                            <th>KEPEMIMPINAN</th>
                            <th>JUMLAH</th>
                            <th>RATA-RATA</th>
                            <th width="20%">OPTION</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                        <?php
                            foreach($data as $r) {
                        ?>
                            <tr>
                                <td><?= $r->orientasi_pelayanan; ?></td>
                                <td><?= $r->integritas; ?></td>
                                <td><?= $r->komitmen; ?></td>
                                <td><?= $r->disiplin; ?></td>
                                <td><?= $r->kerjasama; ?></td>
                                <td><?= $r->kepemimpinan; ?></td>
                                <td><?= $r->jumlah; ?></td>
                                <td><?= $r->rata_rata; ?></td>
                                <td>
                                    <a href="<?= base_url('backend/tampil_ubah_perilaku/') . $r->id_pegawai; ?>" class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i> Ubah</a>
                                    <a href="<?= base_url('backend/delete_perilaku/') . $r->id_pegawai; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
                                </td>
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