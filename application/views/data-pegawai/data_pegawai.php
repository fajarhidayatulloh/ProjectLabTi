<div class="col-sm-0">
    <a class="btn btn-primary" href="<?php echo base_url() ?>data-pegawai/input"><i class=" fa fa-pencil"></i> Input Data</a>    
    <a class="btn btn-default" href="<?php echo base_url() ?>data-pegawai"><i class=" fa fa-refresh"></i> Refresh</a>
</div>

<br>
<!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DATA PEGAWAI
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="display table table-bordered" id="example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIP</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Jabatan</th>
                                            <th>Agama</th>
                                            <th>Pendidikan</th>
                                            <th>Status</th>
                                            <th>Status Pegawai</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=1; foreach($data->result() as $r){ ?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $r->nip ?></td>
                                            <td><?php echo $r->nama ?></td>
                                            <td><?php echo $r->jenis_kelamin ?></td>
                                            <td><?php echo $r->n_jab ?></td>
                                            <td><?php echo $r->nmagama ?></td>
                                            <td><?php echo $r->nmpndidik ?></td>
                                            <td><?php echo $r->nmstatusk ?></td>
                                            <td><?php echo $r->nmstatusp ?></td>
                                            <td><a class="btn btn-success" href="<?php echo base_url() ?>data-pegawai/read/<?php echo $r->id ?>"><i class=" fa fa-eye"></i> Lihat</a>||
                                            <a class="btn btn-primary" href="<?php echo base_url() ?>data-pegawai/edit/<?php echo $r->id ?>"><i class=" fa fa-pencil"></i> Edit</a>||
                                            <a class="btn btn-danger" href="<?php echo base_url() ?>data-pegawai/delete/<?php echo $r->id ?>"><i class=" fa fa-trash"></i> Hapus</a></td>
                                        </tr>
                                        <?php $no++; ?>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
