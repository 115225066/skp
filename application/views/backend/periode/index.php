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
                <h3 class="box-title"><a href="<?= base_url('backend/tambah_periode'); ?>" class="btn btn-primary pull-right">Tambah Periode</a></h3>
        </div>
        <div class="box">
            <!-- /.box-header -->
            
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>JANGKA WAKTU PENILAIAN</th>
                            <th>TANGGAL FORMULIR</th>
                            <th>TANGGAL FORMULIR PENILAIAN PENILAI</th>
                            <th>TANGGAL FORMULIR PENILAIAN DiNILAI</th>
                            <th>TANGGAL FORMULIR PENILAIAN ATASAN</th>
                            <th width="20%">OPTION</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                        <?php
                            foreach($data as $r) {
                        ?>
                            <tr>
                                <td><?= $r->jangka_waktu_penilaian; ?></td>
                                <td><?= $r->tgl_formulir; ?></td>    
                                <td><?= $r->tgl_form_penilaian_penilai; ?></td>
                                <td><?= $r->tgl_form_penilaian_dinilai; ?></td>    
                                <td><?= $r->tgl_form_penilaian_atasan; ?></td>      

                                <td>
                                    <a href="<?= base_url('backend/tampil_ubah_periode/') . $r->id_periode; ?>" class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i> Ubah</a>
                                    <a href="<?= base_url('backend/delete_periode/') . $r->id_periode; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
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