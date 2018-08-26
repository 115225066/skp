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
                <form method="POST" action="<?=base_url("backend/edit_pegawai"); ?>" enctype="multipart/form-data" class="form-horizontal">
                    <?php foreach($data as $r) { ?>

                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">
                                Nama Pegawai
                            </label>
                            <div class="col-sm-8">
                                 <input name="id_pegawai" placeholder="Masukan Nama Pegawai" class="form-control" type="hidden" value="<?= $r->id_pegawai; ?>">
                                <input name="nama_pegawai" placeholder="Masukan Nama Pegawai" class="form-control" type="text" value="<?= $r->nama_pegawai; ?>">
                            </div>
                            <span class="help-block"></span>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">
                                NIP Pegawai
                            </label>
                            <div class="col-sm-8">
                                <input name="nip_pegawai" placeholder="Masukan NIP Pegawai" class="form-control" type="text" value="<?= $r->nip_pegawai; ?>">
                            </div>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">
                                Email Pegawai
                            </label>
                            <div class="col-sm-8">
                                <input name="email_pegawai" placeholder="Masukan Email Pegawai" class="form-control" type="text" value="<?= $r->email_pegawai; ?>">
                            </div>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">
                                Password Pegawai
                            </label>
                            <div class="col-sm-8">
                                <input name="password_pegawai" placeholder="Masukan Password Pegawai" class="form-control" type="text" value="<?= $r->password_pegawai; ?>">
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
                                        foreach($pangkat as $p) {
                                            if($r->id_palru==$p->id_palru) {
                                                echo '<option value="'. $p->id_palru .'" selected>'. $p->nama_palru .'</option>';
                                            } else {
                                                echo '<option value="'. $p->id_palru .'">'. $p->nama_palru .'</option>';
                                            }

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
                                        foreach($pangkat as $p) {
                                            if($r->id_jabatan==$p->id_jabatan) {
                                                echo '<option value="'. $p->id_jabatan .'" selected>'. $p->nama_jabatan .'</option>';
                                            } else {
                                                echo '<option value="'. $p->id_jabatan .'">'. $p->nama_jabatan .'</option>';
                                            }

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
                                <option value="PNS" <?php if($r->status_pegawai == "PNS"){ echo "selected";} ?>>PNS</option>
                                <option value="NON PNS" <?php if($r->status_pegawai == "NON PNS"){ echo "selected";} ?>>NON PNS</option>
                                </select>
                            </div>
                            <span class="help-block"></span>
                        </div>
            
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">
                                Aktif Pegawai
                            </label>
                            <div class="col-sm-8">
                                <select class="form-control" name="aktif_pegawai">
                                <option value="Aktif" <?php if($r->aktif_pegawai == "Aktif"){ echo "selected";} ?>>Aktif</option>
                                <option value="Tidak Aktif" <?php if($r->aktif_pegawai == "Tidak Aktif"){ echo "selected";} ?>>Tidak Aktif</option>
                                </select>
                            </div>
                            <span class="help-block"></span>
                        </div>
                    <?php
                        }
                    ?>

                    <div class="divider"></div>
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-6 text-right">
                            <button class="btn btn-primary" type="submit" name="btnupdate">Save</button>
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
