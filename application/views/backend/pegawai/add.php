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
        <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
                <form method="post" action="<?=base_url("backend/insert_pegawai"); ?>" enctype="multipart/form-data" class="form-horizontal">

                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">
                            Nama Pegawai
                        </label>
                        <div class="col-sm-8">
                            <input name="nama_pegawai" placeholder="Masukan Nama Pegawai" class="form-control" type="text">
                        </div>
                        <span class="help-block"></span>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">
                            NIP Pegawai
                        </label>
                        <div class="col-sm-8">
                            <input name="nip_pegawai" placeholder="Masukan NIP Pegawai" class="form-control" type="text">
                        </div>
                        <span class="help-block"></span>
                    </div>    
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">
                            Email Pegawai
                        </label>
                        <div class="col-sm-8">
                            <input name="email_pegawai" placeholder="Masukan Email Pegawai" class="form-control" type="text">
                        </div>
                        <span class="help-block"></span>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">
                            Password Pegawai
                        </label>
                        <div class="col-sm-8">
                            <input name="password_pegawai" placeholder="Masukan Password Pegawai" class="form-control" type="text">
                        </div>
                        <span class="help-block"></span>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">
                            Pangkat
                        </label>
                        <div class="col-sm-8">
                            <select class="form-control" name="id_palru">
                                <?php
                                    $pangkat = $this->db->query("SELECT * FROM tbl_palru")->result();
                                    foreach($pangkat as $r) {
                                        echo '<option value="'. $r->id_palru .'">'. $r->nama_palru .'</option>';
                                    }
                                ?>
                            </select>
                        </div>
                        <span class="help-block"></span>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">
                            Jabatan
                        </label>
                        <div class="col-sm-8">
                            <select class="form-control" name="id_jabatan">
                                <?php
                                    $pangkat = $this->db->query("SELECT * FROM tbl_jabatan")->result();
                                    foreach($pangkat as $r) {
                                        echo '<option value="'. $r->id_jabatan .'">'. $r->nama_jabatan .'</option>';
                                    }
                                ?>
                            </select>
                        </div>
                        <span class="help-block"></span>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">
                            Status Pegawai
                        </label>
                        <div class="col-sm-8">
                        <select class="form-control" name="status_pegawai">
                            <option>PNS</option>
                            <option>Non PNS</option>
                        </select>
                        </div>
                        <span class="help-block"></span>
                    </div>
                
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">
                            Status Keaktifan Pegawai
                        </label>
                        <div class="col-sm-8">
                        <select class="form-control" name="aktif_pegawai">
                            <option>Aktif</option>
                            <option>Tidak Aktif</option>
                        </select>
                        </div>
                        <span class="help-block"></span>
                    </div>
                    
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