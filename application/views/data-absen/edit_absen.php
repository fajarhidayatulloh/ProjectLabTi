<div class="panel panel-default">
    <div class="panel-heading">
        EDIT DATA ABSEN
    </div>
    <div class="panel-body">
            <form name="mySelect" class="form-horizontal" action="<?php echo base_url() ?>data-absen/update" method="POST">
            <input type="hidden" name="id" value="<?php echo $data['id_absensi'] ?>">
            <center><p> NT: Yang di berikan tanda bintang merah wajib di isi !!!</p></center>
                <div class="form-group">
                    <label class="col-sm-2 control-label">NIP</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nip" value="<?php echo $data['nip'] ?>" required>
                    </div>
                    <p style="color:red;">*</p>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Status Masuk</label>
                    <div class="col-sm-9">
                        <select name="st_masuk" class="form-control" onChange="dis_able()" required>
                            <option value="">Pilih Status</option>
                            <option <?php if ($data['status']=='Masuk'){echo "selected";} ?> value="Masuk">Masuk</option>
                            <option <?php if ($data['status']=='Izin'){echo "selected";} ?> value="Izin">Izin</option>
                            <option <?php if ($data['status']=='Sakit'){echo "selected";} ?> value="Sakit">Sakit</option>
                        </select>
                    </div>
                    <p style="color:red;">*</p>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal Masuk</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="datepicker1" name="tgl_masuk" value="<?php echo $data['tanggal_absen'] ?>" required>
                    </div>
                    <p style="color:red;">*</p>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label">Jam Masuk</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="jam_masuk" value="<?php echo $data['jam_masuk'] ?>" required>
                    </div>
                    <p style="color:red;">*</p>
                </div>

                
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-9">
                        <button type="submit" class="btn btn-primary" name="submit">Update Data Absen</button>
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
