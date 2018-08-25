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
                <form method="post" action="<?=base_url("backend/edit_perilaku"); ?>" enctype="multipart/form-data" class="form-horizontal">
                    <?php foreach($data as $r) { ?>

                    <div class="form-group">
                            <label for="" class="col-sm-2 control-label">
                                Orientasi Pelayanan
                            </label>
                            <div class="col-sm-8">
                                <input name="id_pegawai" placeholder="Masukan Id Pegawai" class="form-control" type="text" value="<?= $r->id_pegawai; ?>">
                            </div>
                            <span class="help-block"></span>
                    </div>

                   <div class="form-group">
                            <label for="" class="col-sm-2 control-label">
                                Integritas
                            </label>
                            <div class="col-sm-8">
                                <input name="integritas" placeholder="Masukan Nilai Integritas" class="form-control" type="text" value="<?= $r->integritas; ?>">
                            </div>  
                            <span class="help-block"></span>
                    </div>

                    <div class="form-group">
                            <label for="" class="col-sm-2 control-label">
                                Komitmen
                            </label>
                            <div class="col-sm-8">
                                <input name="komitmen" placeholder="Masukan Nilai Komitmen" class="form-control" type="text" value="<?= $r->komitmen; ?>">
                            </div>
                            <span class="help-block"></span>
                    </div>

                    <div class="form-group">
                            <label for="" class="col-sm-2 control-label">
                                Disiplin
                            </label>
                            <div class="col-sm-8">
                                <input name="disiplin" placeholder="Masukan Nilai Disiplin" class="form-control" type="text" value="<?= $r->disiplin; ?>">
                            </div>
                            <span class="help-block"></span>
                    </div>

                    <div class="form-group">
                            <label for="" class="col-sm-2 control-label">
                                Kerjasama
                            </label>
                            <div class="col-sm-8">
                                <input name="kerjasama" placeholder="Masukan Nilai Kerjasama" class="form-control" type="text" value="<?= $r->kerjasama; ?>">
                            </div>
                            <span class="help-block"></span>
                    </div>

                    <div class="form-group">
                            <label for="" class="col-sm-2 control-label">
                                Kepemimpinan
                            </label>
                            <div class="col-sm-8">
                                <input name="kepemimpinan" placeholder="Masukan Nilai Kepemimpinan" class="form-control" type="text" value="<?= $r->kepemimpinan; ?>">
                            </div>
                            <span class="help-block"></span>
                    </div>

                    <div class="form-group">
                            <label for="" class="col-sm-2 control-label">
                                Jumlah
                            </label>
                            <div class="col-sm-8">
                                <input name="jumlah" placeholder="Masukan Nilai Jumlah" class="form-control" type="text" value="<?= $r->jumlah; ?>">
                            </div>
                            <span class="help-block"></span>
                    </div>

                    <div class="form-group">
                            <label for="" class="col-sm-2 control-label">
                                Rata-Rata
                            </label>
                            <div class="col-sm-8">
                                <input name="rata_rata" placeholder="Masukan Nilai Rata-Rata" class="form-control" type="text" value="<?= $r->rata_rata; ?>">
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