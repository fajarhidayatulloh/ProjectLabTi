<div class="col-sm-0">
    <a class="btn btn-primary" href="<?php echo base_url() ?>data-cuti/input"><i class=" fa fa-pencil"></i> Input Data</a>    
    <a class="btn btn-default" href="<?php echo base_url() ?>data-cuti"><i class=" fa fa-refresh"></i> Refresh</a>
</div>

<br>
<!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DATA CUTI
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="display table table-bordered" id="example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIP</th>
                                            <th>Nama Pegawai</th>
                                            <th>Mulai Cuti</th>
                                            <th>Selesai Cuti</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=1; foreach($data->result() as $r){ ?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $r->nip ?></td>
                                            <td><?php echo $r->nama ?></td>
                                            <td><?php echo date('d F Y',strtotime($r->mulai_cuti)) ?></td>
                                            <td><?php echo date('d F Y',strtotime($r->selesai_cuti)) ?></td>
                                            <td><a class="btn btn-primary" href="<?php echo base_url() ?>data-cuti/edit/<?php echo $r->id_cuti ?>"><i class=" fa fa-pencil"></i> Edit</a>||
                                            <a class="btn btn-danger" href="<?php echo base_url() ?>data-cuti/delete/<?php echo $r->id_cuti ?>"><i class=" fa fa-trash"></i> Hapus</a></td>
                                        </tr>
                                        <?php $no++; ?>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
