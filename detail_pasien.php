  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Riwayat
        <small>Medis</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin/masuk_admin') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Pasien</li>
      </ol>
    </section>
<?php foreach ($tb_pasien as $k) {
  
?>

<div class="container">
  <div class="box">
   <form role="form" action="" method="post" enctype="multipart/form-data">
        <div class="panel panel-primary setup-content" id="step-1">
            <div class="panel-heading">
                 <h3 class="panel-title">DATA REKAM MEDIK </h3>
            </div>
            <div class="panel-body">
              <div class="form-group row">
                <input type="hidden" name="id" value="<?php echo $k->id ?>">
                    <label  class="control-label col-md-1 col-sm-1 col-xs-12">Nama</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input class="form-control col-md-8 col-xs-12" type="text" name="nama_lengkap" value="<?php echo $k->nama_lengkap ?>">
                    </div>
                    <label  class="control-label col-md-1 col-sm-1 col-xs-12">J.Kelamin</label>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                      <input class="form-control col-md-2 col-xs-12" type="text" name="jk" value="<?php echo $k->jk ?>">
                    </div>
              </div>
              <div class="form-group row">
                    <label  class="control-label col-md-1 col-sm-1 col-xs-12">Alamat</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input class="form-control col-md-8 col-xs-12" type="text" name="alamat" value="<?php echo $k->alamat ?>">
                    </div>
                    <label  class="control-label col-md-1 col-sm-1 col-xs-12">No Telp</label>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                      <input class="form-control col-md-7 col-xs-12" type="text" name="telp" value="<?php echo $k->telp ?>">
                    </div>
              </div>
               <div class="form-group row">
                    <label  class="control-label col-md-2 col-sm-2 col-xs-12">Usia</label>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                      <input class="form-control col-md-7 col-xs-12" type="text" name="umur" value="<?php echo $k->umur ?>">
                    </div>
              </div>
               <div class="form-group row">
                    <label  class="control-label col-md-2 col-sm-2 col-xs-12">Agama</label>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                      <input class="form-control col-md-7 col-xs-12" type="text" name="agama" value="<?php echo $k->agama ?>">
                    </div>
                     <label  class="control-label col-md-1 col-sm-1 col-xs-12">Pekerjaan</label>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                      <input class="form-control col-md-7 col-xs-12" type="text" name="pekerjaan" value="<?php echo $k->pekerjaan ?>">
                    </div>
              </div>
             
            </div>
        </div>
  </div>
</div>


<div class="container">
<div class="box ">
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-primary btn-block " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <div align="left" style="color: white;">Detail Biodata Pasien</div>
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">

      <div class="card-body">
        <div class="panel-body">
              <div class="form-group row">
                <input type="hidden" name="id" value="<?php echo $k->id ?>">
                    <label  class="control-label col-md-1 col-sm-1 col-xs-12">Nama Lengkap</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input class="form-control col-md-8 col-xs-12" type="text" name="nama_lengkap" value="<?php echo $k->nama_lengkap ?>">
                    </div>
                    <label  class="control-label col-md-1 col-sm-1 col-xs-12">J.Kelamin</label>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                      <input class="form-control col-md-2 col-xs-12" type="text" name="jk" value="<?php echo $k->jk ?>">
                    </div>
              </div>
              <div class="form-group row">
                    <label  class="control-label col-md-1 col-sm-1 col-xs-12">Alamat</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input class="form-control col-md-8 col-xs-12" type="text" name="alamat" value="<?php echo $k->alamat ?>">
                    </div>
                    <label  class="control-label col-md-1 col-sm-1 col-xs-12">No Telp</label>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                      <input class="form-control col-md-7 col-xs-12" type="text" name="telp" value="<?php echo $k->telp ?>">
                    </div>
              </div>
               <div class="form-group row">
                    <label  class="control-label col-md-2 col-sm-2 col-xs-12">Usia</label>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                      <input class="form-control col-md-7 col-xs-12" type="text" name="umur" value="<?php echo $k->umur ?>">
                    </div>
              </div>
               <div class="form-group row">
                    <label  class="control-label col-md-2 col-sm-2 col-xs-12">Agama</label>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                      <input class="form-control col-md-7 col-xs-12" type="text" name="agama" value="<?php echo $k->agama ?>">
                    </div>
                     <label  class="control-label col-md-1 col-sm-1 col-xs-12">Pekerjaan</label>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                      <input class="form-control col-md-7 col-xs-12" type="text" name="pekerjaan" value="<?php echo $k->pekerjaan ?>">
                    </div>
              </div>
             
            </div>
          <?php } ?>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-primary btn-block collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <div align="left" style="color: white;">Rawat Inap</div>
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
            <!-- /.box-header -->
            <div class="container">
            <div class="table-responsive ">
              <table  class="table table-bordered table-striped" id="example1">
                <thead>
                <tr>
                  <th>Tanggal</th>
                  <th>Ruangan</th>
                  <th>Kelas</th>
                  <th>No Kamar</th>
                  <th>Dokter</th>
                  <th>Diagnosa</th>
                  <th>Biaya</th>
                  <th>Detail</th>
                </tr>
                </thead>
                <tbody>
                  <tr>
                    <td></td>
                    <td></a></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>  
                  </tr>
                </tbody>
              </table>
         </div>
         </div>
       </div>
     </div>
  </div>
  <article>

  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-primary  btn-block collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <div align="left" style="color: white;">Rawat Jalan</div>
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
            <!-- /.box-header -->
            <div class="container">
            <div class="table-responsive ">
              <table  class="table table-bordered table-striped" id="example2">
                <thead>
                <tr>
                  <th>Tanggal</th>
                  <th>Ruangan</th>
                  <th>Kelas</th>
                  <th>No Kamar</th>
                  <th>Dokter</th>
                  <th>Diagnosa</th>
                  <th>Biaya</th>
                  <th>Detail</th>
                </tr>
                </thead>
                <tbody>
                  <tr>
                    <td></td>
                    <td></a></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
         </div>
         </div>
      </div>
    </div>
  </div>


  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-primary  btn-block collapsed" type="button" data-toggle="collapse" data-target="#collapseThree3" aria-expanded="false" aria-controls="collapseThree">
          <div align="left" style="color: white;"> Rawat UGD</div>
        </button>
      </h5>
    </div>
    <div id="collapseThree3" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>