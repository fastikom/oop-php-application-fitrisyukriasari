<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="mahasiswa">
    <meta name="author" content="Fitri Syukriasari">

    <title>Aplikasi CRUD Mahasiswa</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/datepicker.min.css" rel="stylesheet">
    <link href="assets/css/landing-page.css" rel="stylesheet">
    <link href="assets/js/dataTables/css/dataTables.bootstrap.css" rel="stylesheet">
    
    <!-- styles -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation" style="background-color: #fff">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="#" style="color: #555">Aplikasi CRUD Mahasiswa</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#" data-target="#ModalAbout" data-toggle="modal">Info</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <a name="about"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h2> Biodata Mahasiswa </h2>
                        <h3> Mari kita reuni lewat data mahasiswa.</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="viewindex.php" data-toggle="modal" class="btn btn-warning btn-lg"><i class="fa fa-user fa-fw"></i> <span class="network-name">Lihat Data</span></a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <div id="ModalAbout" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Tentang</h4>
            </div>

            <div class="modal-body" >
            ASK STUDENT <br>
            Dibuat untuk sarana informasi TANYA JAWAB Mahasiswa khusus mahasiswa UNSIQ. <br>
            Siapapun dapat mengakses (login) selagi masih terdaftar di Universitas Sains Al-Qur'an dan masih menempuh pendidikan.<br>
            Dengan menggunakan NIM dan password sesuai disamakan dengan NIM, anda sudah langsung bisa login.
            </div>
            <div class="modal-footer">
              <button type="reset" class="btn btn-primary"  data-dismiss="modal" aria-hidden="true">
                OK
              </button>
          </div>
        </div>
    </div>
    </div>

    <div id="ModalContact" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Kontak</h4>
            </div>

            <div class="modal-body">
            SIADEK V.01.2017 <br>
            Via email : <a href="mailto:askstudent@gmail.com?Subject=Assalamualaikum" > askstudent@gmail.com</a><br>
            </div>
            <div class="modal-footer">
              <button type="reset" class="btn btn-primary"  data-dismiss="modal" aria-hidden="true">
                OK
              </button>
          </div>
        </div>
    </div>
    </div>
    
    <!--  -->
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a a href="#" data-target="#ModalAbout" data-toggle="modal">Info</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a a href="#" data-target="#ModalContact" data-toggle="modal">Kontak</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; Ask Student V.01.2017. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
