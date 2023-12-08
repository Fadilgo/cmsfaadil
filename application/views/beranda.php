<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title> D3L's Blog</title>

    <!-- Favicon  -->   
    <link rel="icon" href="<?= base_url('template/world-master/world-master/') ?>img/core-img/smk.jpg">

    <!-- Style CSS -->
    <link rel="stylesheet" href="<?= base_url('template/world-master/world-master/') ?>style.css">
    <style>
        a:hover{
            text-decoration: underline;
        }
    </style>
    

<script src="https://cdn.tiny.cloud/1/mptuqzjpsuc5ghy7kd7050yff1476jxwktwvz0odoglgyv49/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

</head>

<body>
    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <!-- Logo -->
                        <a class="navbar-brand" href="<?= base_url() ?>"><?= $konfigurasi['judul_website'] ?></a>
                        <!-- Navbar Toggler -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav" aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <!-- Navbar -->
                        <div class="collapse navbar-collapse" id="worldNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="<?= base_url() ?>">Home<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" class= id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kategori</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <?php foreach($kategori as $kate){?>
                                        <a class="dropdown-item" href="<?= base_url('home/kategori/'.$kate['id_kategori'])?>"><?= $kate['nama_kategori'] ?></a>
                                        <?php } ?>

                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('home/galeri') ?>">Galeri</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="#">Lifestyle</a>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('home/kontak');?>">Kontak</a>
                                </li>
                                <li class="nav-item" style="border-radius:3px; border:1px solid white ;">
                                    <a class="nav-link" href="<?= base_url('auth') ?>">Login</a>
                                </li>
                            </ul>
                            <!-- Search Form  -->
                            <div id="search-wrapper">
                                <form action="<?= base_url('home/search') ?>" method="post">
                                    <input type="text" id="search" name="keyword" placeholder="Search Konten...">
                                    <div id="close-icon"></div>
                                    <input class="d-none" type="submit" value="">
                                </form>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ********** Hero Area Start ********** -->
    <div class="hero-area">

        <!-- Hero Slides Area -->
        <div class="hero-slides owl-carousel">
            <!-- Single Slide -->
            <?php foreach($caraousel as $cara){
                 ?>
            <div class="single-hero-slide bg-img background-overlay" style="background-image:url(<?=base_url( 'template/upload/caraousel/'.$cara['foto'])?>)"></div>
            <?php } ?>
        </div>

        <!-- Hero Post Slide -->
        <div class="hero-post-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-post-slide">
                            <!-- Single Slide -->
                            <?php $no = 1 ?>
                            <?php foreach($caraousel as $cara){ ?>
                            <div class="single-slide d-flex align-items-center">
                                <div class="post-number">
                                    <p><?= $no++ ?></p>
                                </div>
                                <div class="post-title">
                                    <a href="single-blog.html"><?= $cara['judul'] ?></a>
                                </div>
                            </div>
                            <?php  }?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ********** Hero Area End ********** -->

    <div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- ============= Post Content Area Start ============= -->
                <div class="col-12 col-lg-8">
                    <div class="post-content-area mb-50">
                        <!-- Catagory Area -->
                        <div class="world-catagory-area">

                            <div class="tab-content" id="myTabContent">

                                <div class="tab-pane fade show active" id="world-tab-1" role="tabpanel" aria-labelledby="tab1">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="world-catagory-slider owl-carousel wow fadeInUpBig" data-wow-delay="0.1s">

                                            <?php foreach($galeri as $ga){ ?>
                                                <!-- Single Blog Post -->
                                                <div class="single-blog-post">
                                                    <!-- Post Thumbnail -->
                                                    <div class="post-thumbnail">
                                                        <img src="<?= base_url("template/upload/galeri/").$ga['foto'] ?>" alt="">
                                                        <!-- Catagory -->
                                                        <div class="post-cta"><a href="<?= base_url("home/galeri") ?>">Galeri</a></div>
                                                    </div>
                                                    <!-- Post Content -->
                                                    <div class="post-content">
                                                        <a href="#" class="headline">
                                                            <h5><?= $ga['judul'] ?></h5>
                                                        </a>
                                                        <a href="<?= base_url("home/galeri") ?>" class="gambar"><p>Klik Untuk Melihat Galeri selengkapnya</p></a>
                                                        <!-- Post Meta -->
                                                        <div class="post-meta">
                                                            <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date"><?= $ga['tanggal'] ?></a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php } ?>                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">

                                            <!-- Single Blog Post -->
                                            <div class="d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.5s">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="img/blog-img/b13.jpg" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>Profil Website</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <p><?= $konfigurasi['profil_website'] ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="world-tab-2" role="tabpanel" aria-labelledby="tab2">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="img/blog-img/b1.jpg" alt="">
                                                    <!-- Catagory -->
                                                    <div class="post-cta"><a href="#">travel</a></div>
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                                    </a>
                                                    <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="img/blog-img/b10.jpg" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="img/blog-img/b11.jpg" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="img/blog-img/b12.jpg" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="img/blog-img/b13.jpg" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="world-tab-9" role="tabpanel" aria-labelledby="tab9">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="img/blog-img/b1.jpg" alt="">
                                                    <!-- Catagory -->
                                                    <div class="post-cta"><a href="#">travel</a></div>
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                                    </a>
                                                    <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="img/blog-img/b10.jpg" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="img/blog-img/b11.jpg" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="img/blog-img/b12.jpg" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="img/blog-img/b13.jpg" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Catagory Area -->
                        <div class="world-catagory-area mt-50">
                            <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                <li class="title">Artikel</li>
                            </ul>

                            <div class="tab-content" id="myTabContent2">

                                <div class="tab-pane fade show active" id="world-tab-10" role="tabpanel" aria-labelledby="tab10">
                                    <div class="row">

                                        <?php foreach($konten as $kon){ ?>
                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.2s">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="<?= base_url('template/upload/konten/'.$kon['foto']) ?>" alt="">
                                                    <!-- Catagory -->
                                                    <div class="post-cta"><a href="<?= base_url('home/kategori/'.$kon['id_kategori']) ?>"><?= $kon['nama_kategori'] ?></a></div>
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="<?= base_url("home/artikel/".$kon['slug']) ?>" class="headline">
                                                        <h5><?= $kon['judul_konten'] ?></h5>
                                                    </a>
                                                    <p><?= word_limiter($kon['isi_konten'],5,'')?><a href="<?= base_url("home/artikel/".$kon['slug']) ?>"> ...baca selengkapnya</a></p>                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author"><?= $kon['username'] ?></a> on <span class="post-date"><?= $kon['tanggal'] ?></span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>

                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- ========== Sidebar Area ========== -->
                <div class="col-12 col-md-8 col-lg-4">
                    <div class="post-sidebar-area wow fadeInUpBig" data-wow-delay="0.2s">
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">About World</h5>
                            <div class="widget-content">
                                <p><?= $konfigurasi['about_world'] ?></p>
                            </div>
                        </div>
                        <!-- Widget Area -->

                        <div class="sidebar-widget-area">
                            <h5 class="title">Recent post</h5>
                            <div class="widget-content">
                                <?php foreach ($recent as $re){ ?>
                                <!-- Single Blog Post -->
                                <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="<?= base_url('template/upload/konten/'.$re['foto']) ?>" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="<?= base_url('home/artikel/'.$re['slug']) ?>" class="headline">
                                            <h5 class="mb-0"><?= $re['judul_konten'] ?></h5>
                                        </a>
                                    </div>
                                </div>
                                <?php } ?>

                            </div>
                        </div>
                        
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Stay Connected</h5>
                            <div class="widget-content">
                                <div class="social-area d-flex justify-content-between">
                                    <a href="<?= $konfigurasi['facebook'] ?>"><i class="fa fa-facebook"></i></a>
                                    <a href="<?= $konfigurasi['email'] ?>"><i class="fa fa-envelope"></i></a>
                                    <a href="<?= $konfigurasi['alamat'] ?>"><i class="fa fa-map"></i></a>
                                    <a href="<?= $konfigurasi['whatsapp'] ?>"><i class="fa fa-whatsapp"></i></a>
                                    <a href="<?= $konfigurasi['instagram'] ?>"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Today’s Motivational Words</h5>
                            <div class="widget-content">
                                <!-- Single Blog Post -->
                                <div class="single-blog-post todays-pick">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="img/blog-img/b22.jpg" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content px-0 pb-0">
                                        <a href="#" class="headline">
                                            <h5><?= $konfigurasi['kata_kata'] ?></h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <!-- ========== Single Blog Post ========== -->
            <!-- Load More btn -->
            <div class="row">
                <div class="col-12">
                    <div class="load-more-btn mt-50 text-center">
                    <?php  echo $pagination;?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                    <h4 class="text-primary mb-4">Our Contact</h4>
                    <p class="mb-2"><i class="fa fa-instagram text-primary me-3"></i> <?= $konfigurasi['instagram'] ?></p>
                    <p class="mb-2"><i class="fa fa-facebook-f text-primary me-3"></i> <?= $konfigurasi['facebook'] ?></p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i> <?= $konfigurasi['email'] ?></p>
                    <p class="mb-2"><i class="fa fa-map text-primary me-3"></i> <?= $konfigurasi['alamat'] ?></p>
                    <p class="mb-2"><i class="fa fa-phone text-primary me-3"></i> <?= $konfigurasi['whatsapp'] ?></p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                        <ul class="footer-menu d-flex justify-content-between">
                            <li><a href="<?= base_url() ?>">Home</a></li>
                            <?php foreach ($kategori as $kate){ ?>
                            <li><a href="<?= base_url("home/kategori/".$kate['id_kategori']) ?>"><?= $kate['nama_kategori'] ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                <h4 class="text-primary mb-4">Recent Post</h4>
                <?php foreach ($recent as $re){ ?>
                                <!-- Single Blog Post -->
                       
                                    <!-- Post Thumbnail -->
                                    <!-- Post Content -->
                                        <a href="<?= base_url('home/artikel/'.$re['slug']) ?>" class="headline">
                                            <p class="m-2" style="color:grey;">> <?= $re['judul_konten'] ?></p>
                                        </a>
                                <?php } ?>
                </div>
            </div>
        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="<?= base_url("template/world-master/world-master/") ?>js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="<?= base_url("template/world-master/world-master/") ?>js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?= base_url("template/world-master/world-master/") ?>js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="<?= base_url("template/world-master/world-master/") ?>js/plugins.js"></script>
    <!-- Active js -->
    <script src="<?= base_url("template/world-master/world-master/") ?>js/active.js"></script>
    

</body>

</html>