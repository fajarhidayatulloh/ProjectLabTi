<script language="javascript">
      function dis_able()
      {
        if(document.mySelect.st_masuk.value != 'Masuk')
          document.mySelect.jam_masuk.disabled=3;
        
        else
          document.mySelect.jam_masuk.disabled=0;
      }
      </script>
<div class="panel panel-default">
    <div class="panel-heading">
        INPUT DATA ABSEN
    </div>
    <div class="panel-body">
            <form name="mySelect" class="form-horizontal" action="<?php echo base_url() ?>data-absen/proses" method="POST">
            <center><p> NT: Yang di berikan tanda bintang merah wajib di isi !!!</p></center>
                <div class="form-group">
                    <label class="col-sm-2 control-label">NIP</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nip" placeholder="Masukan NIP" required>
                    </div>
                    <p style="color:red;">*</p>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Status Masuk</label>
                    <div class="col-sm-9">
                        <select name="st_masuk" class="form-control" onChange="dis_able()" required>
                            <option value="">Pilih Status</option>
                            <option value="Masuk">Masuk</option>
                            <option value="Izin">Izin</option>
                            <option value="Sakit">Sakit</option>
                        </select>
                    </div>
                    <p style="color:red;">*</p>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal Masuk</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="datepicker1" name="tgl_masuk" placeholder="Masukan Nama" required>
                    </div>
                    <p style="color:red;">*</p>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label">Jam Masuk</label>
                    <div class="col-sm-9">
                        <input disabled type="time" class="form-control" name="jam_masuk" placeholder="Masukan Jam Masuk" required>
                    </div>
                    <p style="color:red;">*</p>
                </div>

               
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-9">
                        <button type="submit" class="btn btn-primary" name="submit">Input Data Absen</button>
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
