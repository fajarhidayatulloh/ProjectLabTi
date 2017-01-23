<div class="panel panel-default">
    <div class="panel-heading">
        INPUT DATA PENGUMUMAN
    </div>
    <div class="panel-body">
            <form name="mySelect" class="form-horizontal" action="<?php echo base_url() ?>pengumuman/proses" method="POST">
            <center><p> NT: Yang di berikan tanda bintang merah wajib di isi !!!</p></center>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Kategori</label>
                    <div class="col-sm-9">
                        <select name="kategori">
                            <option value="">Pilih Kategori</option>
                            <option value="Informasi">Informasi</option>
                            <option value="Berita">Berita</option>
                        </select>
                    </div>
                    <p style="color:red;">*</p>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Pengumuman</label>
                    <div class="col-sm-9">
                        <textarea name="pengumuman" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                    <p style="color:red;">*</p>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-9">
                        <button type="submit" class="btn btn-primary" name="submit">Input Data</button>
                    </div>
                </div>
            </form>
        </div>
        </div>
   