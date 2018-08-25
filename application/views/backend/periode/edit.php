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
                <form method="post" action="<?=base_url("backend/edit_periode"); ?>" enctype="multipart/form-data" class="form-horizontal">
                    <?php foreach($data as $r) { ?>
                        
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">
                                Jangka Waktu Penilaian Awal
                            </label>
                            <div class="col-sm-7">
                                <input name="jangka_waktu_penilaian" placeholder="Masukan Tanggalnya" class="form-control" type="text" value="<?= $r->jangka_waktu_penilaian; ?>">
                            </div>
                            <span class="help-block"></span>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">
                                Tanggal Formulir
                            </label>
                            <div class="col-sm-7">
                                <input name="tgl_formulir" placeholder="Masukan Tanggalnya" class="form-control" type="text" value="<?= $r->tgl_formulir; ?>">
                         </div>
                            <span class="help-block"></span>
                        </div>

                         <div class="form-group">

                            <label for="" class="col-sm-3 control-label">
                              Tanggal Form Penilaian Penilai
                            </label>
                            <div class="col-sm-7">
                                <input name="tgl_form_penilaian_penilai" placeholder="Masukan Tanggalnya" class="form-control" type="text" value="<?= $r->tgl_form_penilaian_penilai; ?>">
                            </div>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">
                        Tanggal Form Penilaian Dinilai
                            </label>
                            <div class="col-sm-7">
                                <input name="tgl_form_penilaian_dinilai" placeholder="Masukan Tanggalnya" class="form-control" type="text" value="<?= $r->tgl_form_penilaian_dinilai; ?>">
                            </div>
                            <span class="help-block"></span>
                        </div>

                         <div class="form-group">
                            <label for="" class="col-sm-3 control-label">
                        Tanggal Form Penilaian Atasan
                            </label>
                            <div class="col-sm-7">
                                <input name="tgl_form_penilaian_atasan" placeholder="Masukan Tanggalnya" class="form-control" type="text" value="<?= $r->tgl_form_penilaian_atasan; ?>">
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