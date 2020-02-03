<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Cerpen Kita</title>

    <!-- Favicon -->
    <link rel="icon" href="assets/frontend/img/core-img/c.png">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="assets/frontend/style.css">

</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="nikki-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container-fluid">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="nikkiNav">

                        <!-- Nav brand -->
                        <a href="index.blade.php" class="nav-brand"><img src="assets/frontend/img/core-img/c.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    {{-- <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="index.blade.php">Home</a></li>
                                            <li><a href="archive-blog.html">Archive Blog</a></li>
                                            <li><a href="single-post.html">Single Post</a></li>
                                            <li><a href="about.blade.php">About</a></li>
                                            <li><a href="./kontak">Contact</a></li>
                                            <li><a href="typography.html">Typography</a></li>
                                        </ul>
                                    </li> --}}
                                    <li><a href="#">Kategori</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="#">- cerpen horor</a></li>
                                                <li><a href="#">- cerpen humoris</a></li>
                                                <li><a href="#">- cerpen romantis</a></li>
                                                <li><a href="#">- cerpen pendidikan</a></li>
                                                <li><a href="#">- cerpen persahabatan</a></li>
                                                <li><a href="#">- cerpen keluarga</a></li>
                                                <li><a href="#">- cerpen motivasi</a></li>
                                                <li><a href="#">- cerpen religi</a></li>
                                                <li><a href="#">- cerpen nasihat</a></li>
                                                <li><a href="#">- cerpen mengharukan</a></li>
                                            </ul>
                                            {{-- <ul class="single-mega cn-col-4">
                                                <li><a href="#">- Features</a></li>
                                                <li><a href="#">- Food</a></li>
                                                <li><a href="#">- Travel</a></li>
                                                <li><a href="#">- Recipe</a></li>
                                                <li><a href="#">- Bread</a></li>
                                                <li><a href="#">- Breakfast</a></li>
                                                <li><a href="#">- Meat</a></li>
                                            </ul> --}}

                                        </div>
                                    </li>
                                    <li><a href="./about">About</a></li>
                                    <li><a href="./kontak">Contact</a></li>
                                    <li><a href="login">Login</a></li>
                                    <li><a href="register">Register</a></li>
                                </ul>

                                <!-- Search Form -->
                                <div class="search-form">
                                    <form action="#" method="get">
                                        <input type="search" name="search" class="form-control" placeholder="Cari Cerpen...">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>

                                <!-- Social Button -->
                                <div class="top-social-info">
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="RSS Feed"><i class="fa fa-rss" aria-hidden="true"></i></a>
                                </div>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <!-- Preloader -->
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="circle-preloader">
                <div class="a" style="--n: 5;">
                    <div class="dot" style="--i: 0;"></div>
                    <div class="dot" style="--i: 1;"></div>
                    <div class="dot" style="--i: 2;"></div>
                    <div class="dot" style="--i: 3;"></div>
                    <div class="dot" style="--i: 4;"></div>
                </div>
            </div>
        </div>

        <div class="hero-post-slides owl-carousel">

            <!-- Single Hero Post -->
            <div class="single-hero-post d-flex flex-wrap">
                <!-- Post Thumbnail -->
                <div class="slide-post-thumbnail h-100 bg-img" style="background-image: url(assets/frontend/img/blog-img/masasma.png);"></div>
                <!-- Post Content -->
                <div class="slide-post-content h-100 d-flex align-items-center">
                    <div class="slide-post-text">
                        <p class="post-date" data-animation="fadeIn" data-delay="100ms">Cerpen Romantis</p>
                        <a href="#" class="post-title" data-animation="fadeIn" data-delay="300ms">
                            <h2>Masa SMA Kitaa..</h2>
                        </a>
                        <p class="post-excerpt" data-animation="fadeIn" data-delay="500ms">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                        <a href="#" class="btn nikki-btn" data-animation="fadeIn" data-delay="700ms">Baca Yuuuuk!</a>
                    </div>
                    <!-- Page Count -->
                    <div class="page-count"></div>
                </div>
            </div>

            <!-- Single Hero Post -->
            <div class="single-hero-post d-flex flex-wrap">
                <!-- Post Thumbnail -->
                <div class="slide-post-thumbnail h-100 bg-img" style="background-image: url(assets/frontend/img/blog-img/ibutiri.jpg);"></div>
                <!-- Post Content -->
                <div class="slide-post-content h-100 d-flex align-items-center">
                    <div class="slide-post-text">
                        <p class="post-date" data-animation="fadeIn" data-delay="100ms">Cerpen Mengharukan</p>
                        <a href="#" class="post-title" data-animation="fadeIn" data-delay="300ms">
                            <h2>Sang Ibu Tirii</h2>
                        </a>
                        <p class="post-excerpt" data-animation="fadeIn" data-delay="500ms">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                        <a href="#" class="btn nikki-btn" data-animation="fadeIn" data-delay="700ms">Baca Yuuuuk!</a>
                    </div>
                    <!-- Page Count -->
                    <div class="page-count"></div>
                </div>
            </div>

            <!-- Single Hero Post -->
            <div class="single-hero-post d-flex flex-wrap">
                <!-- Post Thumbnail -->
                <div class="slide-post-thumbnail h-100 bg-img" style="background-image: url(assets/frontend/img/blog-img/kiam.gif);"></div>
                <!-- Post Content -->
                <div class="slide-post-content h-100 d-flex align-items-center">
                    <div class="slide-post-text">
                        <p class="post-date" data-animation="fadeIn" data-delay="100ms">Cerpen Religi</p>
                        <a href="#" class="post-title" data-animation="fadeIn" data-delay="300ms">
                            <h2>Kiamat Sudah Dekat...</h2>
                        </a>
                        <p class="post-excerpt" data-animation="fadeIn" data-delay="500ms">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                        <a href="#" class="btn nikki-btn" data-animation="fadeIn" data-delay="700ms">Baca Yuuuuk!</a>
                    </div>
                    <!-- Page Count -->
                    <div class="page-count"></div>
                </div>
            </div>

        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Blog Content Area Start ##### -->
    <section class="blog-content-area section-padding-100">
        <div class="container">

            <div class="row justify-content-center">
                <!-- Blog Posts Area -->
                <div class="col-12 col-lg-8">
                    <div class="blog-posts-area">
                        <div class="row">

                            <!-- Featured Post Area -->
                            <div class="col-12">
                                <div class="featured-post-area mb-50">
                                    <!-- Thumbnail -->
                                    <div class="post-thumbnail mb-30">
                                        <a href="#"><img src="assets/frontend/img/blog-img/cs.jpg" alt=""></a>
                                    </div>
                                    <!-- Featured Post Content -->
                                    <div class="featured-post-content">
                                        <p class="post-date">JANUARI, 2020 / Cerpen Kita Romantis</p>
                                        <a href="#" class="post-title">
                                            <h2>Cinta Segitiga Kita</h2>
                                        </a>
                                        <p class="post-excerpt">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                                    </div>
                                    <!-- Post Meta -->
                                    <div class="post-meta d-flex align-items-center justify-content-between">


                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="col-12 col-sm-6">
                                <div class="single-blog-post mb-50">
                                    <!-- Thumbnail -->
                                    <div class="post-thumbnail">
                                        <a href="#"><img src="assets/frontend/img/blog-img/stt.jpeg" alt=""></a>
                                    </div>
                                    <!-- Content -->
                                    <div class="post-content">
                                        <p class="post-date">JANUARI, 2020 / Cerpen Kita Persahabatan</p>
                                        <a href="#" class="post-title">
                                            <h4>Sahabat Terbaik ku</h4>
                                        </a>
                                        <p class="post-excerpt">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="col-12 col-sm-6">
                                <div class="single-blog-post mb-50">
                                    <!-- Thumbnail -->
                                    <div class="post-thumbnail">
                                        <a href="#"><img src="assets/frontend/img/blog-img/gt.jpg" alt=""></a>
                                    </div>
                                    <!-- Content -->
                                    <div class="post-content">
                                        <p class="post-date">JANUARI, 2020 / Cerpen Kita Horor</p>
                                        <a href="#" class="post-title">
                                            <h4>Hantu Gedung Tua</h4>
                                        </a>
                                        <p class="post-excerpt">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="col-12 col-sm-6">
                                <div class="single-blog-post mb-50">
                                    <!-- Thumbnail -->
                                    <div class="post-thumbnail">
                                        <a href="#"><img src="assets/frontend/img/blog-img/broken.jpg" alt=""></a>
                                    </div>
                                    <!-- Content -->
                                    <div class="post-content">
                                        <p class="post-date">JANUARI, 2020 / Cerpen Kita  Keluarga</p>
                                        <a href="#" class="post-title">
                                            <h4>Broken Home</h4>
                                        </a>
                                        <p class="post-excerpt">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="col-12 col-sm-6">
                                <div class="single-blog-post mb-50">
                                    <!-- Thumbnail -->
                                    <div class="post-thumbnail">
                                        <a href="#"><img src="assets/frontend/img/blog-img/kiam.gif" alt=""></a>
                                    </div>
                                    <!-- Content -->
                                    <div class="post-content">
                                        <p class="post-date">JANUARI, 2020 / Cerpen Kita Religi</p>
                                        <a href="#" class="post-title">
                                            <h4>Kiamat Sudah Dekat</h4>
                                        </a>
                                        <p class="post-excerpt">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="col-12 col-sm-6">
                                <div class="single-blog-post mb-50">
                                    <!-- Thumbnail -->
                                    <div class="post-thumbnail">
                                        <a href="#"><img src="assets/frontend/img/blog-img/ay.jpg" alt=""></a>
                                    </div>
                                    <!-- Content -->
                                    <div class="post-content">
                                        <p class="post-date">JANUARI, 2020 / Cerpen Kita Mengharukan</p>
                                        <a href="#" class="post-title">
                                            <h4>Ayahku PahlawanKu</h4>
                                        </a>
                                        <p class="post-excerpt">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="col-12 col-sm-6">
                                <div class="single-blog-post mb-50">
                                    <!-- Thumbnail -->
                                    <div class="post-thumbnail">
                                        <a href="#"><img src="assets/frontend/img/blog-img/pt.png" alt=""></a>
                                    </div>
                                    <!-- Content -->
                                    <div class="post-content">
                                        <p class="post-date">JANUARI,2020/ Cerpen Kita Humoris</p>
                                        <a href="#" class="post-title">
                                            <h4>SI PETRUK KW</h4>
                                        </a>
                                        <p class="post-excerpt">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Pager -->
                    <ol class="nikki-pager">
                        <li><a href="#"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Newer</a></li>
                        <li><a href="#">Older <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                    </ol>
                </div>

                <!-- Blog Sidebar Area -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="post-sidebar-area">

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area mb-30">
                            <!-- Title -->
                            <div class="widget-title">
                                <h6>About Me</h6>
                            </div>
                            <!-- Thumbnail -->
                            <div class="about-thumbnail">
                                <img src="assets/frontend/img/blog-img/about-mee.jpg" alt="">
                            </div>
                            <!-- Content -->
                            <div class="widget-content text-center">
                                <img src="assets/frontend/img/core-img/signature.png" alt="">
                                <p>Website "Cerpen Kita" bertujuan untuk meningkatkan minat baca di semua kalangan terutama kalangan generasi milenial contohnya anak SD,SMP,SMP dan Perguruan Tinggi Sekalipun.</p>
                            <p>UNESCO menyebutkan Indonesia...</p>
                            </div>
                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area mb-30">
                            <!-- Title -->
                            <div class="widget-title">
                                <h6>Subscribe &amp; Follow</h6>
                            </div>
                            <!-- Widget Social Info -->
                            <div class="widget-social-info text-center">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-rss"></i></a>
                            </div>
                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area mb-30">
                            <!-- Title -->
                            <div class="widget-title">
                                <h6>Judul Terbaru</h6>
                            </div>

                            <!-- Single Latest Posts -->
                            <div class="single-latest-post d-flex">
                                <div class="post-thumb">
                                    <img src="assets/frontend/img/blog-img/hs.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="#" class="post-title">
                                        <h6>Hantu Sekolah</h6>
                                    </a>
                                    <a href="#" class="post-author">Baca Selengkapnya</a>
                                </div>
                            </div>

                            <!-- Single Latest Posts -->
                            <div class="single-latest-post d-flex">
                                <div class="post-thumb">
                                    <img src="assets/frontend/img/blog-img/pt.png" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="#" class="post-title">
                                        <h6>Si PETRUK kw</h6>
                                    </a>
                                    <a href="#" class="post-author"> Baca Selengkapnya</a>
                                </div>
                            </div>

                            <!-- Single Latest Posts -->
                            <div class="single-latest-post d-flex">
                                <div class="post-thumb">
                                    <img src="assets/frontend/img/blog-img/cs.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="#" class="post-title">
                                        <h6>Cinta Segitiga</h6>
                                    </a>
                                    <a href="#" class="post-author"> Baca Selengkapnya</a>
                                </div>
                            </div>

                            <!-- Single Latest Posts -->
                            <div class="single-latest-post d-flex">
                                <div class="post-thumb">
                                    <img src="assets/frontend/img/blog-img/adc.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="#" class="post-title">
                                        <h6>Ada Dua Cinta</h6>
                                    </a>
                                    <a href="#" class="post-author"> Baca Selengkapnya</a>
                                </div>
                            </div>

                            <!-- Single Latest Posts -->
                            <div class="single-latest-post d-flex">
                                <div class="post-thumb">
                                    <img src="assets/frontend/img/blog-img/ibutiri.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="#" class="post-title">
                                        <h6>Ibu Tiri Kejam</h6>
                                    </a>
                                    <a href="#" class="post-author"> Baca Selengkapnya</a>
                                </div>
                            </div>

                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        {{-- <div class="single-widget-area mb-30">
                            <!-- Adds -->
                            <a href="#"><img src="assets/frontend/img/blog-img/add.png" alt=""></a>
                        </div> --}}


                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area mb-30">
                            <!-- Title -->
                            <div class="widget-title">
                                <h6>Kategori Terpopuler</h6>
                            </div>
                            <!-- Tags -->
                            <ol class="popular-tags d-flex flex-wrap">
                                <li><a href="#">Horor</a></li>
                                <li><a href="#">Humoris</a></li>
                                <li><a href="#">Persahabatan</a></li>
                                <li><a href="#">Religi</a></li>
                                <li><a href="#">Mengharukan</a></li>
                                <li><a href="#">Romantis</a></li>
                                <li><a href="#">Nasihat</a></li>
                                <li><a href="#">Keluarga</a></li>
                                <li><a href="#">Motivasi</a></li>





                            </ol>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Blog Content Area End ##### -->

    <!-- ##### Instagram Area Start ##### -->
    <div class="follow-us-instagram">
        <div class="instagram-content d-flex flex-wrap align-items-center">

            <!-- Single Instagram Slide -->
            <div class="single-instagram">
                <img src="assets/frontend/img/blog-img/insta1.jpg" alt="">
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>

            <!-- Single Instagram Slide -->
            <div class="single-instagram">
                <img src="assets/frontend/img/blog-img/insta2.jpg" alt="">
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>

            <!-- Single Instagram Slide -->
            <div class="single-instagram">
                <img src="assets/frontend/img/blog-img/insta3.jpg" alt="">
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>

            <!-- Single Instagram Slide -->
            <div class="single-instagram">
                <img src="assets/frontend/img/blog-img/insta4.jpg" alt="">
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>

            <!-- Single Instagram Slide -->
            <div class="single-instagram">
                <img src="assets/frontend/img/blog-img/insta5.jpg" alt="">
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>

            <!-- Single Instagram Slide -->
            <div class="single-instagram">
                <img src="assets/frontend/img/blog-img/insta6.jpg" alt="">
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>

            <!-- Single Instagram Slide -->
            <div class="single-instagram">
                <img src="assets/frontend/img/blog-img/insta7.jpg" alt="">
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>

            <!-- Single Instagram Slide -->
            <div class="single-instagram">
                <img src="assets/frontend/img/blog-img/insta8.jpg" alt="">
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
    </div>
    <!-- ##### Instagram Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">

            <div class="row">
                <div class="col-12">
                    <div class="copywrite-text">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="assets/frontend/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="assets/frontend/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="assets/frontend/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="assets/frontend/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="assets/frontend/js/active.js"></script>
</body>

</html>
