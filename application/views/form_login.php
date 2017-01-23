<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Login Sistem Informasi Pegawai</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="<?php echo base_url() ?>assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet" />
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <strong>Email: </strong>info@yourdomain.com
                    &nbsp;&nbsp;
                    <strong>Support: </strong>+90-897-678-44
                </div>

            </div>
        </div>
    </header>
   
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">LOGIN SISTEM INFORMASI KEPEGAWAIAN</h4>

                </div>

            </div>
            <div class="row">
                <div class="col-md-6">
                    
                     <h4>Login Dengan <strong>Akun SIMPEG Anda :</strong></h4>
                    <br />
                    <div class="alert alert-danger"><?php echo $message ?></div>
                    <form action="<?php echo base_url() ?>proses" method="POST">
                        <label>Username</label>

                            <input type="text" name="username" class="form-control" placeholder="Masukan Username" required />
                        <label>Password :  </label>
                            <input type="password" name="password" class="form-control" placeholder="Masukan password" required />
                        <hr />
                        <button class="btn btn-primary"><span class="glyphicon glyphicon-user"></span> &nbsp;Login </button>&nbsp;
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="alert alert-info">
                        <h4>SISTEM INFORMASI KEPEGAWAIAN</h4>
                        adalah Sistem Informasi yang dirancang untuk menangani berbagai hal dalam pengurusan kepegawaian mulai dari pengisian, pengolahan dan pemusatan data secara terkomputerisasi sehingga dapat menangani berbagai laporan yang berhubungan dengan kepegawaian.

                        Simpeg ini dapat diakses menggunakan internet sehingga dapat lebih mudah diakses dan memudahkan dalam proses administrasi kepegawaian.
                    </div>
                
                    
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
                </div>

            </div>
        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; 2015 YourCompany | By : <a href="http://www.designbootstrap.com/" target="_blank">DesignBootstrap</a>
                </div>

            </div>
        </div>
    </footer>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="<?php echo base_url() ?>assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
</body>
</html>
