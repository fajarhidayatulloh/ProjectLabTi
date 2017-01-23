
<div class="panel panel-default">
    <div class="panel-heading">
        INPUT DATA PEGAWAI
    </div>
    <div class="panel-body">
            <div class="form-horizontal">
                <div class="form-group">
                    <label class="col-sm-2 control-label">NIP</label>
                    <div class="col-sm-9">
                        <?php echo $read['nip']; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-9">
                        <?php echo $read['nama']; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Tempat Lahir</label>
                    <div class="col-sm-9">
                        <?php echo $read['tmpt_lahir']; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal Lahir</label>
                    <div class="col-sm-9">
                        <?php echo date('d F Y',strtotime($read['tgl_lahir'])) ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Jenis Kelamin</label>
                    <div class="col-sm-9">
                        <?php echo $read['jenis_kelamin'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-9">
                        <?php echo $read['alamat'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal Masuk</label>
                    <div class="col-sm-9">
                        <?php echo date('d F Y',strtotime($read['tgl_masuk']))?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Jabatan</label>
                    <div class="col-sm-9">
                        <?php echo $read['n_jab'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">No HP</label>
                    <div class="col-sm-9">
                        <?php echo $read['nohp'] ?>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label">Agama</label>
                    <div class="col-sm-9">
                        <?php echo $read['nmagama'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Pendidikan</label>
                    <div class="col-sm-9">
                        <?php echo $read['nmpndidik'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Status</label>
                    <div class="col-sm-9">
                        <?php echo $read['nmstatusk'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Status Pegawai</label>
                    <div class="col-sm-9">
                        <?php echo $read['nmstatusp'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Jumlah Anak</label>
                    <div class="col-sm-9">
                        <?php echo $read['jum_anak'] ?>
                    </div>
                </div>
            </div>
        </div>
   
</div>
