<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>One Health - Medical Center HTML5 Template</title>

    <link rel="stylesheet" href="../assets/css/maicons.css">

    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="../assets/css/theme.css">
</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="/"><img src="../assets/img/logobea.png" width="100"
                        height="100" alt="GudangBeasiswa-Logo"></a>
                <form action="#">
                    <div class="input-group input-navbar">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username"
                            aria-describedby="icon-addon1">
                    </div>
                </form>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport"
                    aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupport">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/about') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>

                        @if (Route::has('login'))
                            @auth
                                <x-app-layout>

                                </x-app-layout>
                            @else
                                <li class="nav-item">
                                    <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}">Register</a>
                                </li>

                            @endauth
                        @endif


                    </ul>
                </div> <!-- .navbar-collapse -->
            </div> <!-- .container -->
        </nav>
    </header>

    <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/beasiswa-bg.jpg);">
        <div class="banner-section">
            <div class="container text-center wow fadeInUp">
                <nav aria-label="Breadcrumb">
                    <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About</li>
                    </ol>
                </nav>
                <h1 class="font-weight-normal">About Us</h1>
            </div> <!-- .container -->
        </div> <!-- .banner-section -->
    </div> <!-- .page-banner -->


    <div class="page-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 wow fadeInUp">
                    <h1 class="text-center mb-3">Selamat Datang di Gudang Beasiswa</h1>
                    <div class="text-lg">
                        <p>Gudang Beasiswa hadir sebagai platform online yang membantu para pencari beasiswa di
                            Indonesia. Platform ini menyediakan informasi beasiswa terlengkap dan terpercaya, dengan
                            berbagai fitur yang memudahkan para penggunanya untuk menemukan beasiswa yang sesuai dengan
                            minat, bakat, dan kebutuhan mereka</p>
                        <p>Gudang Beasiswa menyediakan informasi beasiswa terlengkap dan terpercaya dengan berbagai
                            fitur yang memudahkan para penggunanya. Pengguna dapat mencari beasiswa berdasarkan jenjang
                            pendidikan, bidang studi, lokasi, dan kata kunci. Gudang Beasiswa juga menyediakan informasi
                            lengkap tentang beasiswa, seperti persyaratan, deadline, dan link pendaftaran.</p>
                    </div>
                </div>
                <div class="col-lg-10 mt-5">
                    <h1 class="text-center mb-5 wow fadeInUp">Our Teams</h1>
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-lg-4 wow zoomIn">
                            <div class="card-doctor">
                                <div class="header">
                                    <img src="../assets/img/Nisa.jpg" alt="">
                                    <div class="meta">
                                        <a href="#"><span class="mai-call"></span></a>
                                        <a href="#"><span class="mai-logo-whatsapp"></span></a>
                                    </div>
                                </div>
                                <div class="body">
                                    <p class="text-xl mb-0">Annisa Revalina Harahap</p>
                                    <span class="text-sm text-grey">UI/UX Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow zoomIn">
                            <div class="card-doctor">
                                <div class="header">
                                    <img src="../assets/img/Fira.jpg" alt="">
                                    <div class="meta">
                                        <a href="#"><span class="mai-call"></span></a>
                                        <a href="#"><span class="mai-logo-whatsapp"></span></a>
                                    </div>
                                </div>
                                <div class="body">
                                    <p class="text-xl mb-0">Zhafira Syarafina</p>
                                    <span class="text-sm text-grey">Web Development</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow zoomIn">
                            <div class="card-doctor">
                                <div class="header">
                                    <img src="../assets/img/Fathur.jpg" alt="">
                                    <div class="meta">
                                        <a href="#"><span class="mai-call"></span></a>
                                        <a href="#"><span class="mai-logo-whatsapp"></span></a>
                                    </div>
                                </div>
                                <div class="body">
                                    <p class="text-xl mb-0">Mustafa Fathur Rahman</p>
                                    <span class="text-sm text-grey">Web Development</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow zoomIn">
                            <div class="card-doctor">
                                <div class="header">
                                    <img src="../assets/img/Bukhari.png" alt="">
                                    <div class="meta">
                                        <a href="#"><span class="mai-call"></span></a>
                                        <a href="#"><span class="mai-logo-whatsapp"></span></a>
                                    </div>
                                </div>
                                <div class="body">
                                    <p class="text-xl mb-0">Ahmad Bukhari</p>
                                    <span class="text-sm text-grey">Web Developer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow zoomIn">
                            <div class="card-doctor">
                                <div class="header">
                                    <img src="../assets/img/Ami.jpg" alt="">
                                    <div class="meta">
                                        <a href="#"><span class="mai-call"></span></a>
                                        <a href="#"><span class="mai-logo-whatsapp"></span></a>
                                    </div>
                                </div>
                                <div class="body">
                                    <p class="text-xl mb-0">Aminah Qalbu Hani</p>
                                    <span class="text-sm text-grey">Machine Learning Engineer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <footer class="page-footer">
        <div class="container">
            <div class="row px-md-3">
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>Company</h5>
                    <ul class="footer-menu">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">History</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>More</h5>
                    <ul class="footer-menu">
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Advertise</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>Our partner</h5>
                    <ul class="footer-menu">
                        <li><a href="#">Beasiswa Cerdas</a></li>
                        <li><a href="#">Beasiswa Pintar</a></li>
                        <li><a href="#">Beasiswa Keren</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>Contact</h5>
                    <p class="footer-link mt-2">Universitas Andalas, Padang, Sumatera Barat.</p>
                    <a href="#" class="footer-link">0822-5555-5555</a>
                    <a href="#" class="footer-link">gudangbeasiswa@gmail.com</a>

                    <h5 class="mt-3">Social Media</h5>
                    <div class="footer-sosmed mt-3">
                        <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
                    </div>
                </div>
            </div>

            <hr>

            <p id="copyright">Copyright &copy; 2024 <a href="#" target="_blank">GudangBeasiswa</a>.
                All right reserved</p>
        </div>
    </footer>


    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>

</body>

</html>
