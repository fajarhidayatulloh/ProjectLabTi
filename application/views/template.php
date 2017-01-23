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
    <title>Sistem Informasi Kepegawaian</title>
    <!-- BOOTSTRAP CORE STYLE  -->

    <link href="<?php echo base_url();?>assets/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="<?php echo base_url() ?>assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="<?php echo base_url() ?>assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet" />
    
    <script src="<?php echo base_url();?>assets/js/jquery.dataTables.js"></script>
    
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
                    <strong>Email: </strong>info@magnus.id
                    &nbsp;&nbsp;
                    <strong>Support Admin System: </strong>+62 85717769810
                </div>

            </div>
        </div>
    </header>
    <!-- HEADER END-->
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url() ?>">

                    <h1 style="color:#fff">SIMPEG MAGNUS.ID</h1>
                </a>

            </div>

            <div class="left-div">
                <div class="wrapper">
                    <ul class="nav">

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo base_url() ?>" aria-expanded="false">
                                
                            </a>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </div>
   
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="<?php echo base_url()?>">Beranda</a></li>
                            <li><a href="<?php echo base_url()?>data-pegawai">Data Pegawai</a></li>
                            <li><a href="<?php echo base_url()?>data-absen">Data Absen</a></li>
                            <li><a href="<?php echo base_url()?>data-cuti">Data Cuti</a></li>
                            <li><a href="<?php echo base_url()?>data-gaji">Data Gaji</a></li>
                            <li><a href="<?php echo base_url()?>pengumuman">Pengumuman & Berita</a></li>
                            <li><a href=""><?php echo $pengguna->nama ?></a></li>
                            <li><a href="<?php echo base_url()?>logout">Logout</a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Beranda</h4>
                        
                </div>


            </div>
            <div class="row">
                <div class="col-md-12">
                   
                        <?php if(isset($breadcrumb)&& is_array($breadcrumb) && count($breadcrumb) > 0){ ?>
                            <ul class="breadcrumb">
                            <?php
                            foreach ($breadcrumb as $key=>$value) {
                             if($value!=''){
                            ?>
                                <li><a href="<?php echo $value; ?>"><?php echo $key; ?></a> </li>
                                <?php }else{?>
                                <li class="active"><?php echo $key; ?></li>
                                <?php }
                            } ?>  
                            </ul>      
                        <?php } ?>
                   <?php echo $contents ?>
                </div>
                
            </div>
            
           <br>
            
    <!-- CONTENT-WRAPPER SECTION END-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; 2017 MAGNUS.ID | BY : <a href="#" target="_blank">MAGNUS CORPORATION</a>
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
    
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript   ">
        $(document).ready( function () {
            $('#example').DataTable();
            $( 'a' ).imageLightbox();
            $('#example1').DataTable();
            $( 'a' ).imageLightbox();
        } );
    </script>
    
    <script>
        $(document).ready(function() {
            $("#datepicker").datepicker();
        } );
    </script>
     
    
</body>
</html>
