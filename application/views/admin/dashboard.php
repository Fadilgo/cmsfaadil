<!DOCTYPE html>
<html lang="en">

<head>
	<?php require_once('template/head.php')?>
</head>

<body>
	<div class="container-scroller">
		<!-- partial:partials/_sidebar.html -->
		<?php require_once('template/nav.php')?>
		<!-- content-wrapper ends -->
		<!-- partial -->
		<div class="row d-flex justify-content-center">
			<div class="col-lg-12 grid-margin stretch-card">
			</div>
			<div class="row">
			<div class="col-lg-12" id="hilang">
                              <?= $this->session->flashdata('alert',true);?>
                          </div>
				<div class="col-xl-4 col-sm-6 grid-margin stretch-card">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-9">
									<div class="d-flex align-items-center align-self-start">
										<h3 class="mb-0"><?= $this->CmsModel->jumlahuser() ?></h3>
									</div>
								</div>
								<div class="col-3">
									<div class="icon icon-box-<?php if( $this->CmsModel->jumlahuser()==0){echo 'danger';}else{echo 'success';} ?> ">
										<span class="mdi mdi-account icon-item"></span>
									</div>
								</div>
							</div>
							<h6 class="text-muted font-weight-normal">Jumlah User</h6>
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-sm-6 grid-margin stretch-card">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-9">
									<div class="d-flex align-items-center align-self-start">
										<h3 class="mb-0"><?= $this->CmsModel->jumlahkategori() ?></h3>
									</div>
								</div>
								<div class="col-3">
									<div class="icon icon-box-<?php if( $this->CmsModel->jumlahkategori()==0){echo 'danger';}else{echo 'success';} ?>">
										<span class="mdi mdi-barcode icon-item"></span>
									</div>
								</div>
							</div>
							<h6 class="text-muted font-weight-normal">Jumlah Kategori</h6>
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-sm-6 grid-margin stretch-card">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-9">
									<div class="d-flex align-items-center align-self-start">
										<h3 class="mb-0"><?= $this->CmsModel->jumlahkonten() ?></h3>
									</div>
								</div>
								<div class="col-3">
									<div class="icon icon-box-<?php if( $this->CmsModel->jumlahkonten()==0){echo 'danger';}else{echo 'success';} ?> ">
										<span class="mdi mdi-blur icon-item"></span>
									</div>
								</div>
							</div>
							<h6 class="text-muted font-weight-normal">Jumlah Konten</h6>
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-sm-6 grid-margin stretch-card">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-9">
									<div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0"><?= $this->CmsModel->jumlahcaraousel() ?></h3>
                    <p></p>
									</div>
								</div>
								<div class="col-3">
									<div class="icon icon-box-<?php if( $this->CmsModel->jumlahcaraousel()==0){echo 'danger';}else{echo 'success';} ?>  ">
										<span class="mdi mdi-blur-radial icon-item"></span>
									</div>
								</div>
							</div>
							<h6 class="text-muted font-weight-normal">Jumlah Carousel</h6>
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-sm-6 grid-margin stretch-card">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-9">
									<div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0"><?= $this->CmsModel->jumlahsaran() ?></h3>
                    <p></p>
									</div>
								</div>
								<div class="col-3">
									<div class="icon icon-box-<?php if( $this->CmsModel->jumlahsaran()==0){echo 'danger';}else{echo 'success';} ?>  ">
										<span class="mdi mdi-book icon-item"></span>
									</div>
								</div>
							</div>
							<h6 class="text-muted font-weight-normal">Jumlah kritik dan saran</h6>
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-sm-6 grid-margin stretch-card">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-9">
									<div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0"><?= $this->CmsModel->jumlahgaleri() ?></h3>
                    <p></p>
									</div>
								</div>
								<div class="col-3">
									<div class="icon icon-box-<?php if( $this->CmsModel->jumlahgaleri()==0){echo 'danger';}else{echo 'success';} ?> ">
										<span class="mdi mdi-briefcase icon-item"></span>
									</div>
								</div>
							</div>
							<h6 class="text-muted font-weight-normal">Jumlah galeri</h6>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	</div>
	<!-- main-panel ends -->
	</div>
	<!-- page-body-wrapper ends -->
	</div>
	<!-- container-scroller -->
	<!-- plugins:js -->
	<?php require_once('template/js.php');?>
</body>

</html>
