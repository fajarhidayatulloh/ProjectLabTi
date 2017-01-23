<div class="panel panel-default">
    <div class="panel-heading">
        EDIT DATA GAJI
    </div>
    <div class="panel-body">
            <form class="form-horizontal" action="<?php echo base_url() ?>data-gaji/update" method="POST">
            <center><p> NT: Yang di berikan tanda bintang merah wajib di isi !!!</p></center>
            <input type="hidden" name="id" value="<?php echo $data['id_gaji'] ?>">
                <div class="form-group">
                    <label class="col-sm-2 control-label">NIP</label>
                    <div class="col-sm-9">
                        <input type="text" name="nip" class="form-control" value="<?php echo $data['nip']; ?>" required>
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
                        <input type="text" name="jum_anak" class="form-control" value="<?php echo $data['jum_anak']; ?>" required>
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
                        <button type="submit" class="btn btn-primary" name="submit" >Update Data Gaji</button>
                    </div>
                </div>
            </form>
        </div>
   
</div>
