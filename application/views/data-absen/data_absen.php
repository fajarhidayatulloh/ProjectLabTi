<div class="col-sm-0">
    <a class="btn btn-primary" href="<?php echo base_url() ?>data-absen/input"><i class=" fa fa-pencil"></i> Input Data</a>    
    <a class="btn btn-default" href="<?php echo base_url() ?>data-absen"><i class=" fa fa-refresh"></i> Refresh</a>
</div>

<br>
<!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DATA ABSEN
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="display table table-bordered" id="example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIP</th>
                                            <th>Nama Pegawai</th>
                                            <th>Tangal Absen</th>
                                            <th>Jam Masuk</th>
                                            <th>Keterangan</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=1; foreach($data->result() as $r){ ?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $r->nip ?></td>
                                            <td><?php echo $r->nama ?></td>
                                            <td><?php echo date('d F Y',strtotime($r->tanggal_absen)) ?></td>
                                            <td><?php echo $r->jam_masuk ?></td>
                                            <td><?php echo $r->status ?></td>
                                            <td><?php if($r->jam_masuk  > 07){ 
                                                    echo "Terlambat";
                                                 }else{
                                                    echo "Tepat Waktu";
                                                 }       
                                                ?>
                                            
                                            </td>
                                            <td><a class="btn btn-primary" href="<?php echo base_url() ?>data-absen/edit/<?php echo $r->id_absensi ?>"><i class=" fa fa-pencil"></i> Edit</a> ||
                                            <a class="btn btn-danger" href="<?php echo base_url() ?>data-absen/delete/<?php echo $r->id_absensi ?>"><i class=" fa fa-trash"></i> Hapus</a></td>
                                        </tr>
                                        <?php $no++; ?>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
