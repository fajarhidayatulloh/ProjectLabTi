<div class="panel panel-default">
    <div class="panel-heading">
        EDIT DATA PENGUMUMAN
    </div>
    <div class="panel-body">
            <form name="mySelect" class="form-horizontal" action="<?php echo base_url() ?>pengumuman/update" method="POST">
            <center><p> NT: Yang di berikan tanda bintang merah wajib di isi !!!</p></center>
            <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Pengumuman</label>
                    <div class="col-sm-9">
                        <textarea name="pengumuman" class="form-control" cols="30" rows="10"><?php echo $data['pengumuman'] ?></textarea>
                    </div>
                    <p style="color:red;">*</p>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-9">
                        <button type="submit" class="btn btn-primary" name="submit">Update Data</button>
                    </div>
                </div>
            </form>
        </div>
        </div>
   