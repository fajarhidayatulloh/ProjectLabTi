<div class="panel panel-default">
    <div class="panel-heading">
        INPUT DATA CUTI
    </div>
    <div class="panel-body">
            <form class="form-horizontal" action="<?php echo base_url() ?>data_cuti/proses" method="post">
            <center><p> NT: Yang di berikan tanda bintang merah wajib di isi !!!</p></center>
                <div class="form-group">
                    <label class="col-sm-2 control-label">NIP</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nip" placeholder="Masukan NIP" required>
                    </div>
                    <p style="color:red;">*</p>
                </div>
            
                <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal Mulai Cuti</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="mulai_cuti" id="datepicker1" value="<?php echo gmdate("Y-m-d") ?>" required>
                    </div>
                    <p style="color:red;">*</p>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal Selesai Cuti</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="selesai_cuti" id="datepicker2" value="<?php echo gmdate("Y-m-d") ?>" required>
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
