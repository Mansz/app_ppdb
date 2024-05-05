<?php $ceks = $this->session->userdata('no_pendaftaran'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PPDB Online | SMK NURUL HAYYAH</title>
		<base href="<?php echo base_url();?>"/>

		<link rel="icon" href="assets/images/unnamed.png" type="image/x-icon" />
    <!-- Bootstrap Core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/faa.css" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="assets/css/freelancer.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <style>
        .navbar-custom {
            background-color: #f51d01; 
        }
        .navbar-brand img {
            margin-top: -10px;
        }
        .navbar-toggler {
            border: none;
        }
        .navbar-toggler-icon {
            background-image: none;
        }
        @media (max-width: 767px) {
            .navbar-brand img {
                margin-top: 0;
            }
            .navbar-brand span {
                display: none;
            }
        }
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom bxshad">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top"><img src="img/unnamed.png" alt="Logo" width="35" style="position:absolute;margin-top:-10px;"> <span style="margin-left:40px;">PPDB Online</span> </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio"><i class="fa fa-info-circle"></i> Tentang Sekolah</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about"><i class="fa fa-bullhorn"></i> Informasi</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact"><i class="fa fa-phone-square"></i> Kontak Kami</a>
                    </li>
                    <li class="page-scroll">
                        <a href="https://api.whatsapp.com/send/?phone=628988101080&text&type=phone_number&app_absent=0"><i class="fa fa-question-circle"></i> Bantuan</a>
                    </li>
                    <li ><a href="logcs">
                     <i class="fa fa-sign-in"></i> <?php if($ceks==''){echo "Login";}else{echo "Login";} ?> Siswa
                    </a>&nbsp;&nbsp;
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
      <?php
      $segment = $this->uri->segment(1);
if ($segment !== null && strtolower($segment) == 'logcs') {
    $this->load->view('web/login');
}
?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12" >
                    <img class="img-responsive" src="img/unnamed.png" style="margin-top:-15%;margin-bottom:-10px;" width="100">
                    <div class="intro-text"><br>
                        <span class="name shad" style="font-size:35px">PPDB ONLINE <br> SMK NURUL HAYYAH</span>

                        <br>
                      <?php if ($web_ppdb->status_ppdb == 'buka') {?>
                        
                        <span class="skills">
                        	
                        <br> <br>
                        <hr class="star-light">
												<br>
                        <!-- <h3>Login Calon Siswa Terdaftar di PPDB Online SMK Nurul Nuha</h3> -->
                        <span>
                         
                         
												 
												 <br>
											  </span>
                      <?php }else{ ?>
                        <span class="skills">
                        </span>
                        <br> <br>
                        <hr class="star-light">
												<br>
                        <!-- <h3>Login Calon Siswa Terdaftar di PPDB Online SMK Plus Al-Maftuh</h3> -->
                        <span>
                         <a href="javascript:void(0);" class="btn btn-success btn-lg" style="margin:5px;"><i class="fa fa-file faa-pulse animated"></i> &nbsp;Pendaftaran PPDB Online ditutup</a>
												 <br>
											  </span>
                      <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Tentang sekolah</h2>
                    <hr class="star-primary">

                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 portfolio-item">
                    <a href="https://nuha.smkbisa.id//" target="_blank" class="portfolio-link">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <div style="text-align: center;">
  <img src="img/unnamed.png" class="img-thumbnail" alt=""><br><br>
</div>
                        <span class="btn btn-success btn-block">www.nuha.smkbisa.id</span>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Informasi PPDB Online</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2" style="text-align:justify">
                    <p>SMK NURUL HAYYAH menyediakan PPDB secara <i>online</i> diharapkan proses PPDB dapat berjalan cepat
                    dan bisa dilakukan dimanapun dan kapanpun selama sesi PPDB Online dibuka. Proses pendaftaran calon siswa baru tidak menggunakan formulir konvensional hanya dengan mengakses website PPDB Online SMK NURUL HAYYAH. </p>
                </div>
                <div class="col-lg-4" style="text-align:justify">
                    <p>Pengisian form PPDB Online mohon diperhatikan data yang dibutuhkan yang nantinya akan dipakai dalam proses PPDB. Setelah proses pengisian form PPDB secara online berhasil dilakukan, calon siswa akan mendapat bukti daftar dengan nomor pendaftaran dan harus disimpan yang akan digunakan untuk proses selanjutnya.</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center page-scroll">
                <a href="pendaftaran" class="btn btn-md btn-outline"><i class="fa fa-user-plus"></i> &nbsp;Daftar Sekarang</a>
                    </a> &nbsp;&nbsp;
                    <a href="files/Panduan_PPDB_Online_SMKNURULHAYYAH.pdf" class="btn btn-md btn-outline"><i class="fa fa-download"></i>&nbsp;Download Panduan PPDB</a>
                    </a>&nbsp;&nbsp;
                    <a href="https://nuha.smkbisa.id/" class="btn btn-md btn-outline">
                        <i class="fa fa-arrow-left"></i>Kembali Ke Beranda
                    </a>&nbsp;&nbsp;

                </div>
            </div>
        </div>
    </section>

     <section id="prosedur">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Prosedur PPDB Online</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12" style="margin-top:-10px;">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                       <img class="img-responsive" src="img/alur_ppdb_online_new.jpg" alt="">
                    </div>
                    <div class="col-md-2"></div>
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="col-lg-12 text-center">
                                <h4>Penjelasan Prosedur PPDB Online</h4>
                                <hr class="star-primary">
                                <ol style="font-size:18px;text-align:justify">
                                <li>Calon Siswa mendaftarkan diri atau melakukan <b><a href="pendaftaran">Pendaftaran PPDB <i>online</i></a></b> melalui website <b><a href="">PPDB SMK NURUL HAYYAH</a></b>.</li>
                                <li>Setelah Calon Siswa berhasil melakukan pendaftaran, Calon siswa wajib melakukan <b>Print Out Pendaftaran & Mempersiapkan Kelengkapan Berkas PPDB SMK NURUL HAYYAH</b>.</li>
                                <li>Calon siswa datang ke SMP NURUL HAYYAH untuk <b>VERIFIKASI</b>, membawa <b>Bukti pendaftaran & Kelengkapan Berkas PPDB SMK NURUL HAYYAH</b>. </li>
                                <li>Panitia PPDB melakukan <b>Verifikasi dan Validasi Berkas Pendaftaran</b>.</li>
                                <li>Setelah selesai Calon Siswa Menerima <b>TANDA BUKTI VERIFIKASI</b>.</li>
                                <li>Calon Siswa wajib mengambil <b>NOMOR TEST & Pengecekan Ruang Ujian</b>.</li>
                                <li>Jika Calon Siswa sudah mengambil <b>NOMOR TEST & Pengecekan Ruang Ujian</b> selanjutnya Calon Siswa wajib melakukan <b>TEST tertulis POTENSI AKADEMIK</b>.</li>
																<li>PENGUMUMAN HASIL PPDB Online bisa dilihat di Web PPDB SMK NURUL HAYYAH. Untuk <b>No. Pendaftaran</b> sesuaikan dengan <b>Formulir No. Pendaftaran</b> & <b>Passwordnya</b> yaitu <b>NISN</b> Calon Siswa tersebut.</li>
																<li>Jika Calon Siswa dinyatakan <b>LULUS</b> maka Calon Siswa Wajib <b>Registrasi/Daftar Ulang</b> di <b>SMK NURUL HAYYAH</b>.</li>
															</ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
		<section class="success" id="contact">
        <!-- <div class="container"> -->
            <div class="row" style="margin-top:-100px;margin-bottom:-105px;">
                <div class="col-lg-4 text-center">
                  <br><br>
                    <h2>Kontak Kami</h2>
                    <hr class="star-light">
                    <h4>
                    Jl. Lingkar Provinsi No.07 Bulakelor, Sawah, Ketanggungan, Brebes Regency, Central Java 52263 <br><br>
                    </h4>
                    <span style="color:#F0F8FF;"><b><i class="fa fa-phone-square"></i> 08988101080</b> </span>
										&nbsp;
                    <span class="eml" style="color:#F0F8FF;"><i class="fa fa-envelope"></i> nuhasmkbisa@gmail.com</span>
                    <br>
                    
                </div>
                <div class="embed-responsive embed-responsive-16by9"style="max-height: 300px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d506959.8144408578!2d108.909575!3d-6.935516!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fa5e24ecff76d%3A0xf6f03263cdd8f4ad!2sPondok%20Pesantren%20Nurul%20Hayah%20Brebes!5e0!3m2!1sen!2sus!4v1713941108157!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
        <!-- </div> -->
    </section>
    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; SMK NURUL HAYYAH</a> <?php echo date('Y'); ?> | IT Development
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>


    <!-- jQuery -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="assets/js/jqBootstrapValidation.js"></script>
    <script src="assets/js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="assets/js/freelancer.min.js"></script>

</body>
</html>
