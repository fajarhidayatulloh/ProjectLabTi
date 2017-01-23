<div class="panel panel-default">
    <div class="panel-heading">
        EDIT DATA PEGAWAI
    </div>
    <div class="panel-body">
            <form class="form-horizontal" action="<?php echo base_url() ?>data-pegawai/update" method="POST">
            <center><p> NT: Yang di berikan tanda bintang merah wajib di isi !!!</p></center>
            <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                <div class="form-group">
                    <label class="col-sm-2 control-label">NIP</label>
                    <div class="col-sm-9">
                        <input type="text" name="nip" class="form-control" value="<?php echo $data['nip']; ?>" required>
                    </div>
                    <p style="color:red;">*</p>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nama" value="<?php echo $data['nama']; ?>" required>
                    </div>
                    <p style="color:red;">*</p>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Tempat Lahir</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="t_lahir" value="<?php echo $data['tmpt_lahir']; ?>" required>
                    </div>
                    <p style="color:red;">*</p>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal Lahir</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="tgl_lahir" value="<?php echo $data['tgl_lahir']; ?>" id="datepicker1" required>
                    </div>
                    <p style="color:red;">*</p>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Jenis Kelamin</label>
                    <div class="col-sm-9">
                          
                        <label class="radio-inline">
                            <input type="radio" name="jk" value="Laki-Laki" <?php if($data['jenis_kelamin']=='Laki-Laki'){ 
                                echo "checked";}?>> Laki-Laki
                        </label>
                    
                        <label class="radio-inline">
                            <input type="radio" name="jk" value="Perempuan" <?php if($data['jenis_kelamin']=='Perempuan'){ 
                                echo "checked";}?> > Perempuan
                        </label>
                    
                    </div>
                    <p style="color:red;">*</p>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-9">
                        <textarea name="alamat" class="form-control" cols="30" rows="10" required ><?php echo $data['alamat']; ?></textarea>
                    </div>
                    <p style="color:red;">*</p>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal Masuk</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="tgl_masuk" value="<?php echo $data['tgl_masuk']; ?>" id="datepicker2" required>
                    </div>
                    <p style="color:red;">*</p>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Jabatan</label>
                    <div class="col-sm-9">
                        <select name="jabatan" class="form-control" required>
                            <option value="">Pilih Jabatan</option> 
                            <option <?php if($getjab['id_jab']==1){echo "selected";} ?> value="1">CEO</option>
                            <option <?php if($getjab['id_jab']==2){echo "selected";} ?> value="2">CTO</option>
                            <option <?php if($getjab['id_jab']==3){echo "selected";} ?> value="3">CFO</option>
                            <option <?php if($getjab['id_jab']==4){echo "selected";} ?> value="4">Manager</option>
                            <option <?php if($getjab['id_jab']==5){echo "selected";} ?> value="5">Staf Karyawan</option>
                        </select>
                    </div>
                    <p style="color:red;">*</p>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">No HP</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nohp" value="<?php echo $data['nohp']; ?>" required>
                    </div>
                    <p style="color:red;">*</p>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label">Agama</label>
                    <div class="col-sm-9">
                        <select name="agama" class="form-control" required>
                            <option value="">Pilih Agama</option>
                            <option <?php if($getagama['id_agm']==1){echo "selected";} ?> value="1">Islam</option>
                            <option <?php if($getagama['id_agm']==2){echo "selected";} ?> value="2">Khatolik</option>
                            <option <?php if($getagama['id_agm']==3){echo "selected";} ?> value="3">Kristen Protestan</option>
                            <option <?php if($getagama['id_agm']==4){echo "selected";} ?> value="4">Hindu</option>
                            <option <?php if($getagama['id_agm']==5){echo "selected";} ?> value="5">Budha</option>
                        </select>
                    </div>
                    <p style="color:red;">*</p>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Pendidikan</label>
                    <div class="col-sm-9">
                        <select name="pendidikan" class="form-control" required>
                            <option value="">Pilih Pendidikan</option>
                            <option <?php if($getpddk['id_pndidik']==1){echo "selected";} ?> value="1">SD</option>
                            <option <?php if($getpddk['id_pndidik']==2){echo "selected";} ?> value="2">SMP</option>
                            <option <?php if($getpddk['id_pndidik']==3){echo "selected";} ?> value="3">SMA</option>
                            <option <?php if($getpddk['id_pndidik']==4){echo "selected";} ?> value="4">D1</option>
                            <option <?php if($getpddk['id_pndidik']==5){echo "selected";} ?> value="5">D2</option>
                            <option <?php if($getpddk['id_pndidik']==6){echo "selected";} ?> value="6">D3</option>
                            <option <?php if($getpddk['id_pndidik']==7){echo "selected";} ?> value="7">D4</option>
                            <option <?php if($getpddk['id_pndidik']==8){echo "selected";} ?> value="8">S1</option>
                            <option <?php if($getpddk['id_pndidik']==9){echo "selected";} ?> value="9">S2</option>
                            <option <?php if($getpddk['id_pndidik']==10){echo "selected";} ?> value="10">S3</option>
                        </select>
                    </div>
                    <p style="color:red;">*</p>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label">Status</label>
                    <div class="col-sm-9">
                        <select name="statusk" class="form-control" required>
                            <option value="">Pilih Status</option>
                            <option <?php if($getstk['id_statusk']==1){echo "selected";} ?> value="1">Belum Menikah</option>
                            <option <?php if($getstk['id_statusk']==2){echo "selected";} ?> value="2">Menikah</option>
                            <option <?php if($getstk['id_statusk']==3){echo "selected";} ?> value="3">Duda</option>
                            <option <?php if($getstk['id_statusk']==4){echo "selected";} ?> value="4">Janda</option>
                        </select>
                    </div>
                    <p style="color:red;">*</p>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Status Pegawai</label>
                    <div class="col-sm-9">
                        <select name="statusp" class="form-control" required>
                            <option value="">Pilih Status Pegawai</option>
                            <option <?php if($getstp['id_statusp']==1){echo "selected";} ?> value="1">Tetap</option>
                            <option <?php if($getstp['id_statusp']==2){echo "selected";} ?> value="2">Kontrak</option>
                            <option <?php if($getstp['id_statusp']==3){echo "selected";} ?> value="3">Magang</option>
                        </select>
                    </div>
                    <p style="color:red;">*</p>
                </div>
                
                 <div class="form-group">
                    <label class="col-sm-2 control-label">Jumlah Anak</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="jum_anak" value="<?php echo $data['jum_anak']; ?>"  required>
                    </div>
                    <p style="color:red;">*</p>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-9">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Setuju
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-9">
                        <button type="submit" class="btn btn-primary" name="submit" >Update Data Pegawai</button>
                    </div>
                </div>
            </form>
        </div>
   
</div>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $(document).ready(function() {
    $("#datepicker1").datepicker({
        dateFormat: 'yy-mm-dd'
    });
  } );
   $(document).ready(function() {
    $("#datepicker2").datepicker({
        dateFormat: 'yy-mm-dd'
    });
  } );
  </script>
