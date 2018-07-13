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
              <h3 class="box-title">Data Registrasi</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php 
              foreach ($tb_pasien as $p ) {
                
              
             ?>
              <form role="form" action="<?php echo base_url().'pasien/update_pasien' ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
              <div class="box-body">
                  <div class="form-group">
                  <label class="col-sm-2 control-label">Rekam Medik</label>
                  <div class="col-sm-10">
                    <input type="hidden" name="id" value="<?php echo $p->id ?>">
                    <input type="text" name="rekmed" class="form-control" value="<?php echo $p->rekmed ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Masuk</label>

                  <div class="col-sm-10">
                    <input type="date" name="tgl_masuk" class="form-control" value="<?php echo $p->tgl_masuk ?>" >
                  </div>
                </div>
                <div class="form-group">
                <label class="col-sm-2 control-label">Nama Lengkap</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="nama_lengkap" value="<?php echo $p->nama_lengkap ?>">
                </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" name="alamat"><?php echo $p->alamat ?></textarea> 
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Provinsi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="provinsi"  value="<?php echo $p->provinsi ?>"></input> 
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kabupaten/Kota</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kabupaten_kota" value="<?php echo $p->kabupaten_kota ?>"></input> 
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kecamatan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kecematan" value="<?php echo $p->kecematan ?>"></input> 
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Desa/Kelurahan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="desa_kelurahan" value="<?php echo $p->desa_kelurahan ?>"></input> 
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Umur</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="umur" value="<?php echo $p->umur ?>"></input> 
                    </div>
                </div>
               <div class="form-group radio-group row">
                    <label class="col-form-label col-md-2 col-sm-2 col-xs-12">Jenis Kelamin</label>
                      <div class="col-md-10 col-sm-10 col-xs-12">
                        <div id="jk" class="btn-group" data-toggle="buttons">
                    <label >
                        <input type="radio" name="jk" value="Laki-Laki" <?php if($p->jk == 'Laki-Laki') echo 'checked'; ?> > &nbsp; Laki-Laki &nbsp;
                    </label>
                    <label >
                        <input type="radio" name="jk" value="Perempuan" <?php if($p->jk == 'Perempuan') echo 'checked'; ?> > Perempuan
                    </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Telepon</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="telp" value="<?php echo $p->telp ?>" ></input> 
                    </div>
                </div>
                 <div class="form-group row">
                    <label  class="control-label col-md-2 col-sm-2 col-xs-12">Pekerjaan</label>
                    <div class="col-md-10 col-sm-10 col-xs-8">
                     <select name="pekerjaan" class="form-control">
                          <option value="">-Pilih Pekerjaan-</option>
                          <option <?php if($p->pekerjaan == "Buruh") {echo "selected";} ?>  value="Buruh">Buruh</option>
                          <option <?php if($p->pekerjaan == "Karyawan Swasta") {echo "selected";} ?>  value="Karyawan">Karyawan Swasta</option>
                          <option <?php if($p->pekerjaan == "Nelayan") {echo "selected";} ?>  value="Nelayan">Nelayan</option>
                          <option <?php if($p->pekerjaan == "Perangkat Desa") {echo "selected";} ?>  value="Perangkat Desa">Perangkat Desa</option>
                          <option <?php if($p->pekerjaan == "PNS") {echo "selected";} ?>  value="PNS">PNS</option>
                          <option <?php if($p->pekerjaan == "Tani") {echo "selected";} ?>  value="Tani">Tani</option>
                          <option <?php if($p->pekerjaan == "TNI/Polri") {echo "selected";} ?>  value="TNI/Polri">TNI/Polri</option>
                          <option <?php if($p->pekerjaan == "Wiraswasta") {echo "selected";} ?>  value="Wiraswasta">Wiraswasta</option>
                          <option <?php if($p->pekerjaan == "Pelajar/Mahasiswa") {echo "selected";} ?>  value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                        </select>
                    </div>
                </div>
                  <div class="form-group row">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12">Agama</label>
                    <div class="col-md-10 col-sm-10 col-xs-8">
                  <select name="agama" class="form-control" required="required">
                      <option value="">-Agama-</option>
                      <option <?php if($p->agama == "Islam") {echo "selected";} ?>  value="Islam">Islam</option>
                      <option <?php if($p->agama == "Kristen Katolik") {echo "selected";} ?>  value="Kristen katolik">Kristen Katolik</option>
                      <option <?php if($p->agama == "Kristen Protestan") {echo "selected";} ?> value="Kristen protestan">Kristen Protestan</option>
                      <option <?php if($p->agama == "Hindu") {echo "selected";} ?> value="Hindu">Hindu</option>
                      <option <?php if($p->agama == "Buddha") {echo "selected";} ?> value="Buddha">Buddha</option>
                      <option <?php if($p->agama == "Konghucu") {echo "selected";} ?> value="Konghucu">Konghucu</option>
                    </select></td>
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 control-label">Penanggung Jawab</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="pj"  value="<?php echo $p->pj ?>"></input> 
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
          <?php } ?>
    </div>
