<h4>SELAMAT DATANG <strong><i><?php echo strtoupper($pengguna->nama) ?></i></strong> DI SISTEM INFORMASI KEPEGAWAIAN</h4>
<!-- MENU SECTION END-->
 
   
            <div class="panel panel-default">
                <div class="panel-heading">
                     PENGUMUMAN
                </div>
                <div class="panel-body">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#informasi" data-toggle="tab">INFORMASI</a>
                        </li>
                        <li class=""><a href="#berita" data-toggle="tab">BERITA TERBARU</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="informasi">
                            <h4>Informasi</h4><hr>
                            <?php foreach($informasi->result() as $r){ ?>
                                <p><?php echo date('d F Y',strtotime($r->tgl_pengumuman)) ?></p>
                                <p><?php echo $r->pengumuman ?></p><hr>
                            <?php } ?>
                            </div>
                        <div class="tab-pane fade" id="berita">
                            <h4>Berita Terbaru</h4><hr>
                            <?php foreach($berita->result() as $r){ ?>
                                <p><?php echo date('d F Y',strtotime($r->tgl_pengumuman)) ?></p>
                                <p><?php echo $r->pengumuman ?></p><hr>
                            <?php } ?>
                        </div>
                    </div>     
                </div>
            </div>
      
   
    <!-- CONTENT-WRAPPER SECTION END-->