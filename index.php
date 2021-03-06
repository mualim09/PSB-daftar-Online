<?php
    // Membuat session start agar sessionnya berjalan
    session_start();
    
    // Jika tombol keluar tidak di klik, maka arahkan ke halaman beranda
    if (isset($_SESSION["stat_login"]) ) {
        header("Location: admin/beranda.php");
    exit;
    }
    $userlogin = isset($_SESSION['user_login']);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Pendaftaran Santri TPA</title>
        <!-- My Icon -->
        <link rel="shortcut icon"  href="img/Logo Assyifa2021.png" />
        
        <!-- My Bootstrap Icon -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="assets/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">Pendaftaran Santri TPA</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link bi bi-layout-text-sidebar" href="user/daftar-peserta.php"> Daftar Peserta</a></li>
                        <li class="nav-item"><a class="nav-link bi bi-info-circle" href="user/informasi-pendaftaran.php"> Informasi Pendaftaran</a></li>
                        <li class="nav-item"><a class="nav-link bi bi-file-person-fill" target="_blank" href="https://tpaassyifa.netlify.app/"> Tentang Kami</a></li>
                        <?php if($userlogin == true):;?>
                        <li class="nav-item"><a class="nav-link bi bi-person-circle" href="user/index.php"> Dashboard Peserta</a></li>
                        <?php elseif($userlogin == false):?>
                            <li class="nav-item"><a class="nav-link bi bi-arrow-right-circle" href="user/login.php"> Login</a></li>
                        <?php endif;?>
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="mx-auto my-0 text-uppercase">Pendaftaran Santri TPA</h1>
                        <h2 class="text-white-50 mx-auto mt-2 mb-5">Bersama kami membangun kesadaran beragama menuju generasi islami.</h2>
                        <a class="btn btn-primary rounded-pill" href="user/register.php">Gabung</a>
                    </div>
                </div>
            </div>
        </header>
       
        <!-- Contact-->
        <section class="contact-section bg-black">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="bi bi-card-text text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Alamat</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">Jl.Balimatraman Rt/11 Rw/07 No.06</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="bi bi-card-list text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50"><a href="#!">tpaassyifa@gmail.com</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="bi bi-phone-vibrate-fill text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Telepon</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">+62 813 8456 6778</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="https://www.instagram.com/bhrlanwar/"><i class="bi bi-instagram"></i></a>
                    <a class="mx-2" href="https://www.facebook.com/rifki.ramadhan.359778/"><i class="bi bi-facebook"></i></a>
            </div>
        </section>
        
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; Bahrul Anwar 2022</div></footer>

        <!-- Bootstrap core JS-->
        <script src="js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="assets/js/scripts.js"></script>
       
    </body>
</html>
