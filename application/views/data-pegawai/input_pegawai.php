
<div class="panel panel-default">
    <div class="panel-heading">
        INPUT DATA PEGAWAI
    </div>
    <div class="panel-body">
            <form class="form-horizontal" action="<?php echo base_url() ?>data-pegawai/proses" method="POST">
            <center><p> NT: Yang di berikan tanda bintang merah wajib di isi !!!</p></center>
                <div class="form-group">
                    <label class="col-sm-2 control-label">NIP</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nip" placeholder="Masukan NIP" required>
                    </div>
                    <p style="color:red;">*</p>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nama" placeholder="Masukan Nama" required>
                    </div>
                    <p style="color:red;">*</p>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Tempat Lahir</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="t_lahir" placeholder="Masukan Tempat Lahir" required>
                    </div>
                    <p style="color:red;">*</p>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal Lahir</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="tgl_lahir" placeholder="Masukan Tanggal Lahir" id="datepicker1" required>
                    </div>
                    <p style="color:red;">*</p>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Jenis Kelamin</label>
                    <div class="col-sm-9">
                        <label class="radio-inline">
                            <input type="radio" name="jk" value="Laki-Laki" required> Laki-Laki
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="jk" value="Perempuan" required> Perempuan
                        </label>
                    </div>
                    <p style="color:red;">*</p>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-9">
                        <textarea name="alamat" class="form-control" cols="30" rows="10" required ></textarea>
                    </div>
                    <p style="color:red;">*</p>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal Masuk</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="tgl_masuk"  placeholder="Masukan Tanggal Masuk" id="datepicker2" required>
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
                    <label class="col-sm-2 control-label">No HP</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nohp" placeholder="Masukan Nama" required>
                    </div>
                    <p style="color:red;">*</p>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label">Agama</label>
                    <div class="col-sm-9">
                        <select name="agama" class="form-control" required>
                            <option value="">Pilih Agama</option>
                        <?php foreach($getagama->result() as $r){ ?>
                            <option value="<?php echo $r->id_agm ?>"><?php echo $r->nmagama ?></option>

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
                    <label class="col-sm-2 control-label">Jumlah Anak</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="jum_anak" placeholder="Masukan Nama" required>
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
                        <button type="submit" class="btn btn-primary" name="submit">Input Data Pegawai</button>
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
