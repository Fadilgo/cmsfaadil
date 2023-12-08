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

    <style>
        header{
            background: #000;
        }
    </style>

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
						<a class="navbar-brand" href="<?= base_url() ?>"><?= $konfigurasi['judul_website'] ?></a>
						<!-- Navbar Toggler -->
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav"
							aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><span
								class="navbar-toggler-icon"></span></button>
						<!-- Navbar -->
						<div class="collapse navbar-collapse" id="worldNav">
							<ul class="navbar-nav ml-auto">
								<li class="nav-item">
									<a class="nav-link" href="<?= base_url() ?>">Home<span
											class="sr-only">(current)</span></a>
								</li>
                                <?php $w = $this->uri->segment(2); ?>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" class=id="navbarDropdown" role="button"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kategori</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<?php foreach($kategori as $kate){?>
										<a class="dropdown-item"
											href="<?= base_url('home/kategori/'.$kate['id_kategori'])?>"><?= $kate['nama_kategori'] ?></a>
										<?php } ?>

									</div>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="<?= base_url('home/galeri') ?>">Galeri</a>
								</li>
								<!-- <li class="nav-item">
									<a class="nav-link" href="#">Lifestyle</a>
								</li> -->
                                <li class="nav-item <?php if($w == 'kontak'){echo 'active';} ?>">
                                    <a class="nav-link" href="<?= base_url('home/kontak');?>">Kontak</a>
                                </li>
								<li class="nav-item" style="border-radius:3px; border:1px solid white ;">
									<a class="nav-link" href="<?= base_url('auth') ?>">Login</a>
								</li>
							</ul>
							<!-- Search Form  -->
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

    <section class="contact-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Contact Form Area -->
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="contact-form">
                        <div class="col-lg-12" id="hilang">
                            <?= $this->session->flashdata('alert',true);?>
                        </div>
                        <h4>Saran dan Pesan</h4>
                        <!-- Contact Form -->
                        <form action="<?= base_url('home/simpansaran') ?>" method="post">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="text" name="name" id="name" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Masukkan nama </label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="email" name="email" id="email" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Masukkan email email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="group">
                                        <textarea name="message" id="message" required></textarea>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Isi Saran</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn world-btn">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Maps: If you want to google map, just uncomment below codes -->
    <!--
    <div class="map-area">
        <div id="googleMap" class="googleMap"></div>
    </div>
    -->

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
    <script>
        $('#hilang').delay(800).slideDown('slow').delay(800).slideUp('slow')
    </script>
    <!-- Google Maps: If you want to google map, just uncomment below codes -->
    <!--
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
    <script src="js/map-active.js"></script>
    -->

</body>

</html>