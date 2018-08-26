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
       <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?= $jumlah->num_rows(); ?></h3>

              <p>Jumlah Total Pegawai</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?= $jumlah->num_rows(); ?></h3>

              <p>Jumlah PNS</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>Jumlah CPNS</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Jumlah Tenaga Kontrak</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

<!-- Custom tabs (Charts with tabs)-->
<section class="content">
    <div class="row">
        <div class="col-xs-13">
       
        <div class="box">
            <!-- /.box-header -->

            <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAMA</th>
                        <th>NIP</th>
                        <th>PANGKAT</th>
                        <th>JABATAN</th>
                        <th width="20%">OPTION</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                         $no = 1;
                        foreach($data as $r) {
                    ?>
                        <tr>
                            <td><?= $no; ?> </td>
                            <td><?= $r->nama_pegawai; ?></td>
                            <td><?= $r->nip_pegawai; ?></td>
                            <td><?= $this->Mpalru->filter($r->id_palru)->nama_palru; ?></td>
                            <td><?= $this->Mjabatan->filter($r->id_jabatan)->nama_jabatan; ?></td>

                            <td>
                                    <a href="<?= base_url('backend/tampil_ubah_pegawai/') . $r->id_pegawai; ?>" class="btn btn-primary"><i class="fa fa-external-link"></i> Proses</a>
                            </td>
                        </tr>
                    <?php
                      $no++;  }
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

          <!-- /.nav-tabs-custom -->

        <!-- /.col -->
    </div>
    <!-- /.row -->
    </section>
    <!-- /.content -->
</div>