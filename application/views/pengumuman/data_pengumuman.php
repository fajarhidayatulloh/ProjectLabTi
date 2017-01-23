<div class="col-sm-0">
    <a class="btn btn-primary" href="<?php echo base_url() ?>pengumuman/input"><i class=" fa fa-pencil"></i> Input Data</a>    
    <a class="btn btn-default" href="<?php echo base_url() ?>data-absen"><i class=" fa fa-refresh"></i> Refresh</a>
</div>

<br>
<!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DATA PENGUMUMAN
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="display table table-bordered" id="example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Pengumuman</th>
                                            <th>Kategori</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=1; foreach($data->result() as $r){ ?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo date('d F Y',strtotime($r->tgl_pengumuman)) ?></td>
                                            <td><?php echo $r->pengumuman ?></td>
                                            <td><?php echo $r->kategori ?></td>
                                            <td><a class="btn btn-primary" href="<?php echo base_url() ?>pengumuman/edit/<?php echo $r->id ?>"><i class=" fa fa-pencil"></i> Edit</a> ||
                                            <a class="btn btn-danger" href="<?php echo base_url() ?>pengumuman/delete/<?php echo $r->id ?>"><i class=" fa fa-trash"></i> Hapus</a></td>
                                        </tr>
                                        <?php $no++; ?>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
