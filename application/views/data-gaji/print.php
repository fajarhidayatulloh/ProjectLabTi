<div class="col-sm-0">
   <script>
 
function myFunction() {
    window.print();
}
   </script>
    <button class="btn btn-info" onClick="myFunction()"><i class=" fa fa-print" ></i> Print Data</button>
   
</div>

<br>
<!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DATA GAJI
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="display table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIP</th>
                                            <th>Nama</th>
                                            <th>Jabatan</th>
                                            <th>Status</th>
                                            <th>Status Pegawai</th>
                                            <th>Jumlah Anak</th>
                                            <th>Gaji Pokok</th>
                                            <th>Total Gaji</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=1; foreach($data->result() as $r){ ?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $r->nip ?></td>
                                            <td><?php echo $r->nama ?></td>
                                            <td><?php echo $r->n_jab ?></td>
                                            <td><?php echo $r->nmstatusk ?></td>
                                            <td><?php echo $r->nmstatusp ?></td>
                                            <td><?php echo $r->jum_anak ?></td>
                                            <td>Rp.<?php echo number_format($r->gapok,2,',',',' )?></td>
                                            <td>Rp.
                                            <?php if($r->jum_anak ==1 && $r->id_statusp==1){
                                                    echo number_format($r->gapok+3500000+$r->tunj_jab,2,',',',' );
                                            }else if
                                                ($r->jum_anak ==1 && $r->id_statusp==2){
                                                    echo number_format($r->gapok+3000000+$r->tunj_jab,2,',',',' );
                                                }else if
                                                    ($r->jum_anak ==1 && $r->id_statusp==3){
                                                    echo number_format($r->gapok+2500000+$r->tunj_jab,2,',',',' );
                                                }else if
                                                    ($r->jum_anak ==2 && $r->id_statusp==1 ){
                                                    echo number_format($r->gapok+4000000+$r->tunj_jab,2,',',',' );
                                                }else if
                                                    ($r->jum_anak ==2 && $r->id_statusp==2){
                                                    echo number_format($r->gapok+3500000+$r->tunj_jab,2,',',',' );
                                                }else if
                                                    ($r->jum_anak ==2 && $r->id_statusp==3){
                                                    echo number_format($r->gapok+2000000+$r->tunj_jab,2,',',',' );
                                                }else if
                                                    ($r->jum_anak ==3 && $r->id_statusp==1){
                                                    echo number_format($r->gapok+4500000+$r->tunj_jab,2,',',',' );
                                                }else if
                                                    ($r->jum_anak ==3 && $r->id_statusp==2){
                                                    echo number_format($r->gapok+3000000+$r->tunj_jab,2,',',',' );
                                                }else if
                                                    ($r->jum_anak ==3 && $r->id_statusp==3){
                                                    echo number_format($r->gapok+2500000+$r->tunj_jab,2,',',',' );
                                                }else if
                                                    ($r->jum_anak >=4 && $r->id_statusp==1){
                                                    echo number_format($r->gapok+5000000+$r->tunj_jab,2,',',',' );
                                                }else if
                                                    ($r->jum_anak >=4 && $r->id_statusp==2){
                                                    echo number_format($r->gapok+4500000+$r->tunj_jab,2,',',',' );
                                                }else if
                                                    ($r->jum_anak >=4 && $r->id_statusp==3){
                                                    echo number_format($r->gapok+3000000+$r->tunj_jab,2,',',',' );
                                                }else if
                                                    ($r->jum_anak ==0 && $r->id_statusp==1){
                                                    echo number_format($r->gapok+2000000+$r->tunj_jab,2,',',',' );
                                                }else if
                                                    ($r->jum_anak ==0 && $r->id_statusp==2){
                                                    echo number_format($r->gapok+1500000+$r->tunj_jab,2,',',',' );
                                                        
                                                }else if
                                                    ($r->jum_anak ==0 && $r->id_statusp==3){
                                                    echo number_format($r->gapok+1000000+$r->tunj_jab,2,',',',' );
                                                    }
                                                ?></td>
                                            
                                        </tr>
                                        <?php $no++; ?>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->