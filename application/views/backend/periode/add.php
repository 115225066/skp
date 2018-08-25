<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>
        Tambah <?= $title; ?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url("backend/"); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Data</li>
        <li class="active">Tambah <?= $title; ?></li>
    </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form method="post" action="<?=base_url("backend/insert_periode"); ?>" enctype="multipart/form-data" class="form-horizontal">
                        
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">
                                Jangka Waktu Penilaian
                            </label>
                            <div class="col-sm-8">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                    </div>
                                    <input name="jangka_waktu_penilaian" placeholder="Masukan Jangka Waktu" class="form-control pull-right" id="reservation" type="text">
                                </div>
                            </div>
                            <span class="help-block"></span>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">
                                Tanggal Formulir
                            </label>
                            <div class="col-sm-8">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                    </div>
                                    <input name="tgl_formulir" placeholder="Masukan Tanggal Formulir" class="form-control pull-right" id="datepicker1" type="text">
                                </div>
                            </div>
                            <span class="help-block"></span>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">
                                Tanggal Formulir Penilai
                            </label>
                            <div class="col-sm-8">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                    </div>
                                    <input name="tgl_form_penilaian_penilai" placeholder="Masukan Tanggal Formulir Penilain Penilai" class="form-control pull-right" id="datepicker2" type="text">
                                </div>
                            </div>
                            <span class="help-block"></span>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">
                                Tanggal Formulir Dinilai
                            </label>
                            <div class="col-sm-8">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                    </div>
                                    <input name="tgl_form_penilaian_dinilai" placeholder="Masukan Tanggal Formulir Penilian yang Dinilai" class="form-control pull-right" id="datepicker3" type="text">
                                </div>
                            </div>
                            <span class="help-block"></span>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">
                                Tanggal Formulir Penilai Atasan
                            </label>
                            <div class="col-sm-8">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                    </div>
                                    <input name="tgl_form_penilaian_atasan" placeholder="Masukan Tanggal Formulir Penilai Atasan" class="form-control pull-right" id="datepicker4" type="text">
                                </div>
                            </div>
                            <span class="help-block"></span>
                        </div>

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