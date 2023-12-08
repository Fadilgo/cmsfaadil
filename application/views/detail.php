<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title><?= $judul ?></title>

    <!-- Favicon  -->
    <link rel="icon" href="<?= base_url('template/world-master/world-master/') ?>img/core-img/smk.jpg">

    <!-- Style CSS -->
    <link rel="stylesheet" href="<?= base_url('template/world-master/world-master/') ?>style.css">

    <script src="https://cdn.tiny.cloud/1/mptuqzjpsuc5ghy7kd7050yff1476jxwktwvz0odoglgyv49/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

</head>

<body>
    <!-- Preloader Start -->
    <!-- <div id="preloader">
        <div class="preload-content">
            <div id="world-load"></div>
        </div>
    </div> -->
    <!-- Preloader End -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <!-- Logo -->
                        <a class="navbar-brand" href="<?= base_url() ?>"><img src="<?= base_url('template/world-master/world-master/') ?>img/core-img/logo.png" alt="Logo"></a>
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
                                <form action="#">
                                    <input type="text" id="search" placeholder="Search something...">
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
    <!-- <div class="hero-area height-400 bg-img background-overlay" style="background-image: url(img/blog-img/bg4.jpg);"></div> -->
    <!-- ********** Hero Area End ********** -->

    <div class="regular-page-wrap section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="page-content">
                        <h3><?= $konten['judul_konten'] ?></h3>
                        <div class="side-info row">
                            <p class="px-3"><i class="fa fa-user"></i> <?= $konten['username'] ?></p>
                            <p><i class="fa fa-folder"></i> <?= $konten['nama_kategori'] ?></p>
                        </div>
                        <div class="img mb-4 d-flex justify-content-center">
                            <img style="width:50%; height: auto;" src="<?= base_url("template/upload/konten/".$konten['foto']) ?>" alt="">
                        </div>
                        <h6><?= $konten['isi_konten'] ?></h6>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <a href="<?= base_url() ?>"><i style="font-size: 30px;" class="fa fa-arrow-left">Kembali</i></a>
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
    <script src="<?= base_url('template/world-master/world-master/') ?>js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="<?= base_url('template/world-master/world-master/') ?>js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?= base_url('template/world-master/world-master/') ?>js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="<?= base_url('template/world-master/world-master/') ?>js/plugins.js"></script>
    <!-- Active js -->
    <script src="<?= base_url('template/world-master/world-master/') ?>js/active.js"></script>
    

</body>

</html>