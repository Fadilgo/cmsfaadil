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
		<div class="row">
		<div class="col-lg-12" id="hilang">
                <?= $this->session->flashdata('alert',true);?>
            </div>
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<form action="<?= base_url('admin/konfigurasi/update'); ?>" method="post">
							<input type="hidden" class="form-control" name="id_user">
							<div class="row mb-5 d-flex justify-content-center">
								<label class="col-sm-2 col-form-label">Judul</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="judul_website" value="<?= $konfigurasi->judul_website?>">
								</div>
							</div>

							<div class="row mb-5 d-flex justify-content-center">
								<label class="col-sm-2 col-form-label">profil</label>
								<div class="col-sm-10">
									<textarea type="text" class="form-control" name="profil_website"><?= $konfigurasi->profil_website?></textarea>
								</div>
							</div>
							
							<div class="row mb-5 d-flex justify-content-center">
								<label class="col-sm-2 col-form-label">about world</label>
								<div class="col-sm-10">
									<textarea type="text" class="form-control" name="about_world"><?= $konfigurasi->about_world?></textarea>
								</div>
							</div>
							<div class="row mb-5 d-flex justify-content-center">
								<label class="col-sm-2 col-form-label">Kata Kata hari ini</label>
								<div class="col-sm-10">
									<textarea type="text" class="form-control" name="kata_kata"><?= $konfigurasi->kata_kata?></textarea>
								</div>
							</div>
							<div class="row mb-5 d-flex justify-content-center">
								<label class="col-sm-2 col-form-label">instagram</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="instagram" value="<?= $konfigurasi->instagram?>">
								</div>
							</div>

							<div class="row mb-5 d-flex justify-content-center">
								<label class="col-sm-2 col-form-label">facebook</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="facebook" value="<?= $konfigurasi->facebook?>">
								</div>
							</div>

							<div class="row mb-5 d-flex justify-content-center">
								<label class="col-sm-2 col-form-label">email</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="email" 
									value="<?= $konfigurasi->email?>">
								</div>
							</div>

							<div class="row mb-5 d-flex justify-content-center">
								<label class="col-sm-2 col-form-label">alamat</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="alamat" 
									value="<?= $konfigurasi->alamat?>">
								</div>
							</div>

							<div class="row mb-5 d-flex justify-content-center">
								<label class="col-sm-2 col-form-label">whatsapp</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="whatsapp" 
									value="<?= $konfigurasi->whatsapp?>">
								</div>
							</div>

							<div  align="right">
								<button type="submit" class="btn btn-danger">ADD</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- container-scroller -->
	<!-- plugins:js -->
	<?php require_once('template/js.php');?>
</body>

</html>
