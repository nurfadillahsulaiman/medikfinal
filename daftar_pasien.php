<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Registrasi
        <small>Pasien</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin/masuk_admin') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Registrasi</li>
      </ol>
    </section>

<style type="text/css">
    .local {
        margin: 10px auto;
        width: 800px;
        padding: 10px;
        position: relative;
        border: 1px solid #ccc;
        
    }
  </style>
    <div class="box box-info local">
            <div class="box-header with-border">
              <h3 class="box-title">Form Registrasi</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <form role="form" action="<?php echo base_url().'pasien/tambah_pasien' ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Rekam Medis</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="rekmed"  placeholder="Rekam Medis"></input> 
                    </div>
                </div>
                  <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Lengkap</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama_lengkap" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Masuk</label>

                  <div class="col-sm-10">
                    <input type="date" name="tgl_masuk" class="form-control"   placeholder="Tanggal Masuk">
                  </div>
                </div>
                <div class="form-group">
                <label class="col-sm-2 control-label">Alamat</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="alamat"  placeholder="Alamat">
                </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">provinsi</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" name="provinsi"  placeholder="Provinsi"></textarea> 
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kabupaten/Kota</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kabupaten_kota"  placeholder="Kabupaten/Kota"></input> 
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kecematan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kecematan"  placeholder="Kecamatan"></input> 
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Desa/Kelurahan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="desa_kelurahan"  placeholder="Desa/Kelurahan"></input> 
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Umur</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="umur"  placeholder="Umur"></input> 
                    </div>
                </div>
               <div class="form-group radio-group row">
                    <label class="col-form-label col-md-2 col-sm-2 col-xs-12">Jenis Kelamin</label>
                      <div class="col-md-10 col-sm-10 col-xs-12">
                        <div id="jk" class="btn-group" data-toggle="buttons">
                    <label >
                        <input type="radio" name="jk" value="Laki-Laki" > &nbsp; Laki-Laki &nbsp;
                    </label>
                    <label >
                        <input type="radio" name="jk" value="Perempuan"> Perempuan
                    </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Telepon</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="telp"  placeholder="(+62...)"></input> 
                    </div>
                </div>
                 <div class="form-group row">
                    <label  class="control-label col-md-2 col-sm-2 col-xs-12">Pekerjaan</label>
                    <div class="col-md-10 col-sm-10 col-xs-8">
                     <select name="pekerjaan" class="form-control">
                          <option value="">-Pilih Pekerjaan-</option>
                          <option value="Buruh">Buruh</option>
                          <option value="Karyawan">Karyawan Swasta</option>
                          <option value="Nelayan">Nelayan</option>
                          <option value="Perangkat Desa">Perangkat Desa</option>
                          <option value="PNS">PNS</option>
                          <option value="Tani">Tani</option>
                          <option value="TNI/Polri">TNI/Polri</option>
                          <option value="Wiraswasta">Wiraswasta</option>
                          <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                        </select>
                    </div>
                </div>
                  <div class="form-group row">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12">Agama</label>
                    <div class="col-md-10 col-sm-10 col-xs-8">
                  <select name="agama" class="form-control" required="required">
                      <option value="">-Agama-</option>
                      <option value="Islam">Islam</option>
                      <option value="Kristen katolik">Kristen Katolik</option>
                      <option value="Kristen protestan">Kristen Protestan</option>
                      <option value="Hindu">Hindu</option>
                      <option value="Buddha">Buddha</option>
                      <option value="Konghucu">Konghucu</option>
                    </select></td>
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 control-label">Penanggung Jawab</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="pj"  placeholder="Penanggung Jawab"></input> 
                    </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
        
