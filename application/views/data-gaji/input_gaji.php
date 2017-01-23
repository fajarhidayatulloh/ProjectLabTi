
<div class="panel panel-default">
    <div class="panel-heading">
        INPUT DATA GAJI
    </div>
    <div class="panel-body">
            <form class="form-horizontal" action="<?php echo base_url() ?>data-gaji/proses" method="POST">
            <center><p> NT: Yang di berikan tanda bintang merah wajib di isi !!!</p></center>
                <div class="form-group">
                    <label class="col-sm-2 control-label">NIP</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nip" placeholder="Masukan NIP" required>
                    </div>
                    <p style="color:red;">*</p>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label">Jabatan</label>
                    <div class="col-sm-9">
                        <select name="jabatan" class="form-control" required>
                        <option value="">Pilih Jabatan</option>
                        <?php foreach($getjab->result() as $r){ ?>
                            <option value="<?php echo $r->id_jab ?>"><?php echo $r->n_jab ?></option>

                        <?php } ?>
                        </select>
                    </div>
                    <p style="color:red;">*</p>
                </div>
               
                <div class="form-group">
                    <label class="col-sm-2 control-label">Pendidikan</label>
                    <div class="col-sm-9">
                        <select name="pendidikan" class="form-control" required>
                            <option value="">Pilih Pendidikan</option>
                            <?php foreach($getpddk->result() as $r){ ?>
                            <option value="<?php echo $r->id_pndidik ?>"><?php echo $r->nmpndidik ?></option>

                        <?php } ?>
                        </select>
                    </div>
                    <p style="color:red;">*</p>
                </div>
            
                <div class="form-group">
                    <label class="col-sm-2 control-label">Jumlah Anak</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="jum_anak" placeholder="Masukan Jumlah Anak" required>
                    </div>
                    <p style="color:red;">*</p>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label">Status</label>
                    <div class="col-sm-9">
                        <select name="statusk" class="form-control" required>
                            <option value="">Pilih Status</option>
                            <?php foreach($getstk->result() as $r){ ?>
                            <option value="<?php echo $r->id_statusk ?>"><?php echo $r->nmstatusk ?></option>

                        <?php } ?>
                        </select>
                    </div>
                    <p style="color:red;">*</p>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Status Pegawai</label>
                    <div class="col-sm-9">
                        <select name="statusp" class="form-control" required>
                            <option value="">Pilih Status Pegawai</option>
                            <?php foreach($getstp->result() as $r){ ?>
                            <option value="<?php echo $r->id_statusp ?>"><?php echo $r->nmstatusp?></option>

                        <?php } ?>
                        </select>
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
                        <button type="submit" class="btn btn-primary" name="submit">Input Data Gaji</button>
                    </div>
                </div>
            </form>
        </div>
   
</div>
